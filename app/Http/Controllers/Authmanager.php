<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Makearent;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;














class Authmanager extends Controller
{
    function login()
    {
         return view('loginregister');
    }



    function registration()
    {

         return view('loginregister');
    }




    function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect(route('welcome'));

        }



    return redirect(route('login'));
}



function registrationpost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mode' => 'required',
            'email' => 'required|email|Unique:users',
            'password' => 'required',

        ]);

        $data['name'] = $request->name;
        $data['mode'] = $request->mode;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);
        if (!$user) {
            return redirect(route('registration'));
        }
        return redirect(route('welcome'));
    }


    public function logout()
    {
       Session::flush();
       Auth::logout();
      return redirect(route('firstpage'));

   }






















   public function firstpage()
{
    return view('firstpage');
}







public function welcome()
{

    return view('welcome');
}

















public function makearent()
{
    return view('makearent');
}


public function addarent(Request $request)
{

    $requestData = $request->all();


    for ($i = 1; $i <= 8; $i++) {
        if ($request->hasFile("photo$i")) {
            $file = $request->file("photo$i");
            $fileName = time() . "_photo$i." . $file->getClientOriginalExtension();
            $path = $file->storeAs('images', $fileName, 'public');
            $requestData["photo$i"] = '/storage/' . $path;
        }
    }

    Makearent::create($requestData);

    return redirect('')->with('Listing Added!');
}






























}
