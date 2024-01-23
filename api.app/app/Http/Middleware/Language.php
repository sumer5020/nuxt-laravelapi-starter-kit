<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = app()->getLocale();

        $locale = $request->header(key: 'x-accept-language')
                    ?? request()?->query(key: '_locale', default: $locale);

        //You may need it. If necessary, I will leave it for general use
        if(session()->get('language')){
            $locale = session()->get('language');
        }

        if (in_array(needle: $locale, haystack: config(key: 'app.locales'), strict: true)) {
            app()->setLocale(locale: $locale);
            Carbon::setLocale(locale: $locale);
        }

        return $next($request);
    }
}
