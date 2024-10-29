<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class MediaController extends Controller
{
    public function index()
    {
        //$noticias = DB::table('noticias')->orderBy('id')->get();
        
        return view('admin.media.index');
        
    }
    
    public function store(Request $request){
        
        $media=$request->file('file');
        
        if (!is_array($media)) {
            $media = [$media];
        }
        
        for ($i = 0; $i < count($media); $i++) {
            $med = $media[$i];
           
            $med->store('media_images','public');
        }
        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
        
//         $request->validate([
            
//             'image_header'     =>  'required|image|mimes:jpeg,png,jpg,gif'
//         ]);
//         $path = $request->file('image_header')->store('news_images','public');
        
//         DB::table('noticias')
//         ->where('id', $id)
//         ->update(['image_header' => $path]);
//         return redirect()->route('news.list')->with('message','Image uploaded');
    }
}
