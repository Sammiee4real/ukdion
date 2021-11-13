<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignsController;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/all_campaigns', [CampaignsController::class, 'all_campaigns'])
                ->middleware('auth')
                ->name('all-campaigns');

Route::get('/my_campaigns', [CampaignsController::class, 'single_user_campaigns'])
                ->middleware('auth')
                ->name('my-campaigns');
              
Route::get('/edit_campaign/{id}', [CampaignsController::class, 'edit_single_user_campaign'])
                ->middleware('auth')
                ->name('edit-campaigns');

//creation was done using livewire

Route::put('/update-campaign', [CampaignsController::class, 'update_single_user_campaign'])
                ->middleware('auth')
                ->name('update-campaign');

Route::get('/create-campaign', [CampaignsController::class, 'create'])
                ->middleware('auth')
                ->name('create-campaign');
    

require __DIR__.'/auth.php';
