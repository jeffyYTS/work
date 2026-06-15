<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function syarikat() { return view('dashboards.syarikat'); }
    public function jkdm() { return view('dashboards.jkdm'); }
    public function admin() { return view('dashboards.admin'); }
}
