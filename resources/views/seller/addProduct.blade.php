<x-layouts.seller-layout title="| Add Product">

    <div class="p-10">
        <div class="font-bold text-gray-700 text-2xl">Basic information</div>

        <div class="flex flex-row px-10 pt-10 items-center">
            <h1 class="text-gray-600 text-lg w-48">Product Images</h1>
            <p class="text-deep-orange-600">*</p>
            <p class="text-gray-600">1:1 Image</p>
            <input class="text-gray-600 ml-5" type="file">
        </div>
        <div class="add_image w-48 mt-5 ml-52 p-10 border-dashed border-gray-600 border-2 flex flex-col justify-center items-center">
            <i class="material-icons text-gray-600">add_photo_alternate</i>
            <p class="text-gray-600">Add image</p>
            <div class="flex flex-row">
                <p class="text-gray-600">(</p>
                <p class="text-gray-600">0</p>
                <p class="text-gray-600">/</p>
                <p class="text-gray-600">9</p>
                <p class="text-gray-600">)</p>
            </div>
        </div>

        <div class="flex-flex-row">
            <div class="flex flex-row px-10 pt-10 items-center">
                <h1 class="text-gray-600 text-lg w-48">Product Video</h1>
                <input class="text-gray-600 ml-5" type="file">
            </div>
            <div class="flex flex-row">
                <div class="add_image w-48 mt-5 ml-52 p-10 border-dashed border-gray-600 border-2 flex flex-col justify-center items-center">
                    <i class="material-icons text-gray-600">video_call</i>
                    <p class="text-gray-600">Add video</p>
                </div>
                <div class="flex flex-col py-10 pl-5">
                    <p class="text-gray-600">Size: Max 30MB, resolution should not exceed 1280x1280px</p>
                    <p class="text-gray-600">Duration: 10s-60s</p>
                    <p class="text-gray-600">Format: MP4</p>
                    <p class="text-gray-600">Note: You can publish this listing while the video is being processed. Video will be shown in listing once successfully processed.</p>
                </div>
            </div>
        </div>

        <div class="flex flex-row px-10 pt-10 items-center">
            <h1 class="text-gray-600 text-lg w-48">Product Name</h1>
            <div class="w-full">
                <div class="relative h-10 w-full min-w-[200px]">
                  <input
                    class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    placeholder=" "
                  />
                </div>
              </div>
        </div>

        <div class="flex flex-row px-10 pt-10 gap-10 items-center">
            <h1 class="text-gray-600 text-lg w-48">Category</h1>
                <div class="relative h-10 w-96 min-w-[200px]">
                    <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    required>
                      <option value="">Category</option>
                      <option value="Agno">Cake</option>
                      <option value="Aguilar">Ingredients</option>
                      <option value="Alcala">Baking tools</option>
                      <option value="Anda">Baking equipments</option>
                      <option value="Asingan">Baking supplies</option>
                    </select>
                </div>
            <h1 class="text-gray-600 text-lg">Stock</h1>
            <div class="relative h-10 w-20 min-w-[200px]">
                <input
                class="text-center peer h-full w-20 rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" "
                type="number"
                value="1"
                />
            </div>
            <h1 class="text-gray-600 text-lg">Price</h1>
            <div class="relative h-10 w-36 min-w-[200px]">
                <input
                class="text-center peer h-full w-36 rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" "
                value="000.00"
                />
            </div>
        </div>

        <div class="flex flex-row px-10 pt-10">
            <h1 class="text-gray-600 text-lg w-48">Product Description</h1>
            <div class="w-full">
                <div class="relative w-full min-w-[200px]">
                  <textarea
                    class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                    placeholder=" "
                  ></textarea>
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Description
                  </label>
                </div>
              </div>
        </div>
        
        <div class="flex flex-row px-10 pt-10 gap-5 justify-end items-end">
            <a
                class="middle none center rounded-lg bg-gray-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-500/20 transition-all hover:shadow-lg hover:shadow-gray-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                href="{{ url('/seller') }}"
                >
                Cancel
            </a>
            <a
                class="middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                href="{{ url('/seller') }}"
                >
                Confirm
            </a>
        </div>
        
    </div>
    
@push('scripts')

@endpush   
</x-layouts.seller-layout>