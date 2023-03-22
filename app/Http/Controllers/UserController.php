<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function changePassword()
    {
        return view('admin.pengguna.change-password');
    }
    public function storeChangedPassword(Request $request)
    {
        $userId = auth()->user()->id;
        $newPassword = Hash::make($request->newPassword);

        $user = DB::table('users')->where('id', $userId)->first();

        if(!Hash::check($request->currentPassword, $user->password)){
            return back()->with('msg', 'Password yang anda masukan salah !');
        }

        if($request->newPassword != $request->confirmPassword){
            return back()->with('msg1', 'Mohon confirmasi password baru anda !');
        }

        DB::table('users')->where('id', $userId)->update(['password' => $newPassword]);
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
