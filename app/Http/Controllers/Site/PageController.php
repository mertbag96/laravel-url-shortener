<?php

namespace App\Http\Controllers\Site;

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
        return view('pages.site.terms');
    }

    /**
     * Summary of privacy
     *
     * @return View
     */
    public function privacy(): View
    {
        return view('pages.site.privacy');
    }
}
