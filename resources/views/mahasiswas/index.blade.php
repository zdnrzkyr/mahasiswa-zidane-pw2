<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa - Poltek Harber</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4 text-4xl text-black font-semibold">DATA MAHASISWA <span class="text-[#4D5DA4] font-bold">POLTEK HARBER</span></h3>
                    <h5 class="text-center mb-4 text-2xl text-[#4D5DA4] font-bold">D3 TEKNIK KOMPUTER</h5>         
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('mahasiswas.create') }}" class="btn btn-md btn-success mb-3">Tambah Mahasiswa</a>
                        <table class="table table-bordered">
                            <thead class="">
                              <tr class="text-center bg-[#4D5DA4] text-white">
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nomor HP</th>
                                <th scope="col">Motivasi Kuliah</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($mahasiswas as $mahasiswa)
                                <tr class="bg-[#f4f4f4]">
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{{ $mahasiswa->alamat }}</td>
                                    <td>{{ $mahasiswa->nomorhp }}</td>
                                    <td>{{ $mahasiswa->motivasikuliah }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah yakin untuk menghapus data?');" action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST">
                                            <a href="{{ route('mahasiswas.show', $mahasiswa->id) }}" class="btn btn-sm btn-dark">Show</a>
                                            <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <tr>
                                      <td colspan="6" class="text-center">Data Mahasiswa belum Tersedia.</td>
                                  </tr>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $mahasiswas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    {{-- <footer class="py-2 bg-[#f4f4f4] text-center">Copyright @ Zidane Rizky R</footer> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>
