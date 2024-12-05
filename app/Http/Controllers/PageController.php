<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class PageController extends Controller
{
    /**
     * Halaman Home
     */
    public function home()
    {
        // Ambil data FAQ dari database
        $faqs = Faq::all();

        // Kirim data ke view 'home'
        return view('home', compact('faqs'));
    }
}
