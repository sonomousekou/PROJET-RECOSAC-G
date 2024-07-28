<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function showHomePage(Request $request){
        return view('site.home');
    }

    public function showContactPage(Request $request){
        return view('site.contact');
    }

    public function showAdhesionPage(Request $request){
        return view('site.adhesion');
    }

    public function showEvenementPage(Request $request){
        return view('site.evenements');
    }

    public function showDetailsEvenementPage(Request $request){
        return view('site.event-details');
    }

    public function showDonPage(Request $request){
        return view('site.dons');
    }

    public function showActivitePage(Request $request){
        return view('site.activites');
    }


    public function showRealisationPage(Request $request){
        return view('site.realisations');
    }


    public function showQuiSommesNousPage(Request $request){
        return view('site.qui-sommes-nous');
    }

    public function showCeQueNousFaisonsPage(Request $request){
        return view('site.ce-que-nous-faisons');
    }

    public function showNotreGouvernancePage(Request $request){
        return view('site.notre-gouvernance');
    }

    public function showContexteNationnalPage(Request $request){
        return view('site.contexte-nationnal');
    }

    public function showNosPartenairesPage(Request $request){
        return view('site.nos-partenaires');
    }

}
