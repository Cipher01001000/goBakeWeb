<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Go Bake {{ $title }}</title>
  @vite('resources/css/app.css')
  <link href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
</head>
<body>
  <x-partials.nav />

  {{ $slot }}

</body>
<footer class="w-full bg-white p-8">
  <div class="flex flex-row flex-wrap items-center justify-center gap-y-6 gap-x-12 bg-white text-center md:justify-between">
  <i class="material-icons w-10">cake</i>
    <ul class="flex flex-wrap items-center gap-y-2 gap-x-8">
      <li>
        <a
          href="#"
          class="block font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased transition-colors hover:text-pink-500 focus:text-pink-500">
          About Us </a>
          <div class="flex flex-col">
            <div class="flex flex-row p-2 text-cyan-500"><i class="material-icons w-10">info</i>A IT Students that are developing<br>
              a capstone project for BSIT</div>
          </div>
      </li>
      <li>
        <a
          href="{{ url('contact') }}"
          class="block font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased transition-colors hover:text-pink-500 focus:text-pink-500">
          Contact Us </a>
          <div class="flex flex-col">
            <div class="flex flex-row p-2 text-cyan-500"><i class="material-icons w-10">call</i>+639876543210</div>
            <div class="flex flex-row p-2 text-cyan-500"><i class="material-icons w-10">email</i>gobake45@gmail.com</div>
            <div class="flex flex-row p-2 text-cyan-500"><i class="material-icons w-10">location_on</i>Pangasinan, Philippines</div>
          </div>
      </li>
      <li>
        <a
          href="#"
          class="block font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased transition-colors hover:text-pink-500 focus:text-pink-500">
          Follow Us </a>
          <div class="flex flex-col">
            <div class="flex flex-row p-2 text-cyan-500"><i class="material-icons w-10">facebook</i>facebook/goBakePangasinan</div>
          </div>
      </li>
    </ul>
  </div>
  <hr class="my-8 border-blue-gray-50" />
  <p class="block text-center font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
    © 2023 IT Horizon | GoBake
  </p>
</footer>
<script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
@stack('scripts')

</html>
