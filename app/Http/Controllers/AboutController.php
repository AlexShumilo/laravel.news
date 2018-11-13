<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AboutController extends Controller
{
    public function show() {

        return view('about', ['team'=> DB::table('employees')->get()]);
    }
}
