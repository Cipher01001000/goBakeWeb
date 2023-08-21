@if (session()->has('success'))
<div
  class="font-regular relative block w-full m-auto max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
  data-dismissible="alert"
  x-data="{show: true}"
  x-init="setTimeout(() => show = false, 1000)"
  x-show="show"
  >
  <div class="absolute top-4 left-4">
    <i class="material-icons">check_circle</i>
  </div>
  <div class="ml-8 mr-12">
    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
      Success
    </h5>
    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
      {{ session('success') }}
    </p>
  </div>
  <div
    data-dismissible-target="alert"
    data-ripple-dark="true"
    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
  >
    <div role="button" class="w-max rounded-lg p-1">
      <i class="material-icons">close</i>
    </div>
  </div>
</div>
@endif