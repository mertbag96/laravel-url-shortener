<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class UrlController extends Controller
{
    /**
     * Summary of shorten
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function shorten(Request $request): RedirectResponse
    {
        $validator = Validator::make(
            $request->all(),
            [
                'url' => ['required', 'url'],
            ],
            [
                'url.required' => 'Please enter a URL',
                'url.url' => 'Please enter a valid URL'
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $record = Url::query()
            ->where('url', $request->url)
            ->first();

        if ($record) {
            $url = $record;
        } else {
            do {
                $code = Str::random(8);
            } while (Url::query()->where('code', $code)->exists());

            $url = Url::create([
                'user_id' => null,
                'code' => $code,
                'url' => $request->url,
            ]);
        }

        $shortUrl = config('app.url') . '/' . $url->code;

        return redirect()
            ->back()
            ->with('short_url', $shortUrl);
    }

    /**
     * Summary of redirect
     *
     * @param string $code
     * @return RedirectResponse
     */
    public function redirect(string $code): RedirectResponse
    {
        $record = Url::query()
            ->where('code', $code)
            ->firstOrFail();

        return redirect()->to($record->url);
    }
}
