<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\salle;
use Illuminate\Http\Request;
use App\Http\Requests\SalleFormRequest;

class SalleController extends Controller
{
    public function index()
    {
        return view('admin.salle.index');
    }

    public function create()
    {
        return view('admin.salle.create');
    }

    public function store(SalleFormRequest $request)
    {
        $validatedData = $request->validated();

        $salle = new salle;
        $salle->code = $validatedData['code'];
        $salle->libelle = $validatedData['libelle'];
        $salle->save();

        return redirect('admin/salle')->with('message','Salle est ajoutee avec succes');
           
    }

    public function edit(salle $salle)
    {
        return view('admin.salle.edit',compact('salle'));
    }

    public function update(SalleFormRequest $request,$salle)
    {
        $validatedData = $request->validated();
        
        $salle = salle::findOrFail($salle);
        
        $salle->code = $validatedData['code'];
        $salle->libelle = $validatedData['libelle'];
        $salle->update();

        return redirect('admin/salle')->with('message','Salle est modifiee avec succes');
           
    }

}
