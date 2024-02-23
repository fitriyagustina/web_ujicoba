<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control" name="nama"
                                    placeholder="Masukkan Nama Anda">

                                <!-- error message untuk title -->
                                @error('siswa')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">KELAS</label>
                                <div class="mb-3">
                                      <select name="kelas" class="form-control" id="exampleDropdown">

                                        <option value=""></option>
                                        <option value="XII-REKAYASA PERANGKAT LUNAK">XII-REKAYASA PERANGKAT LUNAK</option>
                                        <option value="XII-LISTRIK">XII-LISTRIK</option>
                                        <option value="XII-MULTIMEDIA">XII-MULTIMEDIA</option>
                                        <option value="XII-TEKNIK KOMPUTER JARINGAN">XII-TEKNIK KOMPUTER JARINGAN</option>
                                        <option value="XII-MEKATRONIKA">XII-MEKATRONIKA</option>
                                        <option value="XII-TATA BUSANA">XII-TATA BUSANA</option>
                                        <option value="XII-ELEKTRONIKA">XII-ELEKTRONIKA</option>
                                        <option value="XII-OTOTRONIKA">XII-OTOTRONIKA</option>

                                    </select>
                                </div>
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>



                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <a href="{{ route('siswa.index') }}" class="btn btn-md btn-warning">kembali</a>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>


</body>
</html>
