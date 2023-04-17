<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PrincipleMsgController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SeatAllocationController;
use App\Http\Controllers\CourseSubjectController;
use App\Http\Controllers\NonteachingController;
use App\Http\Controllers\FeesStructureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

date_default_timezone_set('Asia/Kolkata');
    Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!!!!";
 });

 Route::get('/avqadmin', function () {
    return view('admin.pages.authentication.login');
});

    Route::post('/adminLogin', [AdminController::class,'adminLogin']);
    Route::prefix('avqadmin')->middleware(['chkAdminLogin'])->controller(AdminController::class)->group(function () {
    Route::get('/dashboard', function (Request $request) {
        return view('admin.pages.dashboard', compact('request'));

    });

    Route::get('/log-out','logout');
    //change password
    Route::get('/change-password', [AdminController::class,'change_password']);
    Route::post('/changePassword/{id}', [AdminController::class,'changePassword']);

    Route::resource('banner', BannerController::class);
    Route::post('banner.bannerstatuschanger', [BannerController::class,'bannerstatuschanger'])->name('banner.bannerstatuschanger');
    Route::resource('setting', SettingController::class);
    Route::resource('contact', ContactController::class);
    Route::post('contact.deletecontact', [ContactController::class,'deletecontact'])->name('contact.deletecontact');
    Route::resource('department', DepartmentController::class);
    Route::post('department.departmentstatuschanger', [DepartmentController::class,'departmentstatuschanger'])->name('department.departmentstatuschanger');
    Route::resource('facility', FacilityController::class);
    Route::resource('notice', NoticeController::class);
    Route::post('notice.noticestatuschanger', [NoticeController::class,'noticestatuschanger'])->name('notice.noticestatuschanger');
    Route::resource('faculty', FacultyController::class);
    Route::post('faculty.facultystatuschanger', [FacultyController::class,'facultystatuschanger'])->name('faculty.facultystatuschanger');
    Route::resource('news-event', NewsEventController::class);
    Route::post('news-event.eventstatuschanger', [NewsEventController::class,'eventstatuschanger'])->name('news-event.eventstatuschanger');
    Route::resource('gallery-category', GalleryCategoryController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('principle', PrincipleMsgController::class);
    Route::resource('pages', PageController::class);
    Route::post('pages.pagesstatuschanger', [PageController::class,'pagesstatuschanger'])->name('pages.pagesstatuschanger');
    Route::resource('seat-allocation', SeatAllocationController::class);
    Route::resource('course-subject', CourseSubjectController::class);
    Route::resource('non-teaching', NonteachingController::class);
    Route::post('non-teaching.nonteachingstatuschanger', [NonteachingController::class,'nonteachingstatuschanger'])->name('non-teaching.nonteachingstatuschanger');
    Route::resource('fees-structure', FeesStructureController::class);
});
    Route::get('/', [HomeController::class,'home']);
    Route::get('/about-us', [HomeController::class,'aboutUs']);
    Route::get('/governing-body', [HomeController::class,'governingBody']);
    Route::get('/finance-sub-committee', [HomeController::class,'financeSubCommittee']);
    Route::get('/iqac', [HomeController::class,'iqac']);
    Route::get('/courser-subjects', [HomeController::class,'coursesSubjects']);
    Route::get('/seat-allocation', [HomeController::class, 'seatAllocation']);
    Route::get('/fees-charges', [HomeController::class, 'feesCharges']);
    Route::get('/gallery', [HomeController::class, 'gallery']);
    Route::get('/vision-mision', [HomeController::class, 'visionMision']);
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);
    Route::get('/terms-conditions', [HomeController::class, 'termsConditions']);
    Route::get('/contact-us', [HomeController::class,'contactUs']);
    Route::post('/contactus', [HomeController::class,'contactfront']);
    Route::get('/principle', [HomeController::class,'principle']);
    Route::get('/faculty/{slug}', [HomeController::class,'faculty']);
    Route::get('/all-faculty', [HomeController::class,'allFaculty']);
    Route::get('/non-teaching-stuffs', [HomeController::class,'nonTeachingStuffs']);
    Route::post('/contactus', [HomeController::class,'contactfront']);

    Route::get('/department/{slug}', [HomeController::class,'department']);
    Route::get('/all-department', [HomeController::class,'allDepartment']);
    Route::get('/fecilities', [HomeController::class,'fecilities']);

    Route::get('/notice/{slug}', [HomeController::class,'notice']);
    Route::get('/all-notice', [HomeController::class,'allNotice']);
    Route::get('/news-details', [HomeController::class,'newsDetails']);
    Route::get('/mandatory-disclosuer', [HomeController::class,'mandatoryDisclosuer']);
