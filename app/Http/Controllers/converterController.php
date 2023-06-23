<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class converterController extends Controller
{
    public function index(Request $input)
    {
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



        return view('blog.toolsv2.converter');
    }

    public function imageConverter() {

        $hidden = 'hidden';
        return view("blog.toolsv2.image-converter", compact('hidden'));
    }


    public function ConvertImage() {

        $hidden = 'hidden';
        return view("blog.toolsv2.image-converter", compact('hidden'));
    }
}
