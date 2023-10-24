<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Post;
use App\tracking_details;
use Carbon\Carbon;

class TrackController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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



    public function tracking_id_show(Request $request)
    {
        // $this->update();
        // -------------------------Default-------------------------

        $copy_p_id = $request->input('primary_key');
        $tracking_id = Post::query()
            ->where('t_id', '=', $copy_p_id)
            ->get();

        $auth_id = Auth::user()->id;
        $user_plan_id = DB::table('user_plan')->where('u_id', $auth_id)->where('role', '1')->get();
        $up_id = '';
        foreach ($user_plan_id as $row) {
            $up_id = $row->up_id;
        }

        $values = array('u_id' => $auth_id, 'used_trackings' => $copy_p_id, 'up_id' => $up_id);
        DB::table('tracking_details')->insert($values);


        return view('show', ['tracking_id' => $tracking_id]);
    }

    public function page_recent_tracking()
    {
        $this->update();
        // -------------------------Default-------------------------
        $page = "Recent-Tracking";
        $auth_id = Auth::user()->id;
        $user_plan_id = DB::table('user_plan')->where('u_id', $auth_id)->where('role', '1')->get();
        $up_id = '';
        foreach ($user_plan_id as $row) {
            $up_id = $row->up_id;
        }
        $recent = DB::table('tracking_details')
            ->join('track', 'tracking_details.used_trackings', '=', 'track.t_id')
            ->where('u_id', '=', $auth_id)
            ->where('up_id', '=', $up_id)
            ->get();
        return view('recent-trackings', ['page' => $page, 'recent' => $recent]);
    }



    public function track(Request $request)
    {
        $auth_id = Auth::user()->id;
        $city = $request->input('city');
        $state = $request->input('state');
        $zip = $request->input('zip');
        $ship = $request->input('ship');
        $deliver = $request->input('deliver');
        $submit = $request->input('submit');
        $status = $request->input('status');
        // $limit = 2;
        // $post = Post::query()->limit($limit)
        $post = '';
        $dis_matches = array();
        $message_plan = "";
        if (isset($_GET['submit'])) {
            // check plan if exist or not-----------------start-----
            if (!DB::table('user_plan')->where('u_id', $auth_id)->where('role', '1')->exists()) {
                $message_plan = "Please Subscribe a Plan !!!";
                $script = '<script type="text/javascript">setTimeout(function () {
        window.location.href= "http://localhost/track_new/plan"; // the redirect goes here
    },5000);
    </script>';
                echo $script;
                // check plan if exist or not-------------end---------
            } else {
                $track = Post::query()
                    //->where('t_city', '=', $city)
                    // ->where('t_state', '=', $state)
                    ->where('d_zip', '=', $zip)
                    // ->where('t_ship', '=', $ship)
                    // ->where('t_date', '=', $deliver)
                    // ->where('t_status', '=', $status)
                    ->get();
                // tow tables data tracking id's doesn't matched -----------------start------------
                $user_plan_id = DB::table('user_plan')->where('u_id', $auth_id)->where('role', '1')->get();
                $up_id = '';
                foreach ($user_plan_id as $row) {
                    $up_id = $row->up_id;
                }
                foreach ($track as $row) {
                    $id =  $row->t_id;
                    $tracking = tracking_details::query()
                        ->where('u_id', '=', $auth_id)
                        ->where('used_trackings', '=', $id)
                        ->where('up_id', '=', $up_id)
                        ->get();
                    if ($tracking->isNotEmpty()) {
                        continue;
                    } else {
                        $dis_matches[] = $row;
                    }
                }
                // tow tables data tracking id's doesn't matched -----------------start------------
            }
        }
        $this->update();

        $page = "Track";
        return view('track-form', ['dis_matches' => $dis_matches, 'page' => $page, 'message_plan' => $message_plan]);
    }
}
