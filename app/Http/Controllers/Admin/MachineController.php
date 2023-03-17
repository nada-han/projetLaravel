<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Machine;
use Illuminate\Http\Request;
use App\Http\Requests\MachineFormRequest;

class MachineController extends Controller
{
    public function index()
    {
        return view('admin.machine.index');
    }

    public function create()
    {
        return view('admin.machine.create');
    }

    public function store(MachineFormRequest $request)
    {
        $validatedData = $request->validated();
        $machine = new Machine;
        $machine->reference = $validatedData['reference'];
        $machine->marque = $validatedData['marque'];
        $machine->dateAchat = $validatedData['dateAchat'];
        $machine->prix = $validatedData['prix'];
        $machine->salleid = $validatedData['salleid'];
        $machine->save();

        return redirect('admin/machine')->with('message', 'Machine ajoutee avec succes');


    }

    public function update(MachineFormRequest $request,$machine)
    {
        $validatedData = $request->validated();
        
        $machine = machine::findOrFail($machine);
        
        $machine->reference = $validatedData['reference'];
        $machine->marque = $validatedData['marque'];
        $machine->dateAchat = $validatedData['dateAchat'];
        $machine->prix = $validatedData['prix'];
        $machine->salleid = $validatedData['salleid'];
        $machine->update();

        return redirect('admin/machine')->with('message','machine est modifiee avec succes');
           
    }

    public function edit($machine)
{
    $machine = Machine::findOrFail($machine);
    return view('admin.machine.edit', compact('machine'));
}
}