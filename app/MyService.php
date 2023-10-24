
namespace App\Services;

class MyService {
public function myFunction() {
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
$remaining = $total - $count;
DB::table("user_plan")->where('u_id', $auth_id)->where('u_id', '=', $auth_id)->where('role', '=', '1')->where('status', '=', 'Active')
->update(array('remaining' => $remaining));
}
}

}