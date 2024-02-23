
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST" enctype="multipart/form-data">




                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label class="font-weight-bold form-label">SISWA</label>
                                <select class="from-select col-md-12" name="siswa_id" id="siswa_id">
                                    <option class="col-md-12" value ="">Select Nama Siswa</option>
                                    @foreach ($data as $siswa)
                                    <option class="col-md-12" value="{{ $siswa->id }}" {{ $pembayaran->siswa_id == $siswa->id ? 'selected' : ''}} > {{ $siswa->nama }} {{ $siswa->kelas }}</option>                                            {{ $siswa->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Bayar</label>
                                <input type="date" class="form-control" name="tgl_bayar" value ="{{ $pembayaran->tgl_bayar }}"placeholder="">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JUMLAH BAYAR</label>
                                <input type="int" class="form-control" name="jumlah_bayar" value="{{ $pembayaran->jumlah_bayar }}"placeholder="">

                            </div>



                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <a href="{{ route('pembayaran.index') }}" class="btn btn-md btn-warning">kembali</a>

                        </div>
                    </div>
                    </div>
                    </div>
                    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>

</body>
</html>

