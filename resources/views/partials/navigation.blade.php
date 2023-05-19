<nav class="sticky inset-0 z-10 block h-max w-full max-w-full rounded-none border border-white/80 bg-white bg-opacity-80 py-2 px-4 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
<div class="flex items-center text-gray-900">
  <a
    href="#"
    class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased"
  >
    GoBake
  </a>
  <ul class="ml-auto mr-8 {{--hidden--}} items-center gap-6 lg:flex">
    <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
      <a class="flex items-center" href="{{url('')}}">
        Home
      </a>
    </li>
    <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
      <a class="flex items-center" href="#">
        Shop
      </a>
    </li>
    <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
      <a class="flex items-center" href="#">
        Orders
      </a>
    </li>
    <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
      <a class="flex items-center" href="{{url('login')}}">
        Account
      </a>
    </li>
    <li>
        <button type="button" class="relative inline-flex items-center p-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <i class="material-icons w-10">shopping_cart</i>
          <span class="sr-only">Notifications</span>
          <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">8</div>
        </button>
    </li>
  </ul>

  <button
    class="middle none relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] rounded-lg text-center font-sans text-xs font-medium uppercase text-blue-gray-500 transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
    data-collapse-target="sticky-navar"
  >
    <span class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 transform">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6"
        fill="none"
        stroke="currentColor"
        strokeWidth="2"
      >
        <path
          strokeLinecap="round"
          strokeLinejoin="round"
          d="M4 6h16M4 12h16M4 18h16"
        ></path>
      </svg>
    </span>
  </button>
</div>

<div
  class="block h-0 w-full basis-full overflow-hidden text-blue-gray-900 transition-all duration-300 ease-in lg:hidden"
  data-collapse="sticky-navar"
>
  <ul class="mt-2 mb-4 flex flex-col gap-2 pb-2">
    <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
      <a class="flex items-center" href="#">
        Home
      </a>
    </li>
    <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
      <a class="flex items-center" href="#">
        Shop
      </a>
    </li>
    <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
      <a class="flex items-center" href="#">
        Orders
      </a>
    </li>
    <li class="block p-1 font-sans text-sm font-normal leading-normal text-inherit antialiased">
      <a class="flex items-center" href="#">
        Account
      </a>
    </li>
    <li>
      <button type="button" class="relative inline-flex items-center p-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <i class="material-icons w-10">shopping_cart</i>
        <span class="sr-only">Notifications</span>
        <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">8</div>
      </button>
  </li>
  </ul>
</div>
</nav>
