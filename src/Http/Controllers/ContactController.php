<?php

namespace Eftia\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Eftia\Contact\Mail\ContactMailable;
use Eftia\Contact\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller{
    public function index(){
        return view('contact::contact');
    }
    public function store(Request $request){
        try{
            Contact::create($request->all());
            Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message, $request->name));
            return back()->with('success','Message has been sended successfully.');
        }catch(Exception $e){
            return back()->with('error','Message not sended.');

        }
    }
}