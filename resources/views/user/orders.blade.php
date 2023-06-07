<x-layouts.app-layout title="| Orders">

  <x-partials.sidebar>

    <x-partials.orderTab/>

  </x-partials.sidebar>

  @push('scripts')
      <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>
      <script src={{ asset('js/tab.js') }}></script>
  @endpush

</x-layouts.app-layout>