<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User as User;
use App\Models\Pet as Pet;
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

// List All Users (Factory Challenge)
Route::get('show/users', function () {
    $users = User::all();
    return view('users-factory')->with('users', $users);
});

Route::get('hello', function () {
    return "<h1>Hello Laravel 😀</h1>";    
})->name('hello');

Route::get('show/pets', function () {
    $pets = Pet::all();
    dd($pets->toArray());
});

Route::get('/challenge/users', function () {
    $users = User::limit(20)->get();
    $code = "<div style='margin: 2rem; font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif'>
        <h2 style='color: #2c3e50; text-align: center; margin-bottom: 1.5rem'>User List</h2>
        <table style='border-collapse: collapse; margin: 0 auto; width: 90%; max-width: 1200px; box-shadow: 0 0 20px rgba(0,0,0,0.1)'>
            <thead>
                <tr style='background-color: #3498db; color: white;'>
                    <th style='padding: 15px; text-align: left; border-bottom: 2px solid #2980b9'>ID</th>
                    <th style='padding: 15px; text-align: left; border-bottom: 2px solid #2980b9'>Full Name</th>
                    <th style='padding: 15px; text-align: left; border-bottom: 2px solid #2980b9'>Age</th>
                    <th style='padding: 15px; text-align: left; border-bottom: 2px solid #2980b9'>Created At</th>
                </tr>
            </thead>
            <tbody>";

    foreach ($users as $user) {
        $age = Carbon::parse($user->birthdate)->age;
        $rowColor = $user->id % 2 ? '#f8f9fa' : '#ffffff';
        $code .= "<tr style='background-color: {$rowColor}; transition: background-color 0.3s ease;'>
                    <td style='padding: 12px 15px; border-bottom: 1px solid #ecf0f1'>{$user->id}</td>
                    <td style='padding: 12px 15px; border-bottom: 1px solid #ecf0f1'>{$user->fullname}</td>
                    <td style='padding: 12px 15px; border-bottom: 1px solid #ecf0f1'>{$age} years</td>
                    <td style='padding: 12px 15px; border-bottom: 1px solid #ecf0f1'>{$user->created_at->diffForHumans()}</td>
                </tr>";
    }

    $code .= "</tbody>
        </table>
        <p style='text-align: center; margin-top: 1rem; color: #7f8c8d'>Showing {$users->count()} users</p>
    </div>";
    
    return $code . "</table>";
});

Route::get('view/blade', function () {
    $title = "Examples Blade";
    $pets = App\Models\Pet::wherein('kind', ['dog', 'cat'])->get();
    return view('example-view')
        ->with('title', $title)
        ->with('pets', $pets);
        
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