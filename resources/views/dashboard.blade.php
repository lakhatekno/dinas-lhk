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
  <nav class="flex bg-[#3494ce] py-4 px-6 justify-between">
    <a href="/">
      <img src="https://bappeda.jogjaprov.go.id/dataku/static/images/logo_jogja_dataku.png" alt="Logo Jogja Dataku" class="h-10 object-contain">
    </a>
    <button class="py-0.5 px-6 font-medium hover:cursor-pointer bg-white fill-slate-400 rounded-lg text-black flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      UserName
    </button>
  </nav>
  <main class="flex h-full bg-stone-50">
    <x-sidebar :parents="$parents"></x-sidebar>
    <div class="w-full">
      {{-- head --}}
  
      <div class="px-2 py-4 bg-slate-200">
        <h1 class="text-xl text-slate-500">{{ $title }}</h1>
        <p class="font-bold text-sky-400">{{ $subtitle }}</p>
      </div>
      {{-- buttons --}}
      <div class="">
        <div class="flex justify-end px-2 py-4 gap-2 items-center">
          <select name="" id="" class="w-fit bg-stone-50 focus:border-0 text-sm px-4 py-1 rounded-lg">
            <option value="">2024</option>
            <option value="">2023</option>
            <option value="">2022</option>
            <option value="">2021</option>
          </select>
          <p class="text-slate-400">|</p>
          <button class=" w-fit bg-green-500 rounded-lg px-4 py-1 text-xs font-bold text-white flex items-center gap-1 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>           
            ADD DATA
          </button>
          <p class="text-slate-400">|</p>
          <button class=" w-fit bg-red-500 rounded-lg px-4 py-1 text-xs font-bold text-white flex items-center gap-1 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>           
            CLEAR DATA
          </button>
          <p class="text-slate-400">|</p>
          <button class=" w-fit bg-yellow-500 rounded-lg px-4 py-1 text-xs font-bold text-white flex items-center gap-1 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>           
            COPY DATA
          </button>
          <p class="text-slate-400">|</p>
          <button class=" w-fit bg-cyan-500 rounded-lg px-4 py-1 text-xs font-bold text-white flex items-center gap-1 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>           
            PROSES
          </button>
        </div>
      </div>
      {{-- tabel --}}
      <table class="table-auto w-full text-xs font-bold">
        <thead>
          <tr class=" bg-gray-300 py-2">
            <th class="w-fit px-1 py-2.5">Kode</th>
            <th class="w-fit px-1 py-2.5">Elemen</th>
            <th class="w-fit px-1 py-2.5">2021</th>
            <th class="w-fit px-1 py-2.5">2022</th>
            <th class="w-fit px-1 py-2.5">2023</th>
            <th class="w-fit px-1 py-2.5">2024</th>
            <th class="w-fit px-1 py-2.5">Satuan</th>
            <th class="w-fit px-1 py-2.5">Sifat Data</th>
            <th class="w-fit px-1 py-2.5">Status</th>
            <th class="w-fit px-1 py-2.5">Otoritas</th>
            <th class="w-fit px-1 py-2.5">Verifikasi</th>
          </tr>
        </thead>
          <form action="">
            <tr class="border-b-2  border-slate-200">
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" id="kode" name="kode"class="border border-slate-500 w-12 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" id="elemen" name="elemen" class="border border-slate-500 w-32 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" id="data2021" name="data2021" class="border border-slate-500 w-12 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
              <td class=" w-fit px-1 pl-2 py-4">
                <input type="text" id="data2022" name="data2022" class="border border-slate-500 w-12 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" id="data2023" name="data2023" class="border border-slate-500 w-12 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
              <td class="w-fit px-1 py-2">
                <input type="text" id="data2024" name="data2024" class="border border-slate-500 w-12 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
              <td class="w-fit px-1 pl-2 py-4 flex justify-center mx-auto">
                <input type="text" name="satuan" id="satuan" class="border border-slate-500 w-12 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" id="sifat" name="sifat" class="border border-slate-500 w-20 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
              <td class="w-fit px-1 py-4">
                <select name="status" id="status" selected="--pilih status--" class="border border-slate-500 w-16 mx-auto rounded-md bg-transparent py-1 pl-1">
                  <option value="tidak ada">Tidak ada</option>
                  <option value="sementara">Sementara</option>
                  <option value="tetap">Tetap</option>
                </select>
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" name="otoritas" id="otoritas" class="border border-slate-500 w-16 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" name="verifikasi" id="verifikasi" class="border border-slate-500 w-16 mx-auto rounded-md bg-transparent py-1 pl-1">
              </td>
            </tr>
          </form>
          @foreach ($datas as $data)
          <tr class="border-b-2  border-slate-200">
            <td class="w-fit px-1 pl-2 py-4">{{ $data->kode }}</td>
            <td class="w-fit px-1 pl-2 py-4 text-sky-500">{{ $data->elemen }}</td>
            <td class="w-fit px-1 pl-2 py-4">{{ $data->data2021 }}</td>
            <td class=" w-fit px-1 pl-2 py-4">{{ $data->data2022 }}</td>
            <td class="w-fit px-1 pl-2 py-4">{{ $data->data2023 }}</td>
            <td class="w-fit px-1 py-2 flex justify-center mx-auto">
              <input type="number" value="{{ $data->data2024 }}" class="border border-slate-500 w-12 mx-auto rounded-md bg-transparent py-1 pl-1">
            </td>
            <td class="w-fit px-1 pl-2 py-4">{{ $data->satuan }}</td>
            <td class="w-fit px-1 pl-2 py-4">{{ $data->sifat_data }}</td>
            <td class="w-fit px-1 py-4">
              <select name="" id="" selected="{{ $data->status }}">
                <option value="tidak ada">Tidak ada</option>
                <option value="sementara">Sementara</option>
                <option value="tetap">Tetap</option>
              </select>
            </td>
            <td class="w-fit px-1 pl-2 py-4">{{ $data->otoritas }}</td>
            <td class="w-fit px-1 pl-2 py-4">{{ $data->verifikasi }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
  </main>
  <script async src="node_modules/@material-tailwind/html/scripts/ripple.js"></script>
</body>
</html>