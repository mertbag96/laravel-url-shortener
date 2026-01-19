<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Summary of index
     *
     * @return View
     */
    public function index(): View
    {
        return view('pages.contact');
    }
}
