<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;


class ContactUsFormController extends Controller
{

    public function Portfolio(Request $request) {
        seo()
        ->title('AlienDev | Web Development tutorials')
        ->rawTag('<meta name="keywords" content="AlienDev, Alien Dev, Laravel, Laravel Tutorial For Beginners, TailwindCSS Tutorial For Beginners, web development" />')
        ->description('AlienDev here you can improve your programming skills')
        ->url(url()->current())
        ->image(URL('/images/alien.png'))
        ->locale('en_US')
        ->twitterCreator('Bahaedd97952415')
        ->twitterSite('Bahaedd97952415')
        ->twitterTitle('AlienDev | Web Development tutorials')
        ->twitterDescription('AlienDev here you can improve your programming skills')
        ->twitterImage(URL('/images/alien.png'));
        return view("blog.portfolio", compact("categories"));
    }

    public function ContactPage(Request $request) {

        return view("blog.contact");
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
