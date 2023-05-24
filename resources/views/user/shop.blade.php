@section('title', '| Shop')
@include('partials.header')


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
          <span>Ingredients</span>
        </a>
        <span class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
          /
        </span>
      </li>
      <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-pink-500">
        <a class="opacity-60" href="#">
          <span>Tools</span>
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
          Cakes
        </a>
      </li>
    </ol>
  </nav>
</div>

<div class="flex flex-row">

  <div class="p-1 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
      <img
        src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FrZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60"
        class="h-full w-full object-cover"
      />
    </div>
    <div class="p-6">
      <div class="mb-2 flex items-center justify-between">
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          Strawberry Cupcake
        </p>
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          ₱98.00
        </p>
      </div>
      <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
        A delightful treat that combines the fluffy texture of a cupcake with the sweet and tangy flavor of fresh strawberries.
      </p>
    </div>
    <div class="p-6 pt-0">
      <button
        class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button"
      >
        Add to Cart
      </button>
    </div>
  </div>
  
  <div class="p-1 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
      <img
        src="https://images.unsplash.com/photo-1488477304112-4944851de03d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
        class="h-full w-full object-cover"
      />
    </div>
    <div class="p-6">
      <div class="mb-2 flex items-center justify-between">
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          Candied Blood Cake 
        </p>
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          ₱195.00
        </p>
      </div>
      <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
        A tantalizing dessert that combines the rich flavors of decadent chocolate and a hint of blood orange.
      </p>
    </div>
    <div class="p-6 pt-0">
      <button
        class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button"
      >
        Add to Cart
      </button>
    </div>
  </div>
  
  <div class="p-1 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
      <img
        src="https://images.unsplash.com/photo-1535141192574-5d4897c12636?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNha2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"
        class="h-full w-full object-cover"
      />
    </div>
    <div class="p-6">
      <div class="mb-2 flex items-center justify-between">
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          Wedding Berries Cake
        </p>
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          ₱285.00
        </p>
      </div>
      <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
        A romantic and enchanting dessert that is perfect for celebrating the union of love.
      </p>
    </div>
    <div class="p-6 pt-0">
      <button
        class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button"
      >
        Add to Cart
      </button>
    </div>
  </div>

  <div class="p-1 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
      <img
        src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=627&q=80"
        class="h-full w-full object-cover"
      />
    </div>
    <div class="p-6">
      <div class="mb-2 flex items-center justify-between">
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          Oreo Chocolate Ice Cream
        </p>
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          ₱267.00
        </p>
      </div>
      <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
        A delectable frozen dessert that combines the beloved flavors of chocolate and Oreo cookies.
      </p>
    </div>
    <div class="p-6 pt-0">
      <button
        class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button"
      >
        Add to Cart
      </button>
    </div>
  </div>
      
</div>

<nav class="p-10 flex items-center justify-center">
  <ul class="flex">
    <li>
      <a
        class="mx-1 flex h-9 w-9 items-center justify-center rounded-full border border-blue-gray-100 bg-transparent p-0 text-sm text-blue-gray-500 transition duration-150 ease-in-out hover:bg-light-300"
        href="#"
        aria-label="Previous"
      >
        <span class="material-icons text-sm">keyboard_arrow_left</span>
      </a>
    </li>
    <li>
      <a
        class="mx-1 flex h-9 w-9 items-center justify-center rounded-full bg-pink-500 p-0 text-sm text-white shadow-md transition duration-150 ease-in-out"
        href="#"
      >
        1
      </a>
    </li>
    <li>
      <a
        class="mx-1 flex h-9 w-9 items-center justify-center rounded-full border border-blue-gray-100 bg-transparent p-0 text-sm text-blue-gray-500 transition duration-150 ease-in-out hover:bg-light-300"
        href="#"
      >
        2
      </a>
    </li>
    <li>
      <a
        class="mx-1 flex h-9 w-9 items-center justify-center rounded-full border border-blue-gray-100 bg-transparent p-0 text-sm text-blue-gray-500 transition duration-150 ease-in-out hover:bg-light-300"
        href="#"
      >
        3
      </a>
    </li>
    <li>
      <a
        class="mx-1 flex h-9 w-9 items-center justify-center rounded-full border border-blue-gray-100 bg-transparent p-0 text-sm text-blue-gray-500 transition duration-150 ease-in-out hover:bg-light-300"
        href="#"
        aria-label="Next"
      >
        <span class="material-icons text-sm">keyboard_arrow_right</span>
      </a>
    </li>
  </ul>
</nav>

@include('partials.footer')