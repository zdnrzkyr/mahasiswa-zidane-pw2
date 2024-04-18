<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Mahasiswa - Poltek Harber</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
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
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center pb-4 text-3xl font-bold">Edit Data Mahasiswa</h1>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">NIM</label>
                                <input type="text" class="form-control" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" placeholder="Masukkan NIM Mahasiswa">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" placeholder="Masukkan Nama Mahasiswa">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat Mahasiswa">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nomor HP</label>
                                <input type="text" class="form-control" name="nomorhp" value="{{ old('nomorhp', $mahasiswa->nomorhp) }}" placeholder="Masukkan Nomor HP Mahasiswa">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Motivasi Kuliah</label>
                                <textarea class="form-control" name="motivasikuliah" rows="3" placeholder="Masukkan Motivasi Kuliah Mahasiswa">{{ old('motivasikuliah', $mahasiswa->motivasikuliah) }}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
