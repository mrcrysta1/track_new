<?php /** @noinspection ALL */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Post;
use App\tracking_details;
use Carbon\Carbon;
class StripeController extends Controller
{
    /** 
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }
   public function getUserIP()
   {
       $ipaddress = "";
       if (isset($_SERVER['HTTP_CLIENT_IP']))
           $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
       else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
           $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
       else if (isset($_SERVER['HTTP_X_FORWARDED']))
           $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
       else if (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
           $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
       else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
           $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
       else if (isset($_SERVER['HTTP_FORWARDED']))
           $ipaddress = $_SERVER['HTTP_FORWARDED'];
       else if (isset($_SERVER['REMOTE_ADDR']))
           $ipaddress = $_SERVER['REMOTE_ADDR'];
       else
           $ipaddress = "UNKNOWN";
       return $ipaddress;
   }
   public function update()
    {
        $auth_id = Auth::user()->id;
        $user_plan_id = DB::table('user_plan')->where('u_id', $auth_id)->where('role', '1')->get();
        $up_id = '';
        foreach ($user_plan_id as $row) {
            $up_id = $row->up_id;
        }

        // ---------------count columon update----------------------------

        $trackdetails = DB::table('tracking_details')
            ->where('u_id', '=', $auth_id)
            ->where('up_id', '=', $up_id)
            ->get();
        if ($trackdetails->isEmpty()) {
            $u_t_d = '0';
            DB::table("user_plan")->where('u_id', $auth_id)->update(array(
                'count' => $u_t_d
            ));
        } else {
            $trackdetails_count = DB::table('tracking_details')
                ->where('u_id', '=', $auth_id)
                ->where('up_id', '=', $up_id)
                ->count();

            DB::table("user_plan")->where('u_id', $auth_id)->where('u_id', '=', $auth_id)->where('role', '=', '1')->where('status', '=', 'Active')
                ->update(array('count' => $trackdetails_count));
            // ---------------remaining columon update----------------------------
            $userplan = DB::table('user_plan')
                ->where('u_id', '=', $auth_id)
                ->where('role', '=', '1')
                ->where('status', '=', 'Active')
                ->get();
            $total = '';
            $count = '';
            foreach ($userplan as $row) {
                $count = $row->count;
                $total = $row->total;
            }
            $remaining =   $total - $count;
            DB::table("user_plan")->where('u_id', $auth_id)->where('u_id', '=', $auth_id)->where('role', '=', '1')->where('status', '=', 'Active')
                ->update(array('remaining' => $remaining));
        }
    }
// ---------------------------------Default functions -------------------------------
    public function checkout()
    {
        $plan = DB::table('plan')->get();
        $message = "";
        $page = "Plan";
        return view('plan', ['page' => $page, 'users' => $plan, 'message' => $message]);
    }



    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $submit = $request->input('submit');
        $plan = DB::table('plan')
        ->where('p_id', '=', $submit)->get();
         
        foreach ($plan as $row) {
            $plan_limit = $row->p_limit;
            $plan_name = $row->p_name;
            $plan__amount = $row->p_amount;
            $plan__desc = $row->p_des;
        }
        
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => ['currency'     => 'usd', 'product_data' => ['name' =>  $plan_name,],'unit_amount'  => $plan__amount, ],'quantity'   => $plan_limit,
                        
                    // "description" => "Test payment from itsolutionstuff.com." 
                ],
            ],
            'mode'        => 'payment',
            // 'source' => $request->stripeToken,
            'success_url' => route('success'),
            'cancel_url'  => route('plan'),
        ]);
        return redirect()->away($session->url);
    }
    
    public function success(Request $request)
    {
       

        $paymentIntentId = $request->query('session_id');
        dd($paymentIntentId);
    
        $this->update();
        // -------------------------Default-------------------------
        $plan = DB::table('plan')->get();
        $submit = $request->input('submit');
        $id = Auth::user()->id;

        $current_date = Carbon::now();
        $expire_date = $current_date->addDays(30);
        $issue_date = date("Y-m-d H:i:s");
        $status = "Active";
        $request = Request::capture();
        $ip_address = $request->ip();
        // Function to get the user IP address
        $this->getUserIP();
        $message = "";
        if (isset($_GET['submit'])) {
            if (DB::table('user_plan')->where('u_id', $id)->where('role', '1')->exists()) {
                $auth_id = Auth::user()->id;
                $plan = DB::table('plan')
                    ->where('p_id', '=', $submit)
                    ->get();
                $plan_limit = "";
                $remaining = "";
                foreach ($plan as $row) {
                    $plan_limit = $row->p_limit;
                }
                $userplan = DB::table('user_plan')
                    ->where('u_id', '=', $id)
                    ->OrderBy('u_id', 'DESC')
                    ->get();
                foreach ($userplan as $userrow) {
                    $remaining = $userrow->remaining;
                }
                DB::table("user_plan")->where('u_id', $auth_id)->update(array(
                    'role' => '0'
                ));
                $total = $plan_limit + $remaining;
                DB::table('user_plan')->insert(
                    array(
                        'u_id'           =>   $id,
                        'p_id'           =>   $submit,
                        'issue_date'     =>   $issue_date,
                        'expire_date'    =>   $expire_date,
                        'status'         =>   $status,
                        'remaining'      =>   $total,
                        'total'          =>   $total,
                        'role'           =>   '1',
                        'count'          =>   '0',
                    )
                );
                $message = "Thaks for Again purchase our plan.";
            } else {
                $auth_id = Auth::user()->id;
                $userplan = DB::table('plan')
                    ->where('p_id', '=', $submit)
                    ->get();
                $plan_limit = "";

                foreach ($userplan as $row) {
                    $plan_limit = $row->p_limit;
                }

                DB::table('user_plan')->insert(
                    array(
                        'u_id'           =>   $id,
                        'p_id'           =>   $submit,
                        'issue_date'     =>   $issue_date,
                        'expire_date'    =>   $expire_date,
                        'status'         =>   $status,
                        'remaining'      =>   $plan_limit,
                        'total'          =>   $plan_limit,
                        'role'           =>   '1',
                        'count'          =>   '0',
                    )
                );
                $message = 'Successful plan purchase if Strip is integrate';
            }
        }
        $page = "Plan";
        return view('plan', ['page' => $page, 'users' => $plan, 'message' => $message]);
   
    }
}
