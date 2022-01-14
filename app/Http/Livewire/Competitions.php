<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Competition;
use Livewire\WithPagination;

class Competitions extends Component
{
    use WithPagination;
    public $compID, $name, $country;
    public $isOpen = 0;
    public $deleteOpen = 0;
    public $search;
    
    public $paginate=5;

    protected $queryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {    
        return view('livewire.competitions', [
            'competitions' => $this->search === null ?
        Competition::first()->paginate($this->paginate) :
        Competition::first()->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate)]);
    }

    public function showModal()
    {
        $this->isOpen = true;
    }

    public function hideModal()
    {
        $this->isOpen = false;
        $this->name = '';
        $this->country = '';
    }

    public function store()
    {
    $this->validate(
        [
            'name' => 'required',
            'country' => 'required'
        ]
        );

    Competition::updateOrCreate(['id' => $this->compID], [
        'name' => $this->name,
        'country' => $this->country
        ]);

    $this->hideModal();

    session()->flash('info', $this->compID ? 'Competition Update Successfully' : 'Competition Created Successfully');

    $this->compID = '';
    $this->name = '';
    $this->country = '';
    $this->search = '';
    }

    public function edit($id)
    {
        $post = Competition::findOrFail($id);
        $this->compID = $id;
        $this->name = $post->name;
        $this->country = $post->country;

        $this->showModal();
    }

    public function openModalDelete($id)
    {
        $del = Competition::find($id);
        $this->deleteOpen = true;
        $this->del = $del;
  
    }

    public function hideModalDelete()
    {
        $this->deleteOpen = false;
    }

    public function delete($id)
    {
        Competition::find($id)->delete();
        session()->flash('delete', 'Competition Deleted Successfully');
        $this->hideModalDelete();
        $this->search = '';
        $this->del = '';
    }

    public function closeAlert()
    {
        session()->flash('');
    }
}
