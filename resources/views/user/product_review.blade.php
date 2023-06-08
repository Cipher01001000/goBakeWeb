<x-layouts.app-layout title="| Product Review">

    <div class="bg-gray-300 p-5 mx-20 my-5 rounded-lg">
        <span class="font-bold text-gray-700">Rate Product</span>
    </div>

    <div class="p-5 mx-20 my-5 rounded-lg bg-gray-300">
      
        <div class="p-5 flex flex-row w-full">
            <img
            class="relative inline-block h-12 w-12 rounded-lg object-cover object-center"
            alt="Image placeholder"
            src="https://images.unsplash.com/flagged/photo-1566127992631-137a642a90f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"/>
            <h1 class="block m-auto ml-1 font-sans text-sm leading-snug tracking-normal text-blue-gray-900 antialiased">
              Kakyoin Noriaki
            </h1>
            
            <div class="flex items-center justify-center">
              <i class="material-icons w-6 h-6 mr-2 fill-current text-gray-800 inline-block">local_shipping</i>
              <p class="mt-1 block font-sans text-sm font-normal leading-relaxed text-gray-700 antialiased">
                Delivery Status:
              </p>
              <i class="material-icons w-6 h-6 ml-2 fill-current text-gray-800 inline-block">help_outline</i>
            </div>
        </div>
        <hr>
        <div class="p-5 flex flex-row">
          <img
            class="relative inline-block h-28 w-28 rounded-lg object-cover object-center"
            alt="Image placeholder"
            src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1089&q=80"/>
            <div class="flex flex-col p-3 w-full">
              <h1 class="font-sans text-sm font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                Chocolate Cake
              </h1>
              <p class="block font-sans text-sm font-semibold leading-relaxed text-gray-700 antialiased">
                x1
              </p>
            </div>
  
              <div class="flex flex-col justify-end items-end w-full">
  
                <div class="flex flex-row items-center justify-center p-3">
                  <h1 class="font-sans mr-2 text-sm font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Order Total:
                  </h1>
                  <p class="block font-sans text-lg font-semibold leading-relaxed text-gray-700 antialiased">
                    ₱663.00
                  </p>
                </div>
              </div>
        </div>
      </div>
     {{-- starts --}}
      <div class="bg-gray-300 p-3 mx-20 my-5 rounded-lg">
        <i class="material-icons text-amber-600">star_outline</i>
        <i class="material-icons text-amber-600">star_outline</i>
        <i class="material-icons text-amber-600">star_outline</i>
        <i class="material-icons text-amber-600">star_outline</i>
        <i class="material-icons text-amber-600">star_outline</i>
        </div>
    </div>

    {{-- comment --}}

    <div class="my-5 mx-20">
        <div class="relative w-full min-w-[200px]">
          <textarea
            class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
            placeholder=" "
          ></textarea>
          <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Comment
          </label>
        </div>
      </div>

    <button
        data-ripple-light="true"
        data-dialog-target="dialog"
        class="mx-20 middle none center mr-4 rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        >
        Sumbit Review
    </button>
    <div
        data-dialog-backdrop="dialog"
        data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
        >
        <div
            data-dialog="dialog"
            class="relative m-4 w-2/5 min-w-[40%] max-w-[40%] rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl"
        >
            <div class="flex shrink-0 items-center p-4 font-sans text-2xl font-semibold leading-snug text-blue-gray-900 antialiased">
            Thank you!
            </div>
            <div class="relative border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 p-4 font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased">
            Your review has been submitted to seller. Thank you for shopping.
            </div>
            <div class="flex shrink-0 flex-wrap items-center justify-end p-4 text-blue-gray-500">
            <button
                data-ripple-dark="true"
                data-dialog-close="true"
                class="middle none center mr-1 rounded-lg py-3 px-6 font-sans text-xs font-bold uppercase text-red-500 transition-all hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            >
                Cancel
            </button>
            <a
                data-ripple-light="true"
                data-dialog-close="true"
                href="{{ url('/shop') }}"
                class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            >
                Countinue Shopping
            </a>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
    @endpush
    
</x-layouts.app-layout>