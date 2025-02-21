<?php

use App\Http\Controllers\ActivityCatController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BannerImageController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacultyPdfController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MediaDocumentController;
use App\Http\Controllers\MediaImageController;
use App\Http\Controllers\NaacController;
use App\Http\Controllers\NaacReportController;
use App\Http\Controllers\PlacedStudentController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\ResultAnalysisController;
use App\Http\Controllers\TrainingDocumentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\Auth\NewAuthController;
use App\Http\Controllers\ActivityController;


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




Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/chairman', function () {
    return view('frontend.chairman');
});

Route::get('/director', function () {
    return view('frontend.director');
});

Route::get('/Pharmaceutical ', function () {
    return view('frontend.Pharmaceutical ');
});
Route::get('/Pharmaceutics ', function () {
    return view('frontend.Pharmaceutics ');
});
Route::get('/Pharmacognosy ', function () {
    return view('frontend.Pharmacognosy ');
});
Route::get('/Pharmacology', function () {
    return view('frontend.Pharmacology ');
});

Route::get('/Infrastructure', function () {
    return view('frontend.Infrastructure');
});

Route::get('/Activities', function () {
    return view('frontend.Activities');
});
Route::get('/career', function () {
    return view('frontend.career');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('changepassworduser', [ResetPasswordController::class, 'changepassworduser'])->name('changepassworduser');
Route::get('faculties', [FacultyController::class, 'faculty'])->name('faculties');
Route::get('image-gallery', [MediaImageController::class, 'imagepage'])->name('image-gallery');
Route::get('video-gallery', [MediaController::class, 'video'])->name('video-gallery');
Route::get('news-letters', [MediaDocumentController::class, 'newsletter'])->name('news-letters');
Route::get('traning', [RecruiterController::class, 'training'])->name('traning');
Route::get('result', [ResultAnalysisController::class, 'result'])->name('result');
Route::get('homecourse', [CourseController::class, 'course'])->name('homecourse');
Route::post('/submit-form', [CourseController::class, 'submitForm'])->name('submit.form');
Route::get('enquiries', [CourseController::class, 'enquiries'])->name('enquiries.index');
Route::get('admissionhome', [AdmissionController::class, 'admission'])->name('admissionhome');
Route::get('careers', [CareerController::class, 'index'])->name('careers.index');

Route::get('disciplines', [DisciplineController::class, 'discipline'])->name('disciplines');
Route::post('/career/store', [CareerController::class, 'store'])->name('career.store');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::resource('event', EventController::class);
Route::get('eventhome', [EventController::class, 'event'])->name('eventhome');
Route::get('naachome/{categoryId}', [NaacReportController::class, 'showCategoryReports'])->name('naachome');

Route::middleware(['auth'])->group(function () {

Route::resource('video', controller: MediaController::class);
Route::resource('mediaimage',MediaImageController::class);
Route::resource('media-documents', MediaDocumentController::class);
Route::resource('notices', controller: NoticeBoardController::class);
Route::resource('bannerimage', controller: BannerImageController::class);
Route::resource('naac-category', NaacController::class);
Route::resource('naac-reports', NaacReportController::class);
Route::resource('faq', FaqController::class);
Route::resource('recruiter', RecruiterController::class);
Route::resource('placedstudent', PlacedStudentController::class);
Route::resource('trainingdocument', TrainingDocumentController::class);
Route::resource('courses', CourseController::class);
Route::resource('faculty', FacultyController::class);
Route::resource('faculty-documents', FacultyPdfController::class);
Route::resource('resultanalysis', ResultAnalysisController::class);
Route::resource('discipline', DisciplineController::class);
Route::resource('admission', AdmissionController::class);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::post('change-password', [ResetPasswordController::class, 'changePassword'])->name('change-password');
Route::resource('Activity-category', ActivityCatController::class);
Route::get('/get-activities/{categoryId}', [ActivityController::class, 'getActivities']);

Route::get('address/edit/{id}', [EventController::class, 'edit'])->name('address.edit');
Route::post('address/update/{id}', [EventController::class, 'updateaddress'])->name('address.update');


Route::resource('collegeactivities', ActivityController::class);

});


Route::get('/newlogin', [NewAuthController::class, 'showLoginForm'])->name('newlogin');
Route::post('/newlogout',[NewAuthController::class, 'logout'])->name('newlogout')->middleware('auth');

Route::post('/newlogin', [NewAuthController::class, 'login'])->name('newloginpage');


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);







Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', action: [App\Http\Controllers\HomeController::class, 'index'])->name('index');
