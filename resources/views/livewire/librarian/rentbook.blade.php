<div>
    @if ($member)
        @if ($book)
            {{$result}}
            <div>
                <div class="mt-1">
                    <input wire:model="return_date" type="date" placeholder="Return Date" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    @error('return_date') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <button wire:click="rentBook()" type="submit" class="inline-flex items-center justify-center px-4 py-1 space-x-1 bg-red-500 text-white rounded-md shadow animate-bounce hover:bg-red-600" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">Add Book</button>
        @else
            <p>Please Select Book</p>
            <div class="relative inline-flex">
                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                <select wire:model="book" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                <option>Book</option>
                @if ($this->getBook())
                    @foreach ($this->getBook() as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                @endif
                </select>
            </div>
        @endif
    @else
        <p>Please Select Member</p>
        <div class="relative inline-flex">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
            <select wire:model="member" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
            <option>Member</option>
            @if ($this->getMember())
                @foreach ($this->getMember() as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            @endif
            </select>
        </div>
    @endif
</div>
