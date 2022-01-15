<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MahasiswaModel;

class Mahasiswa extends Component
{

    public function render()
    {
        $data = MahasiswaModel::all()->sortByDesc('program_studi_kode');
        return view('livewire.mahasiswa', ['data'=>$data]);
        //     'posts' => $this->search === null ?
        // Post::first()->paginate($this->paginate) :
        // Post::first()->where('nim', 'like', '%' . $this->search . '%')->paginate($this->paginate)]);;
    }
    
}
