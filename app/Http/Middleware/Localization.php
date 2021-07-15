<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class Localization
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
   if(\Session::has('locale'))
   {
       \App::setlocale(\Session::get('locale'));
   }
   else
     \App::setlocale('arm');
   return $next($request);
}
}
