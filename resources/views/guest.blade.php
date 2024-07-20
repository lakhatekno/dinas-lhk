<!DOCTYPE html>
<html lang="en"class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>'{{ $keyword }}' dalam Pencarian</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-screen overflow-y-auto">
  <x-nav></x-nav>
  <main class="flex flex-col h-full w-full">
    <!-- Modal Login -->
    <x-login-form></x-login-form>
    <div class="w-full h-fit flex flex-col items-center justify-center gap-4 my-8">
      <h1 class="text-3xl font-bold">Hasil Pencarian</h1>
      <form action="{{ route('search.submenu') }}" method="POST" class="relative mb-3">
        @csrf
        <input 
          value="{{ $keyword }}"
          placeholder="Masukkan kata kunci"
          name="keyword"
          type="text" 
          id="keyword"
          class="block w-full border-0 border-b border-b-sky-400 bg-transparent appearance-none py-3 pl-4 pr-12 text-base text-slate-900 placeholder:text-slate-600 focus:outline-none sm:text-sm sm:leading-6"
          aria-label="Search components" 
          aria-expanded="false" aria-autocomplete="list" data-headlessui-state="autofocus" data-autofocus="" style="caret-color: rgb(107, 114, 128);">
        <button type="submit" class="hover:cursor-pointer absolute right-4 top-3 h-6 w-6">
          <svg class="fill-sky-400" xmlns="http://www.w3.org/2000/svg"><path d="M20.47 21.53a.75.75 0 1 0 1.06-1.06l-1.06 1.06Zm-9.97-4.28a6.75 6.75 0 0 1-6.75-6.75h-1.5a8.25 8.25 0 0 0 8.25 8.25v-1.5ZM3.75 10.5a6.75 6.75 0 0 1 6.75-6.75v-1.5a8.25 8.25 0 0 0-8.25 8.25h1.5Zm6.75-6.75a6.75 6.75 0 0 1 6.75 6.75h1.5a8.25 8.25 0 0 0-8.25-8.25v1.5Zm11.03 16.72-5.196-5.197-1.061 1.06 5.197 5.197 1.06-1.06Zm-4.28-9.97c0 1.864-.755 3.55-1.977 4.773l1.06 1.06A8.226 8.226 0 0 0 18.75 10.5h-1.5Zm-1.977 4.773A6.727 6.727 0 0 1 10.5 17.25v1.5a8.226 8.226 0 0 0 5.834-2.416l-1.061-1.061Z"></path></svg>
        </button>
      </form>
    </div>
    <div class="w-4/5 mx-auto rounded-lg">
      @foreach ($results as $result)
      <div class="bg-white py-4 px-4">
        <a href="/dataku/{{ $result->slug }}"
          class="text-xl text-sky-500 hover:underline font-semibold uppercase"  
        >
          <h2 class="">{{ $result->elemen }}</h2>
        </a>
        <p class="font-light">
          <span class="font-bold">
            Bidang Urusan: 
          </span>
          {{ $result->item->parent->name }}</p>
        <p class="font-light">
          <span class="font-bold">
            Elemen: 
          </span>
          {{ $result->item->name }}
        </p>
        <p class="font-light">
          <span class="font-bold">
            Satuan: 
          </span>
          {{ $result->satuan }}
        </p>
      </div>
      @endforeach
    </div>

  </main>
  <script async src="node_modules/@material-tailwind/html/scripts/ripple.js"></script>
  <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>