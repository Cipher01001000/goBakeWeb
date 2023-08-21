  <x-layouts.app-layout title="| Home">

  {{-- <div class="bg-gradient-to-r from-cyan-300 to-cyan-100 flex flex-row mx-10 rounded-sm justify-center items-center"
    id="head">

    <div class="p-10 ml-10 mt-10">
      <h1 class="block font-sans text-3xl text-blue-600 font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
        Shop Smarter, Not Harder:
      </h1>
      <h1 class="block font-sans text-2xl text-blue-500 font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
        The Benefits of GoBake for Baking Enthusiasts.
      </h1>
      <p class="mt-1 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased sm:text-left">
        Our website makes shopping for baking supplies a breeze!<br>
        See how we can make your baking experience even sweeter.<br><br>
      </p>

      <a
      class="middle none center rounded-2xl bg-blue-500 py-3 px-6 font-sans text-xs font-bold text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none m-5"
      data-ripple-light="true"
      href="{{url('shop')}}"
      >
      Buy Now
      </a>
    </div>

    <div class="p-5 ml-60">
      <div class="relative flex w-3/4 max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
        <div class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-white bg-clip-border text-gray-700">
          <img
            src="https://images.unsplash.com/photo-1506368083636-6defb67639a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=600&q=60"
            alt="image"
            class="h-full w-full object-cover"
          />
        </div>
        <div class="p-6">
          <h6 class="mb-4 block font-sans text-base font-semibold uppercase leading-relaxed tracking-normal text-pink-500 antialiased">
            startups
          </h6>
          <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            Get Ready to Whip Up
            delicious Treats with
            GoBake!
          </h4>
          <p class="mb-5 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
            Are you a baking enthusiasts<br>
            looking for high-quality<br>
            ingredients and baking tools?<br>
            Look no further!<br>
          </p>
          <a class="inline-block" href="{{url('shop')}}">
            <button
              class="flex select-none items-center gap-2 rounded-lg px-6 py-3 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              type="button"
            >
              Learn More
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                aria-hidden="true"
                class="h-4 w-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                ></path>
              </svg>
            </button>
          </a>
        </div>
      </div>
    </div>

  </div> --}}

<div id="up" class="flex flex-row justify-center items-center p-5">
  <i class="material-icons text-gray-700 mr-1">category</i>
  <h1 class="text-center block font-sans text-2xl text-gray-700 font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased" id="shop-by-category">
    Shop by Category
  </h1>
</div>

{{-- category --}}
<div class="flex flex-row items-center justify-center gap-10 p-5">

  <div class="w-96">
    <div class="relative grid h-96 w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
      <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-cover bg-clip-border bg-center text-gray-700 shadow-none transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
        <img src="https://plus.unsplash.com/premium_photo-1679047241341-c2fb93336bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80" alt="baking-tools"
        class="h-full w-full">
        <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
      </div>
      <div class="relative p-6 py-14 px-6 md:px-12">
        <h2 class="mb-6 block font-sans text-4xl font-medium leading-[1.5] tracking-normal text-white antialiased">
          Custom Cakes
        </h2>
        <a
            class="middle none center mr-3 rounded-lg border border-gray-50 py-3 px-6 font-sans text-xs font-bold text-gray-50 transition-all hover:opacity-75 focus:ring focus:ring-gray-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-dark="true"
            href="{{ url('/cake_customization') }}">
            Shop Now
          </a>
      </div>
    </div>
  </div>

  <div class="w-96">
    <div class="relative grid h-96 w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
      <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-cover bg-clip-border bg-center text-gray-700 shadow-none transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
        <img src="https://images.unsplash.com/photo-1483695028939-5bb13f8648b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="pastries"
        class="h-full">
        <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
      </div>
      <div class="relative p-6 py-14 px-6 md:px-12">
        <h2 class="mb-6 block font-sans text-4xl font-medium leading-[1.5] tracking-normal text-white antialiased">
          Baked Goods
        </h2>
        <a
            class="middle none center mr-3 rounded-lg border border-gray-50 py-3 px-6 font-sans text-xs font-bold text-gray-50 transition-all hover:opacity-75 focus:ring focus:ring-gray-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-dark="true" 
            href="{{ url('/cake') }}">
            Shop Now
          </a>
      </div>
    </div>
  </div>

  <div class="w-96">
    <div class="relative grid h-96 w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
      <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-cover bg-clip-border bg-center text-gray-700 shadow-none transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
        <img src="https://images.unsplash.com/photo-1589985269035-ab4c827b76e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="baking-ingredeints">
        <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
      </div>
      <div class="relative p-6 py-14 px-6 md:px-12">
        <h2 class="mb-6 block font-sans text-4xl font-medium leading-[1.5] tracking-normal text-white antialiased">
          Baking supplies
        </h2>
          <a
            class="middle none center mr-3 rounded-lg border border-gray-50 py-3 px-6 font-sans text-xs font-bold text-gray-50 transition-all hover:opacity-75 focus:ring focus:ring-gray-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-dark="true"
            href="{{ url('/baking_supplies') }}">
            Shop Now
          </a>
      </div>
    </div>
  </div>

  <div class="w-96">
    <div class="relative grid h-96 w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
      <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-cover bg-clip-border bg-center text-gray-700 shadow-none transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
        <img src="https://images.unsplash.com/photo-1589985268435-357c727c5d92?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmFraW5nJTIwdG9vbHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60" alt="baking-tools"
        class="h-full">
        <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
      </div>
      <div class="relative p-6 py-14 px-6 md:px-12">
        <h2 class="mb-6 block font-sans text-4xl font-medium leading-[1.5] tracking-normal text-white antialiased">
          Baking Tools
        </h2>
        <a
            class="middle none center mr-3 rounded-lg border border-gray-50 py-3 px-6 font-sans text-xs font-bold text-gray-50 transition-all hover:opacity-75 focus:ring focus:ring-gray-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-dark="true"
            href="{{ url('/baking_tools') }}">
            Shop Now
          </a>
      </div>
    </div>
  </div>

  <div class="w-96">
    <div class="relative grid h-96 w-full max-w-[28rem] flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">
      <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-cover bg-clip-border bg-center text-gray-700 shadow-none transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
        <img src="https://images.unsplash.com/photo-1669221262092-5fd1232482b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=689&q=80" alt="baking-tools"
        class="h-full">
        <div class="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-t from-black/80 via-black/50"></div>
      </div>
      <div class="relative p-6 py-14 px-6 md:px-12">
        <h2 class="mb-6 block font-sans text-4xl font-medium leading-[1.5] tracking-normal text-white antialiased">
          Baking Equipment
        </h2>
        <a
            class="middle none center mr-3 rounded-lg border border-gray-50 py-3 px-6 font-sans text-xs font-bold text-gray-50 transition-all hover:opacity-75 focus:ring focus:ring-gray-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-dark="true"
            href="{{ url('/baking_equipment') }}">
            Shop Now
          </a>
      </div>
    </div>
  </div>

</div>

<h1 class="p-5 text-center block font-sans text-2xl text-gray-700 font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
  GoBake Products
</h1>

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

<a
  class="fixed z-90 bottom-10 right-8 bg-blue-600 w-12 h-12 rounded-full drop-shadow-lg flex justify-center items-center text-white text-4xl hover:bg-blue-700 hover:drop-shadow-2xl hover:animate-bounce duration-300"
  href="#up"><i class="material-icons">keyboard_arrow_up</i>
</a>

@push('scripts')
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
  <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
@endpush

</x-layouts.app-layout>