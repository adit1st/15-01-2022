<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MatakuliahModel;

class Matakuliah extends Component
{
    public function render()
    {
        $data = MatakuliahModel::all()->sortByDesc('kode_program_studi');
        return view('livewire.matakuliah', ['data'=>$data]);
    }
}
