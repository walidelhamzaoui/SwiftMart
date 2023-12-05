<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class editorRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    if(Auth::check()){
    $user=Auth::user();
    if($user->hasRole('admin')){
        return redirect()->route('dashboard_admin');
    }elseif
    ($user->hasRole('editor')){
    return redirect()->route('dashboard_editor');
   
    }
       
    } 
    return $next($request);
}
}