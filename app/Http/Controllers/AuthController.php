<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $idn = KonsumensModel::where('email', $email)->first();

        if ($idn) {
            if (Hash::check($password, $idn->password)) {
                if ($idn->role == '') {
                    $supplier = SuppliersModel::where('email', $idn->email)->orWhere('no_hp', $idn->no_hp)->first();
                    session(['login' => true, 'id_user' => $idn->_id, 'id_supplier' => $supplier->_id, 'provinsi_id' => $idn['alamat'][0]['provinsi'], 'kota_id' => $idn['alamat'][0]['kota/kab'], 'kecamatan_id' => $idn['alamat'][0]['kecamatan']]);
                }
                session(['login' => true, 'id_user' => $idn->_id, 'provinsi_id' => $idn['alamat'][0]['provinsi'], 'kota_id' => $idn['alamat'][0]['kota/kab'], 'kecamatan_id' => $idn['alamat'][0]['kecamatan']]);
                return redirect()->to('/');
            } else {
                return redirect()->to('/login')->with(['error' => 'No. Handphone/Email atau Password salah']);
            }
        } else {
            return redirect()->to('/login')->with(['error' => 'No. Handphone/Email atau Password']);
        }
    }

    public function register()
    {
        return view('register');
    }

    public function auth_register(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $email = htmlspecialchars($request->input('email'));
        $password = htmlspecialchars($request->input('password'));

        $hash_password = Hash::make($password);

        $user = UserModel::create([
            'id' => Str::uuid(),
            'email' => $email,
            'password' => $hash_password,
            'status' => 'inactive'
        ]);

        return response()->json();
    }

    public function verify_email()
    {
        return view('verify_email');
    }

    public function send_verify_email(Request $request)
    {



        return redirect()->to();
    }

    public function changepassword()
    {
        return view('changepassword');
    }

    public function confirm_email_pw()
    {
        return view('confirm_email_pw');
    }
}
