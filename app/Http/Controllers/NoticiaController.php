<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = DB::table('noticias')->orderBy('id')->get();
        
        return view('admin.noticias.index', ['noticias' => $noticias]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'detail' => 'required'
        ]);
        
        $noticia = new Noticia();
        if (Noticia::Create($request->all())) {
            return redirect()->route('news.list')->with('message','New created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        return view('admin.noticias.edit', ['noticia' => $noticia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
      
        
        $noticia =Noticia::findOrFail($noticia->id);
        
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'detail' => 'required',
            'link' =>'nullable'
        ]);
        
        
        
        $noticia->update($validatedData);
        
        return redirect()->route('news.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
//         $survey= DB::table('surveys')->find($id);
//         Storage::disk('public')->delete($survey->admin_image);
//         DB::table('surveys')->where('id', '=', $id)->delete();
//         return redirect()->route('survey.list')->with('message','Survey deleted');
    }
    
    public function image(Noticia $noticia){
       
        return view('admin.noticias.image', compact('noticia'));
        
    }
    public function imageStore(Request $request, $id)
    {
        $request->validate([
            
            'image_header'     =>  'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        $path = $request->file('image_header')->store('news_images','public');
        
        DB::table('noticias')
        ->where('id', $id)
        ->update(['image_header' => $path]);
        return redirect()->route('news.list')->with('message','Image uploaded');
    }
    
    public function imageDestroy(Noticia $noticia){
        //$noticia= DB::table('noticias')->find($id);
        Storage::disk('public')->delete($noticia->image_header);
        DB::table('noticias')
        ->where('id', $noticia->id)
        ->update(['image_header' => NULL]);
        return redirect()->route('news.image',[$noticia]);
        
        
        
    }
}
