<x-layouts.seller-layout title="| Home">
 
    <div class="flex flex-row">
      <x-partials.seller.sellerSideBar />
      <div class="ml-64 w-full">
        <div class="flex justify-center items-center">
            <div class="flex flex-row h-10 m-10 gap-5">
              <a
                class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                href="{{ url('/add_product') }}"
              >
                Add Products
              </a>
              <a
                class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                href="{{ url('/customize_product') }}"
              >
                Cake customization
              </a>
            </div>
          </div>
      </div>
    </div>
    
    @push('scripts')
    <script src={{ asset('js/tab.js') }}></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
    @endpush 
      
    </x-layouts.seller-layout>