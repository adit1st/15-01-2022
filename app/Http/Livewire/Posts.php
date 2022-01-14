<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Competition;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    public $postID, $match, $competition_id;
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
        $this->competitions = Competition::all();
        return view('livewire.posts', [
            'posts' => $this->search === null ?
        Post::first()->paginate($this->paginate) :
        Post::first()->where('match', 'like', '%' . $this->search . '%')->paginate($this->paginate)]);;
    }
        
    public function showModal()
    {
        $this->isOpen = true;
    }

    public function hideModal()
    {
        $this->isOpen = false;
        $this->match = '';
        $this->competition_id = '';
    }

    public function store()
    {
        $this->validate(
            [
                'match' => 'required',
                'competition_id' => 'required'
            ]
            );

        Post::updateOrCreate(['id' => $this->postID], [
            'match' => $this->match,
            'competition_id' => $this->competition_id
            ]);

        $this->hideModal();

        session()->flash('info', $this->postID ? 'Match Update Successfully' : 'Match Created Successfully');

        $this->postID = '';
        $this->match = '';
        $this->competition_id = '';
        $this->search = '';
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->postID = $id;
        $this->match = $post->match;
        $this->competition_id = $post->competition_id;

        $this->showModal();
    }

    public function openModalDelete($id)
    {
        $del = Post::find($id);
        $this->deleteOpen = true;
        $this->del = $del;
  
    }

    public function hideModalDelete()
    {
        $this->deleteOpen = false;
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('delete', 'Match Deleted Successfully');
        $this->hideModalDelete();
        $this->search = '';
        $this->del = '';
    }

    public function closeAlert()
    {
        session()->flash('');
    }
}
