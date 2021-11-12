<div>
    {{$result}}
    <div>
        <div class="mt-1">
            <input wire:model="name" placeholder="Member Name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mt-1">
            <input wire:model="email" type="email" placeholder="Email" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mt-1">
            <input wire:model="password" type="password" placeholder="Password" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>
    </div>
    <button wire:click="addMember()" type="submit" class="inline-flex items-center justify-center px-4 py-1 space-x-1 bg-red-500 text-white rounded-md shadow animate-bounce hover:bg-red-600" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">Add Member</button>
</div>
