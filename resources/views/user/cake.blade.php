<x-layouts.app-layout title="| Shop">

  <div className="w-1/2 text-left">
    <nav aria-label="breadcrumb" class="w-max">
      <ol class="flex w-full flex-wrap items-center rounded-md bg-opacity-60 py-2 px-4">
        <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
          <a class="opacity-60" href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
          </a>
          <span class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
            /
          </span>
        </li>
        <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
          <a class="opacity-60" href="#">
            <span>Shop</span>
          </a>
          <span class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
            /
          </span>
        </li>
        <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
          <a
            class="font-medium text-blue-gray-900 transition-colors hover:text-pink-500"
            href="#"
          >
            Baked Goods
          </a>
        </li>
      </ol>
    </nav>
  </div>
  
    {{-- Products --}}
    <div class="flex flex-row gap-10 justify-center items-center p-5" id="cakes">
      @unless (count($products) == 0 )
        @foreach ($products as $index => $product)
          <div class="p-1 w-96 relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
              <img src="{{ $product->product_image ? asset('storage/' . $product->product_image) : asset('images/no-image.jpg') }}" class="h-full w-96 object-cover" />
            </div>
            <div class="p-6 w-72">
              <div class="mb-2 flex flex-col items-start justify-start">
                <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                  {{ $product->name }}
                </p>
                <div class="flex flex-row justify-center items-center">
                  <div class="text-gray-900 pr-1">₱</div>
                  <p class="block text-end font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
                    {{ $product->price }}
                  </p>
                </div>
              </div>
              <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
                {{ $product->description }}
              </p>
            </div>
            <div class="p-6 pt-0">
              <a class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" href="/products/{{ $product->id }}">
                View product
              </a>
            </div>
          </div>
    
          @if (($index + 1) % 4 == 0 && ($index + 1) != count($products))
            </div>
            <div class="flex flex-row gap-10 justify-center items-center p-5" id="cakes">
          @endif
        @endforeach
      @else
        <div class="flex flex-row items-center justify-center">
          <i class="material-icons text-gray-700 pr-1">inventory_2</i>
          <div class="text-gray-700 font-bold text-2xl">Empty items!</div>
        </div>
      @endunless
      </div>
    </div>
    
    <div class="mt-6 p-4">
      {{ $products->links() }}
    </div>

</x-layouts.app-layout>