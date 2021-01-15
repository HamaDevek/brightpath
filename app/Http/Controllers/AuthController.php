<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {

        return view('settings.pages.auth');
    }
    function update(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:255|min:4',
            'password' => 'required|max:255',
        ]);
        $data = User::findOrFail(auth()->user()->id);
        // dd($data);
        if (Hash::check($request->password, $data->password)) {
            $data->username = $request->username;
            $data->save();
            session()->put('user', $data->id);
            return  back()->withSuccess('Username updated');
        } else {
            return redirect()->back()->withErrors('Incorrect password');
        }
    }
    function password(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|max:255|min:6',
            'new' => 'required|max:255|min:6|different:password',
        ]);
        $data = User::findOrFail(auth()->user()->id);
        if(isset($data)){
            if(Hash::check($request->password,$data->password)){
                $data->password = Hash::make($request->new);
                $data->save();
                session()->put('user',$data->id);
                return  back()->withSuccess('Password updated');
            }else{
                return redirect()->back()->withErrors('Incorrect password');
            }
        }        
    }
}
