<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Undangan Digital</title>
</head>
<body>
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Daftar Paket</h3>
                <button class="btn btn-success" data-bs-title="Tambah Data Paket" attr-href="{{route('paket.tambah')}}"><i class="bi bi-plus"></i> Tambah </button>
            </div>
            <div class="card-body">
                <table class="table DataTable table-hovered table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            <div class="card-footer">

            </div>
        </div>

</body>
<footer>
</footer>
</html>

