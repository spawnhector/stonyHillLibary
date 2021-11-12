<div>
    <section>
        <div class="bg-black text-white py-20">
            <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
                <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">

                    <div style="position: fixed;right: 2px;top: 2px;">
                        <div class="flex items-center justify-center p-12">
                            
                            <x-modal>
                                <x-slot name="modal_class">
                                    bg-white rounded-md 
                                </x-slot>
                                <x-slot name="btn_tag">
                                    myModal
                                </x-slot>
                                <x-slot name="modal_header">
                                    SHBC.
                                </x-slot>
                                <x-slot name="btn_class">
                                    inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800
                                </x-slot>
                                <x-slot name="button">
                                    Member
                                </x-slot>
                                <x-slot name="content">
                                    @livewire('auth.login', ['type' => 'Member'])
                                </x-slot>
                            </x-modal>
                            <x-modal>
                                <x-slot name="modal_class">
                                    p-5  bg-white rounded-md 
                                </x-slot>
                                <x-slot name="btn_tag">
                                    myModal1
                                </x-slot>
                                <x-slot name="modal_header">
                                    SHBC.
                                </x-slot>
                                <x-slot name="btn_class">
                                    ml-2 inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800
                                </x-slot>
                                <x-slot name="button">
                                    Librarian
                                </x-slot>
                                <x-slot name="content">
                                    @livewire('auth.login', ['type' => 'Librarian'])
                                </x-slot>
                            </x-modal>
                        </div>              
                        </div>
                        
                        <style>
                        .dropdown:focus-within .dropdown-menu {
                        opacity:1;
                        transform: translate(0) scale(1);
                        visibility: visible;
                        }
                            </style>
                    <h1 class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose">TechFest</h1>
                    <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Space : The Timeless Infinity
                    </h2>
                    <p class="text-sm md:text-base text-gray-50 mb-4">Explore your favourite events and
                        register now to showcase your talent and win exciting prizes.</p>
                    <a href="#"
                        class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                        Explore Now</a>
                </div>
                <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
                    <div class="h-48 flex flex-wrap content-center">
                        <div>
                            <img class="inline-block mt-28 hidden xl:block" src="https://user-images.githubusercontent.com/54521023/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png"></div>
                            <div>
                                <img class="inline-block mt-24 md:mt-0 p-8 md:p-0"  src="https://user-images.githubusercontent.com/54521023/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png"></div>
                                <div>
                                    <img class="inline-block mt-28 hidden lg:block" src="https://user-images.githubusercontent.com/54521023/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png"></div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
</div>
