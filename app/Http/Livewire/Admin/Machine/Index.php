<?php

namespace App\Http\Livewire\Admin\Machine;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Machine;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $machine_id;

    // public function deleteSalle($salle_id)
    // {
    //     $this->salle_id = $salle_id;
    // }

    // public function destroySalle()
    // {
    //     $salle = Salle::find($this->salle_id);
    //     $salle->delete();
    //     session()->flash('message', 'Salle supprimée');
    // }

    public function render()
    {
        $machines= Machine::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.machine.index', ['machines' => $machines]);
    }
}