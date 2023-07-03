<x-layouts.seller-layout title="| Start Selling">

    <div class="flex flex-row justify-center gap-10 items-center">

        <div class="p-10 w-1/4 bg-gray-50 shadow-lg">
            <h1 class="text-gray-700 font-bold text-2xl">Start selling</h1>
            <p class="text-gray-600 text-lg pt-10">Indulge Your Passion for Baking with Our Premium Cake and Baking Equipment.</p>
            <p class="text-gray-500 pt-10 pb-10">
                Welcome to Gobake, where baking enthusiasts and professionals alike can find a wide selection of top-quality cake and baking equipment. Whether you're a seasoned baker or just starting your culinary journey, we have everything you need to create mouthwatering cakes, pastries, and desserts that will leave everyone craving for more.
            </p>
                <a
                class="middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                href="{{ url('/seller_info') }}">
                Start Selling
                </a>
        </div>

        <div class="p-10 w-1/2 bg-gray-50 shadow-lg">
            <h1 class="text-gray-700 font-2xl">Shop the Finest Selection of Quality Products.</h1>
            <p class="text-gray-500 pt-10">From cake pans and molds to decorating tools and mixers, our meticulously curated collection features the finest baking essentials. We source our products from trusted brands known for their durability, performance, and innovation, ensuring that you have the best tools at your fingertips.</p>
            <img src="https://images.unsplash.com/photo-1580828343064-fde4fc206bc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" alt="start_selling"
            class="p-5 rounded-lg w-fit h-fit object-cover">
        </div>

    </div>
    

@push('scripts')

@endpush   
</x-layouts.seller-layout>