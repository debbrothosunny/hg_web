<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\FrontendController;

;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend
Route::get('/',[FrontendController::class,'home']);

Route::get('/about',[FrontendController::class,'about']);
Route::get('/team',[FrontendController::class,'team']);
Route::get('/gallery',[FrontendController::class,'gallery']);

Route::get('/course',[FrontendController::class,'course']);
Route::get('/certificate',[FrontendController::class,'certificate']);
Route::get('/blog',[FrontendController::class,'blog']);
Route::get('/blog_details',[FrontendController::class,'blog_details']);

Route::get('/course/single/{id}',[FrontendController::class,'course_single']);


// Home Section --------
Route::prefix('home')->middleware(['auth'])->group(function () {
    // header Route
    Route::get('/header',[HomeController::class,'header'])->name('header');
    Route::post('/header/create',[HomeController::class,'header_create'])->name('header.create');
    Route::post('header/update/{id}',[HomeController::class,'header_update'])->name('header.update');
    Route::get('header/delete/{id}',[HomeController::class,'header_delete'])->name('header.delete');

    // About Route
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::post('/about/create',[HomeController::class,'about_create'])->name('about.create');
    Route::post('about/update/{id}',[HomeController::class,'about_update'])->name('about.update');
    Route::get('about/delete/{id}',[HomeController::class,'about_delete'])->name('about.delete');

    // Offer Title Route
    Route::get('/offer',[HomeController::class,'offer'])->name('offer');
    Route::post('/offer/title/create',[HomeController::class,'offer_title_create'])->name('offer.title.create');
    Route::post('offer/title/update/{id}',[HomeController::class,'offer_title_update'])->name('offer.title.update');
    Route::get('offer/title/delete/{id}',[HomeController::class,'offer_title_delete'])->name('offer.title.delete');

    // Offer Content Route
    Route::post('/offer/content/create',[HomeController::class,'offer_content_create'])->name('offer.content.create');
    Route::post('/offer/content/update/{id}',[HomeController::class,'offer_content_update'])->name('offer.content.update');
    Route::get('/offer/content/delete/{id}',[HomeController::class,'offer_content_delete'])->name('offer.content.delete');

    // Choose Route
    Route::get('/choose',[HomeController::class,'choose'])->name('choose');
    Route::post('/choose/create',[HomeController::class,'choose_create'])->name('choose.create');
    Route::post('choose/update/{id}',[HomeController::class,'choose_update'])->name('choose.update');
    Route::get('choose/delete/{id}',[HomeController::class,'choose_delete'])->name('choose.delete');

    // Choose Route
    Route::get('/app',[HomeController::class,'app'])->name('app');
    Route::post('/app/create',[HomeController::class,'app_create'])->name('app.create');
    Route::post('app/update/{id}',[HomeController::class,'app_update'])->name('app.update');
    Route::get('app/delete/{id}',[HomeController::class,'app_delete'])->name('app.delete');

    // Testimonial Title Route
    Route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');
    Route::post('/testimonial/title/create',[HomeController::class,'testimonial_title_create'])->name('testimonial.title.create');
    Route::post('testimonial/title/update/{id}',[HomeController::class,'testimonial_title_update'])->name('testimonial.title.update');
    Route::get('testimonial/title/delete/{id}',[HomeController::class,'testimonial_title_delete'])->name('testimonial.title.delete');

    // Offer Content Route
    Route::post('/testimonial/content/create',[HomeController::class,'testimonial_content_create'])->name('testimonial.content.create');
    Route::post('/testimonial/content/update/{id}',[HomeController::class,'testimonial_content_update'])->name('testimonial.content.update');
    Route::get('/testimonial/content/delete/{id}',[HomeController::class,'testimonial_content_delete'])->name('testimonial.content.delete');

    // Choose Route
    Route::get('/trainer',[HomeController::class,'trainer'])->name('trainer');
    Route::post('/trainer/create',[HomeController::class,'trainer_create'])->name('trainer.create');
    Route::post('trainer/update/{id}',[HomeController::class,'trainer_update'])->name('trainer.update');
    Route::get('trainer/delete/{id}',[HomeController::class,'trainer_delete'])->name('trainer.delete');
});


// Home Section --------
Route::prefix('about')->middleware(['auth'])->group(function () {
    // header Route
    Route::get('/header',[AboutController::class,'header'])->name('about.header');
    Route::post('/header/create',[AboutController::class,'header_create'])->name('about.header.create');
    Route::post('header/update/{id}',[AboutController::class,'header_update'])->name('about.header.update');
    Route::get('header/delete/{id}',[AboutController::class,'header_delete'])->name('about.header.delete');

    // Services Route
    Route::get('/service',[AboutController::class,'service'])->name('about.service');
    Route::post('/service/create',[AboutController::class,'service_create'])->name('about.service.create');
    Route::post('service/update/{id}',[AboutController::class,'service_update'])->name('about.service.update');
    Route::get('service/delete/{id}',[AboutController::class,'service_delete'])->name('about.service.delete');

    // Services Route
    Route::get('/progress',[AboutController::class,'progress'])->name('about.progress');
    Route::post('/progress/create',[AboutController::class,'progress_create'])->name('about.progress.create');
    Route::post('progress/update/{id}',[AboutController::class,'progress_update'])->name('about.progress.update');
    Route::get('progress/delete/{id}',[AboutController::class,'progress_delete'])->name('about.progress.delete');

});

// Course Section --------
Route::prefix('course')->middleware(['auth'])->group(function () {
    // header Route
    Route::get('/header',[CourseController::class,'header'])->name('course.header');
    Route::post('/header/create',[CourseController::class,'header_create'])->name('course.header.create');
    Route::post('header/update/{id}',[CourseController::class,'header_update'])->name('course.header.update');
    Route::get('header/delete/{id}',[CourseController::class,'header_delete'])->name('course.header.delete');

    // Course Route
    Route::get('/cat',[CourseController::class,'cat'])->name('cat');
    Route::post('/cat/create',[CourseController::class,'cat_create'])->name('course.cat.create');
    Route::post('cat/update/{id}',[CourseController::class,'cat_update'])->name('course.cat.update');
    Route::get('cat/delete/{id}',[CourseController::class,'cat_delete'])->name('course.cat.delete');

    // Course Route
    Route::get('/course',[CourseController::class,'course'])->name('course');
    Route::post('/course/create',[CourseController::class,'course_create'])->name('course.create');
    Route::post('course/update/{id}',[CourseController::class,'course_update'])->name('course.update');
    Route::get('course/delete/{id}',[CourseController::class,'course_delete'])->name('course.delete');

    // best_student Route
    Route::get('/best_student',[CourseController::class,'Best_student'])->name('Best_student');
    Route::post('/Best_student/create',[CourseController::class,'Best_student_create'])->name('Best_student.create');
    Route::post('Best_student/update/{id}',[CourseController::class,'Best_student_update'])->name('Best_student.update');
    Route::get('Best_student/delete/{id}',[CourseController::class,'Best_student_delete'])->name('Best_student.delete');

});

// Team Section --------
Route::prefix('team')->middleware(['auth'])->group(function () {
    // header Route
    Route::get('/header',[TeamController::class,'header'])->name('team.header');
    Route::post('/header/create',[TeamController::class,'header_create'])->name('team.header.create');
    Route::post('header/update/{id}',[TeamController::class,'header_update'])->name('team.header.update');
    Route::get('header/delete/{id}',[TeamController::class,'header_delete'])->name('team.header.delete');

    // Member Route
    Route::get('/member',[TeamController::class,'team'])->name('team.member');
    Route::post('/member/create',[TeamController::class,'team_create'])->name('team.member.create');
    Route::post('member/update/{id}',[TeamController::class,'team_update'])->name('team.member.update');
    Route::get('member/delete/{id}',[TeamController::class,'team_delete'])->name('team.member.delete');

});

// Team Section --------
Route::prefix('site')->middleware(['auth'])->group(function () {
    // header Route
    Route::get('/setting',[HomeController::class,'setting'])->name('setting');
    Route::post('/setting/create',[HomeController::class,'setting_create'])->name('site.create');
    Route::post('setting/update/{id}',[HomeController::class,'setting_update'])->name('site.update');
    Route::get('setting/delete/{id}',[HomeController::class,'setting_delete'])->name('site.delete');

});

// Gallery Section --------
Route::prefix('gallery')->middleware(['auth'])->group(function () {
    // header Route
    Route::get('gallery/title',[GalleryController::class,'Gallery_title'])->name('Gallery_title');
    Route::post('gallery/title/create',[GalleryController::class,'Gallery_title_create'])->name('Gallery_title.create');
    Route::post('gallery/title/update/{id}',[GalleryController::class,'Gallery_title_update'])->name('Gallery_title.update');
    Route::get('gallery/title/delete/{id}',[GalleryController::class,'Gallery_title_delete'])->name('Gallery_title.delete');

    // gallery Route
    Route::get('/gallery/cat',[GalleryController::class,'gallery'])->name('gallery');
    Route::post('/gallery/name/create',[GalleryController::class,'Gallery_category_create'])->name('Gallery_category.create');
    Route::post('gallery/name/update/{id}',[GalleryController::class,'Gallery_category_update'])->name('Gallery_category.update');
    Route::get('gallery/name/delete/{id}',[GalleryController::class,'Gallery_category_delete'])->name('Gallery_category.delete');

    // Gallery Content Route
    Route::post('/gallery/content/create',[GalleryController::class,'Gallery_create'])->name('Gallery.create');
    Route::post('/gallery/content/update/{id}',[GalleryController::class,'Gallery_update'])->name('Gallery.update');
    Route::get('/gallery/content/delete/{id}',[GalleryController::class,'Gallery_delete'])->name('Gallery.delete');
});

// Gallery Section --------
Route::prefix('certificate')->middleware(['auth'])->group(function () {
    // header Route
    Route::get('Certificate/title',[CertificateController::class,'Certificate_title'])->name('Certificate_title');
    Route::post('Certificate/title/create',[CertificateController::class,'Certificate_title_create'])->name('Certificate_title.create');
    Route::post('Certificate/title/update/{id}',[CertificateController::class,'Certificate_title_update'])->name('Certificate_title.update');
    Route::get('Certificate/title/delete/{id}',[CertificateController::class,'Certificate_title_delete'])->name('Certificate_title.delete');

    // Certificate Route
    Route::get('Certificate',[CertificateController::class,'Certificate'])->name('Certificate');
    Route::post('Certificate/create',[CertificateController::class,'Certificate_create'])->name('Certificate.create');
    Route::post('Certificate/update/{id}',[CertificateController::class,'Certificate_update'])->name('Certificate.update');
    Route::get('Certificate/delete/{id}',[CertificateController::class,'Certificate_delete'])->name('Certificate.delete');

});

// Gallery Section --------
Route::prefix('blog')->middleware(['auth'])->group(function () {
    // header Route
    Route::get('blog/header',[BlogController::class,'Blog_header'])->name('Blog_header');
    Route::post('blog/header/create',[BlogController::class,'Blog_header_create'])->name('Blog_header.create');
    Route::post('blog/header/update/{id}',[BlogController::class,'Blog_header_update'])->name('Blog_header.update');
    Route::get('blog/header/delete/{id}',[BlogController::class,'Blog_header_delete'])->name('Blog_header.delete');

    // Blog Category Route
    Route::get('category',[BlogController::class,'Blog_category'])->name('Blog_category');
    Route::post('category/create',[BlogController::class,'Blog_category_create'])->name('Blog_category.create');
    Route::post('category/update/{id}',[BlogController::class,'Blog_category_update'])->name('Blog_category.update');
    Route::get('category/delete/{id}',[BlogController::class,'Blog_category_delete'])->name('Blog_category.delete');

    // Blog Post Route
    Route::get('post',[BlogController::class,'Blog_post'])->name('Blog_post');
    Route::post('post/create',[BlogController::class,'Blog_post_create'])->name('Blog_post.create');
    Route::post('post/update/{id}',[BlogController::class,'Blog_post_update'])->name('Blog_post.update');
    Route::get('post/delete/{id}',[BlogController::class,'Blog_post_delete'])->name('Blog_post.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user_register')->middleware(['auth'])->group(function () {
    Route::get('/',[RegisterController::class,'index']);
    Route::get('/add',[RegisterController::class,'create']);
    Route::post('/store',[RegisterController::class,'store'])->name('user_register_store');
    Route::get('/destroy/{id}',[RegisterController::class,'destroy']);
    Route::post('/update/{id}',[RegisterController::class,'update'])->name('register_update');
    Route::get('/edit/{id}',[RegisterController::class,'edit']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
