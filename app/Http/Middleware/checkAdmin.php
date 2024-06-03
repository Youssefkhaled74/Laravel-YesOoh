<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\req;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id=1;
        $req = req::where('id',$id)->first(); //Post::where('slug',$slug)->first()
        $users =User::get();
        if($request->input('password') == $req->passwords ){
            // return redirect()->route('adminPanal',[$user]);
            return redirect()->to('adminPanal')->with('users',User::get());
            // return view('adminPanal')->with('users',User::get());    

        }else
        return redirect('/ErrorAdmin');

        // return $next($request);
    }
}
