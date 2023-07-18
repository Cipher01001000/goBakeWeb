<x-layouts.seller-layout title="| Customize Product">

    <div class="p-5">
        <h1 class="text-gray-600">
            Customize Product
        </h1>
    </div>

    <h1 class="text-gray-700 font-bold p-5">
        Cake Type
    </h1>
    <hr>
    <div class="flex flex-row p-5 justify-between">

        <div class="gap-5 flex flex-row">
            <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  required>
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
                  />
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Price
                  </label>
                </div>
              </div>
    
                <button
                class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                >
                add
                </button>         
        </div>
        
        <div class="gap-5 flex flex-row">
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Standard
            </div>
            
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Cup cake
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Cheesecake
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Fruitcake
            </div>
        </div>
        
    </div>

    <h1 class="text-gray-700 font-bold p-5">
        Shape
    </h1>
    <hr>
    <div class="flex flex-row p-5 justify-between">

        <div class="gap-5 flex flex-row">
            <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  required>
                    <option value="">Cake Shape</option>
                    <option value="Round">Round</option>
                    <option value="Square">Square</option>
                    <option value="Rectangle">Rectangle</option>
                  </select>
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Shape
                  </label>
                </div>
              </div>
    
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
                class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                >
                add
                </button>         
        </div>
        
        <div class="gap-5 flex flex-row">
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Round
            </div>
            
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Square
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Heart
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Rectangle
            </div>
        </div>
        
    </div>

    <h1 class="text-gray-700 font-bold p-5">
        Flavor
    </h1>
    <hr>
    <div class="flex flex-row p-5 justify-between">

        <div class="gap-5 flex flex-row">
            <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  required>
                    <option value="">Cake Flavor</option>
                    <option value="Chocolate">Chocolate</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Strawberry">Strawberry</option>
                    <option value="Blueberry">Blueberry</option>
                    <option value="Ube">Ube</option>
                    <option value="Mango">Mango</option>
                    <option value="Banana">Banana</option>
                  </select>
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Flavor
                  </label>
                </div>
              </div>
    
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
                class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                >
                add
                </button>         
        </div>
        
        <div class="gap-5 flex flex-row">
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Chocolate
            </div>
            
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Vanilla
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Strawberry
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Blueberry
            </div>
        </div>
        
    </div>

    <h1 class="text-gray-700 font-bold p-5">
        Size
    </h1>
    <hr>
    <div class="flex flex-row p-5 justify-between">

        <div class="gap-5 flex flex-row">
            <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  required>
                    <option value="">Cake Size</option>
                    <option value="5 inch">5 inch</option>
                    <option value="6 inch">6 inch</option>
                    <option value="7 inch">7 inch</option>
                    <option value="8 inch">8 inch</option>
                    <option value="9 inch">9 inch</option>
                    <option value="10 inch">10 inch</option>
                  </select>
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Size
                  </label>
                </div>
              </div>
    
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
                class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                >
                add
                </button>         
        </div>
        
        <div class="gap-5 flex flex-row">
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            5 inch
            </div>
            
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            6 inch
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            7 inch
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            8 inch
            </div>
        </div>
        
    </div>

    <h1 class="text-gray-700 font-bold p-5">
        Layer
    </h1>
    <hr>
    <div class="flex flex-row p-5 justify-between">

        <div class="gap-5 flex flex-row">
            <div class="w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                  <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                  required>
                    <option value="">Cake Layer</option>
                    <option value="1">Layer 1</option>
                    <option value="2">Layer 2</option>
                    <option value="3">Layer 3</option>
                    <option value="4">Layer 4</option>
                    <option value="5">Layer 5</option>
                  </select>
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Layer
                  </label>
                </div>
              </div>
    
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
                class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-4 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                >
                add
                </button>         
        </div>
        
        <div class="gap-5 flex flex-row">
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Layer 1
            </div>
            
            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Layer 2
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Layer 3
            </div>

            <div class="w-auto center relative inline-block select-none whitespace-nowrap rounded-lg bg-gray-500 py-2 px-3         align-baseline font-sans text-xs font-bold uppercase leading-none text-white">
            Layer 4
            </div>
        </div>
        
    </div>

    <h1 class="text-gray-700 font-bold p-5">
        Design
    </h1>
    <hr>
    <div class="flex flex-row p-5 justify-between">
        <h1 class="text-gray-600">Decoration</h1>
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
                    <option value="">Cake Decoration</option>
                    <option value="Spatula Icing">Spatula Icing</option>
                    <option value="Piping">Piping</option>
                    <option value="Fondant Work">Fondant Work</option>
                    <option value="Hand Painting">Hand Painting</option>
                    <option value="Sugar Work">Sugar Work</option>
                    <option value="Airbrushing">Airbrushing</option>
                    <option value="Mirror Glaze">Mirror Glaze</option>
                    </select>
                      <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Decoration
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
        <button
        class="middle none center mr-4 rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        data-ripple-light="true"
        >
        Cancel
        </button>

        <button
        class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        data-ripple-light="true"
        >
        Confirm
        </button>
    </div>

    
    
@push('scripts')

@endpush   
</x-layouts.seller-layout>