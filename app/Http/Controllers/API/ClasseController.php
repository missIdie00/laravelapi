<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController;
use App\Http\Resources\Classe as ResourcesClasse;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends BaseController
{
    //fonction index
    public function index()
    {
        $blogs = Classe::all();
        return $this->sendResponse(ResourcesClasse::collection($blogs), 'Posts fetched.');
    }

    //fonction store
    public function store(Request $request)
    {
        $request->validate( [
            'libelle' => 'required',
            'droit_ins' => 'required',
            'mensualite' => 'required',
            'autre_frais' => 'required',
            'filiere_id'=>'required'
        ]);
        
        $blog = new Classe();
        $blog->libelle=$request->libelle;
        $blog->droit_ins=$request->droit_ins;
        $blog->mensualite=$request->mensualite;
        $blog->autre_frais=$request->autre_frais;
        $blog->filiere_id=$request->filiere_id;
        $blog->save();

    }

   //fonction show
    public function show($id)
    {
        $blog = Classe::find($id);
        if (is_null($blog)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new ResourcesClasse($blog), 'Post fetched.');
    }
    
   //fonction update
    public function update(Request $request)
    {
        
        
        $request->validate( [
            'libelle' => 'required',
            'droit_ins' => 'required',
            'mensualite' => 'required',
            'autre_frais' => 'required',
            'filiere_id'=>'required'
        ]);
        $blog=Classe::find($request->id);
        $blog->libelle=$request->libelle;
        $blog->droit_ins=$request->droit_ins;
        $blog->mensualite=$request->mensualite;
        $blog->autre_frais=$request->autre_frais;
        $blog->filiere_id=$request->filiere_id;
        $blog->update();
        
        return $this->sendResponse(new ResourcesClasse($blog), 'Post updated.');
    }
   
    //function delete
    public function destroy($id)
    {
        $blog=Classe::find($id);
        $blog->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}
