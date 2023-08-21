<x-layouts.seller-layout title="| Home">
 
    <div class="flex flex-row">
      <x-partials.seller.sellerSideBar />
      <div class="ml-64 w-full px-10">
        <div class="w-full flex-col items-center">
            <div class="flex flex-row items-center m-3">
                <i class="material-icons text-gray-500">shopping_bag</i>
                <div class="text-gray-700 text-2xl">Products</div>
            </div>
            <div class="flex flex-row pb-5 gap-5">
              <a
                class="middle none center rounded-lg bg-pink-500 py-2 px-5 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none flex items-center"
                data-ripple-light="true"
                href="{{ url('/add_product') }}"
              >
                Add Products
                <i class="material-icons ml-1">add_circle_outline</i>
              </a>
              <a
                class="middle none center rounded-lg bg-pink-500 py-2 px-5 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none flex items-center"
                data-ripple-light="true"
                href="{{ url('/customize_product') }}"
              >
                Cake customization
                <i class="material-icons ml-1">cake</i>
              </a>
            </div>
            {{-- search --}}
            <form class="w-full" action="/sellerProduct">   
              <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
              <div class="relative">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                  </div>
                  <input type="text" name="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Search" required>
                  <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gray-700 hover:bg-gray-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600">Search</button>
              </div>
            </form>
      
            <div class="my-4 w-full">
              @unless ($products->isEmpty())
                <table class="w-full table-auto">
                  <thead>
                    <tr class="text-gray-800 text-sm bg-gray-500">
                      <td class="px-4 py-2">Name</td>
                      <td class="px-4 py-2">Price</td>
                      <td class="px-4 py-2">Stock</td>
                      <td class="px-4 py-2">Category</td>
                      <td class="px-4 py-2">Actions</td>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $index => $product)
                      <tr class="{{ $index % 2 == 0 ? 'bg-gray-0' : 'bg-gray-200' }} text-sm text-gray-700 border-t border-b">
                        <td class="border px-4 py-2">{{ $product->name }}</td>
                        <td class="border px-4 py-2">{{ $product->price }}</td>
                        <td class="border px-4 py-2">{{ $product->stock }}</td>
                        <td class="border px-4 py-2">{{ $product->category }}</td>
                        <td class="border px-4 py-2">
                          <div class="flex flex-row gap-3 justify-center items-center">
                            <a href="/seller/{{ $product->id }}/edit"
                              class="flex flex-row">
                              <button
                              class="text-blue-400 flex justify-center items-center"
                              type="button"
                              data-ripple-light="true"
                              >
                              <i class="material-icons text-blue-400 mr-1">edit_square</i>
                              Update
                            </button>
                            </a>
                              <form method="POST" action="seller/{{ $product->id }}"
                                onsubmit="return submitForm(this);">
                                @csrf
                                @method('DELETE')
                                <button
                                  class="text-red-600 text-center flex justify-center items-center"
                                  data-ripple-light="true"
                                  type="submit"
                                  >
                                    <i class="material-icons">delete</i>
                                    Delete
                                </button>
                              </form>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              @else
                <div class="flex flex-row items-center justify-center py-2">
                  <i class="material-icons text-gray-700 pr-1">inventory_2</i>
                  <div class="text-gray-700 font-bold text-2xl">Empty items!</div>
                </div>
                <div class="flex justify-center items-center">
                  <a
                  class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                  data-ripple-light="true"
                  href="{{ url('/add_product') }}"
                  >
                  <div class="flex flex-row justify-center items-center">
                    Add product
                    <div class="material-icons ml-1">add_circle_outline</div>
                  </div>
                  </a>
                </div>
              @endunless
            </div>
            
            <div class="mt-6 p-4">
              {{ $products->links() }}
            </div>
            
        </div>
      </div>
    </div>
    
    @push('scripts')
    <script src={{ asset('js/tab.js') }}></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dismissible.js"></script>
    <script type="text/javascript">
        function submitForm(form){
          swal({
            title:"Are you sure to delete this?",
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
      
    </x-layouts.seller-layout>