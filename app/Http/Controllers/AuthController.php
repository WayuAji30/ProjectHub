<?php

namespace App\Http\Controllers;


use App\Http\Controllers\PHPMailerController;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;

use App\Models\UserModel;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request){
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

    public function auth_register(Request $request){
        // Validate the request data
        $this->validate($request, [
            'email' => 'required|email|unique:tbl_user,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
    
        // Retrieve input values
        $email = htmlspecialchars($request->input('email'));
        $password = htmlspecialchars($request->input('password'));
    
        $hash_password = Hash::make($password);
    
        // Create a new user
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

        return redirect()->to('/login');
    }
}
