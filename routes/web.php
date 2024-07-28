<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;

Route::get('langue/{lang}', function ($lang) {
    app()->setLocale($lang);
    session()->put('locale', $lang);

    return redirect()->back();
});


// site
Route::get('/', [SiteController::class, 'showHomePage'])->name('home');
// Route::get('contactez-nous', [SiteController::class, 'showContactPage'])->name('contactez-nous');
Route::get('adhesion', [SiteController::class, 'showAdhesionPage'])->name('adhesion');
Route::get('evenements', [SiteController::class, 'showEvenementPage'])->name('evenements');
Route::get('event-details', [SiteController::class, 'showDetailsEvenementPage'])->name('event-details');
Route::get('activites', [SiteController::class, 'showActivitePage'])->name('activites');
Route::get('realisations', [SiteController::class, 'showRealisationPage'])->name('realisations');
Route::get('qui-sommes-nous', [SiteController::class, 'showQuiSommesNousPage'])->name('qui-sommes-nous');
Route::get('ce-que-nous-faisons', [SiteController::class, 'showCeQueNousFaisonsPage'])->name('ce-que-nous-faisons');
Route::get('notre-gouvernance', [SiteController::class, 'showNotreGouvernancePage'])->name('notre-gouvernance');
Route::get('contexte-nationnal', [SiteController::class, 'showContexteNationnalPage'])->name('contexte-nationnal');
Route::get('nos-partenaires', [SiteController::class, 'showNosPartenairesPage'])->name('nos-partenaires');
Route::get('faire-un-don', [SiteController::class, 'showDonPage'])->name('dons');

Route::get('/contactez-nous', [ContactController::class, 'showForm'])->name('contactez-nous');
Route::post('/contactez-nous', [ContactController::class, 'submitForm'])->name('contact.submit');
