<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function downloadimage(){

        return response()->download(public_path('asx.jpg'),'natural');
    }

    public function uploadimage(Request $request){

        $fileName = "natural";
        $path = $request->file('photo') -> move(public_path("/"), $fileName);
        $photoURL = url('/'.$fileName);
        return response()->json(['url' => $photoURL],200);
    }
}
