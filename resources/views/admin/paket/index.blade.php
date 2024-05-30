@extends ('template/admin')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>Data Paket</h3>
            <button class="btn btn-success btnTambahBarang" data-bs-title="Tambah Data Paket" data-bs-target='#modalForm' data-bs-toggle="modal" href="{{ route('admin.paket.tambah') }}"><i class="bi bi-plus"></i> Tambah </button>
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
    <!-- Bagian Modal -->
    <div class="modal fade" id="modalForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btnSimpanBarang"><i class="bi bi-save"></i> Simpan</button>
                    <button class="btn btn-primary" data-bs-dismiss="modal"> Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection