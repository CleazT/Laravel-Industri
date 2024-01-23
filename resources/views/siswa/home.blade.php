<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
            keyframes: {
                fadeOut: {
                    '0%': {
                        opacity: '0',
                    },
                    '10%': {
                        opacity: '1',
                    },
                    '85%': {
                        opacity: '1',
                    },
                    '100%': {
                        opacity: '0',
                    },
                },
            },
            animation: {
                fade: 'fadeOut 2s ease-in-out',
            },
            fontFamily: {
            'archivo': ['Archivo']
        },
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium transition hover:scale-105" aria-current="page">Home</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium transition hover:scale-105">Tambah</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="absolute -inset-1.5"></span>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
      <a href="tambah" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Tambah</a>
    </div>
  </div>
</nav>
  <table class="mx-auto mt-16 text-center">
    <tr class=" bg-slate-600 text-white">
      <th class="border-2 border-black p-1.5">Id</th>
      <th class="border-2 border-black p-1.5">NISN</th>
      <th class="border-2 border-black p-1.5">Nama</th>
      <th class="border-2 border-black p-1.5">Alamat</th>
      <th class="border-2 border-black p-1.5">Aksi</th>
    </tr>
    @foreach ($data as $item)
    <tr>
      <td class="border-2 border-slate-800 p-1.5">{{ $item->id }}</td>
      <td class="border-2 border-slate-800 p-1.5">{{ $item->nisn }}</td>
      <td class="border-2 border-slate-800 p-1.5">{{ $item->nama }}</td>
      <td class="border-2 border-slate-800 p-1.5">{{ $item->alamat }}</td>
      <td class="border-2 border-slate-800 p-1.5"><button type="submit" class="bg-red-500 py-1.5 px-3 rounded-lg text-white font-semibold transition hover:scale-105 hover:bg-red-600">Hapus</button>
      <button type="submit" class="ml-2 bg-sky-500 py-1.5 px-5 rounded-lg text-white font-semibold transition hover:scale-105 hover:bg-sky-600">Edit</button></td>
    </tr>
    @endforeach
  </table>
</body>
</html>