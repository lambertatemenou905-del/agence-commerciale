<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Message;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/apropos', function () {
    return view('apropos');
});
Route::post('/contact', function (Request $request) {
    Message::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ]);
    return back()->with('success', 'Message envoyé avec succès !');
});

Route::post('/paiement/initier', [App\Http\Controllers\PaiementController::class, 'initier'])->name('paiement.initier');
Route::get('/paiement/succes', [App\Http\Controllers\PaiementController::class, 'succes'])->name('paiement.succes');

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('/admin/login', function (Request $request) {
    if ($request->password === 'lamb2025') {
        session(['admin_logged_in' => true]);
        return redirect('/admin');
    }
    return back()->with('error', 'Mot de passe incorrect !');
});

Route::get('/admin/logout', function () {
    session()->forget('admin_logged_in');
    return redirect('/admin/login');
});

Route::middleware('admin')->group(function () { 
    Route::get('/admin', function () {
        $messages = \App\Models\Message::latest()->get();
        return view('admin.dashboard', compact('messages'));
    });

    Route::get('/admin/messages', function () {
        $messages = \App\Models\Message::latest()->get();
        return view('admin.messages', compact('messages'));
    });
});