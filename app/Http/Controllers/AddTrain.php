<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\req;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class AddTrain extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         // 'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'mobile' =>['required','string','max:255'],
    //         'message' =>['required','string','max:1000'],
    //     ]);
    // }
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         // 'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'mobile' =>['required','string','max:255'],
    //         'message' =>['required','string','max:1000'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {


        // $file = $request->file("file");
        // $file->getClientOriginalName();
        // $file->getClientOriginalExtension();
        // $file->getRealPath();
        // $file->getSize();
        // $file->getMimeType();
        // $destinationPath = "files"; 
        // $file->move($destinationPath,$file->getClientOriginalName());


        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255',
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile' =>'required','string','max:255',
            'cv' =>'required','string','max:1000','mimes:png,jpg,jpeg,pdf',
        ]);

        if($request->has('cv')){
            $cv=$request['cv'];
            $extension=strtolower($cv->extension());
            $filename=time().rand(1,10000).".".$extension;
            $cv->move("files",$filename);
        }
        
        Train::create([
            'name' => $request['name'],
            'email' => $request['email'],
            // 'password' => Hash::make($data['password']),
            'mobile'=>$request['mobile'],
            'cv'=>$filename,
            
            // 'cv'=>$request['cv'],
        ]);
        return redirect('/');
    }
}
