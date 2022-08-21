<?php

namespace App\Http\Controllers;

use App\Models\oeuvre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OeuvreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oeuvres = oeuvre::all() ;
        return view('oeuvre/index')->with([
          
            'oeuvres'=>$oeuvres
        ]) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Oeuvre.create');
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
                'name' => 'required',
                'price' => 'required',
                'type' => 'required',
                'file' => 'required',

            ]);
            //dd($request);
            if ($request->hasFile('file')) {
                


                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);
                // ici on va récuperer l'extenssion de la photo (jpg ou png ...) on va l'additioner avec la date (pour avoire un contenue unique) 
                $filename= time() . '.' . $request->file->extension() ;

                //on va l'enregistrer dans kader dans le dossier oeuvre qui est dans le dossier public apres avoir fait le lien synbolique php artisan storage link
               $kader= $request->file->storeAs(
                    'oeuvre',
                    $filename,
                    'public'
                );
        

                // Save the file locally in the storage/public/ folder under a new folder named /oeuvre
              //  $request->file->store('oeuvre', 'public');
                
                // Store the record, using the new file hashname which will be it's new filename identity.
                $oeuvres = new oeuvre([
                    "name" => $request->get('name'),
                    
                    "type" => $request->get('type'),                    
                    "file_path" => $kader ,
                    "price" => $request->get('price'),
                ]);
                
    
                $oeuvres->save(); // Finally, save the record.
            
                return redirect('/oeuvre/create')->with('status', 'felicitation vous avez bien créé un nouvelle ouvrage j\'en suis fiére de vous !');
              //return Redirect::to('/oeuvre/create') ;
    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


