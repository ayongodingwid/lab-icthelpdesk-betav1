<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){return view('Dashboard.home');}

    /* view-general */
    public function request(){return view('Dashboard.ticket');}
    public function task(){return view('Dashboard.workorder');}

    /* view-ICT */
    public function problem(){return view('Dashboard.ict.solving');}
    public function reqaset(){return view('Dashboard.ict.reqaset');}

    /* view-ops */
    public function menu(){return view('Dashboard.ticket');}
    public function promo(){return view('Dashboard.ticket');}
    public function diskon(){return view('Dashboard.ticket');}
    public function selisi(){return view('Dashboard.ticket');}
    public function void(){return view('Dashboard.ticket');}
    public function store(){return view('Dashboard.ticket');}

    /* view-fat */
    public function fat(){return view('Dashboard.ticket');}

    /* view-purchasing */
    public function produk(){return view('Dashboard.ticket');}
    public function supplier(){return view('Dashboard.ticket');}

    /* view-master */
    public function businessunit(){return view('Dashboard.ticket');}
    public function divisi(){return view('Dashboard.workorder');}
    public function employee(){return view('Dashboard.ticket');}
    public function asset(){return view('Dashboard.workorder');}

    /* view-ICT */
    public function ticketcategory(){return view('Dashboard.ticket');}
    public function assetcategory(){return view('Dashboard.workorder');}
    public function role(){return view('Dashboard.ticket');}
    public function account(){return view('Dashboard.workorder');}
    public function faq(){return view('Dashboard.ticket');}

}
