<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test(){


        // Storage::disk('local')->put('image.jpg', 'Images');
        // Storage::disk('s3')->put('image.jpg', 'Images');


        // FilesystemReader::directoryExists('Storage\Images')


    }
}
