<?php

namespace App\Http\Controllers;

use App\Mail\AccountantMail;
use App\Mail\ContactMail;
use App\Mail\CourseMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function contact_data(Request $request)
    {
        $request->validate([
            'form_name'=>'required',
            'form_email'=>'required',
            'form_Phone'=>'required',
            'form_Subject'=>'required',
            'form_message'=>'required'
        ]);


            Mail::to('jadwa.ps@gmail.com')->send(new ContactMail($request->except('_token') ));


            return redirect()->back()->with('msg', 'send massege successfully')->with('type','success');
    }

    public function course_data(Request $request)
    {

           $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'course'=>'required'
        ]);
            Mail::to('jadwa.ps@gmail.com')->send(new CourseMail($request->except('_token') ));
            return redirect()->back()->with('msg', 'send massege successfully')->with('type','success');
    }

    public function account_data(Request $request)
    {
             $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'expert'=>'required',

        ]);
            Mail::to('jadwa.ps@gmail.com')->send(new AccountantMail($request->except('_token') ));
            return redirect()->back()->with('msg', 'send massege successfully')->with('type','success');
    }



}
