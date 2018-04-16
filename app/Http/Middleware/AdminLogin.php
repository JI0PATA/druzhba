<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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

        if ($request->login === 'admin' && $request->password === 'admin') {
            $request->session()->put('admin', '1');
            return redirect()->route('admin');
        } else {
            $request->session()->flash('popup_msg', 'Данные введены неверно!');
            return redirect()->route('login');
        }

    }
}
