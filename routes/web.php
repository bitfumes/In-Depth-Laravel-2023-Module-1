<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    // fetch all users
    // $users = DB::select("select * from users");
    // $users = DB::table('users')->where('id', 1)->first();
    $user = User::find(17);

    // create new user
    // $user = DB::insert('insert into users (name, email, password) values (?,?,?)', [
    //     'Sarthak',
    //     'sarthak1@bitfumes.com',
    //     'password',
    // ]);
    // $user = DB::table('users')->insert([
    //     'name'     => 'Sarthak',
    //     'email'    => 'sarthak2@bitfumes.com',
    //     'password' => 'password',
    // ]);
    // $user = User::create([
    //     'name'     => 'Sarthak',
    //     'email'    => 'sarthak7@bitfumes.com',
    //     'password' => 'password',
    // ]);

    // update a user
    // $user = DB::update("update users set email=? where id=?", [
    //     'sarthak1@bitfumes.com',
    //     3,
    // ]);
    // $user = DB::table('users')->where('id', 5)->update(['email' => 'abc@bitfumes.com']);
    // $user = User::find(6);
    // $user->update([
    //     'email' => 'sarthak1@bitfumes.com',
    // ]);

    //  delete a user
    // $user = DB::delete("delete from users where id=3");
    // $user = DB::table('users')->where('id', 5)->delete();
    // $user = User::find(6);
    // $user->delete();
    dd($user->name);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
