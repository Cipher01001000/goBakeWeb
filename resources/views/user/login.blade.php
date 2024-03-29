<x-layouts.app-layout title="| Login">

  <div class="flex flex-row items-center justify-center">

    <div class="p-10">
    
      <h1 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
        Welcome to GoBake:
      </h1>
      <h1 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
        The Ultimate Destination for Baking Enthusiasts!
      </h1>
      <p class="mt-1 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
        Discover a world of delicious possibilities with our <br>
        exclusive e-commerce platform that caters to all your <br>
        baking needs.
      </p>
    
      <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-lg shadow-sm bg-white bg-clip-border text-gray-700">
        <img
          src="https://images.unsplash.com/photo-1596721984421-013040068576?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmFrZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=600&q=60" 
          class="h-full w-full object-cover"
        />
      </div>
    
    </div>
    
    <div class="p-10">
    
      <main class="bg-gray-100 max-w-lg mx-auto w-full p-5 rounded-sm shadow-2xl m-10">
        <form method="POST" action="user/authenticate" class="flex flex-col">
          @csrf
          <h4 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
            Login
          </h4>
          <div class="w-full mt-5 mb-5">
            <div class="relative h-10 w-full min-w-[200px]">
              <input
                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" " 
                type="email"
                name="email"
                value="{{ old('email') }}"
              />
              @error('email')
                <p class="text-red-500 text-xs p-1">{{ $message }}</p>
              @enderror
              <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-blue-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-blue-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-blue-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                Email
              </label>
            </div>
          </div>
          <div class="w-full mt-5 mb-5">
            <div class="relative h-10 w-full min-w-[200px]">
              <input
                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-blue-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" " 
                type="password"
                name="password"
                value="{{ old('password') }}"
              />
              @error('password')
                <p class="text-red-500 text-xs">{{ $message }}</p>
              @enderror
              <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-blue-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-blue-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-blue-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                Password
              </label>
            </div>
          </div>
          <a
            class="font-medium text-deep-purple-500 mt-2 text-end transition-colors hover:text-blue-700 "
            href="{{url("forgot_password")}}"
          >Forgot Password
          </a>
          <button
            class="middle none center rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none mt-5"
            data-ripple-light="true"
            type="submit">
            Sign in
          </button>
        
        <p class="p-10 block text-center font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
          Dont have an account?
          <a
            class="font-medium text-deep-purple-500 transition-colors hover:text-blue-700 "
            href="{{url("register")}}"
          >
          &nbsp;Sign Up
          </a>
        </p>
    
        <h2 class="text-gray-800 text-center">Or</h2>
        <button
        class="flex justify-center select-none items-center gap-3 py-3.5 px-7 text-center align-middle font-sans text-sm text-blue-gray-500 transition-all hover:opacity-75 focus:ring focus:ring-blue-gray-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none m-5"
        type="button" data-ripple-dark="true">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png" alt="metamask" class="h-6 w-6" />
        Continue with Google
        </button>
        </form>
      </main>
    
    </div>
    
    </div>

</x-layouts.app-layout>