<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Akomodasi</title>
</head>
<body>
    <h1>Manajemen Akomodasi</h1>
    
    <!-- Form Tambah Akomodasi -->
    <form action="{{ route('accommodations.store') }}" method="POST">
        @csrf
        <input type="text" name="nama_hotel" placeholder="Nama Hotel" required><br>
        <input type="number" name="harga" placeholder="Harga per Malam" required><br>
        <input type="number" name="jumlah_kamar" placeholder="Jumlah Kamar" required><br>
        <button type="submit">Tambah Akomodasi</button>
    </form>

    <!-- Daftar Akomodasi -->
    <h2>Daftar Akomodasi</h2>
    <button>
        <a href="cetak">Cetak</a>
    </button>
    <ul>
        @foreach ($accommodations as $accommodation)
            <li>
                <strong>{{ $accommodation->nama_hotel }}</strong><br>
                Harga: Rp{{ number_format($accommodation->harga, 0, ',', '.') }}<br>
                Jumlah Kamar: {{ $accommodation->jumlah_kamar }}
            </li>
        @endforeach
    </ul>
</body>
</html>
