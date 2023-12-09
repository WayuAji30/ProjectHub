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
            $mail->Password = 'qdyq esxm osgz tohu';
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
 
            $mail->Subject = $request->emailSubject;
            $mail->Body    = '<img src="' . asset('assets/img_index/asset/loginandregister/logomobile.svg') . '" alt="Logo" />' .
                '<h1 class="font-semibold text-3xl mt-7">Verifikasi Alamat Email Kamu</h1>' .
                '<p class="mt-3 font-medium text-xl">Untuk melanjutkan ke ProjectHub.id, konfirmasi bahwa ini adalah alamat<br>' .
                'email kamu dengan menekan tombol dibawah.</p>' .
                '<a href="' . $verificationLink . '" class="px-5 py-3 bg-primary-50 text-white rounded-lg mt-5">Verivikasi Email</a>' .
                '<p class="text-light-90 mt-5">Link yang terdapat pada tombol diatas akan expired setelah 1 jam. Jika kamu tidak merasa<br>' .
                'melakukan request, silahkan abaikan email ini.</p>';
 
            // $mail->AltBody = plain text version of email body;
 
            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                return back()->with("success", "Email has been sent.");
            }
 
        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }
}
