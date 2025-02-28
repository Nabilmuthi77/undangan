<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RsvpController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MempelaiController;
use App\Http\Controllers\BugReportController;
use App\Http\Controllers\StreamingController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\KadoDigitalController;
use App\Http\Controllers\TeksPembukaController;
use App\Http\Controllers\TeksPenutupController;

// Routes Home
Route::controller(HomeController::class)->group(function () {
    // Route Halaman Beranda
    Route::get('/', 'index')->name('home');

    // Route Halaman Tutorial
    Route::get('/tutorial', 'tutorial')->name('tutorial');
});

// Routes Profile
Route::middleware(['auth', 'verified'])->group(function () {
    // Route Halaman Edit
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    // Route Edit Profile
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Routes Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Route Dashboard
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    // Routes User
    Route::patch('/admin/user/{id}', [AdminController::class, 'updateUser'])->name('admin.update.user');
    Route::delete('/admin/user/{id}', [AdminController::class, 'deleteUser'])->name('admin.user.delete');

    // Routes Undangan
    Route::patch('admin/update-undangan/{id}', [AdminController::class, 'updateInvitation'])->name('admin.updateInvitation');
    Route::delete('admin/delete-undangan/{id}', [AdminController::class, 'deleteInvitation'])->name('admin.deleteInvitation');

    // Route Tema
    Route::get('/admin/tema/{id?}', [AdminController::class, 'tema'])->name('admin.tema');

    // Route Feedback & Bug
    Route::get('/admin/feedbackandbug', [AdminController::class, 'feedbackandbug'])->name('admin.feedbackandbug');

    // Routes Bug
    Route::put('/admin/bug-response/{id}', [AdminController::class, 'updateBugResponse'])->name('admin.updateBugResponse');
    Route::delete('admin/bug-response/{bugReport}', [AdminController::class, 'destroyBug'])->name('admin.destroyBug');

    // Route Feedback
    Route::delete('admin/feedback/{id}', [AdminController::class, 'destroyFeedback'])->name('admin.destroyFeedback');
});

// Routes User
Route::middleware(['auth', 'role:user'])->group(function () {
    // Route Dashboard User
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');

    // Route Undangan
    Route::get('/user/undangan', [UserController::class, 'undangan'])->name('user.undangan');

    // Route Buat Undangan
    Route::post('/user/undangan', [InvitationController::class, 'storeInvitation'])->name('user.store.invitation');

    // Route Edit Undangan
    Route::get('/user/invitation/{invitation}/edit', [InvitationController::class, 'editInvitation'])->name('user.invitation.edit');

    // Route Edit Judul Undangan
    Route::patch('/user/invitation/{invitation}', [InvitationController::class, 'updateInvitation'])->name('user.invitation.update');

    // Route Edit Tema Undangan
    Route::patch('/user/invitation/{invitation}/theme', [InvitationController::class, 'updateTheme'])->name('user.invitation.updateTheme');

    // Route Hapus Undangan
    Route::delete('/user/invitation/{invitation}', [InvitationController::class, 'destroyInvitation'])->name('user.invitation.destroy');

    // Routes Mempelai
    Route::post('/user/mempelai/{invitation}', [MempelaiController::class, 'store'])->name('user.mempelai.store');
    Route::patch('/user/mempelai/{mempelai}', [MempelaiController::class, 'update'])->name('user.mempelai.update');
    Route::delete('/user/mempelai/{mempelai}', [MempelaiController::class, 'destroy'])->name('user.mempelai.destroy');

    // Routes Acara
    Route::post('/user/acara/{invitation}', [AcaraController::class, 'store'])->name('user.acara.store');
    Route::patch('/user/acara/{acara}', [AcaraController::class, 'update'])->name('user.acara.update');
    Route::delete('/user/acara/{acara}', [AcaraController::class, 'destroy'])->name('user.acara.destroy');

    // Routes Streaming
    Route::post('/user/streaming/{invitation}', [StreamingController::class, 'store'])->name('user.streaming.store');
    Route::delete('/user/streaming/{streaming}', [StreamingController::class, 'destroy'])->name('user.streaming.destroy');

    // Routes Foto & Video
    Route::post('/user/invitation/{invitation}/galeri', [GaleriController::class, 'store'])->name('user.galeri.store');
    Route::post('/user/invitation/{invitation}/galeri/multiple', [GaleriController::class, 'storeMultiple'])->name('user.galeri.storeMultiple');
    Route::post('/user/invitation/{invitation}/galeri/video', [GaleriController::class, 'storeVideo'])->name('user.galeri.storeVideo');
    Route::post('/user/invitation/{invitation}/galeri/foto-pembuka', [GaleriController::class, 'storeFotoPembuka'])->name('user.galeri.storeFotoPembuka');
    Route::post('/user/invitation/{invitation}/galeri/foto-acara', [GaleriController::class, 'storeFotoAcara'])->name('user.galeri.storeFotoAcara');
    Route::post('/user/invitation/{invitation}/galeri/foto-cerita', [GaleriController::class, 'storeFotoCerita'])->name('user.galeri.storeFotoCerita');
    Route::post('/user/invitation/{invitation}/galeri/foto-penutup', [GaleriController::class, 'storeFotoPenutup'])->name('user.galeri.storeFotoPenutup');
    Route::delete('/user/galeri/{galeri}/foto-sampul', [GaleriController::class, 'destroyCoverPhoto'])->name('user.galeri.destroyCoverPhoto');
    Route::delete('/user/galeri/{galeri}/foto-galeri', [GaleriController::class, 'destroyGalleryPhoto'])->name('user.galeri.destroyGalleryPhoto');
    Route::delete('/user/galeri/{galeri}/video', [GaleriController::class, 'destroyVideo'])->name('user.galeri.destroyVideo');
    Route::delete('/user/galeri/{galeri}/foto-pembuka', [GaleriController::class, 'destroyFotoPembuka'])->name('user.galeri.destroyFotoPembuka');
    Route::delete('/user/galeri/{galeri}/foto-acara', [GaleriController::class, 'destroyFotoAcara'])->name('user.galeri.destroyFotoAcara');
    Route::delete('/user/galeri/{galeri}/foto-cerita', [GaleriController::class, 'destroyFotoCerita'])->name('user.galeri.destroyFotoCerita');
    Route::delete('/user/galeri/{galeri}/foto-penutup', [GaleriController::class, 'destroyFotoPenutup'])->name('user.galeri.destroyFotoPenutup');

    // Routes Cerita
    Route::post('/invitation/{invitation}/cerita', [CeritaController::class, 'store'])->name('cerita.store');
    Route::patch('/user/cerita/{cerita}', [CeritaController::class, 'update'])->name('user.cerita.update');
    Route::delete('/user/cerita/{cerita}', [CeritaController::class, 'destroy'])->name('user.cerita.destroy');

    // Routes Quote
    Route::post('/user/quotes/{invitation}', [QuoteController::class, 'store'])->name('user.quotes.store');
    Route::delete('/user/quotes/{quotes}', [QuoteController::class, 'destroy'])->name('user.quotes.destroy');

    // Routes Kado Digital
    Route::post('/user/kado-digital/{invitation}', [KadoDigitalController::class, 'store'])->name('user.kadodigital.store');
    Route::patch('/user/kado-digital/{kadodigital}', [KadoDigitalController::class, 'update'])->name('user.kadodigital.update');
    Route::delete('/user/kado-digital/{kadodigital}', [KadoDigitalController::class, 'destroy'])->name('user.kadodigital.destroy');

    // Routes Musik
    Route::post('/user/music/{invitation}', [MusicController::class, 'store'])->name('user.music.store');
    Route::delete('/user/music/{music}', [MusicController::class, 'destroy'])->name('user.music.destroy');

    // Routes Tamu
    Route::post('/user/invitation/{invitation}/tamu', [TamuController::class, 'store'])->name('user.tamu.store');
    Route::patch('/user/tamu/{tamu}', [TamuController::class, 'update'])->name('user.tamu.update');
    Route::delete('/user/tamu/{tamu}', [TamuController::class, 'destroy'])->name('user.tamu.destroy');

    // Routes Ucapan & Do'a
    Route::patch('/comments/toggle-status/{invitation}', [CommentController::class, 'toggleStatus'])->name('comments.toggleStatus');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

    // Routes Teks Pembuka & Penutup
    Route::post('/user/invitation/{invitation}/tekspembuka', [TeksPembukaController::class, 'store'])->name('user.tekspembuka.store');
    Route::delete('/user/tekspembuka/{id}', [TeksPembukaController::class, 'destroy'])->name('user.tekspembuka.destroy');
    Route::post('/user/invitation/{invitation}/tekspenutup', [TeksPenutupController::class, 'store'])->name('user.tekspenutup.store');
    Route::delete('/user/tekspenutup/{id}', [TeksPenutupController::class, 'destroy'])->name('user.tekspenutup.destroy');

    // Route Hapus RSVP
    Route::delete('/rsvp/{rsvp}', [RsvpController::class, 'destroy'])->name('rsvp.destroy');

    // Route Preview
    Route::get('/invitation/{slug}', [InvitationController::class, 'show'])->name('user.invitation.show');

    // Route CS
    Route::get('/user/cs', [UserController::class, 'cs'])->name('user.cs');

    // Route Feedback & Bug
    Route::get('/user/feedbackandbug', [UserController::class, 'feedbackandbug'])->name('user.feedbackandbug');

    // Routes Feedback
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::put('/feedback/{id}', [FeedbackController::class, 'update'])->name('feedback.update');
    Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

    // Routes Bug
    Route::post('/bug-reports', [BugReportController::class, 'store'])->name('bug-reports.store');
    Route::put('/bug-reports/{bugReport}', [BugReportController::class, 'update'])->name('bug-reports.update');
    Route::delete('/bug-reports/{bugReport}', [BugReportController::class, 'destroy'])->name('bug-reports.destroy');
});

// Route Kirim Undangan
Route::get('/invitation/{hashedUserId}/{slug}/{guestName}', [InvitationController::class, 'showForGuest'])->name('invitation.show.guest');

// Route Kirim RSVP
Route::post('/rsvp/{invitation}', [RsvpController::class, 'store'])->name('rsvp.store');

// Route Kirim Ucapan & Do'a
Route::post('/comments/{invitation}', [CommentController::class, 'store'])->name('comments.store');

// Route Tema
Route::resource('themes', ThemeController::class);

// Route Demo
Route::get('/demo/{slug}', [ThemeController::class, 'demo'])->name('demo.theme');

// Route Auth
require __DIR__ . '/auth.php';
