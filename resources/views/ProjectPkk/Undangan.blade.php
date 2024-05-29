<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adam & Hawa Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sacramento&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!--simply countdown-->
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css" />
    <script src="countdown/simplyCountdown.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="style.css"> -->
    @vite(['resources/css/style.css','resources/js/app.js'])
</head>


<body>
    <section id="hero" class="hero w-100 h-100 p-3 mx-auto text-center d-flex 
    justify-content-center align-items-center text-white">
        <main>
            <h4>Kepada <span>Bapak/IBu/Saudara/i </span></h4>
            <h1>Adam & hawa Wedding</h1>
            <p>Akan Melangsungkan Resepsi Pernikahan</p>
            <div class="simply-countdown"></div>
            <a href="#undangan" class="btn btn-lg mt-4" onClick="enableScroll()">Lihat Undangan</a>
        </main>
    </section>

    <nav class="navbar navbar-expand-md bg-transparent sticky-top mynavbar">
        <div class="container">
            <a class="navbar-brand" href="#">Adam Wedding</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Adam & Hawa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#home">Home</a>
                        <a class="nav-link" href="#info">Info</a>
                        <a class="nav-link" href="#story">Story</a>
                        <a class="nav-link" href="#gallery">Gallery</a>
                        <a class="nav-link" href="#rsvp">Rsvp</a>
                        <a class="nav-link" href="#hadiah">Hadiah</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2>acara pernikahan</h2>
                    <h3>di selenggarakan pada 23-september-2024 Bekasi Jawa Barat</h3>
                    <p>Oleh Karena itu dengan segala hormat kami bermaksut mengundang bapak/ibu Saudara/i
                        untuk Hadir pada acara Pernikahan</p>
                </div>
            </div>
            <div class="row couple">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-8-text-end">
                            <h3>adam</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga accusamus ea, eius animi
                                cum unde neque iusto obcaecati quasi. Minus
                                ipsa adipisci aperiam </p>
                            <p>Putra Dari Bpk.Lorem <br>dan <br> Ibu ipsum</p>
                        </div>
                        <div class="col-4">
                            <img src="assets/pengantin laki.jpg" alt="Adam" class="img-responsive rounded-circle">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-8-text-end">
                            <h3>hawa</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga accusamus ea, eius animi
                                cum unde neque iusto obcaecati quasi. Minus
                                ipsa adipisci aperiam </p>
                            <p>Putra Dari Bpk.Lorem <br>dan <br> Ibu ipsum</p>
                            <div class="col-4">
                                <img src="assets/pengantin perempuan.jpg" alt="Adam" class="img-responsive rounded-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="info" class="info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <h2>Informasi acara</h2>
                    <p class="alamat">alamat: Gedung Grand Kamala Lagoon<br> Jl. KH. Noer Ali, Kayuringin Jaya, Kec.
                        Bekasi Sel., Kota Bks, Jawa Barat </p>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.157388081229!2d106.9761422!3d-6.2533622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d7d5dac57a5%3A0x39a384f17bbda0d1!2sApartemen%20Grand%20Kamala%20Lagoon!5e0!3m2!1sid!2sid!4v1716815578732!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <a href="https://maps.app.goo.gl/BLszmgHGz5pfBQ486" class="btn btn-light btn-sm my-3">Klik untuk
                        melihat peta</a>
                    <p class="description">harap untuk tidak salah tanggal dan alamat,manakala tiba-tiba
                        di tujuab tidak ada tanda-tanda sedang di langsungkan pernikahan boleh jadi
                        anda salah jadwal, atau salah tempat
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light mb-5">
                        <div class="card-header">Akad nikah </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>08.00 - 10.00</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar d-block"></i>
                                    <span>selasa, 23-september-2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            saat upacara di harapkan untu kondusif menjaga kehikmadtan
                            seluruh prosesi
                        </div>
                    </div>

                </div>
                <div class="col-md-5 col-10">
                    <div class="card text-center text-bg-light">
                        <div class="card-header">resepsi </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <i class="bi bi-clock d-block"></i>
                                    <span>11.00- Sampai Selesai</span>
                                </div>
                                <div class="col-md-6">
                                    <i class="bi bi-calendar d-block"></i>
                                    <span>selasa, 23-september-2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            saat upacara di harapkan untu kondusif menjaga kehikmadtan
                            seluruh prosesi
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="story" class="story">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-10 text-center">
                    <span>Bagaimana Cinta Kami Muncul</span>
                    <h2>Cerita Kami</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi cupiditate pariatur sint
                        delectus, iste minima praesentium consectetur nam est provident porro assumenda accusamus cumque
                        ipsa </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image" style="background-image: url('assets/coffeshop1.webp');"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Pertama kali bertemu</h3>
                                    <span>23-mei-2022</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A doloribus nostrum
                                        maiores distinctio
                                        officia! Error.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image" style="background-image: url('assets/revo.jpg');"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Mulai Serius</h3>
                                    <span>29-juli-2023</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, maiores animi
                                        temporibus sunt quae consectetur vero ducimus nemo?</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline">
                            <div class="timeline-image" style="background-image: url('https:picsum.photos/302/302');">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Tunangan</h3>
                                    <span>23-november-tunangan</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas iusto rerum
                                        atque aliquid reprehenderit labore quia at aliquam alias libero.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <section id="story" class="story">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-10 text-center">
                            <span>Memori Kisah Kami</span>
                            <h2>Gallery foto</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, exercitationem.
                            </p>
                        </div>
                    </div>

                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                        <div class="col mt-3">
                            <a href="assets/gallery1.jpg" data-toggle="lightbox" data-caption="Adam & Hawa 1"
                                data-gallery="mygallery">
                                <img src="assets/gallery2.jpg" alt="Adam & Hawa 1"
                                    class="img-fluid w-100 rounded">
                            </a>
                        </div>
                        <div class="col mt-3">
                            <a href="assets/gallery3.jpg" data-toggle="lightbox" data-caption="Adam & Hawa 2"
                                data-gallery="mygallery">
                                <img src="assets/gallery3.jpg" alt="Adam & Hawa 2"
                                    class="img-fluid w-100 rounded">
                            </a>
                        </div>
                        <div class="col mt-3">
                            <a href="assets/gallery4.jpeg" data-toggle="lightbox" data-caption="Adam & Hawa 3"
                                data-gallery="mygallery">
                                <img src="assets/gallery4.jpeg" alt="Adam & Hawa 3"
                                    class="img-fluid w-100 rounded">
                            </a>
                        </div>
                        <div class="col mt-3">
                            <a href="assets/coffeshop2.webp" data-toggle="lightbox" data-caption="Adam & Hawa 4"
                                data-gallery="mygallery">
                                <img src="assets/coffeshop2.webp" alt="Adam & Hawa 4"
                                    class="img-fluid w-100 rounded">
                            </a>
                        </div>
                        <div class="col mt-3">
                            <a href="assets/revo1.jpg" data-toggle="lightbox" data-caption="Adam & Hawa 5"
                                data-gallery="mygallery">
                                <img src="assets/revo1.jpg" alt="Adam & Hawa 5"
                                    class="img-fluid w-100 rounded">
                            </a>
                        </div>
                    </div>

                </div>
        </div>
 </section>

 <section id="rsvp" class="rsvp d-flex flex-column align-items-center justify-content-center">
    <h2>RSVP</h2>
    <p>Harap konfirmasi kehadiran Anda dengan mengisi formulir di bawah ini.</p>
    <form action="submit_form.php" method="post" class="d-flex flex-column align-items-center">
        <div class="form-group mb-3 w-100">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group mb-3 w-100">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group mb-3 w-100">
            <label for="attendance">Kehadiran:</label>
            <select id="attendance" name="attendance" class="form-control" required>
                <option value="yes">Ya, saya akan hadir</option>
                <option value="no">Maaf, saya tidak bisa hadir</option>
            </select>
        </div>
        <div class="form-group mb-3 w-100">
            <label for="guests">Jumlah Tamu yang Dibawa:</label>
            <input type="number" id="guests" name="guests" class="form-control" min="0" max="10" value="0" required>
        </div>
        <div class="form-group mb-3 w-100">
            <label for="message">Pesan untuk Pengantin:</label>
            <textarea id="message" name="message" class="form-control" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</section>

<section id="hadiah" class=" hadiah d-flex flex-column align-items-center justify-content-center">
    <h2>Hadiah Pernikahan</h2>
    <p>Jika Anda ingin memberikan hadiah, berikut beberapa pilihan yang bisa Anda pertimbangkan:</p>
</div>
<p>Atau Anda bisa memberikan angpao secara online melalui rekening berikut:</p>
<li class="list-group-item">
 <div class="fw-bold">BCA</div>
 123456789 - Adam & Hawa
</li>
<li class="list-group-item">
 <div class="fw-bold">Mandiri</div>
 928347923652 - Adam & Hawa
</li>
<li class="list-group-item">
 <div class="fw-bold">saweria</div>
 <img src="assets/qris.saweria.jpeg" alt="Saweria" class="img-thumbnail" width="200">
</li>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <small class="block">&copy;Adam& Hawa Wedding All right reserve</small>
                <small class="block">Design by <a href="https://instagram.com/iam.jri">@iam.jri</a></small>
                <ul>
                    <li>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div id="audio-container">
    <audio id="song" autoplay loop>
        <source src="audio/loves-serenade-188266.mp3" type="audio/mp3">
    </audio>
    <div class="audio-icon-wrapper" style="display: none;">
        <i class="bi bi-disc"></i>
    </div>
</div> 




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>


    <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 9, // required
            day: 23, // required
            hours: 8, // Default is 0 [0-23] integer
            seconds: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: { singular: 'hari', plural: 'hari' },
                hours: { singular: 'jam', plural: 'jam' },
                minutes: { singular: 'menit', plural: 'menit' },
                seconds: { singular: 'detik', plural: 'detik' }
            },
        });
    </script>

    <script>
        const stickyTop = document.querySelector('.sticky-top');
        const offcanvas = document.querySelector('.offcanvas');

        offcanvas.addEventListener('show.bs.offcanvas', function () {
            stickyTop.style.overflow = 'visible';
        });

        offcanvas.addEventListener('hidden.bs.offcanvas', function () {
            stickyTop.style.overflow = 'hidden';
        });

    </script>

    <script>
        const rootElement = document.querySelector(":root");
        const audioIconWrapper = document.querySelector('.audio-icon-wrapper');
        const audioIcon = document.querySelector('.audio-icon-wrapper i');
        const song = document.querySelector('#song');
        let isPlaying = false;

        function disableScroll() {

            scrollTop = window.pageYoffset || document.documentElement.scrollTop;
            scrollLeft = window.pageYoffset || document.documentElement.scrollLeft;

            window.onscroll = function () {
                window.scrollTo(scrollTop, scrollLeft);
            }
            rootElement.style.scrollBehavior = 'auto';
        }


        function enableScroll() {
            window.onscroll = function () { }
            rootElement.style.scrollBehavior = 'smooth';
            //localStorage.setItem('opened', 'true');
            playAudio();
        }

        function playAudio(){
            song.volume = 0.1;
            audioIconWrapper.style.display = 'flex';
            song.play();
            isPlaying = true;
        }

        audioIconWrapper.onclick =function(){
            if(isPlaying){
                song.pause();
                audioIcon.classList.remove('bi-disc');
                audioIcon.classList.add('bi-pause-circle');
                
            }else{
                song.play();
                audioIcon.classList.add('bi-disc');
                audioIcon.classList.remove('bi-pause-circle');
            }

            isPlaying = !isPlaying;
        }


    //    if (!localStorage.getItem('opened')) {
        
        //        }
        
              disableScroll();
        </script>

        <script>
            const urlParams = new URLSearchParams(window.location.search);
            const nama = urlParams.get('n')|| '';
            const pronoun =urlParams.get('p')|| Bapak/Ibu/saudara/i;
            const namaContainer = document.querySelector('.hero h4 span');
            namaContainer.innerText = `${pronoun} ${nama},` .replace(/ ,$/,',');

        </script>
</body>

</html>