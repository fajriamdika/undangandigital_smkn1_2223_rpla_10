<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    @vite('resources/css/app.css','resources/js/app.js')
</head>


<body>
    <div class="header">
        <div class="header-right">
            <a class="active" href="#home">Home</a>
        </div>
    </div>
    <br>
    <br>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Nama Pemesan (sesuaikan dengan akun tokopedia)</label>
                            <input type="text" id="namaPemesan" class="form-control form-control-lg" />
                        </div>

                        <!-- Data input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Nama Pengantin Pria (sertakan nama panggilan)</label>
                            <input type="text" id="namaPengantinPria" class="form-control form-control-lg" placeholder="Aditya Putra (Adit)" />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Nama Pengantin Wanita (sertakan nama panggilan)</label>
                            <input type="text" id="namaPengantinWanita" class="form-control form-control-lg" placeholder="Siti Jubaedah (Siti)" />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Nama Orang Tua Pengantin Pria</label>
                            <input type="text" id="priaAnakDari" class="form-control form-control-lg" placeholder="Bapak Adam & Ibu Hawa" />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Nama Orang Tua Pengantin Wanita</label>
                            <input type="text" id="wanitaAnakDari" class="form-control form-control-lg" placeholder="Bapak Yanto & Ibu Yani" />
                        </div>
                        <div class="file-upload">
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
                        </div>



                        <!-- <div class="d-flex justify-content-between align-items-center"> -->
                        <!-- Checkbox -->
                        <!-- <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                        </div> -->

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btnLogin" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
                            <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" class="link-danger">Register</a></p> -->
                        </div>

                    </form>
                </div>
            </div>
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


    <!-- <script type="module">
        $('.btnLogin').on('click', function(a) {
            //a.preventDefault();
            //alert('clicked');
            axios.post('login/check', {
                username: $('#userName').val(),
                password: $('#password').val(),
                _token: '{{csrf_token()}}'
            }).then(function(response) {
                if (response.data.success) {
                    window.location.href = response.data.redirect_url;
                } else {
                    swal.fire('Gagal Login, Username/Password salah', '', 'error');
                }
            });
        })
    </script> -->
</body>

</html>