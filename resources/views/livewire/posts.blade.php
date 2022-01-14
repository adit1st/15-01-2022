<div class="grid grid-cols-6 gap-4">
<div class=" mt-5 col-start-1 col-span-6 xl:col-start-2 xl:col-span-4">

  @if(session()->has('info'))
    <div class="bg-green-400 text-white font-bold mb-3 border px-4 py-3 rounded relative" role="alert">
      <span class="block sm:inline">{{ session('info'); }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg wire:click="closeAlert()" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
  @endif

  @if(session()->has('delete'))
    <div class="bg-red-400 text-white font-bold mb-3 border px-4 py-3 rounded relative" role="alert">
      <span class="block sm:inline">{{ session('delete'); }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg wire:click="closeAlert()" class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
  @endif

  <div class="grid grid-cols-3">
   <div class="font-black col-start-1 self-center justify-self-start">
    <button wire:click="showModal()" class="font-black ml-3 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full mb-3">
    +
    </button>
    @if ($isOpen)
      @include('livewire.create')
    @endif
  </div>

  <div class="col-start-2 col-span-2 justify-self-start md:justify-self-end">
    <input class="rounded-full mb-3 w-11/12" type="text" wire:model="search" placeholder="Search Match" aria-label="search">
  </div>

  <div class="col-start-4 justify-self-end w-full text-gray-700">
  <select wire:model="paginate" class="mr-3 px-5 xl:px-7 py-2 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline rounded-full">
    <option value="5">5</option>
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="25">25</option>
    <option value="50">50</option>
  </select>
  </div>
  </div>

<table class="table-fixed w-full overflow-hidden shadow sm:rounded-lg">
  <thead class="bg-blue-400 h-10">
    <tr>
      <th class="w-12 text-white">No</th>
      <th class="text-white">Match</th>
      <th class="text-white">Competition</th>
      <th class="text-white">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    @forelse ($posts as $p)
    <tr>
      <td class="py-4 text-center">{{ $i }}</td>
      <td class="text-center">{{ $p->match }}</td>
      <td class="text-center">{{ $p->competition->name }}</td>
      <td class="text-center">
        <button wire:click="edit({{$p->id}})" class="mt-1 mb-1 bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded-full">
          Edit
        </button>
        <button wire:click="openModalDelete({{$p->id}})" class="mt-1 mb-1 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 rounded-full">
          Delete
        </button>
        @if ($deleteOpen)
          @include('livewire.delete')
        @endif
      </td>
    </tr>
    <?php $i++ ?>
    @empty
    <div class="bg-red-400 mb-3 rounded">
        <h1 class="py-3 px-3 font-bold text-white">Match Not Found</h1>
    </div>
    @endforelse
  </tbody>
</table>
<div class="mt-3">
{{ $posts->links() }}
</div>
</div>
</div>