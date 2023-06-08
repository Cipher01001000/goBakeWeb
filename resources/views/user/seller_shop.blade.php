<x-layouts.app-layout title="| Seller_shop">
    
    {{-- container --}}
    <div class="flex flex-row">

        {{-- side_bar --}}
        <div class="flex flex-col p-8">

            {{--shop_name --}}
            <div class="flex flex-row justify-center items-center">
                <img
                    src="https://images.unsplash.com/photo-1564591111131-dbdb2571cfb5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                    class="h-24 w-24 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700" 
                    data-popover-target=" "/>
                    <h1 class="font-bold pl-3 text-lg text-gray-800">Shop Name</h1>
                    <hr>
            </div>

            {{-- shop_content --}}
            <div class="pt-8">
                <div class="flex flex-row">
                    <i class="material-icons text-gray-600">inventory_2</i>
                    <h1 class="font-bold text-gray-900 pl-2">Products:</h1>
                    <p class="text-gray-700 pl-1">666</p>
                </div>
                <div class="flex flex-row pt-5">
                    <i class="material-icons text-gray-600">star</i>
                    <h1 class="font-bold text-gray-900 pl-2">Rating:</h1>
                    <p class="text-gray-700 pl-1">69.21%</p>
                </div>
                <div class="flex flex-row pt-5">
                    <i class="material-icons text-gray-600">calendar_today</i>
                    <h1 class="font-bold text-gray-900 pl-2">Joined:</h1>
                    <p class="text-gray-700 pl-1">06/07/2023</p>
                </div>
            </div>
        </div>

        {{-- tabs --}}
        <div class="w-2/3 p-8">
            <div class="relative right-0">
              <ul
                class="relative flex list-none flex-wrap rounded-xl bg-blue-gray-50/60 p-1"
                data-tabs="tabs"
                role="list"
              >
                <li class="z-30 flex-auto text-center">
                  <a
                    class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                    data-tab-target=""
                    active=""
                    role="tab"
                    aria-selected="true"
                    aria-controls="home"
                  >
                    <span class="ml-1">Home</span>
                  </a>
                </li>
                <li class="z-30 flex-auto text-center">
                  <a
                    class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                    data-tab-target=""
                    role="tab"
                    aria-selected="false"
                    aria-controls="all_products"
                  >
                    <span class="ml-1">All products</span>
                  </a>
                </li>
                <li class="z-30 flex-auto text-center">
                  <a
                    class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                    data-tab-target=""
                    role="tab"
                    aria-selected="false"
                    aria-controls="category_1"
                  >
                    <span class="ml-1">Category 1</span>
                  </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a
                      class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                      data-tab-target=""
                      role="tab"
                      aria-selected="false"
                      aria-controls="category_2"
                    >
                      <span class="ml-1">Category 2</span>
                    </a>
                  </li>
                  <li class="z-30 flex-auto text-center">
                    <a
                      class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                      data-tab-target=""
                      role="tab"
                      aria-selected="false"
                      aria-controls="category_3"
                    >
                      <span class="ml-1">Category 3</span>
                    </a>
                  </li>
              </ul>

              {{-- home --}}
              <div data-tab-content="" class="p-5">
                <div class="block opacity-100" id="home" role="tabpanel">

                    {{-- shop_header --}}
                    <div class="bg-gray-300 p-8 rounded-lg">
                        <img
                            src="https://images.unsplash.com/photo-1564591111131-dbdb2571cfb5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80"
                            class="h-32 w-32 cursor-pointer rounded-full object-cover object-center border-2 border-gray-700 shadow-lg" 
                            data-popover-target=""/>
                    </div>
                        
                    {{-- products --}}
                    <div class="flex flex-row">

                        <div class="p-1 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                            <div class="relative mx-4 mt-4 h-80 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                              <img
                                src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FrZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
                                class="h-full w-full object-cover"
                              />
                            </div>
                            <div class="p-6">
                              <div class="mb-2 flex items-center justify-between">
                                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                  Strawberry Cupcake
                                </p>
                                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                  ₱98.00
                                </p>
                              </div>
                              <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
                                A delightful treat that combines the fluffy texture of a cupcake with the sweet and tangy flavor of fresh strawberries.
                              </p>
                            </div>
                            <div class="p-6 pt-0">
                              <button
                                class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button"
                              >
                                Add to Cart
                              </button>
                            </div>
                          </div>

                          <div class="p-1 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                            <div class="relative mx-4 mt-4 h-80 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                              <img
                                src="https://images.unsplash.com/photo-1488477304112-4944851de03d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                                class="h-full w-full object-cover"
                              />
                            </div>
                            <div class="p-6">
                              <div class="mb-2 flex items-center justify-between">
                                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                  Candied Blood Cake 
                                </p>
                                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                  ₱195.00
                                </p>
                              </div>
                              <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
                                A tantalizing dessert that combines the rich flavors of decadent chocolate and a hint of blood orange.
                              </p>
                            </div>
                            <div class="p-6 pt-0">
                              <button
                                class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button"
                              >
                                Add to Cart
                              </button>
                            </div>
                          </div>

                          <div class="p-1 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                            <div class="relative mx-4 mt-4 h-80 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                              <img
                                src="https://images.unsplash.com/photo-1535141192574-5d4897c12636?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNha2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"
                                class="h-full w-full object-cover"
                              />
                            </div>
                            <div class="p-6">
                              <div class="mb-2 flex items-center justify-between">
                                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                  Wedding Berries Cake
                                </p>
                                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                                  ₱285.00
                                </p>
                              </div>
                              <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
                                A romantic and enchanting dessert that is perfect for celebrating the union of love.
                              </p>
                            </div>
                            <div class="p-6 pt-0">
                              <button
                                class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button"
                              >
                                Add to Cart
                              </button>
                            </div>
                        </div>
                    </div>

                    {{-- about_the_seller --}}
                    <div class="bg-gray-300 rounded-lg mt-5 p-5">
                        <h1 class="font-bold text-lg text-gray-800 px-5">About us</h1>
                        <p class="px-5 text-gray-700">We're no strangers to love
                            You know the rules and so do I (do I),
                            A full commitment's what I'm thinking of,
                            You wouldn't get this from any other guy,
                            I just wanna tell you how I'm feeling,
                            Gotta make you understand,
                            Never gonna give you up,
                            Never gonna let you down,
                            Never gonna run around and desert you,
                            Never gonna make you cry,
                            Never gonna say goodbye,
                            Never gonna tell a lie and hurt you.</p>
                    </div>
                </div>

                {{-- all products --}}
                <div class="hidden opacity-0" id="all_products" role="tabpanel">
                  <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500 antialiased">
                    All products
                  </p>
                </div>

                {{-- category 1 --}}
                <div class="hidden opacity-0" id="category_1" role="tabpanel">
                  <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500 antialiased">
                    Category 1
                  </p>
                </div>

                {{-- category 2 --}}
                <div class="hidden opacity-0" id="category_2" role="tabpanel">
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500 antialiased">
                      Category 2
                    </p>
                  </div>

                  {{-- category 3 --}}
                  <div class="hidden opacity-0" id="category_3" role="tabpanel">
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500 antialiased">
                      Category 3
                    </p>
                  </div>

              </div>
            </div>
          </div>
    </div>
      
    @push('scripts')
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>
    @endpush
    
</x-layouts.app-layout>