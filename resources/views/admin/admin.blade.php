<x-layouts.admin-layout title="| Admin Panel">

<div class="flex flex-row">

    <x-partials.admin.adminAccordion />

</div>

@push('scripts')
<script src={{ asset('js/accordion.js') }}></script>
@endpush   
</x-layouts.admin-layout>