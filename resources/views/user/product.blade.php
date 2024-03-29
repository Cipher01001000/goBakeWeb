<x-layouts.app-layout title="| Product">

    <div class="flex flex-row justify-center gap-5">

        {{-- product --}}
        <div class="p-10 shadow-lg rounded-lg flex flex-row w-fit">
            
            {{-- product_image --}}
            <div class="flex flex-col">
                <div class="">
                    <img
                        src="{{ $product->product_image ? asset('storage/' . $product->product_image) : asset('images/no-image.jpg') }}"
                        class="h-96 w-96 object-cover rounded-lg"/>
                </div>

                <div class="flex flex-row justify-center items-center gap-5 pt-5">

                    <div class="">
                        <img
                        src="https://images.unsplash.com/photo-1593187623747-7ea827ad1013?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8c3RyYWJlcnJ5JTIwY3VwY2FrZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
                        class="h-20 w-20 object-cover rounded-lg"/>
                    </div>

                    <div class="">
                        <img
                        src="https://images.unsplash.com/photo-1519869325930-281384150729?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHN0cmFiZXJyeSUyMGN1cGNha2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"
                        class="h-20 w-20 object-cover rounded-lg"/>
                    </div>

                    <div class="">
                        <img
                        src="https://images.unsplash.com/photo-1587668178277-295251f900ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8c3RyYWJlcnJ5JTIwY3VwY2FrZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
                        class="h-20 w-20 object-cover rounded-lg"/>
                    </div>

                    <div class="">
                        <img
                        src="https://images.unsplash.com/photo-1576618148400-f54bed99fcfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                        class="h-20 w-20 object-cover rounded-lg"/>
                    </div>
                </div>

            </div>

            {{-- product_review --}}
            <div class="flex flex-row">
                <div class="flex flex-col">
                    {{-- user_info --}}
                    <div class="flex flex-row justify-center items-center">
                        <img
                            src="https://images.unsplash.com/photo-1576579639123-1610ff48f5cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            class="h-16 w-16 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700"/>
                        <div class="flex flex-col pl-2">
                            <h1 class="text-gray-700 font-bold text-lg">Muhammad Avdol</h1>
                            <span class="text-gray-500">Stand user of Magician's Red</span>
                        </div>
                    </div>

                    {{-- user_comment --}}
                    <p class="text-gray-700 px-10 py-5 w-96">
                        "Tsk Tsk Tsk Tsk Tsk Tsk, Yesssssss, I am!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, libero laborum molestiae ad maxime, cum nostrum sequi perspiciatis architecto quisquam aliquam beatae"
                    </p>

                    {{-- product_rating --}}
                    <div class="px-10 flex items-center gap-0">
                        <i class="material-icons text-amber-600">star</i>
                        <i class="material-icons text-amber-600">star</i>
                        <i class="material-icons text-amber-600">star</i>
                        <i class="material-icons text-amber-600">star</i>
                        <i class="material-icons text-amber-600">star_outline</i>
                        <div class="h1 text-cyan-600 pl-2">Ratings</div>
                    </div>
                    <hr>
                    <div class="text-gray-700 pt-5 pl-10">{{ $product->name }}</div>
                    <hr>
                    <div class="flex flex-row pt-5 pl-10 text-gray-700">
                        <h1>₱</h1>
                        <h1 class="product_price pl-1">{{ $product->price }}</h1> 
                    </div>
                    <hr>
                    <div class="text-gray-700 pt-5 pl-10 w-96">{{ $product->description }}</div>
                    <hr>
                    <div class="text-gray-700 font-lg pt-5 pl-10">Variations</div>
                    <div class="flex flex-row justify-start pl-10 pt-3 gap-3">
                        <div class="bg-gray-500 w-14 h-14 rounded-sm shadow-lg"></div>
                        <div class="bg-blue-500 w-14 h-14 rounded-sm shadow-lg"></div>
                        <div class="bg-yellow-500 w-14 h-14 rounded-sm shadow-lg"></div>
                        <div class="bg-orange-500 w-14 h-14 rounded-sm shadow-lg"></div>
                    </div>
                    <div class="flex flex-row gap-3 pl-10 mt-5">

                        <form action="/add_to_cart" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button
                                class="flex select-none items-center gap-3 rounded-lg border border-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="submit"
                                data-ripple-dark="true">
                                Add to cart
                                <i class="material-icons ml-3">add_shopping_cart</i>
                            </button>
                        </form>

                        <a 
                        class="middle none center rounded-lg bg-pink-500 py-4 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true"
                        href="/buyNow/{{ $product->id }}"
                        type="button"
                        >
                        Buy now
                        </a>
                        
                    </div>
                </div>
            
            </div>

        </div>

        {{-- side bar --}}
        <div class="flex flex-col">

            {{-- preview --}}
            <div class="shadow-lg p-10 rounded-lg">

                <h1 class="text-lg font-bold text-gray-700">Preview</h1>

                <div class="flex flex-row pt-3">
                    <h1 class="text-gray-500 pr-2">Shipping to:</h1>
                    <h1 class="text-gray-700">Agartha, Center Earth, Milky Way</h1>
                </div>

                <div class="flex flex-row pt-3">
                    <h1 class="text-gray-500 pr-2">Shipping fee:</h1>
                    <h1 class="text-gray-700 pr-1">₱</h1>
                    <h1 class="text-gray-700">56.00</h1>
                </div>

            </div>
            
            {{-- shop detail --}}
            <div class="shadow-lg p-8 mt-5 rounded-lg">

                <div class="flex flex-row items-center">
                    <img
                        src="https://images.unsplash.com/photo-1564591111131-dbdb2571cfb5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                        class="h-20 w-20 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700" 
                        data-popover-target="profile-menu"/>
                        <h1 class="font-bold pl-3 text-lg text-gray-800">{{ $product->user_id }} Shop Name</h1>
                        <hr>
                </div>
                
                <h1 class="text-gray-700 py-5">Shop Rating</h1>

                <div class="flex items-center gap-0">
                    
                    <i class="material-icons text-amber-600">star</i>
                    <i class="material-icons text-amber-600">star</i>
                    <i class="material-icons text-amber-600">star</i>
                    <i class="material-icons text-amber-600">star_half</i>
                    <i class="material-icons text-amber-600">star_outline</i>

                    <div class="h1 text-cyan-600 pl-2">66.66%</div>
                    <hr>
                </div>

                 <div class="flex flex-row p-10">

                    <button
                        class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-dark="true">
                        Chat now
                    </button>

                    <a
                        class="middle none center mr-3 rounded-lg border border-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-dark="true"
                        href="{{ url('/seller_shop') }}">
                        Visit Store
                    </a>

                 </div>

            </div>

        </div>
        

    </div>

    @push('scripts')
        
    @endpush

</x-layouts.app-layout>