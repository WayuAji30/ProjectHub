<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;    
use PHPMailer\PHPMailer\Exception;

class PHPMailerController extends Controller
{

    public function composeEmail(Request $request) {
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
            //$mail->addCC($request->emailCc);
            //$mail->addBCC($request->emailBcc);
            //$mail->addReplyTo('sender@example.com', 'SenderReplyName');
 
            /*
            if(isset($_FILES['emailAttachments'])) {
                for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                }
            }
            */
 
            $mail->isHTML(true);
 
            $mail->Subject = "Verifikasi Akun | projecthub.id";
            $mail->Body    = '<img src="' . asset('assets/img_index/asset/loginandregister/logomobile.svg') . '" alt="Logo" />' .
                '<h1 class="font-semibold text-3xl mt-7">Verifikasi Alamat Email Kamu</h1>' .
                '<p class="mt-3 font-medium text-xl">Untuk melanjutkan ke ProjectHub.id, konfirmasi bahwa ini adalah alamat<br>' .
                'email kamu dengan menekan tombol dibawah.</p>' .
                '<form action="http://localhost:8000/activated_user" method = "post">'.
                '<input type="hidden" name="id" id = "id" value="'.$request->input('id').'">'.
                '<input type="hidden" name="status_aktivasi" id = "status_aktivasi" value="active">'.
                '<button href="" class="px-5 py-3 bg-primary-50 text-white rounded-lg mt-5">Verifikasi Email</button>' .
                '</form>'.
                '<p class="text-light-90 mt-5">Link yang terdapat pada tombol diatas akan expired setelah 1 jam. Jika kamu tidak merasa<br>' .
                'melakukan request, silahkan abaikan email ini.</p>';
 
            // $mail->AltBody = plain text version of email body;
 
            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }else {
                return redirect()->to('https://mail.google.com/mail/u/0/#inbox');
            }
 
        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }
}
