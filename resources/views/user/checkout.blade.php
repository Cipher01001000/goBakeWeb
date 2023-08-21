<x-layouts.app-layout title="| Checkout">

    <h1 class="flex justify-center items-center mt-5 text-gray-800 text-3xl">Checkout Details</h1>    
<div class="w-full p-10">
    <table class="table-fixed w-full">
        @unless ($products->isEmpty())
            <thead>
              <tr class="text-gray-700 text-2xl">
                <td>Product</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Shipping</td>
                <td>Sub total</td>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $index => $product )
              <tr class="{{ $index % 2 == 0 ? 'bg-gray-200' : 'bg-gray-300' }} text-gray-700 border-t border-b">
                <td class="border px-4 py-2">
                    <div class="flex flex-row">
                        <img src="{{ $product->product_image ? asset('storage/' . $product->product_image) : asset('images/no-image.jpg') }}" 
                        class="h-20 w-20 rounded-md"
                        alt="product_image">
                        <div class="flex-flex-row">
                          <div class="flex flex-row ml-2">
                            <div class="text-gray-700">Product name:</div>
                            <div class="text-gray-700 ml-2">{{ $product->name }}</div>
                          </div>
                            <div class="flex flex-row ml-2">
                              <div class="text-gray-700">Quantity:</div>
                              <div class="text-gray-700 ml-2">1</div>
                            </div>
                        </div>
                    </div>
                </td> 
                <td class="border px-4 py-2">
                  @livewire('counter')
                </td>
                <td class="border px-4 py-2">
                    <div class="flex flex-row">
                        <div class="text-gray-700 mr-1">₱</div>
                        <div class="text-gray-700">{{ $product->price }}</div>
                    </div> 
                </td>
                <td class="border px-4 py-2">
                  <div class="text-gray-700 mr-1">Free</div>
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
        @endunless
    </table>
</div>

<div class="flex flex-col ml-10">
  <div class="flex flex-row justify-end items-center mr-20 gap-1 mb-3">
      <div class="text-gray-700 text-xl mr-1">Total Price:</div>
      <div class="text-gray-700">₱</div>
      <div class="text-gray-700">{{ $totalPrice }}</div>
  </div>

  {{-- <form method="POST" name="delete" action="checkout/{{ $address->id }}">
    @csrf
    @method('DELETE')
    <button
      class="text-red-600 text-center ml-1"
      data-ripple-light="true"
      onclick="return confirm('Are you sure you want to delete this product?')"
      >
        <i class="material-icons">delete</i>
    </button>
  </form> --}}

<form action="/placeOrder" method="POST">
  @csrf
  <div class="flex flex-row gap-10 justify-center">
    <div class="mt-0">
      {{-- name --}}
      <hr>
      <div class="flex flex-row items-center mr-1 mt-5">
        <i class="material-icons text-blue-500">person</i>
        <div class="text-gray-700 text-xl">Name</div>
      </div>
      @unless ($userAddress->isEmpty())
      @foreach ($userAddress as $address )
      <div class="flex flex-row items-center gap-1 my-2">
          <div class="inline-flex items-center">
        <label
          class="relative flex cursor-pointer items-center rounded-full p-3"
          for="html"
          data-ripple-dark="true"
        >
          <input
            id="html"
            name="customer_name"
            type="radio"
            required
            value="{{ $address->first_name . " " . $address->last_name }}"
            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10"
          />
          <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-3.5 w-3.5"
              viewBox="0 0 16 16"
              fill="currentColor"
            >
              <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
            </svg>
          </div>
        </label>
        <label
          class="mt-px cursor-pointer select-none font-light text-gray-700"
          for="html"
        >
          <div class="flex flex-row items-center gap-1">
            <div class="text-gray-700">{{ $address->first_name }}</div>
            <div class="text-gray-700">{{ $address->last_name }}</div>
          </div>
        </label>
        @error('customer_name')
                <p class="text-red-500 text-xs p-1">{{ $message }}</p>
        @enderror
      </div>
      </div>
      @endforeach
      @else
      <div class="flex flex-row items-center my-5">
        <i class="material-icons text-gray-700 pr-1">person_off</i>
        <div class="text-gray-700 font-bold">No name yet!</div>
      </div>
      @error('customer_name')
        <p class="text-red-500 text-xs p-1">The name field is required!</p>
      @enderror
      @endunless
      <hr>
      {{-- address --}}
      <hr>
      <div class="flex flex-row items-center mr-1 mt-5">
        <i class="material-icons text-blue-500">location_on</i>
        <div class="text-gray-700 text-xl">Address</div>
      </div>
      @unless ($userAddress->isEmpty())
      @foreach ($userAddress as $address )
      <div class="flex flex-row items-center gap-1 my-2">
          <div class="inline-flex items-center">
        <label
          class="relative flex cursor-pointer items-center rounded-full p-3"
          for="html"
          data-ripple-dark="true"
        >
          <input
            id="html"
            name="address"
            type="radio"
            required
            value="{{ $address->purok . " " . $address->barangay . " " . $address->municipality . " " . "Pangasinan" . " " . $address->zip_code . " " . $address->landmark }}"
            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10"
          />
          <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-3.5 w-3.5"
              viewBox="0 0 16 16"
              fill="currentColor"
            >
              <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
            </svg>
          </div>
        </label>
        <label
          class="mt-px cursor-pointer select-none flex flex-row font-light text-gray-700"
          for="html"
        >
          <div class="flex flex-row items-center gap-1">
            <div class="text-gray-700">{{ $address->purok }}</div>
            <div class="text-gray-700">{{ $address->barangay }},</div>
            <div class="text-gray-700">{{ $address->municipality }},</div>
            <div class="text-gray-700">Pangasinan</div>
            <div class="text-gray-700">{{ $address->zip_code }},</div>
            <div class="text-gray-700">{{ $address->landmark }}</div>
          </div>
        </label>
      </div>
      @error('address')
        <p class="text-red-500 text-xs p-1">The address field is required!</p>
      @enderror
      </div>
      @endforeach
      @else
      <div class="flex flex-row items-center my-5">
        <i class="material-icons text-gray-700 pr-1">location_off</i>
        <div class="text-gray-700 font-bold">No address yet!</div>
      </div>
      @error('address')
        <p class="text-red-500 text-xs p-1">The address field is required!</p>
      @enderror
      @endunless
      <hr>
      <button
      class="select-none w-80 mt-2 flex flex-row justify-center items-center rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      type="button"
      data-dialog-target="sign-in-dialog"
      >
      Add address
      <i class="material-icons ml-5">add_location</i>
      </button>
    </div>

    {{-- row 2 --}}
    <div class="flex flex-col">
      <h1 class="p-8 font-sans text-lg leading-snug uppercase font-bold tracking-normal text-blue-gray-800 antialiased">
          Payment Method
      </h1>
      <div class="inline-flex items-center">
        <label
          class="relative flex cursor-pointer items-center rounded-full p-3"
          for="html"
          data-ripple-dark="true"
        >
          <input
            id="html"
            name="payment"
            type="radio"
            required
            value="Cash on delivery"
            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10"
          />
          <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-3.5 w-3.5"
              viewBox="0 0 16 16"
              fill="currentColor"
            >
              <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
            </svg>
          </div>
        </label>
        <label
          class="mt-px cursor-pointer select-none font-light text-gray-700"
          for="html"
        >
          Cash On Delivery
        </label>
      </div>
      <div class="inline-flex items-center">
        <label
          class="relative flex cursor-pointer items-center rounded-full p-3"
          for="react"
          data-ripple-dark="true"
        >
          <input
            required
            id="react"
            name="payment"
            type="radio"
            value="Gcash"
            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-pink-500 checked:before:bg-pink-500 hover:before:opacity-10"
          />
          <div class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 opacity-0 transition-opacity peer-checked:opacity-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-3.5 w-3.5"
              viewBox="0 0 16 16"
              fill="currentColor"
            >
              <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
            </svg>
          </div>
        </label>
        <label
          class="mt-px cursor-pointer select-none font-light text-gray-700"
          for="react"
        >
          Gcash
        </label>
      </div>
      <p class="p-3 font-sans text-start text-sm leading-relaxed text-gray-700 antialiased">
        Pay via Gcash
      </p>
      <p class="p-3 font-sans italic text-start text-sm leading-relaxed text-gray-700 antialiased">
          Gcash Receipient Details
      </p>
      <div class="relative h-10 w-72 min-w-[200px]">
          <input
            class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            placeholder=" "
            name="reference_number"
          />
          <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Reference Number
          </label>
      </div>

      <button
        class="mt-5 flex justify-center items-center middle none center rounded-lg bg-pink-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        data-ripple-light="true"
        type="sumbit"
        >
        Order Now
        <i class="material-icons ml-3">shopping_bag</i>
        </button>

    </div>
  </div>
</form>

<div
  data-dialog-backdrop="sign-in-dialog"
  data-dialog-backdrop-close="true"
  class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300"
  >
  <div
    data-dialog="sign-in-dialog"
    class="relative mx-auto flex w-96 max-w-[24rem] flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md"
  >
    <div class="relative mx-4 -mt-6 mb-4 grid h-28 place-items-center overflow-hidden rounded-xl bg-gradient-to-tr from-pink-600 to-pink-400 bg-clip-border text-white shadow-lg shadow-pink-500/40">
      <h3 class="block font-sans text-3xl font-semibold leading-snug tracking-normal text-white antialiased">
        Add address
      </h3>
    </div>
  <form action="/addAddress" method="POST">
    @csrf
      <div class="flex flex-col gap-4 p-6">
        <div class="relative h-11 w-full min-w-[200px]">
          <input
            class="peer h-full w-full rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            placeholder=" "
            name="first_name"
          />
          @error('first_name')
            <p class="text-red-500 text-xs p-1">{{ $message }}</p>
          @enderror
          <label class="behtmlFore:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            First name
          </label>
        </div>
        <div class="relative h-11 w-full min-w-[200px]">
          <input
            class="peer h-full w-full rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            placeholder=" "
            name="last_name"
          />
          @error('last_name')
            <p class="text-red-500 text-xs p-1">{{ $message }}</p>
          @enderror
          <label class="behtmlFore:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Last name
          </label>
        </div>
        <div class="relative h-11 w-full min-w-[200px]">
          <input
            class="peer h-full w-full rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            placeholder=" "
            name="purok"
          />
          @error('purok')
            <p class="text-red-500 text-xs p-1">{{ $message }}</p>
          @enderror
          <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Purok
          </label>
        </div>
        <div class="relative h-11 w-full min-w-[200px]">
          <input
            class="peer h-full w-full rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            placeholder=" "
            name="barangay"
          />
          @error('barangay')
            <p class="text-red-500 text-xs p-1">{{ $message }}</p>
          @enderror
          <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Barangay
          </label>
        </div>
        <div class="relative h-11 w-full min-w-[200px]">
          <select
            class="peer h-full w-full rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            name="municipality"
            required>
            <option value="">Municipality</option>
            <option value="Agno">Agno</option>
            <option value="Aguilar">Aguilar</option>
            <option value="Alcala">Alcala</option>
            <option value="Anda">Anda</option>
            <option value="Asingan">Asingan</option>
            <option value="Balungao">Balungao</option>
            <option value="Bani">Bani</option>
            <option value="Basista">Basista</option>
            <option value="Bautista">Bautista</option>
            <option value="Bayambang">Bayambang</option>
            <option value="Binalonan">Binalonan</option>
            <option value="Binmaley">Binmaley</option>
            <option value="Bolinao">Bolinao</option>
            <option value="Bugallon">Bugallon</option>
            <option value="Burgos">Burgos</option>
            <option value="Calasiao">Calasiao</option>
            <option value="Dasol">Dasol</option>
            <option value="Infanta">Infanta</option>
            <option value="Labrador">Labrador</option>
            <option value="Laoac">Laoac</option>
            <option value="Lingayen">Lingayen</option>
            <option value="Mabini">Mabini</option>
            <option value="Malasiqui">Malasiqui</option>
            <option value="Manaoag">Manaoag</option>
            <option value="Mangaldan">Mangaldan</option>
            <option value="Mangatarem">Mangatarem</option>
            <option value="Mapandan">Mapandan</option>
            <option value="Natividad">Natividad</option>
            <option value="Pozorrobio">Pozorrubio</option>
            <option value="Rosales">Rosales</option>
            <option value="San Fabian">San Fabian</option>
            <option value="San Jacinto">San Jacinto</option>
            <option value="San Manuel">San Manuel</option>
            <option value="San Nicolas">San Nicolas</option>
            <option value="San Quintin">San Quintin</option>
            <option value="Santa Barbara">Santa Barbara</option>
            <option value="Santa Maria">Santa Maria</option>
            <option value="Santo Tomas">Santo Tomas</option>
            <option value="Sison">Sison</option>
            <option value="Sual">Sual</option>
            <option value="Tayug">Tayug</option>
            <option value="Umingan">Umingan</option>
            <option value="Urbiztondo">Urbiztondo</option>
            <option value="Villiasis">Villiasis</option>
          </select>
        </div>
        <div class="relative h-11 w-full min-w-[200px]">
          <input
            class="peer h-full w-full rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            placeholder=" "
            name="zip_code"
          />
          @error('zip_code')
            <p class="text-red-500 text-xs p-1">{{ $message }}</p>
          @enderror
          <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Zip code
          </label>
        </div>
        <div class="relative h-11 w-full min-w-[200px]">
          <input
            class="peer h-full w-full rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
            placeholder=" "
            name="landmark"
          />
          @error('landmark')
            <p class="text-red-500 text-xs p-1">{{ $message }}</p>
          @enderror
          <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
            Landmark
          </label>
        </div>
      </div>
    <div class="p-6 pt-0">
      <button
        class="block w-full select-none rounded-lg bg-gradient-to-tr from-pink-600 to-pink-400 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="submit"
        data-ripple-light="true"
      >
        Add address
      </button>
    </div>
  </form>
</div>
</div>
</div>
@push('scripts')
  <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
@endpush

  </x-layouts.app-layout>