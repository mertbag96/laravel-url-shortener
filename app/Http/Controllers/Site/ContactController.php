<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
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
        return view('pages.site.contact');
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
