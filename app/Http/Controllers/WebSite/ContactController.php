<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Summary of show
     *
     * @return View
     */
    public function show(): View
    {
        return view('website.pages.contact');
    }

    /**
     * Summary of store
     *
     * @param ContactStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ContactStoreRequest $request): RedirectResponse
    {
        Contact::create($request->validated());

        return redirect()
            ->back()
            ->with('success', 'Contact form was successfully submitted.');
    }
}
