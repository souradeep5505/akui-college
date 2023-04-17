<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Helper;
use App\Models\Logo;
use App\Models\Contact;
use App\Models\Enquire;
use App\Models\ProductRating;


class HomeController extends Controller
{
    public function home(Request $request)
    {
        $banners=DB::table('banners')->where('status','1')->get();
        return view('front.pages.home',compact('banners'));
    }

    public function aboutUs(Request $request)
    {
        return view('front.pages.about');
    }

    public function contactUs(Request $request)
    {
        return view('front.pages.contact');
    }

    public function principle(Request $request)
    {
        return view('front.pages.faculty.principle');
    }

    public function allFaculty(Request $request)
    {
        return view('front.pages.faculty.all-faculty');
    }

    public function faculty(Request $request,$slug)

    {
        $faculty=DB::table('faculties')->where('status','1')->where('slug',$slug)->first();
        return view('front.pages.faculty.faculty-member',compact('faculty'));
    }

    public function nonTeachingStuffs(Request $request)
    {
        return view('front.pages.faculty.non-teaching-stuff');
    }

    public function coursesSubjects(Request $request)
    {
        return view('front.pages.academics.courses-subject');
    }

    public function seatAllocation(Request $request)
    {
        return view('front.pages.academics.seat-allocation');
    }

    public function feesCharges(Request $request)
    {
        return view('front.pages.academics.fees-charges');
    }

    public function gallery(Request $request)
    {
        return view('front.pages.gallery');
    }

    public function privacyPolicy(Request $request)
    {
        return view('front.pages.privacy-policy');
    }

    public function termsConditions(Request $request)
    {
        return view('front.pages.terms-conditions');
    }

    public function iqac(Request $request)
    {
        return view('front.pages.administration.iqac');
    }

    public function financeSubCommittee(Request $request)
    {
        return view('front.pages.administration.finance-sub-committee');
    }

    public function governingBody(Request $request)
    {
        return view('front.pages.administration.govering-body');
    }

    public function contactfront(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|max:10',
            'comment' => 'required',
            'g-recaptcha-response' => 'required|captcha'
            ]);
        $table = new Contact;
        $table->name=$request->name;
        $table->email=$request->email;
        $table->phone=$request->phone;
        $table->comment=$request->comment;
        $table->save();
        alert()->success('SuccessAlert','You have successfully Contact With Us.');
        //toast('You have successfully Contact With Us','success');
        return back();
    }

    public function visionMision(Request $request)
    {
        return view('front.pages.vision-mision');
    }

    public function department(Request $request,$slug)
    {
        $department=DB::table('departments')->where('status','1')->where('slug',$slug)->first();
        return view('front.pages.department.department',compact('department'));

    }

    public function allDepartment(Request $request)
    {
        return view('front.pages.department.all-department');
    }

    public function fecilities(Request $request)
    {
        return view('front.pages.system_manager.fecilities');
    }

    public function notice(Request $request,$slug)
    {
        $notice=DB::table('notices')->where('status','1')->where('slug',$slug)->first();
        return view('front.pages.system_manager.notice',compact('notice'));
    }

    public function allNotice(Request $request)
    {
        return view('front.pages.system_manager.all-notice');
    }

    public function newsDetails(Request $request)
    {
        return view('front.pages.system_manager.news-details');
    }

    public function mandatoryDisclosuer(Request $request)
    {
        return view('front.pages.mandatory-disclosuer');
    }
}
