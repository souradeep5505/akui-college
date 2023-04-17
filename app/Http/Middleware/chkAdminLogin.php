<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class chkAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id < 1) {
            Session::flush();
            toast('Please Enter Correct Login Details.','error');
            return redirect('/avqadmin');
        }
        return $next($request);

        // $admin_id = Session::get('admin_id');

        // if ($admin_id < 1) {
        //     Session::flush();
        //     toast('Please Enter Correct Login Details.','error');
        //     return redirect('/avqadmin');
        // }
        // return $next($request);
    }
}
