<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle w-full md:w-10/12 xl:w-1/2">

    <form class="bg-white shadow-md rounded">
    <div class="bg-white w-100 p-4 pt-5 pb-2">  
        <div>
            <h1 class="font-bold mb-4 text-center">FORM COMPETITIONS</h1>
        </div>

        <input wire:model="compID" type="hidden">
      
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Name
        </label>
        <input wire:model="name" class="@error('name') border-2 border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Input Name">
        @error('name')
            <span class="text-red-500">
              <strong>{{ $message }}</strong>
            </span>
        @enderror
      
        <label class="mt-4 block text-gray-700 text-sm font-bold mb-2" for="country">
            Country
        </label>
        <input wire:model="country" class="@error('country') border-2 border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="country" type="text" placeholder="Input Country">
        @error('country')
            <span class="text-red-500">
              <strong>{{ $message }}</strong>
            </span>
        @enderror
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
