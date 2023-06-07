<div class="content justify-center items-center hidden" id="shopping_cart">
            
    <table class="flex justify-center items-center">
        <tr class="shadow-md">
            <th class="font-thin ">Products</th>
            <th class="font-thin ">Price</th>
            <th class="font-thin ">Quantity</th>
            <th class="font-thin ">Subtotal</th>
            <th class="font-thin ">Cart Total</th>
        </tr>
        <tr>
            {{-- products --}}
            <th class="flex flex-row justify-center items-center p-5">

                <i class="material-icons text-gray-700 p-5">cancel</i>
                <img src="https://images.unsplash.com/photo-1588195538326-c5b1e9f80a1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1050&q=80" alt="order-item1"
                class="w-28 rounded-md">

                <div class="flex flex-col p-3">
                    {{-- product-name --}}
                    <div class="flex flex-row items-center">
                        <h1 class="font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Product Name:&nbsp;
                        </h1>
                        <p class="font-sans text-start text-sm leading-relaxed text-gray-700 antialiased">
                            American Heritage Chocolate
                        </p>
                    </div>
                    {{-- costumization --}}
                    <div class="flex flex-row items-center">
                        <h1 class="font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Color:&nbsp;
                        </h1>
                        <p class="font-sans text-start text-sm leading-relaxed text-gray-700 antialiased">
                            Black
                        </p>
                    </div>
                    {{-- address --}}
                    <div class="flex flex-row items-center">
                        <h1 class="font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Ships from:&nbsp;
                        </h1>
                        <p class="font-sans text-start text-sm leading-relaxed text-gray-700 antialiased">
                            San Vicente West, Urdaneta City
                        </p>
                    </div>

                    <div class="flex flex-row gap-3 mt-5">

                        <button
                            class="flex select-none items-center gap-3 rounded-lg border border-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:opacity-75 focus:ring focus:ring-pink-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button"
                            data-ripple-dark="true"
                            >
                            <i class="material-icons">arrow_back</i>
                            Continue Shopping
                        </button>
                        <button
                            class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true"
                            >
                            Update Cart
                        </button>
    
                    </div>

                </div>



            </th>

            {{-- price --}}
            <th>
                
                <div class="flex flex-row items-center p-3">
                    <h1 class="font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                        ₱&nbsp;
                    </h1>
                    <p class="font-sans text-start text-sm leading-relaxed text-gray-700 antialiased">
                        566.66
                    </p>
                </div>

            </th>

            {{-- quantity --}}
            <th>
                <div class="p-3">
                    <div class="relative h-10 w-16">

                        <input
                        class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                        placeholder=" " value="1" type="number"/>
                        
                        <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Quantity
                        </label>

                    </div>
                </div>
            </th>

            {{-- subtotal --}}
            <th>

                <div class="flex flex-row items-center p-3">
                    <h1 class="font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                        ₱&nbsp;
                    </h1>
                    <p class="font-sans text-start text-sm leading-relaxed text-gray-700 antialiased">
                        666.66
                    </p>
                </div>
                
            </th>
            
            {{-- cart totals --}}
            <th>
                
                <div class="flex flex-col">
                    
                    {{-- subtotal --}}
                    <div class="flex flex-row items-center gap-60 p-3 w-96">
                        <h1 class="w-56 font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Subtotal
                        </h1>
                        <div class="flex flex-row items-center  p-3">
                            <h1 class="font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                                ₱&nbsp;
                            </h1>
                            <p class="font-sans text-start text-sm leading-relaxed text-gray-700 antialiased">
                                566.66
                            </p>
                        </div>
                    </div>
                    <hr>

                    {{-- Shipping --}}
                    <div class="flex flex-row items-center p-3 gap-40 w-96">
                        <h1 class="font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Shipping
                        </h1>
                        <div class="flex flex-col">
                            <p class="font-sans text-sm leading-relaxed text-gray-700 antialiased">
                                Free shipping
                            </p>
                            <p class="font-sans text-sm leading-relaxed text-gray-700 antialiased">
                                Shiping to location
                            </p>
                            <a class="font-sans text-sm leading-relaxed text-blue-500 antialiased"
                            href="#">
                                Change address
                            </a>
                        </div>
                    </div>
                    <hr>

                    {{-- tax --}}
                    <div class="flex flex-row items-center gap-60 p-3 w-96">
                        <h1 class="w-64 text-start font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Tax
                        </h1>
                        <div class="flex flex-row items-center  p-3">
                            <h1 class="font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                                ₱&nbsp;
                            </h1>
                            <p class="font-sans text-start text-sm leading-relaxed text-gray-700 antialiased">
                                50
                            </p>
                        </div>
                    </div>
                    <hr>
                    
                    {{-- total --}}
                    <div class="flex flex-row items-center gap-60 p-3 w-96">
                        <h1 class="w-64 text-start font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Total
                        </h1>
                        <div class="flex flex-row items-center  p-3">
                            <h1 class="font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
                                ₱&nbsp;
                            </h1>
                            <p class="font-sans text-start text-sm leading-relaxed text-gray-700 antialiased">
                                666.66
                            </p>
                        </div>
                    </div>
                    <hr>

                    <button
                        class="middle none center w-full rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true">
                        Proceed Checkout
                    </button>

                </div>

            </th>
        </tr>

    </table>
</div>