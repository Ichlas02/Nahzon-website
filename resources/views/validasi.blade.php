<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Nahzon | Output Data Pengiriman</title>
</head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="mx-auto text-center mt-5">
                            <img src="img/nahzon.png" alt="nahzon" width="300">
                        </div>
                        <h3 class="card-title text-center mt-5">
                            Data Yang Di Input
                        </h3>

                        <table class="table table-bordered table-striped mb-5">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $data->adress }}</td>
                            </tr>
                            <tr>
                                <td>No. HP</td>
                                <td>{{ $data->number }}</td>
                            </tr>
                            <tr>
                                <td>Metode Pengiriman</td>
                                <td>{{ $data->method }}</td>
                            </tr>
                            {{-- <tr>
                                <td>Asuransi (Y/N)</td>
                                <td>{{ $data->asuransi }}</td>
                            </tr> --}}
                            <tr>
                                <td>Berat Barang (kg)</td>
                                <td>{{ $data->berat }}</td>
                            </tr>
                            <tr>
                                <td style="width:200px">Foto Barang</td>
                                <td><img src="{{ $data->image }}" alt="Foto KTM" width="200px"></td>
                            </tr>
                        </table>

                        <a href="/formulir" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
{{-- @include('sweetalert::alert') --}}
</html> 