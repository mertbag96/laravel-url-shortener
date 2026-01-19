<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Summary of __invoke
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view('pages.home');
    }
}
