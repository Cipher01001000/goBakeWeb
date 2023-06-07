<x-layouts.app-layout title="| Cart">

<!-- Breadcrumb -->
    <x-partials.cartBreadcrumb>

        {{-- Content --}}
        <x-partials.cartTabContent />
        
    </x-partials.cartBreadcrumb>
  
@push('scripts')
      <script src={{ asset('js/tab.js') }}></script>
@endpush

</x-layouts.app-layout>