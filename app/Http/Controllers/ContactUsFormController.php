<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;


class ContactUsFormController extends Controller
{

    public function Portfolio(Request $request) {
        $categories = Category::all();
        return view("blog.portfolio", compact("categories"));
    }

    public function ContactPage(Request $request) {
        $categories = Category::all();
        return view("blog.contact", compact("categories"));
    }

    public function Contact(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);
        //  Store data in database
        Contact::create($request->all());
        // send mail
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'messages' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('bahaeddine@aliendev.org', 'AlienDev')->subject($request->get('name'));
        });
        return back()->with('success', 'I have received your message and would like to thank you for writing to us.');
    }
}
