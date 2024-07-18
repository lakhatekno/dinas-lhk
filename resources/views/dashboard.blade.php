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
  <nav class="h-fit flex py-4 px-6 justify-between items-center bg-[#3494ce]">
    <a href="/dataku" class="flex items-center gap-2">
      <img src="https://dlhk.jogjaprov.go.id/wp-content/uploads/2023/09/Logo_DLHK-transformed-70x83.png" alt="Logo Dinas LHK" class="h-10 object-contain">
      <div class="flex flex-col text-xs text-white">
        <p class="font-bold">Dinas Lingkungan Hidup dan Kehutanan</p>
        <p>Daerah Istimewa Yogyakarta</p>
      </div>
    </a>
    <button class="py-1 px-6 flex items-center gap-2 font-medium text-xs hover:cursor-pointer bg-white fill-slate-400 rounded-md text-black hover:text-sky-500 hover:stroke-sky-500">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      UserName
    </button>
  </nav>
  <main class="flex h-full bg-stone-50" x-data="{ add: false }">
    <x-sidebar :parents="$parents" :title="$title" :subtitle="$subtitle"></x-sidebar>
    <div class="w-full" >
      {{-- head --}}
  
      <div class="px-2 py-4 bg-slate-200">
        <h1 class="text-xl text-slate-500">{{ $title }}</h1>
        <p class="font-bold text-sky-400">{{ $subtitle }}</p>
      </div>
      {{-- buttons --}}
      <div class="">
        <div class="flex justify-end px-2 py-4 gap-2 items-center">
          <button 
            @click="add = !add" 
            :class="!add ? 'bg-green-500' : 'bg-red-500'"
            class=" w-fit rounded-md px-4 py-1 text-xs font-bold text-white flex items-center gap-1 justify-center">
            <svg x-show="!add" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>           
            <svg x-show="add" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>           
            <span x-text="add ? 'Batal' : 'Tambah Data'"></span>
          </button>
          <p class="text-slate-400">|</p>
          <form action="{{ url('/dataku/administrator/' . $slug . '/delete-all') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus semua data?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-fit bg-red-500 rounded-md px-4 py-1 text-xs font-bold text-white flex items-center gap-1 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="15" y1="9" x2="9" y2="15"/>
                    <line x1="9" y1="9" x2="15" y2="15"/>
                </svg>           
                Hapus Semua
            </button>
          </form>
          <p class="text-slate-400">|</p>
          <a href="{{ route('export.submenu.data', ['slug' => $slug]) }}">
            <button 
              type="button"
              class=" w-fit bg-yellow-500 rounded-md px-4 py-1 text-xs font-bold text-white flex items-center gap-1 justify-center">
              <svg class="fill-white" width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.75 2.75C8.75 2.33579 8.41421 2 8 2C7.58579 2 7.25 2.33579 7.25 2.75L7.25 8.43934L5.03033 6.21967C4.73744 5.92678 4.26256 5.92678 3.96967 6.21967C3.67678 6.51256 3.67678 6.98744 3.96967 7.28033L7.46967 10.7803C7.76256 11.0732 8.23744 11.0732 8.53033 10.7803L12.0303 7.28033C12.3232 6.98744 12.3232 6.51256 12.0303 6.21967C11.7374 5.92678 11.2626 5.92678 10.9697 6.21967L8.75 8.43934L8.75 2.75Z" fill="currentColor"/>
                <path d="M3.5 9.75C3.5 9.33579 3.16421 9 2.75 9C2.33579 9 2 9.33579 2 9.75V11.25C2 12.7688 3.23122 14 4.75 14H11.25C12.7688 14 14 12.7688 14 11.25V9.75C14 9.33579 13.6642 9 13.25 9C12.8358 9 12.5 9.33579 12.5 9.75V11.25C12.5 11.9404 11.9404 12.5 11.25 12.5H4.75C4.05964 12.5 3.5 11.9404 3.5 11.25V9.75Z" fill="currentColor"/>
              </svg>
              Download .xlsx
            </button>
          </a>
          <p class="text-slate-400">|</p>
          <button type="button" onclick="updateData2024()" class=" w-fit bg-cyan-500 rounded-md px-4 py-1 text-xs font-bold text-white flex items-center gap-1 justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>           
            Update Semua Data
          </button>
        </div>
      </div>
      {{-- tabel --}}
      <form action="/dataku/administrator/store" method="POST" x-show="add" class="flex flex-col-reverse">
        @csrf
        <table class="table-auto w-full text-xs font-bold mb-2"  >
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
          <tbody>
            <tr class="border-b-2  border-slate-200">
              <td class="w-fit px-1 pl-2 py-4">
                <input required type="text" id="kode" name="kode"class="border-0 border-b focus:outline-none  border-sky-500 w-12 mx-auto bg-transparent py-1 pl-1">
                @error('kode')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input required type="text" id="elemen" name="elemen" class="border-0 border-b focus:outline-none  border-sky-500 w-44 mx-auto bg-transparent py-1 pl-1">
                @error('elemen')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" id="data2021" name="data2021" class="border-0 border-b focus:outline-none  border-sky-500 w-12 mx-auto bg-transparent py-1 pl-1">
                @error('data2021')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <td class=" w-fit px-1 pl-2 py-4">
                <input type="text" id="data2022" name="data2022" class="border-0 border-b focus:outline-none  border-sky-500 w-12 mx-auto bg-transparent py-1 pl-1">
                @error('data2022')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" id="data2023" name="data2023" class="border-0 border-b focus:outline-none  border-sky-500 w-12 mx-auto bg-transparent py-1 pl-1">
                @error('data2023')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <td class="w-fit px-1 py-2">
                <input type="text" id="data2024" name="data2024" class="border-0 border-b focus:outline-none  border-sky-500 w-12 mx-auto bg-transparent py-1 pl-1">
                @error('data2024')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <td class="w-fit px-1 pl-2 py-4 flex justify-center mx-auto">
                <input value="%" type="text" name="satuan" id="satuan" class="border-0 border-b focus:outline-none  border-sky-500 w-12 mx-auto bg-transparent py-1 pl-1">
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input value="Tahunan" type="text" id="sifat_data" name="sifat_data" class="border-0 border-b focus:outline-none  border-sky-500 w-20 mx-auto bg-transparent py-1 pl-1">
                @error('sifat_data')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <td class="w-fit px-1 py-4">
                <select name="status" id="status" selected="tidak ada" class="border-0 border-b focus:outline-none  border-sky-500 w-16 mx-auto bg-transparent py-1 pl-1">
                  <option value="tidak ada">Tidak ada</option>
                  <option value="sementara">Sementara</option>
                  <option value="tetap">Tetap</option>
                </select>
                @error('status')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" name="otoritas" id="otoritas" value="semua" class="capitalize border-0 border-b focus:outline-none  border-sky-500 w-16 mx-auto bg-transparent py-1 pl-1">
                @error('otoritas')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <td class="w-fit px-1 pl-2 py-4">
                <input type="text" name="verifikasi" id="verifikasi" class="border-0 border-b focus:outline-none  border-sky-500 w-16 mx-auto bg-transparent py-1 pl-1">
                @error('verifikasi')
                <br><span class="text-red-500 text-xs font-light">{{ $message }}</span>
                @enderror
              </td>
              <input type="text" id="slug" name="slug" value="{{ $slug }}" class="hidden">
            </tr>
          </tbody>
          <button type="submit" class="w-fit mb-14 ml-2 bg-green-500 rounded-lg px-4 py-1 text-xs font-bold text-white flex items-center gap-1 justify-center">Tambah ke Database</button>
        </table>
      </form>
      <table class="table-auto w-full text-xs">
        <thead class="font-bold">
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
        <tbody class="font-regular">
          @foreach ($datas as $data)
          <tr class="border-b-2 border-slate-200">
              <td class="w-fit px-1 pl-2 py-4 font-bold">{{ $data->kode }}</td>
              <td class="w-fit px-1 pl-2 py-4 text-sky-500 font-bold">{{ $data->elemen }}</td>
              <td class="w-fit px-1 pl-2 py-4">{{ $data->data2021 }}</td>
              <td class="w-fit px-1 pl-2 py-4">{{ $data->data2022 }}</td>
              <td class="w-fit px-1 pl-2 py-4">{{ $data->data2023 }}</td>
              <td class="w-fit px-1 py-2 flex justify-center mx-auto">
                  <input 
                      type="number" 
                      value="{{ $data->data2024 }}" 
                      class="border border-slate-500 w-12 mx-auto rounded-md bg-transparent py-1 pl-1 data2024"
                      data-kode="{{ $data->kode }}"
                      data-slug="{{ $data->slug }}"
                  >
              </td>
              <td class="w-fit px-1 pl-2 py-4">{{ $data->satuan }}</td>
              <td class="w-fit px-1 pl-2 py-4">{{ $data->sifat_data }}</td>
              <td class="w-fit px-1 py-4">
                  <select 
                      name="status" 
                      class="status"
                      data-kode="{{ $data->kode }}"
                      data-slug="{{ $data->slug }}"
                  >
                      <option value="tidak ada" {{ $data->status == 'tidak ada' ? 'selected' : '' }}>Tidak ada</option>
                      <option value="sementara" {{ $data->status == 'sementara' ? 'selected' : '' }}>Sementara</option>
                      <option value="tetap" {{ $data->status == 'tetap' ? 'selected' : '' }}>Tetap</option>
                  </select>
              </td>
              <td class="w-fit px-1 pl-2 py-4 capitalize">{{ $data->otoritas }}</td>
              <td class="w-fit px-1 pl-2 py-4">{{ $data->verifikasi }}</td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>
  </main>
  <script async src="node_modules/@material-tailwind/html/scripts/ripple.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
    function updateData2024() {
      const dataToUpdate = [];
      document.querySelectorAll('.data2024').forEach(input => {
        const kode = input.getAttribute('data-kode');
        const slug = input.getAttribute('data-slug');
        const data2024 = input.value;
        const status = document.querySelector(`.status[data-kode="${kode}"][data-slug="${slug}"]`).value;

        dataToUpdate.push({
            kode: kode,
            slug: slug,
            data2024: data2024,
            status: status
        });
      });

      axios.post('/dataku/administrator/update', {
        data: dataToUpdate
      })
      .then(response => {
          console.log('Data updated successfully');
      })
      .catch(error => {
          console.error('Error updating data:', error);
      });
    }
  </script>
</body>
</html>