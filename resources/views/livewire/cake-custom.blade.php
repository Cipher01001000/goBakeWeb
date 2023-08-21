<div>
    {{-- cakeType --}}
      <h1 class="text-gray-700 font-bold p-5">
        Cake Type
      </h1>
      <hr>
      <div class="flex flex-row p-5 justify-between">
          <div class="gap-5 flex flex-row h-10">
              <div class="w-72">
                  <div class="relative h-10 w-full min-w-[200px]">
                    <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    required
                    wire:model="newCakeType">
                      <option value="">Cake type</option>
                      <option value="Standard">Standard</option>
                      <option value="Cup Cake">Cup Cake</option>
                      <option value="Cheese Cake">Cheese Cake</option>
                      <option value="Fruit Cake">Fruit Cake</option>
                      <option value="Butter Cake">Butter Cake</option>
                      <option value="Sponge Cake">Sponge Cake</option>
                      <option value="Carrot Cake">Carrot Cake</option>
                      <option value="Red Velvet Cake">Red Velvet Cake</option>
                    </select>
                    @error('newCakeType')
                      <div class="flex justify-center items-center pt-2">
                        <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                      </div>
                    @enderror
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                      Type
                    </label>
                  </div>
              </div>
      
              <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <input
                    class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    placeholder=" "
                    required
                    wire:model="newCakeTypePrice"
                  />
                  @error('newCakeTypePrice')
                      <div class="flex justify-center items-center pt-2">
                        <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                      </div>
                    @enderror
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Price
                  </label>
                </div>
              </div>
              
              <button
                class="middle none mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                type="submit"
                wire:click="addCakeType"
                >
                add
              </button> 
          </div>

          <div class="gap-5 flex flex-col"> <!-- Flex column container for rows -->
            @if (count($cakeTypes) > 0 && count($cakeTypePrices) > 0)
                @php $elementsInRow = 0; @endphp <!-- Counter for elements in the current row -->
                <div class="flex flex-row gap-5"> <!-- First row -->
                    @foreach ($cakeTypes as $index => $cake)
                        @if ($elementsInRow >= 5)
                            </div> <!-- Close the current row if there are 5 elements -->
                            <div class="flex flex-row gap-5"> <!-- Start a new row -->
                            @php $elementsInRow = 0; @endphp <!-- Reset the counter -->
                        @endif
                        <div
                          class="center relative flex justify-center items-center select-none whitespace-nowrap rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 py-2 px-3.5 align-baseline font-sans text-xs font-bold uppercase leading-none text-white"
                          data-dismissible="chip"
                          >
                          <div class="flex flex-col gap-1">
                              <div class="mr-5 mt-px">{{ $cake['cake_type'] }}</div>
                              <div class="flex flex-row">
                                  <div class=" mr-1">₱</div>
                                  <span>{{ $cakeTypePrices[$index]['cake_type_price'] }}</span>
                              </div>
                          </div>
                          <div
                            class="absolute top-1 right-1 mx-px mt-[0.5px] w-max rounded-md bg-blue-800 transition-colors hover:bg-blue-900"
                            data-dismissible-target="chip"
                          >
                            <button 
                              role="button" 
                              class="h-5 w-5 p-1"
                              wire:click="deleteCakeType({{ $index }})">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="3"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M6 18L18 6M6 6l12 12"
                                ></path>
                              </svg>
                            </button>
                          </div>
                        </div>
                        @php $elementsInRow++; @endphp <!-- Increment the counter -->
                    @endforeach
                </div> <!-- Close the last row -->
            @endif
        </div>
        
      </div>

      {{-- cakeShape --}}
    <h1 class="text-gray-700 font-bold p-5">
      Cake Shape
    </h1>
    <hr>
    <div class="flex flex-row p-5 justify-between">
        <div class="gap-5 flex flex-row h-10">
            <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  required
                  wire:model="newCakeShape">
                  <option value="">Cake Shape</option>
                      <option value="Round">Round</option>
                      <option value="Square">Square</option>
                      <option value="Rectangle">Rectangle</option>
                  </select>
                  @error('newCakeShape')
                      <div class="flex justify-center items-center pt-2">
                        <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                      </div>
                    @enderror
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Type
                  </label>
                </div>
            </div>
    
            <div class="w-72">
              <div class="relative h-10 w-full min-w-[200px]">
                <input
                  class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  placeholder=" "
                  required
                  wire:model="newCakeShapePrice"
                />
                @error('newCakeShapePrice')
                      <div class="flex justify-center items-center pt-2">
                        <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                      </div>
                @enderror
                <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                  Price
                </label>
              </div>
            </div>
            
            <button
              class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-light="true"
              type="submit"
              wire:click.lazy="addCakeShape"
              >
              add
            </button> 
        </div>

        <div class="gap-5 flex flex-col"> <!-- Flex column container for rows -->
          @if (count($cakeShapes) > 0 && count($cakeShapePrices) > 0)
              @php $elementsInRow = 0; @endphp <!-- Counter for elements in the current row -->
              <div class="flex flex-row gap-5"> <!-- First row -->
                  @foreach ($cakeShapes as $index => $cake)
                      @if ($elementsInRow >= 5)
                          </div> <!-- Close the current row if there are 5 elements -->
                          <div class="flex flex-row gap-5"> <!-- Start a new row -->
                          @php $elementsInRow = 0; @endphp <!-- Reset the counter -->
                      @endif
                      <div
                        class="center relative flex justify-center items-center select-none whitespace-nowrap rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 py-2 px-3.5 align-baseline font-sans text-xs font-bold uppercase leading-none text-white"
                        data-dismissible="chip"
                        >
                        <div class="flex flex-col gap-1">
                            <div class="mr-5 mt-px">{{ $cake['cake_shape'] }}</div>
                            <div class="flex flex-row">
                                <div class=" mr-1">₱</div>
                                <span>{{ $cakeShapePrices[$index]['cake_shape_price'] }}</span>
                            </div>
                        </div>
                        <div
                          class="absolute top-1 right-1 mx-px mt-[0.5px] w-max rounded-md bg-blue-800 transition-colors hover:bg-blue-900"
                          data-dismissible-target="chip"
                        >
                          <button 
                            role="button" 
                            class="h-5 w-5 p-1"
                            wire:click="deleteCakeShape({{ $index }})">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="3"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </div>
                      @php $elementsInRow++; @endphp <!-- Increment the counter -->
                  @endforeach
              </div> <!-- Close the last row -->
          @endif
        </div>
    </div>

    {{-- cakeSize --}}
    <h1 class="text-gray-700 font-bold p-5">
      Cake Size
    </h1>
    <hr>
    <div class="flex flex-row p-5 justify-between">
        <div class="gap-5 flex flex-row h-10">
            <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  required
                  wire:model="newCakeSize">
                  <option value="">Cake Size</option>
                    <option value="5 inch">5 inch</option>
                    <option value="6 inch">6 inch</option>
                    <option value="7 inch">7 inch</option>
                    <option value="8 inch">8 inch</option>
                    <option value="9 inch">9 inch</option>
                    <option value="10 inch">10 inch</option>
                  </select>
                  @error('newCakeSize')
                    <div class="flex justify-center items-center pt-2">
                      <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                      <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                  @enderror
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Type
                  </label>
                </div>
            </div>
    
            <div class="w-72">
              <div class="relative h-10 w-full min-w-[200px]">
                <input
                  class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  placeholder=" "
                  required
                  wire:model="newCakeSizePrice"
                />
                @error('newCakeSizePrice')
                    <div class="flex justify-center items-center pt-2">
                      <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                      <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                @enderror
                <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                  Price
                </label>
              </div>
            </div>
            
            <button
              class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-light="true"
              type="submit"
              wire:click.lazy="addCakeSize"
              >
              add
            </button> 
        </div>

        <div class="gap-5 flex flex-col"> <!-- Flex column container for rows -->
          @if (count($cakeSizes) > 0 && count($cakeSizePrices) > 0)
              @php $elementsInRow = 0; @endphp <!-- Counter for elements in the current row -->
              <div class="flex flex-row gap-5"> <!-- First row -->
                  @foreach ($cakeSizes as $index => $cake)
                      @if ($elementsInRow >= 5)
                          </div> <!-- Close the current row if there are 5 elements -->
                          <div class="flex flex-row gap-5"> <!-- Start a new row -->
                          @php $elementsInRow = 0; @endphp <!-- Reset the counter -->
                      @endif
                      <div
                        class="center relative flex justify-center items-center select-none whitespace-nowrap rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 py-2 px-3.5 align-baseline font-sans text-xs font-bold uppercase leading-none text-white"
                        data-dismissible="chip"
                        >
                        <div class="flex flex-col gap-1">
                            <div class="mr-5 mt-px">{{ $cake['cake_size'] }}</div>
                            <div class="flex flex-row">
                                <div class=" mr-1">₱</div>
                                <span>{{ $cakeSizePrices[$index]['cake_size_price'] }}</span>
                            </div>
                        </div>
                        <div
                          class="absolute top-1 right-1 mx-px mt-[0.5px] w-max rounded-md bg-blue-800 transition-colors hover:bg-blue-900"
                          data-dismissible-target="chip"
                        >
                          <button 
                            role="button" 
                            class="h-5 w-5 p-1"
                            wire:click="deleteCakeSize({{ $index }})">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="3"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </div>
                      @php $elementsInRow++; @endphp <!-- Increment the counter -->
                  @endforeach
              </div> <!-- Close the last row -->
          @endif
        </div>
    </div>

    {{-- cakeLayers --}}
    <h1 class="text-gray-700 font-bold p-5">
      Cake Layer
    </h1>
    <hr>
    <div class="flex flex-row p-5 justify-between">
        <div class="gap-5 flex flex-row h-10">
            <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  required
                  wire:model="newCakeLayer">
                  <option value="">Cake Layer</option>
                    <option value="1 Layer">Layer 1</option>
                    <option value="2 Layer">Layer 2</option>
                    <option value="3 Layer">Layer 3</option>
                    <option value="4 Layer">Layer 4</option>
                    <option value="5 Layer">Layer 5</option>
                  </select>
                  @error('newCakeLayer')
                    <div class="flex justify-center items-center pt-2">
                      <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                      <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                  @enderror
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Type
                  </label>
                </div>
            </div>
    
            <div class="w-72">
              <div class="relative h-10 w-full min-w-[200px]">
                <input
                  class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  placeholder=" "
                  required
                  wire:model="newCakeLayerPrice"
                />
                @error('newCakeLayerPrice')
                    <div class="flex justify-center items-center pt-2">
                      <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                      <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                @enderror
                <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                  Price
                </label>
              </div>
            </div>
            
            <button
              class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-light="true"
              type="submit"
              wire:click.lazy="addCakeLayer"
              >
              add
            </button> 
        </div>

        <div class="gap-5 flex flex-col"> <!-- Flex column container for rows -->
          @if (count($cakeLayers) > 0 && count($cakeLayerPrices) > 0)
              @php $elementsInRow = 0; @endphp <!-- Counter for elements in the current row -->
              <div class="flex flex-row gap-5"> <!-- First row -->
                  @foreach ($cakeLayers as $index => $cake)
                      @if ($elementsInRow >= 5)
                          </div> <!-- Close the current row if there are 5 elements -->
                          <div class="flex flex-row gap-5"> <!-- Start a new row -->
                          @php $elementsInRow = 0; @endphp <!-- Reset the counter -->
                      @endif
                      <div
                        class="center relative flex justify-center items-center select-none whitespace-nowrap rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 py-2 px-3.5 align-baseline font-sans text-xs font-bold uppercase leading-none text-white"
                        data-dismissible="chip"
                        >
                        <div class="flex flex-col gap-1">
                            <div class="mr-5 mt-px">{{ $cake['cake_layer'] }}</div>
                            <div class="flex flex-row">
                                <div class=" mr-1">₱</div>
                                <span>{{ $cakeLayerPrices[$index]['cake_layer_price'] }}</span>
                            </div>
                        </div>
                        <div
                          class="absolute top-1 right-1 mx-px mt-[0.5px] w-max rounded-md bg-blue-800 transition-colors hover:bg-blue-900"
                          data-dismissible-target="chip"
                        >
                          <button 
                            role="button" 
                            class="h-5 w-5 p-1"
                            wire:click="deleteCakeLayer({{ $index }})">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="3"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </div>
                      @php $elementsInRow++; @endphp <!-- Increment the counter -->
                  @endforeach
              </div> <!-- Close the last row -->
          @endif
        </div> 
    </div>

    <h1 class="text-gray-700 font-bold p-5">
        Design
    </h1>
    <hr>

    <h1 class="text-gray-700 p-5">
      Cake Decoration
    </h1>
    <div class="flex flex-row p-5 justify-between">
        <div class="flex flex-col gap-10">
          <div class="gap-5 flex flex-row h-10">
            <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  required
                  wire:model="newCakeDecoration">
                  <option value="">Cake Decoration</option>
                  <option value="Spatula Icing">Spatula Icing</option>
                  <option value="Piping">Piping</option>
                  <option value="Fondant Work">Fondant Work</option>
                  <option value="Hand Painting">Hand Painting</option>
                  <option value="Sugar Work">Sugar Work</option>
                  <option value="Airbrushing">Airbrushing</option>
                  <option value="Mirror Glaze">Mirror Glaze</option>
                  </select>
                  @error('newCakeDecoration')
                    <div class="flex justify-center items-center pt-2">
                      <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                      <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                  @enderror
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Type
                  </label>
                </div>
            </div>
    
            <div class="w-72">
              <div class="relative h-10 w-full min-w-[200px]">
                <input
                  class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  placeholder=" "
                  required
                  wire:model="newCakeDecorationPrice"
                />
                @error('newCakeDecorationPrice')
                    <div class="flex justify-center items-center pt-2">
                      <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                      <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                @enderror
                <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                  Price
                </label>
              </div>
            </div>
            
            <button
              class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-light="true"
              type="submit"
              wire:click.lazy="addCakeDecoration"
              >
              add
            </button> 
          </div>
          <section>
            <input type="file" 
              class="text-gray-700 my-2"
              id="imageDecoId"
              wire:model="newDecorationImg"
              wire:change="$emit('fileChoosen')">
              @error('newDecorationImg')
                <div class="flex items-center">
                  <i class="material-icons text-red-500 animate-bounce mr-1">error</i>
                  <span class="text-sm text-red-500">{{ $message }}</span>
                </div>
              @enderror
              @if ($newDecorationImg)
                <img 
                  class="w-16 rounded-lg"
                  src="{{ $newDecorationImg }}" 
                  alt="image-preview">
              @endif
          </section>
        </div>

        <div class="gap-5 flex flex-col"> <!-- Flex column container for rows -->
          @if (count($cakeDecorations) > 0 && count($cakeDecorationPrices) > 0)
              @php $elementsInRow = 0; @endphp <!-- Counter for elements in the current row -->
              <div class="flex flex-row gap-5"> <!-- First row -->
                  @foreach ($cakeDecorations as $index => $cake)
                      @if ($elementsInRow >= 5)
                          </div> <!-- Close the current row if there are 5 elements -->
                          <div class="flex flex-row gap-5"> <!-- Start a new row -->
                          @php $elementsInRow = 0; @endphp <!-- Reset the counter -->
                      @endif
                      <div
                        class="center relative flex justify-center items-center select-none whitespace-nowrap rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 py-2 px-3.5 align-baseline font-sans text-xs font-bold uppercase leading-none text-white"
                        data-dismissible="chip"
                        >
                        <div class="flex flex-col gap-1">
                            <div class="mr-5 mt-px">{{ $cake['cake_decoration'] }}</div>
                            <div class="flex flex-row">
                                <div class=" mr-1">₱</div>
                                <span>{{ $cakeDecorationPrices[$index]['cake_decoration_price'] }}</span>
                            </div>
                        </div>
                        <div
                          class="absolute top-1 right-1 mx-px mt-[0.5px] w-max rounded-md bg-blue-800 transition-colors hover:bg-blue-900"
                          data-dismissible-target="chip"
                        >
                          <button 
                            role="button" 
                            class="h-5 w-5 p-1"
                            wire:click="deleteCakeDecoration({{ $index }})">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="3"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </div>
                      @php $elementsInRow++; @endphp <!-- Increment the counter -->
                  @endforeach
              </div> <!-- Close the last row -->
          @endif
        </div> 
    </div>

    <hr>
    <div class="flex flex-row p-5 justify-between">
        <h1 class="text-gray-600">Pattern</h1>
        <div class="gap-5 flex flex-row">
            <div class="add_image w-32 h-32 border-dashed border-gray-600 border-2 flex flex-col justify-center items-center">
                <i class="material-icons text-gray-600">add_photo_alternate</i>
                <p class="text-gray-600">Add Image</p>
            </div>
           
            <div class="flex flex-col gap-5">
                <div class="w-72">
                    <div class="relative h-10 w-full min-w-[200px]">
                      <input
                        class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                        placeholder=" "
                      />
                      <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Pattern
                      </label>
                    </div>
                  </div>
        
                  <div class="flex flex-row gap-10">
                    <div class="w-72">
                        <div class="relative h-10 w-full min-w-[200px]">
                          <input
                            class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            placeholder=" "
                          />
                          <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Price
                          </label>
                        </div>
                      </div>
                        <button
                        class="middle none center h-10 mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true"
                        >
                        add
                        </button> 
                  </div>
            </div>        
        </div>
        
        <div class="gap-5 flex flex-row">
            <div class="w-32 h-32 center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Image 1
            </div>
            
            <div class="w-32 h-32 center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Image 2
            </div>

            <div class="w-32 h-32 center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Image 3
            </div>

            <div class="w-32 h-32 center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Image 4
            </div>
        </div>
        
    </div>

    <hr>
    <div class="flex flex-row p-5 justify-between">
        <h1 class="text-gray-600">Topper</h1>
        <div class="gap-5 flex flex-row">
            <div class="add_image w-32 h-32 border-dashed border-gray-600 border-2 flex flex-col justify-center items-center">
                <i class="material-icons text-gray-600">add_photo_alternate</i>
                <p class="text-gray-600">Add Image</p>
            </div>
           
            <div class="flex flex-col gap-5">
                <div class="w-72">
                    <div class="relative h-10 w-full min-w-[200px]">
                      <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                      required>
                      <option value="">Cake Topper</option>
                      <option value="Edible modelled cake toppers">Edible modelled cake toppers</option>
                      <option value="Edible printed toppers">Edible printed toppers</option>
                      <option value="Edible floral cake toppers">Edible floral cake toppers</option>
                      <option value="Cardboard printed">Cardboard printed</option>
                      <option value="Perspex printed">Perspex printed</option>
                      <option value="Photographs">Photographs</option>
                      <option value="Plastic modelled cake toppers">Plastic modelled cake toppers</option>
                      <option value="Non-edible floral toppers">Non-edible floral toppers</option>
                      </select>
                      <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Topper
                      </label>
                    </div>
                  </div>
        
                  <div class="flex flex-row gap-10">
                    <div class="w-72">
                        <div class="relative h-10 w-full min-w-[200px]">
                          <input
                            class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            placeholder=" "
                          />
                          <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Price
                          </label>
                        </div>
                      </div>
                        <button
                        class="middle none center h-10 mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-light="true"
                        >
                        add
                        </button> 
                  </div>
            </div>        
        </div>
        
        <div class="gap-5 flex flex-row">
            <div class="w-32 h-32 center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Image 1
            </div>
            
            <div class="w-32 h-32 center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Image 2
            </div>

            <div class="w-32 h-32 center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Image 3
            </div>

            <div class="w-32 h-32 center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Image 4
            </div>
        </div>
        
    </div>

    <div class="flex flex-row justify-end">
        <a
        class="middle none center mr-4 rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        data-ripple-light="true"
        href="{{ url('seller') }}"
        >
        Cancel
        </a>

        <button
        class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        data-ripple-light="true"
        wire:click.prevent="save"
        >
        Confirm
        </button>
    </div>
</div>

<script>
  window.livewire.on('fileChoosen', () => {
      let inputField = document.getElementById('imageDecoId');
      let file = inputField.files[0];

      if (file) {
          let reader = new FileReader();
          reader.onloadend = () => {
              window.livewire.emit('fileUpload', reader.result);
          };
          reader.readAsDataURL(file);
      }
  });
</script>

