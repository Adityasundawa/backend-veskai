<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActionController extends Controller
{
    public function unbandiscord(Request $request){
     
        $username = $request->input('username');
        $reason = $request->input('reason');
        $motivation = $request->input('motivation');

        $from = 'mxxpe789456@gmail.com'; // Ganti dengan alamat email pengirim
        $to = 'veskaiprod@gmail.com'; // Ganti dengan alamat email admin atau penerima permintaan unban
        $subject = 'Unban Request';
        $message = "**Username:** $username\n**Reason:** $reason\n**Motivation:** $motivation";

        // Kirim email
        $sent = mail($to, $subject, $message, "From: $from");

        if ($sent) {
            //return "Unban request for user $username has been submitted. We will review your request.";
            return redirect()->back();
        } else {
            return "Failed to submit unban request. Please try again later.";
        }
    }

    public function sendcontact(Request $request){
     
        $username = $request->input('username');
        $reason = $request->input('reason');
        $motivation = $request->input('motivation');

        $from = 'mxxpe789456@gmail.com'; // Ganti dengan alamat email pengirim
        $to = 'veskaiprod@gmail.com'; // Ganti dengan alamat email admin atau penerima permintaan unban
        $subject = 'Contact Mail';
        $message = $message = "**Name:** $username\n**Email:** $reason\n**Message:** $motivation";

        // Kirim email
        $sent = mail($to, $subject, $message, "From: $from");

        if ($sent) {
            //return "Unban request for user $username has been submitted. We will review your request.";
            return redirect()->back();
        } else {
            return "Failed to submit unban request. Please try again later.";
        }
    }
}
