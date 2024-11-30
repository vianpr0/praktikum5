<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Daftar Perusahaan</h1>
        @if (session('success'))
            <div class="bg-green-500 text-white">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white shadow-md rounded">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 text-left">Nama</th>
                    <th class="py-3 px-4 text-left">Alamat</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Telepon</th>
                    <th class="py-3 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($perusahaans as $perusahaan)
                    <tr>
                        <td class="py-3 px-4">{{ $perusahaan->nama }}</td>
                        <td class="py-3 px-4">{{ $perusahaan->alamat }}</td>
                        <td class="py-3 px-4">{{ $perusahaan->email }}</td>
                        <td class="py-3 px-4">{{ $perusahaan->telepon }}</td>
                        <td class="py-3 px-4">
                            <a href="{{ route('perusahaan.edit', $perusahaan->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Edit</a>
                            <form action="{{ route('perusahaan.destroy', $perusahaan->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white fontbold py-1 px-3 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
