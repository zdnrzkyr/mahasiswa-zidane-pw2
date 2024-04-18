<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Mahasiswa - Poltek Harber</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-[#d2d6de]">
    <header class="mx-auto w-full bg-[#4D5DA4]">
        <nav class="py-3 justify-center text-center flex gap-5">
                <a href="https://poltekharber.ac.id/" target="_blank" class="text-white hover:no-underline">PoltekHarber</a>
                <a href="https://d3komputer.poltektegal.ac.id/" target="_blank" class="text-white hover:no-underline">D3Komputer</a>
                <a href="https://syncnau.poltektegal.ac.id/" target="_blank" class="text-white hover:no-underline">Syncnau</a>
                <a href="https://oase.poltektegal.ac.id/" target="_blank" class="text-white hover:no-underline">Oase</a>
        </nav>
    </header>
    <section>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center pb-4 text-3xl font-bold">Detail Data Mahasiswa</h1>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h4 class="pb-3 text-3xl font-bold text-[#4D5DA4]">Poltek Harber</h4>
                        <hr>
                        <div class="form-group">
                            <label class="font-weight-bold">NIM</label>
                            <p>{{ $mahasiswa->nim }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <p>{{ $mahasiswa->nama }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <p>{{ $mahasiswa->alamat }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Nomor HP</label>
                            <p>{{ $mahasiswa->nomorhp }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Motivasi Kuliah</label>
                            <p>{{ $mahasiswa->motivasikuliah }}</p>
                        </div>
                        <a href="{{ url('/mahasiswas') }}" class="bg-[#4D5DA4] py-2 px-3 text-white rounded-lg hover:no-underline">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
