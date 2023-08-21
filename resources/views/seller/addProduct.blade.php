<x-layouts.seller-layout title="| Add Product">

    <form action="/seller" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="p-10">
        <div class="font-bold text-gray-700 text-2xl">Basic information</div>

        <div class="flex flex-col">
          <div class="flex flex-row px-10 pt-10 items-center">
            <h1 class="text-gray-600 text-lg w-48">Product Images</h1>
            <p class="text-deep-orange-600">*</p>
            <p class="text-gray-600">1:1 Image</p>
            <input class="text-gray-600 ml-5" 
            type="file" 
            name="product_image"
            >
        </div>
            @error('product_image')
              <p class="text-red-500 text-xs p-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="add_image w-48 mt-5 ml-52 p-10 border-dashed border-gray-600 border-2 flex flex-col justify-center items-center">
            <i class="material-icons text-gray-600">image</i>
            <p class="text-gray-600">Image</p>
            <div class="flex flex-row">
                <p class="text-gray-600">(</p>
                <p class="text-gray-600">0</p>
                <p class="text-gray-600">/</p>
                <p class="text-gray-600">9</p>
                <p class="text-gray-600">)</p>
            </div>
        </div>

        {{-- <div class="flex-flex-row">
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
        </div> --}}

        <div class="flex flex-row px-10 pt-10 items-center">
            <h1 class="text-gray-600 text-lg w-48">Product Name</h1>
            <div class="w-full">
                <div class="relative h-10 w-full min-w-[200px]">
                  <input
                    class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    placeholder=" "
                    name="name"
                    value="{{ old('name') }}"
                  />
                  @error('name')
                    <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                  @enderror
                </div>
              </div>
        </div>

        <div class="flex flex-row px-10 pt-10 gap-10 items-center">
            <h1 class="text-gray-600 text-lg w-48">Category</h1>
                <div class="relative h-10 w-96 min-w-[200px]">
                    <select class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-red-500 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    required
                    name="category"
                    value="{{ old('category') }}">
                      <option value="">Category</option>
                      <option value="Cake">Cake</option>
                      <option value="Baking tools">Baking tools</option>
                      <option value="Baking equipments">Baking equipments</option>
                      <option value="Baking supplies">Baking supplies</option>
                    </select>
                </div>
                @error('category')
                  <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                @enderror
            <h1 class="text-gray-600 text-lg">Stock</h1>
            <div class="relative h-10 w-20 min-w-[200px]">
                <input
                class="text-center peer h-full w-20 rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" "
                type="number"
                name="stock"
                value="{{ old('stock') }}"
                required
                />
                @error('stock')
                  <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                @enderror
            </div>
            <h1 class="text-gray-600 text-lg">Price</h1>
            <div class="relative h-10 w-36 min-w-[200px]">
                <input
                class="text-center peer h-full w-36 rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" "
                name="price"
                value="{{ old('price') }}"
                required
                />
                @error('price')
                  <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-row px-10 pt-10">
            <h1 class="text-gray-600 text-lg w-48">Product Description</h1>
            <div class="w-full">
                <div class="relative w-full min-w-[200px]">
                  <textarea
                    class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                    placeholder=" "
                    name="description"
                  >
                  {{ old('description') }}
                  </textarea>
                  @error('description')
                    <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                  @enderror
                  <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Description
                  </label>
                </div>
              </div>
        </div>
        
        <div class="flex shrink-0 flex-wrap items-center justify-end p-4 text-blue-gray-500 gap-5">
            <button
              data-ripple-dark="true"
              class="middle none center mr-1 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            >
              Cancel
            </button>
            <button
              data-ripple-light="true"
              type="submit"
              class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            >
              Add product
            </button>
          </div>
        
    </div>
    </form>
@push('scripts')
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
@endpush   
</x-layouts.seller-layout>