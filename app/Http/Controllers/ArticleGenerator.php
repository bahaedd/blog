<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use OpenAI;

class ArticleGenerator extends Controller
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
        
        if ($input->title == null) {
            return;
        }

        $title = $input->title;

        $client = OpenAI::client(env('OPENAI_API_KEY'));
        
        $result = $client->completions()->create([
            "model" => "text-davinci-003",
            "temperature" => 0.7,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0,
            'max_tokens' => 600,
            'prompt' => sprintf('Write article about: %s', $title),
        ]);

        $content = trim($result['choices'][0]['text']);

        return view('blog.tools.writebot', compact('title', 'content'));
    }
}
