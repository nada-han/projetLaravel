<?php

namespace App\Http\Controllers\Admin;
use App\Models\salle;
use App\Models\machine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // ajout de la classe DB

class DashboardController extends Controller
{
    public function index()
    {   
        $totalSalles= Salle::count();
        $totalMachines= Machine::count();
        $salleCode = Salle::pluck('id');
      
        $machinesParSalle = DB::table('machine')
            ->select('salleid', DB::raw('count(*) as total'))
            ->groupBy('salleid')
            ->pluck('total', 'salleid');


        return view('admin.statistique.index',compact('totalSalles','totalMachines','machinesParSalle','salleCode')); // correction de la variable machinesParSalle
    }
}