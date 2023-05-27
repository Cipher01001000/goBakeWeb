<x-app-layout title="| Orders">

  <x-partials.sidebar>

    <x-partials.orderTab/>

  </x-partials.sidebar>

  @push('scripts')
      <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/tabs.js"></script>
  @endpush

</x-app-layout>