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
            <a href="/tambah" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium transition hover:scale-105">Tambah</a>
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
      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Tambah</a>
    </div>
  </div>
</nav>

{{-- FORM --}}

<form action="/tambah-data" method="post">
    @csrf
    <div class="space-y-12 max-w-[760px] mx-auto mt-4">
  
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Tambah Data</h2>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 grid-rows-1">
          <div class="sm:col-span-3">
            <label for="nisn" class=" after:content-['*'] after:text-red-600 block text-sm font-medium leading-6 text-gray-900">Nisn</label>
            <div class="mt-2">
              <input required type="text" name="nisn" id="nisn" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2" placeholder="Masukan NISN">
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="nama" class=" after:content-['*'] after:text-red-600 block text-sm font-medium leading-6 text-gray-900">Nama</label>
            <div class="mt-2">
              <input required type="text" name="nama" id="nama" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2" placeholder="Masukan Nama">
            </div>
          </div>
  
          <div class="sm:col-span-4">
            <label for="alamat" class=" after:content-['*'] after:text-red-600 block text-sm font-medium leading-6 text-gray-900">Alamat</label>
            <div class="mt-2">
              <input required id="text" name="alamat" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-2" placeholder="Masukan Alamat">
            </div>
            <a href="home">Back</a>
          </div>
  
    <div class="mt-6 flex items-center gap-x-4">
      <button type="button" class="ml-1 text-sm font-semibold leading-6 text-gray-900 transition hover:text-red-600">Batalkan</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm transition hover:scale-105 hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
    </div>
  </form>
</body>
</html>