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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use App\Models\UserModel;
use App\Models\UserProfileModel;
use App\Mail\VerifyEmail;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
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
            try{
                $user = UserModel::create([
                    'id' => Str::uuid(),
                    'google_id' => $userFromGoogle->getId(),
                    'email' => $userFromGoogle->getEmail(),
                    'img_google' => $userFromGoogle->getAvatar(),
                    'username_google' => $userFromGoogle->getName(),
                    'password' => null,
                    'id_status' => 3
                ]);

                $userLogin = UserProfileModel::create([
                    'id' => Str::uuid(),
                    'id_user_login' => (string) $user->id,
                    'first_name' => null,
                    'last_name' => null,
                    'province' => null,
                    'city' => null,
                    'about_me' => null,
                    'behance' => null,
                    'linkedin' => null,
                    'github' => null,
                    'dribble' => null,
                    'cv' => null,
                    'portfolio' => null,
                    'id_status' => 5
                ]);

                session(['id_user' => (string) $user->id]);
                session(['id_google_user' => $user->google_id]);

                return redirect('/index');
            }catch(\Exception $e){
                dd($e);
                return redirect()->to('/login')->with(['failed' => 'Login or Registration Failed! Please, use another method!']);
            }
        }else{
            $userFromDatabase->update(['id_status' => 3]);
            session(['id_user' => (string) $userFromDatabase->id]);
            session(['id_google_user' => $userFromDatabase->google_id]);
            return redirect('/index');
        }
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
            if($user->password !== null){
                if (Hash::check($password, $user->password)) {
                    if ($user->id_status == 1) {
                        session(['id' => (string) $user->id]);

                        $mail = new PHPMailer(true);
                        
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'serviceprojecthub@gmail.com';
                        $mail->Password = 'qtkx xcjd lnsd irff';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                        $mail->Port = 465;
    
                        $mail->setFrom('serviceprojecthub@gmail.com', 'no-reply');
    
                        $mail->addAddress($user->email);
    
                        $mail->isHTML(true);
    
                        $mail->Subject = "Verifikasi Akun | projecthub.id";
                        $mail->Body    = '<a href = "https://mywebsite.com"><img src="https://iili.io/JRfxBYg.png" alt="Logo" style="width:200px;margin-top:30px;"/></a>' .
                            '<h1 style="font-family:sans-serif; font-weight: 700; margin-top: 35px;">Verifikasi Alamat Email Kamu</h1>' .
                            '<p style="font-family:sans-serif; font-size: 16px; font-weight: 500;">Untuk melanjutkan ke ProjectHub.id, konfirmasi bahwa ini adalah alamat<br>' .
                            'email kamu dengan menekan tombol dibawah.</p>' .
                            '<form action="' . route('activated_user') . '" method = "post">' .
                            '<input type="hidden" name="id" id = "id" value="' . $user->id . '">' .
                            '<input type="hidden" name="status_aktivasi" id = "status_aktivasi" value="2">' .
                            '<button style="padding: 14px 0px; margin-top: 30px; width: 250px; border-radius: 10px; border: none; font-size: 18px; font-weight: 500; color: white; background-color: #020179; font-weight: 700;">Verifikasi Email</button>' .
                            '</form>' .
                            '<p style="margin-top: 20px; color: #999; margin-top: 30px; font-family: sans-serif;">Link yang terdapat pada tombol diatas akan expired setelah 1 jam. Jika kamu tidak merasa<br>' .
                            'melakukan request, silahkan abaikan email ini.</p>';
    
                        if (!$mail->send()) {
                            return back()->with(["failed" => "Email not sent."]);
                        } else {
                            return redirect()->to('/verify_email');
                        }
                    } else {
                        $user->update(['id_status' => 3]);
                        session(['id_user' => (string) $user->id]);
                        return redirect()->to('/index');
                    }
                } else {
                    return redirect()->to('/login')->with(['error' => 'Incorrect Email or Password!']);
                }
            }else{
                return redirect()->to('/login')->with(['error' => "You can't do login! Please use another method"]);
            }
        } else {
            return redirect()->to('/login')->with(['error' => 'Incorrect Email or Password!']);
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function auth_register(Request $request)
    {
        require base_path("vendor/autoload.php");

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
            'google_id' => null,
            'email' => $email,
            'img_google' => null,
            'username_google' => null,
            'password' => $hash_password,
            'id_status' => 1
        ]);

        $userLogin = UserProfileModel::create([
            'id' => Str::uuid(),
            'id_user_login' => (string) $user->id,
            'first_name' => null,
            'last_name' => null,
            'province' => null,
            'city' => null,
            'about_me' => null,
            'behance' => null,
            'linkedin' => null,
            'github' => null,
            'dribble' => null,
            'cv' => null,
            'portfolio' => null,
            'id_status' => 5
        ]);

        session(['id' => (string) $user->id]);

        $mail = new PHPMailer(true);

        try {
            // Email server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'serviceprojecthub@gmail.com';
            $mail->Password = 'qtkx xcjd lnsd irff';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom('serviceprojecthub@gmail.com', 'no-reply');

            $mail->addAddress($user->email);

            $mail->isHTML(true);

            $mail->Subject = "Verifikasi Akun | projecthub.id";
            $mail->Body    = '<a href = "https://mywebsite.com"><img src="https://iili.io/JRfxBYg.png" alt="Logo" style="width:200px;margin-top:30px;"/></a>' .
                '<h1 style="font-family:sans-serif; font-weight: 700; margin-top: 35px;">Verifikasi Alamat Email Kamu</h1>' .
                '<p style="font-family:sans-serif; font-size: 16px; font-weight: 500;">Untuk melanjutkan ke ProjectHub.id, konfirmasi bahwa ini adalah alamat<br>' .
                'email kamu dengan menekan tombol dibawah.</p>' .
                '<form action="' . route('activated_user') . '" method = "post">' .
                '<input type="hidden" name="id" id = "id" value="' . $user->id . '">' .
                '<input type="hidden" name="status_aktivasi" id = "status_aktivasi" value="2">' .
                '<button style="padding: 14px 0px; margin-top: 30px; width: 250px; border-radius: 10px; border: none; font-size: 18px; font-weight: 500; color: white; background-color: #020179; font-weight: 700;">Verifikasi Email</button>' .
                '</form>' .
                '<p style="margin-top: 20px; color: #999; margin-top: 30px; font-family: sans-serif;">Link yang terdapat pada tombol diatas akan expired setelah 1 jam. Jika kamu tidak merasa<br>' .
                'melakukan request, silahkan abaikan email ini.</p>';

            if (!$mail->send()) {
                return back()->with("failed", "Email not sent.")->withErrors("Email gagal dikirim");
            } else {
                return redirect()->to('/verify_email');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }

    public function verify_email()
    {
        $id = session('id');
        $user = UserModel::find($id);

        if($user){
            if(session('id')){
                return view('auth.verify_email', ['user' => $user]);
            }else{
                return redirect()->to('/login');
            }
        }else{
            return redirect()->to('/login');
        }
    }

    public function activated_user(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status_aktivasi');

        UserModel::where('id', $id)->update([
            'id_status' => $status
        ]);

        session()->forget('id');
        session(['id_user' => (string) $id]);
        return redirect()->to('/index');
    }

    public function confirm_email_pw()
    {
        session(['status_halaman' => 'lupa_password']);

        return view('auth.confirm_email_pw');
    }

    public function send_confirm_email_pw(Request $request)
    {
        $mail = new PHPMailer(true);

        $email = htmlspecialchars($request->input('email'));

        $user = UserModel::where('email',$email)->first();

        if($user){
            if($user->id_status === 2 || $user->id_status === 4){
                if($user->password !== null){
                    try {
                        // Email server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'serviceprojecthub@gmail.com';
                        $mail->Password = 'qtkx xcjd lnsd irff';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                        $mail->Port = 465;
            
                        $mail->setFrom('serviceprojecthub@gmail.com', 'no-reply');
            
                        $mail->addAddress($user->email);
            
                        $mail->isHTML(true);
            
                        $mail->Subject = "Lupa Password | projecthub.id";
                        $mail->Body = '<img src="https://iili.io/JRfxBYg.png" alt="Logo" style="width:200px;margin-top:30px;"/>' .
                            '<h1 style="font-family:sans-serif; font-weight:700; margin-top:35px;">Permintaan Ubah Password</h1>' .
                            '<p style="font-family:sans-serif; font-size:16px; color:#999; font-weight:500;">Untuk melanjutkan penggantian password kamu, tekan tombol<br>' .
                            'dibawah untuk mengarahkan kamu ke halaman berikutnya.</p>' .
                            '<form action="http://localhost:8000/changepassword" method="get">' .
                            '<button style="padding:14px 0px; margin-top:30px; width:220px; border-radius:10px; border:none; font-size:18px; font-weight:500; color:white; background-color:#020179;">Verifikasi Email</button>' .
                            '</form>' .
                            '<p style="margin-top:20px; color:#999; margin-top:30px; font-family:sans-serif;">Link yang terdapat pada tombol diatas akan expired setelah 1 jam. Jika kamu tidak merasa<br>' .
                            'melakukan request, silahkan abaikan email ini.</p>';
            
                        if (!$mail->send()) {
                            return back()->with("failed", "Email not sent.")->withErrors("Email gagal dikirim");
                        } else {
                            session(['id' => (string) $user->id]); 
                            session(['email_user_ubah_password' => $email]);
                            return redirect()->to('/verify_email');
                        }
            
                    } catch (Exception $e) {
                        return back()->with('error', 'Message could not be sent.');
                    }
                }else{
                    return back()->with(['failed' => "You can't do 'forgot password'! Your email has been registered by google!"]);
                }
            }else{
                return back()->with(['failed' => "Your status is online"]);
            }   
        }else{
            return back()->with(['failed' => 'Email not found or Email has not been activated!']);
        }
    }

    public function changepassword()
    {
        if (session()->has('email_user_ubah_password')) {
            return view('auth.changepassword');
        } else {
            return back();
        }
    }

    public function update_password(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $password = htmlspecialchars($request->input('password'));
        $new_password = Hash::make($password);

        $user = UserModel::where('email', session('email_user_ubah_password'))->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                return back()->with(['failed' => 'The password is the same as before!']);
            } else {
                $user->update([
                    'password' => $new_password
                ]);

                session()->forget('email_user_ubah_password');
                session()->forget('id');
                return redirect()->to('/login')->with(['success' => 'Password has been changed!']);
            }
        } else {
            return back()->with(['failed' => 'Email not Found!']);
        }
    }

    public function logout(Request $request)
    {
        $id = htmlspecialchars($request->input('id_user_login'));

        UserModel::where('id',$id)->update(['id_status' => 4]);

        session()->flush();
        return redirect('/login');
    }
}
