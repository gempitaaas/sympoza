<?php

use Illuminate\Support\Facades\Route;
use App\Models\Config_Sympozia;

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

Route::get('/', function () {
    if(Config_Sympozia::where('code', 'FRP')->first()->status)
        return view('welcome');
    else
        return redirect()->route('home');
    
});

Route::get('/admin/pages', function () {
    return view('home');
});

Auth::routes();


// Route::get('/admin/pages', \App\Http\Livewire\admin\pages\idx::class)->name('admin.pages');

Route::get('/home', \App\Http\Livewire\Index::class)->name('home');
Route::get('/author', \App\Http\Livewire\Author\Idx::class)->name('author.home');
Route::get('/author/submission', \App\Http\Livewire\Author\SubmissionIdx::class)->name('author.submission');
Route::get('/admin', \App\Http\Livewire\Admin\Idx::class)->name('admin.home');
Route::get('/committee', \App\Http\Livewire\Committee\Idx::class)->name('committee.home');
Route::get('/committee/news', \App\Http\Livewire\Committee\NewsIdx::class)->name('committee.news');
Route::get('/user/admin', \App\Http\Livewire\User\Admin\Idx::class)->name('user.admin');
Route::get('/user/profile', \App\Http\Livewire\User\Profile\Idx::class)->name('user.profile');
Route::get('/user/refresh', function () {
    \Session::flush();
    return redirect('/');
})->name('user.refresh');


Route::post('pstCreateCommittee',[committeeProfilController::class,'pstCreateCommittee'])->name('create.pstCreateCommittee');
Route::post('pstViewCommittee',[committeeProfilController::class,'pstViewCommittee'])->name('view.pstCreateCommittee');

