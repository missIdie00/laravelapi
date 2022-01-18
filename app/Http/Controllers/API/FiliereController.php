<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseControllerController;
use App\Http\Resources\Filiere as ResourcesFiliere;
use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends BaseController
{
    
    //fonction index
    public function index()
    {
        $blogs = Filiere::all();
        return $this->sendResponse(ResourcesFiliere::collection($blogs), 'Posts fetched.');
    }

    //fonction store
    public function store(Request $request)
    {
        $request->validate( [
            'libelle' => 'required'
        ]);
        
        $blog = new Filiere();
        $blog->libelle=$request->libelle;
        $blog->save();

    }

   //fonction show
    public function show($id)
    {
        $blog = Filiere::find($id);
        if (is_null($blog)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new ResourcesFiliere($blog), 'Post fetched.');
    }
    
   //fonction update
    public function update(Request $request)
    {
        
        $request->validate( [
            'libelle' => 'required'
        ]);
        $blog=Filiere::find($request->id);
        $blog->libelle=$request->libelle;
        $blog->update();
        
        return $this->sendResponse(new ResourcesFiliere($blog), 'Post updated.');
    }
   
    //function delete
    public function destroy(Filiere $blog)
    {
        $blog->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}
