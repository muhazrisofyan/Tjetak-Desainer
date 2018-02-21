<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class landingPageController extends Controller
{
    public function index()
    {
        $directory = 'img/d_produk/';
        $files = Storage::disk('public')->allFiles($directory);
        return view('pages.landingpage',compact('files'));
    }
}
