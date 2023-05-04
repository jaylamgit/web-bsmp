<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\InstagramAuthController;

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
Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact');
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


// Insta Shit
//Route::get('instagram-get-auth', 'InstagramAuthController@show');
//Route::get('instagram-auth-response', 'InstagramAuthController@complete');
Route::get('instagram-get-test', [InstagramAuthController::class, 'test']);
Route::get('instagram-get-auth', [InstagramAuthController::class, 'show']);
Route::get('instagram-auth-response', [InstagramAuthController::class, 'complete']);


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::view('/gallery','gallery',[
        'title' => 'Gallery',
        'description' => '',
]);


Route::view('/services/male-pattern-baldness','male-pattern-baldness',[
	'title' => 'Scalp Micropigmentation for Male Pattern Baldness',
	'description' => 'If you prefer the youthful look of a full, thick and strong head of hair, then the scalp micropigmentation process creates a natural and convincing result.',
]);

Route::view('/services/alopecia-areata-and-totalis','alopecia-areata-and-totalis',[
	'title' => 'Scalp Micropigmentation for Alopecia Areata and Totalis',
	'description' => 'Scalp micropigmentation is the only guaranteed permanent solution for alopecia sufferers. Providing highly effective camouflage for alopecia-related hair loss.',
]);

Route::view('/services/beard-micropigmentation','beard-micropigmentation',[
	'title' => 'Beard Micropigmentation',
	'description' => 'Beard micropigmentation is done over a series of several micropigmentation sessions. There’s a healing process after each session.',
]);

Route::view('/services/scars-due-to-injuries-or-hair-transplants','scars-due-to-injuries-or-hair-transplants',[
	'title' => 'SMP for Scars due to Injuries or Hair Transplants',
	'description' => 'Scalp micropigmentation uses hundreds of tiny pigment deposits to blend scar tissue with the surrounding hair and skin, making the scars much less visible.',
]);

Route::view('/services/female-pattern-hairloss','female-pattern-hairloss',[
	'title' => 'Scalp Micropigmentation for Female Pattern Hair Loss',
	'description' => 'SMP is an ideal treatment for women experiencing any degree of hair loss. Scalp Micropigmentation to cover the natural separations associated with thinning hair.',
]);

Route::view('/services/poor-results-from-hair-transplants','poor-results-from-hair-transplants',[
	'title' => 'SMP for Poor Results from Hair Transplants',
	'description' => 'Scalp Micropigmentation helps to create the impression of natural hair follicles. It produces a natural-looking result that will restore lost confidence.',
]);

