<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $languages= array("bu","en","es","fr","it","ro","si");
        if (in_array($request->segment(1), $languages)) {
            app()->setLocale($request->segment(1));
        }else{
            app()->setLocale('en');
        }
        return $next($request);
       // return redirect(app()->getLocale());
    }
}
