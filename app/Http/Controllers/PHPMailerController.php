<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use App\Models\UserModel;

class PHPMailerController extends Controller
{

    public function composeEmail(Request $request)
    {
        require base_path("vendor/autoload.php");
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

            $mail->addAddress($request->input('email'));
    
            $mail->isHTML(true);

            $user = UserModel::where('email', $request->input('email'))->first();

            if (session('status_halaman') == 'lupa_password') {
                    session(['email_user_ubah_password' => $user->email]);

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
                        return redirect()->to('/verify_email');
                    }

            } else {
                $mail->Subject = "Verifikasi Akun | projecthub.id";
                $mail->Body    = '<a href = "https://mywebsite.com"><img src="https://iili.io/JRfxBYg.png" alt="Logo" style="width:200px;margin-top:30px;"/></a>' .
                    '<h1 style="font-family:sans-serif; font-weight: 700; margin-top: 35px;">Verifikasi Alamat Email Kamu</h1>' .
                    '<p style="font-family:sans-serif; font-size: 16px; font-weight: 500; color: #999;">Untuk melanjutkan ke ProjectHub.id, konfirmasi bahwa ini adalah alamat<br>' .
                    'email kamu dengan menekan tombol dibawah.</p>' .
                    '<form action="http://localhost:8000/activated_user" method = "post">' .
                    '<input type="hidden" name="id" id = "id" value="' . $request->input('id_user') . '">' .
                    '<input type="hidden" name="status_aktivasi" id = "status_aktivasi" value="2">' .
                    '<button style="padding: 14px 0px; margin-top: 30px; width: 220px; border-radius: 10px; border: none; font-size: 18px; font-weight: 500; color: white; background-color: #020179; font-weight: 700;">Verifikasi Email</button>' .
                    '</form>' .
                    '<p style="margin-top: 20px; color: #999; margin-top: 30px; font-family: sans-serif;">Link yang terdapat pada tombol diatas akan expired setelah 1 jam. Jika kamu tidak merasa<br>' .
                    'melakukan request, silahkan abaikan email ini.</p>';

                if (!$mail->send()) {
                    return back()->with("failed", "Email not sent.")->withErrors("Email gagal dikirim");
                } else {
                    return response()->json();
                }
            }
            
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }
}
