<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Summary of terms
     *
     * @return View
     */
    public function terms(): View
    {
        return view('website.pages.terms');
    }

    /**
     * Summary of privacy
     *
     * @return View
     */
    public function privacy(): View
    {
        return view('website.pages.privacy');
    }
}
