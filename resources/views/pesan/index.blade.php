@extends ('template/admin')

@section('content')
<div class="header">
    <div class="header-right">
        <a class="active" href="#home">Home</a>
    </div>
</div>
<br>
<br>
<section class="vh-100">
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <div class="card-body">
                <form method="POST" id="tambah" action="{{url('/pemesanan/simpan')}}">

                    <!-- Data Input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Nama Pemesan (sesuaikan dengan akun tokopedia)</label>
                        <input type="text" id="namaPemesan" name="nama_pemesan" class="form-control form-control-lg"  />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Nama Pengantin Pria (sertakan nama panggilan)</label>
                        <input type="text" id="namaPengantinPria" name="nama_pengantin_pria" class="form-control form-control-lg" placeholder="Aditya Putra (Adit)" required />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Nama Pengantin Wanita (sertakan nama panggilan)</label>
                        <input type="text" id="namaPengantinWanita" name="nama_pengantin_wanita" class="form-control form-control-lg" placeholder="Siti Jubaedah (Siti)" required />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Nama Orang Tua Pengantin Pria</label>
                        <input type="text" id="priaAnakDari" name="pria_anak-dari" class="form-control form-control-lg" placeholder="Bapak Adam & Ibu Hawa" required />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Nama Orang Tua Pengantin Wanita</label>
                        <input type="text" id="wanitaAnakDari" name="wanita_anak_dari" class="form-control form-control-lg" placeholder="Bapak Yanto & Ibu Yani" required />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Tanggal Pernikahan</label>
                        <input type="date" id="tanggalPernikahan" name="tanggal_pernikahan" class="form-control form-control-lg" required />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Alamat Pernikahan</label>
                        <input type="text" id="alamatResepsi" name="alamat_resepsi" class="form-control form-control-lg" placeholder="" required />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Nomor Rekening/E-Wallet</label>
                        <input type="text" id="nomorRekening" name="nomor_rekening" class="form-control form-control-lg" placeholder="" required />
                    </div>

                    <!-- <div class="file-upload">
                        <label for="file-input">Foto Pengantin Pria :</label>
                        <input type="file" id="fotoPengantinPria" name="file">
                    </div>
                    <br>
                    <div class="file-upload">
                        <label for="file-input">Foto Pengantin Wanita :</label>
                        <input type="file" id="fotoPengantinWanita" name="file">
                    </div>
                    <br>
                    <div class="file-upload">
                        <label for="file-input">Foto Pre-Wedding :</label>
                        <input type="file" id="fotoPrewedding" name="file">
                    </div> -->

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btnSimpanBarang" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
                    </div>

                </form>
            </>
        </div>
        @csrf
    </div>
</section>

<style>
    .header {
        overflow: hidden;
        background-color: lightblue;
        padding: 20px 10px;
    }

    /* Style the header links */
    .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
    }

    /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */

    /* Change the background color on mouse-over */
    .header a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Style the active/current link*/
    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    /* Float the link section to the right */
    .header-right {
        float: right;
    }

    /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }
</style>

@endsection
@section('footer')
<script type="module">
    //simpan data yang diinput ketika tekan submit
    $('.btnSimpanBarang').on('click', function(simpanEvent) {
        simpanEvent.preventDefault();
        simpanEvent.stopImmediatePropagation();
        let data = {
            'nama_pemesan': $('#namaPemesan').val(),
            'nama_pengantin_pria': $('#namaPengantinPria').val(),
            'nama_pengantin_wanita': $('#namaPengantinWanita').val(),
            'pria_anak_dari': $('#priaAnakDari').val(),
            'wanita_anak_dari': $('#wanitaAnakDari').val(),
            'nomor_rekening' :  $('#nomorRekening').val(),
            'tanggal_pernikahan' :  $('#tanggalPernikahan').val(),
            'alamat_resepsi' :  $('#alamatResepsi').val(),
            '_token': "{{csrf_token()}}"

        };

        if (data.nama_pemesan !== '' && data.nama_pengantin_pria !== '' && data.nama_pengantin_wanita !== '' 
            && data.pria_anak_dari !== '' && data.wanita_anak_dari !== '' && data.nomor_rekening !== '' 
            && data.tanggal_pernikahan !== '' && data.alamat_resepsi !== '') {
            axios.post('/pemesanan/simpan', data).then(resp => {
                if (resp.data.status == 'success') {
                    Swal.fire({
                        title: 'Berhasil',
                        text: resp.data.pesan,
                        icon: 'success'
                    });
                } else {
                    Swal.fire({
                        title: 'Oooppss data gagal ditambahkan',
                        text: resp.data.pesan,
                        icon: 'error'
                    });
                }
            });

        } else {
            Swal.fire({
                'title': 'Ooopps gagal',
                'text': 'Form harus terisi semua',
                'icon': 'error'
            });
        }
    });
</script>
@endsection