<?php

namespace App\Http\Controllers;


use App\Http\Controllers\PHPMailerController;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

use App\Models\UserModel;
use App\Mail\VerifyEmail;




class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function auth_google()
    {
        // Google user object dari google
        $userFromGoogle = Socialite::driver('google')->user();

        // Ambil user dari database berdasarkan google user id
        $userFromDatabase = UserModel::where('google_id', $userFromGoogle->getId())->first();

        // Jika tidak ada user, maka buat user baru
        if (!$userFromDatabase) {
            $newUser = UserModel::create([
                'id' => Str::uuid(),
                'google_id' => $userFromGoogle->getId(),
                'email' => $userFromGoogle->getEmail(),
                'password' => null,
                'status' => 'active'
            ]);

            return redirect('/');
        }

        return redirect('/');
    }

    public function auth_login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = htmlspecialchars($request->input('email'));
        $password = htmlspecialchars($request->input('password'));

        $user = UserModel::where('email', $email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) { 
                if($user->status == "inactive"){
                    session(['id' => (string) $user->id]);
                    return redirect()->to('/verify_email');
                }else{
                    return redirect()->to('/');
                }
            } else {
                return redirect()->to('/login')->with(['error' => 'Email atau Password salah']);
            }
        } else {
            return redirect()->to('/login')->with(['error' => 'Email atau Password salah']);
        }
    }

    public function register()
    {
        return view('register');
    }

    public function auth_register(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:tbl_user,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
    
        // Retrieve input values
        $email = htmlspecialchars($request->input('email'));
        $password = htmlspecialchars($request->input('password'));
    
        $hash_password = Hash::make($password);
        $user = UserModel::create([
            'id' => Str::uuid(),
            'email' => $email,
            'password' => $hash_password,
            'status' => 'inactive'
        ]);

        session(['id' => (string) $user->id]);

        return redirect()->to('/verify_email');
    }
    
    public function verify_email()
    {
        $id = session('id');
        $user = UserModel::find($id);

        return view('verify_email',['user' => $user]);
    }

    public function activated_user(Request $request){
        $id = $request->input('id');
        $status = $request->input('status_aktivasi');

        UserModel::where('id',$id)->update([
            'status' => $status
        ]);

        session()->forget('id');
        return redirect()->to('/');
    }

    public function changepassword()
    {
        if(session()->has('email_user_ubah_password')){
            return view('changepassword');
        }else{
            return back();
        }
    }

    public function update_password(Request $request)
    {
        $this->validate($request,[
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $password = htmlspecialchars($request->input('password'));
        $new_password = Hash::make($password); 

        $user = UserModel::where('email',session('email_user_ubah_password'))->first();
        if($user){
            if(Hash::check($password, $user->password)){
                return back()->with(['failed' => 'The password is the same as before!']);
            }else{
                $user->update([
                    'password' => $new_password
                ]);
                
                session()->forget('email_user_ubah_password');
                return redirect()->to('/login')->with(['success' => 'Password has been changed!']);
            }
        }else{
            return back()->with(['failed' => 'Email not Found!']);
        }
    }

    public function confirm_email_pw()
    {
        session(['status_halaman' => 'lupa_password']);

        return view('confirm_email_pw');
    }
    
    public function logout(Request $request)
    {
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
