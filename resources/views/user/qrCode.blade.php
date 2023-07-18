<x-layouts.app-layout title="| QR Code Payment">
    
    <div class="flex flex-col justify-center items-center">

        <div class="text-gray-800 text-3xl uppercase m-3">Order and pay by phone</div>
        <div class="flex flex-row">
            <i class="material-icons">qr_code_scanner</i>
            <div class="text-gray-700 font-bold ">Scan for payment</div>
        </div>
        <div class="text-gray-700 text-2xl m-3">Blueberry Cheesecake</div>
        <div class="flex flex-row">
            <div class="text-gray-700 pr-1 text-xl">₱</div>
            <div class="text-gray-700 text-xl">612.12</div>
        </div>
        <hr>
        <img src="https://media.istockphoto.com/id/828088276/vector/qr-code-illustration.jpg?s=612x612&w=0&k=20&c=FnA7agr57XpFi081ZT5sEmxhLytMBlK4vzdQxt8A70M=" 
        alt="qr_code"
        class="h-96 w-96 shadow-lg">

        <div class="flex flex-row mt-5 justfiy-center items-center gap-10">
            <a
                class="w-36 mt-5 text-center middle none center rounded-lg bg-pink-500 py-2 px-2 font-sans text-xs font-bold text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                href="{{ url('/cart') }}"
                >
                Cancel
            </a>

            <a
                class="w-36 mt-5 middle text-center none center rounded-lg bg-pink-500 py-2 px-2 font-sans text-xs font-bold text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                href="{{ url('/orders') }}"
                >
                Proceed
            </a>
        </div>

    </div>
  
    @push('scripts')
        
    @endpush
  
  </x-layouts.app-layout>