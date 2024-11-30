<x-app-layout>
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Edit Perusahaan</h1>

        <!-- Menampilkan pesan error jika ada -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded
relative mb-6" role="alert">
                <strong class="font-bold">Ada kesalahan dalam input:</strong>
                <ul class="list-disc pl-5 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form untuk mengedit perusahaan -->
        <form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama
                    Perusahaan</label>
                <input type="text" name="nama" id="nama"
                    class="shadow appearance-none
border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
focus:shadow-outline"
                    value="{{ old('nama', $perusahaan->nama) }}">
            </div>

            <div class="mb-4">
                <label for="alamat" class="block text-gray-700 text-sm font-bold mb2">Alamat</label>
                <input type="text" name="alamat" id="alamat"
                    class="shadow appearance-none
border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
focus:shadow-outline"
                    value="{{ old('alamat', $perusahaan->alamat) }}">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb2">Email</label>
                <input type="email" name="email" id="email"
                    class="shadow appearance-none
border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
focus:shadow-outline"
                    value="{{ old('email', $perusahaan->email) }}">
            </div>

            <div class="mb-4">
                <label for="telepon" class="block text-gray-700 text-sm font-bold mb2">Telepon</label>
                <input type="text" name="telepon" id="telepon"
                    class="shadow appearance-none
border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none
focus:shadow-outline"
                    value="{{ old('telepon', $perusahaan->telepon) }}">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold
py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update
                </button>
                <a href="{{ route('perusahaan.index') }}"
                    class="bg-gray-500 hover:bg-gray-700
text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
