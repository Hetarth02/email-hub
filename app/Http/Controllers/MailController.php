<?php

namespace App\Http\Controllers;

use Throwable;
use App\Mail\EmailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $input = $request->all();
        try {
            Mail::to($input['email_to'])
                ->cc($input['email_cc'] ?? null)
                ->bcc($input['email_bcc'] ?? null)
                ->send(new EmailTemplate($input));
            return response()->json([
                'status' => true,
                'message' => 'Email sent Successfully!'
            ]);
        } catch (Throwable $error) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong, please try again!'
            ]);
        }
    }
}
