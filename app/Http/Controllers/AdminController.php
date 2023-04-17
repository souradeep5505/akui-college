<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Helper;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\ProductVarition;
use App\Models\ProductImage;


class AdminController extends Controller
{
    private $adminPath = 'avqadmin';
    public function adminLogin(Request $request)
    {
        $result=DB::table('admins')->whereRaw("md5(email)='".md5($request->email)."' and password='".md5($request->password)."'")->first();
         if($result==null){
             toast('Enter Wrong User ID Or Password.','error');
            return redirect($this->adminPath);
         }else{
             Session::put('admin_id',$result->id);
             Session::put('admin_name',$result->name);
             Session::put('admin_email',$result->email);
             toast('You have successfully logged in','success');
             return redirect($this->adminPath.'/dashboard');
         }
    }

    public function logout()
    {
        Session::flush();
        alert()->success('You have successfully logged out.');
        //toast('You have successfully logged out.','success');
        return redirect('/');
    }

    public function change_password()
    {
        $data =Admin::find(Session::get('admin_id'));
        return view('admin.pages.authentication.change-password', compact('data'));
    }

    public function changePassword(Request $request,$id)
    {
        $table =Admin::find($id);
        $table->email=$request->email;
        $table->password=md5($request->password);
        $table->save();
        toast('You have successfully Updated','success');
        return back();
    }

    public function deletecontact(Request $request)
    {
        $ids = $request->ids;
        Contact::whereIn('id',$ids)->delete();
        toast('You have successfully deleted.','success');
        return back();
    }

    public function ajaxProductControl(Request $request)
    {
        $html="";

        $html='<tr>
                   <td>
                        <input type="text" name="p_model'.($request->call).'" id="p_model'.($request->call).'" class="form-control">
                   </td>
                   <td>
                        <input type="text" name="p_capacity'.($request->call).'" id="p_capacity'.($request->call).'" class="form-control">
                   </td>
                   <td>
                        <input type="text" name="p_power'.($request->call).'" id="p_power'.($request->call).'" class="form-control" style="width: 80px;">
                   </td>
                 </tr>';

        return $html;

    }

    public function ajaxProductDelete($id)
    {

        $product=ProductVarition::find($id);
        $product->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function ajaxProductDeleteImage($id)
    {
        $product=ProductImage::find($id);
        $product->delete();

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

}
