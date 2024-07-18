<!DOCTYPE html>
<html lang="en"class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Selamat Datang</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-screen overflow-y-auto">
  <nav class="flex bg-[#3494ce] py-4 px-6 justify-between items-center">
    <a href="/dataku" class="flex items-center gap-2">
      <img src="https://dlhk.jogjaprov.go.id/wp-content/uploads/2023/09/Logo_DLHK-transformed-70x83.png" alt="Logo Dinas LHK" class="h-10 object-contain">
      <div class="flex flex-col text-xs text-white">
        <p class="font-bold">Dinas Lingkungan Hidup dan Kehutanan</p>
        <p>Daerah Istimewa Yogyakarta</p>
      </div>
    </a>
    <button class="py-1 px-6 flex items-center gap-2 font-medium text-xs hover:cursor-pointer bg-white fill-slate-400 rounded-md text-black hover:text-sky-500 hover:stroke-sky-500">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="10" height="10" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
      </svg>
      Login
    </button>
  </nav>
  <main class="flex h-full bg-stone-50" x-data="{ add: false, download: false }">
    <x-sidebar :parents="$parents" :title="$title" :subtitle="$subtitle"></x-sidebar>
    <div class="w-full" >
    </div>
  </main>
  <script async src="node_modules/@material-tailwind/html/scripts/ripple.js"></script>
</body>
</html>