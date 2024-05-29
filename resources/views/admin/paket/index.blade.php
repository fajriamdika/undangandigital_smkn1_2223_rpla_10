@extends ('template/admin')

@section('content')
<div class="row">
        <div class="col-md-12">
            <h2>Daftar Paket Undangan</h2>
            <a href="{{ route('admin.paket.tambah') }}" class="btn btn-primary mb-3">Tambah Paket</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Paket</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection