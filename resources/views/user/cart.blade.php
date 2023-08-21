<x-layouts.app-layout title="| Cart">

<h1 class="flex justify-center items-center mt-5 text-gray-800 text-3xl">Shopping cart</h1>
<div class="p-10">
    <table class="table-fixed w-full">
        @unless ($products->isEmpty())
            <thead>
              <tr class="text-gray-700">
                <td>Remove</td>
                <td>Product</td>
                <td>Price</td>
                <td>Sub total</td>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $index => $product )
              <tr class="{{ $index % 2 == 0 ? 'bg-gray-200' : 'bg-gray-300' }} text-gray-700 border-t border-b">
                <td>
                    <form method="POST" 
                        action="cart/{{ $product->cart_id }}"
                        onsubmit="return removeItem(this);"
                        class="flex justify-center items-center">
                        @csrf
                        @method('DELETE')
                        <button
                          class="text-red-600 text-center flex items-center"
                          data-ripple-light="true"
                          type="submit"
                          >
                          <i class="material-icons mr-1">remove_shopping_cart</i>
                            Remove item
                        </button>
                      </form>
                </td>
                <td class="border px-4 py-2">
                    <div class="flex flex-row">
                        <img src="{{ $product->product_image ? asset('storage/' . $product->product_image) : asset('images/no-image.jpg') }}" 
                        class="h-20 w-20 rounded-md"
                        alt="product_image">
                        <div class="flex-flex-row">
                            <div class="text-gray-700 ml-2">{{ $product->name }}</div>
                            <div class="text-gray-700 ml-2">{{ $product->category }}</div>
                        </div>
                    </div>
                </td>
                <td class="border px-4 py-2">
                    <div class="flex flex-row">
                        <div class="text-gray-700 mr-1">₱</div>
                        <div class="text-gray-700">{{ $product->price }}</div>
                    </div> 
                </td>
                <td class="border px-4 py-2">
                    <div class="flex flex-row">
                        <div class="text-gray-700 mr-1">₱</div>
                        <div class="text-gray-700">{{ $product->price }}</div>
                    </div>
                </td>
              </tr>
            </tbody>
            @endforeach
            @else
            <div class="flex flex-row items-center justify-center py-2">
                <i class="material-icons text-gray-700 pr-1">inventory_2</i>
                <div class="text-gray-700 font-bold text-2xl">Your cart is empty!</div>
            </div>
            <div class="flex justify-center items-center mt-3">
                <a
                class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true"
                href="{{ url('/') }}"
                >
                <div class="flex flex-row justify-center items-center">
                  Add product to your cart
                  <div class="material-icons ml-1">add_circle_outline</div>
                </div>
                </a>
              </div>
        @endunless
    </table>
    @unless ($products->isEmpty())
        <div class="flex justify-end items-end p-10 mr-5">
            <a
            class="middle flex justify-center items-center none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true"
            href="{{ url('/checkout') }}">
            Checkout
            <i class="material-icons ml-3">shopping_cart_checkout</i>
            </a>
        </div>
    @else
    @endunless
</div>

@push('scripts')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script type="text/javascript">
        function removeItem(form){
          swal({
            title:"Are you sure to remove this item?",
            text:"You won't be able to revert this delete",
            icon:"warning",
            buttons:true,
            dangerMode:true
          }).then((isOkay)=>{
            if(isOkay){
             form.submit();
            }
          });
          return false;
        }
    </script>
@endpush

</x-layouts.app-layout>