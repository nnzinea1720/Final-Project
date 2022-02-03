<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    Public function create()
    {
        return view('frontend.partials.About-us');
    }
}
