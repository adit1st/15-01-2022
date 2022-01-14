<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle w-full md:w-10/12 xl:w-1/2">

    <form class="bg-white shadow-md rounded">
    <div class="bg-white w-100 p-4 pt-5 pb-2">  
        <div>
            <h1 class="font-bold mb-4 text-center">FORM MATCH</h1>
        </div>

        <input wire:model="postID" type="hidden">
      
        <label class="block text-gray-700 text-sm font-bold mb-2" for="match">
            Match
        </label>
        <input wire:model="match" class="@error('match') border-2 border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
        " id="match" type="text" placeholder="Input Match">
        @error('match')
            <span class="text-red-500">
              <strong>{{ $message }}</strong>
            </span>
        @enderror
      
        <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="competition">
            Competition
        </label>

        <div class="relative inline-block w-full text-gray-700">
        <select wire:model="competition_id" class="@error('competition_id') border-2 border-red-500 @enderror w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline">
          <option value="" class="font-bold">-- Select Competition --</option>
          @foreach ($competitions as $c)
          <option value="{{ $c->id }}">{{ $c->name }}</option>
          @endforeach
        </select>
        @error('competition_id')
            <span class="text-red-500">
              <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        </div>
        
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
      <button wire:click.prevent="store()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm mb-2">
        Save
      </button>
      <button wire:click="hideModal()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm mb-2">
        Cancel
      </button>
    
    </form>
    </div>
    </div>
  </div>
</div>
