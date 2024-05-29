@extends ('template/admin')
@section('title','Undangan Digital')

@section ('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>Data Undangan</h3>
        </div>
        <div class="card-body">
            <table class="table DataTable table-hovered table-bordered">
                <thead>
                    <tr>
                        <th>Paket</th>
                        <th>Pesanan</th>
                        <th>pembayaran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>

@endsection

@section('footer')
<style>
    .col-md-12{
        padding-top:35px;
    }
</style>
@endsection