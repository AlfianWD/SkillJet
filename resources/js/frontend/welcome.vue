<template>
    <div class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img :src="'../assets/images/logo.png'" style="width: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <img :src="'../assets/images/logo.png'" style="width: 150px;">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center justify-content-end flex-grow-1 pe-3 d-flex m-3 gap-2 me-2">
                        <li class="nav-item item-1">
                            <a class="nav-link" href="/"><strong>Home</strong></a>
                        </li>
                        <li class="nav-item item-2">
                            <a class="nav-link" href="#about"><strong>About</strong></a>
                        </li>
                        <li class="nav-item item-3">
                            <a class="nav-link" href="#contact"><strong>Contact Us</strong></a>
                        </li>
                    </ul>

                    <div class="d-flex m-3 gap-4 me-2">
                        <a class="btn btn-outline-royalpurple" href="/login"
                        style="--bs-btn-padding-y: 8px; --bs-btn-padding-x: 35px;">Login</a>
                        <a class="btn btn-royalyellow" href="/register"
                        style="--bs-btn-padding-y: 8px; --bs-btn-padding-x: 35px;">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row gap-2">
            <div class="col-lg d-flex flex-column align-item-center justify-content-center mt-5 pe-lg-5 ps-lg-5">
                <h1 class="mb-3">
                    <strong>Menerbangkan Kariermu dengan 
                    <span style="color: #8C52FF;">SkillJet</span> : </strong>
                </h1>
                <span style="font-size: large;">Belajar Lebih Cepat, Berkembang Lebih Baik</span>
            </div>
            <div class="col-lg d-flex flex-column align-item-center justify-content-center mt-5">
                <img :src="'../assets/images/img1.png'" class="img-fluid" style="max-width: 100%;" alt="Image">
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #8C52FF; max-height: 100%;">
        <div class="p-4 m-5 d-flex flex-column justify-content-center text-center">
            <div>
                <h3 class="content" style="color: white;">Bergabunglah sekarang untuk memulai perjalanan pendidikan anda</h3>
            </div>
            <div class="mt-4">
                <a class="btn btn-royalyellow btn-gabung" href="/login"> Gabung Sekarang
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="d-flex flex-column justify-content-center text-center">
            <h3 class="tittle">kenapa harus memilih kami?</h3>
            <h2 class="paragraf">benefit yang kalian dapat jika bergabung dengan kami</h2>
            <div class="row m-5 d-flex justify-content-between">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <img :src="'../assets/images/Logo-Teknologi.png'" alt="logo-teknologi" class="logo-tekno row">
                            <h5 class="card-title text-start">Teknologi Terdepan</h5>
                            <p class="card-text text-start">SkillJet menggunakan teknologi responsif dan canggih.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <img :src="'../assets/images/Logo-Materi.png'" alt="logo-materi" class="logo-materi row">
                            <h5 class="card-title text-start">Beragam Materi</h5>
                            <p class="card-text text-start">menyajikan berbagai materi pembelajaran yang mencakup berbagai bidang.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <img :src="'../assets/images/Logo-Jam.png'" alt="logo-jam" class="logo-jam row">
                            <h5 class="card-title text-start">Fleksibilitas Waktu dan Tempat</h5>
                            <p class="card-text text-start">Pembelajaran dapat dilakukan kapan saja, di mana saja.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <img :src="'../assets/images/Logo-Sertifikat.png'" alt="logo-sertifikat" class="logo-sertif row">
                            <h5 class="card-title text-start">Sertifikat Gratis</h5>
                            <p class="card-text text-start">Setiap pengguna SkillJet memiliki kesempatan untuk memperoleh Sertifikat Gratis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="about">
        <div class="row gap-2">
            <div class="col-lg d-flex flex-column align-item-center justify-content-center">
                <img :src="'../assets/images/Logo-Jet.png'" class="img-fluid" style="max-width: 100%;" alt="Image">
            </div>
            <div class="col d-flex flex-column align-item-center justify-content-center">
                <h1 class="mt-5 text-center">
                    <strong>Apa itu 
                    <span style="color: #8C52FF;">SkillJet</span> ? </strong>
                </h1>
                <span class="mt-5" style="font-size: large; text-align: center;">
                    SkillJet adalah inovasi terbaru dalam dunia pendidikan daring, 
                    menghadirkan pengalaman pembelajaran yang menyenangkan, interaktif, dan berkualitas tinggi. 
                    Dengan fokus pada pengembangan keterampilan dan pertumbuhan pribadi, 
                    SkillJet memberdayakan Anda untuk mencapai potensi penuh Anda dalam karier dan kehidupan.
                </span>
            </div>
        </div>
    </div>

    <div class="container p-5 mt-5" id="contact">
        <div class="row mt-5">
            <div class="d-flex flex-column align-item-center justify-content-center text-center">
                <h1>
                    <strong>Contact Us</strong>
                </h1>
                <h4 class="mt-5">hubungi kami, beri tahu kami bagaimana kami dapat membantu</h4>
            </div>
            <div class="p-5 gap-1 d-flex justify-content-center text-center">
                <a href="#">
                    <i class="fa-solid fa-envelope logo-gmail"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-linkedin-in logo-linkedin"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-instagram logo-instagram"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-twitter logo-twitter"></i>
                </a>
            </div>
        </div>
        <div id="background-1"></div>
        <div id="background-2"></div>
    </div>

    <div class="container-fluid">
        <i class="fa-solid fa-circle-up" onclick="topFunction()" id="buttonTop"></i>
    </div>

    <div class="container-fluid" style="background-color: #8C52FF; max-height: 100%;">
        <div class="d-flex flex-column justify-content-center text-center">
            <div>
                <h5 class="content mt-1" style="color: white;">
                    © Alfian Wahyu D 2024. All rights reserved.
                </h5>
            </div>
        </div>
    </div>

</template>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let buttonTop = document.getElementById("buttonTop");
        window.addEventListener("scroll", function() {
            scrollFunction();
        });

        function scrollFunction() {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            console.log("Current Scroll: ", currentScroll);

            if (buttonTop) {
                if ( currentScroll >20) {
                    buttonTop.style.display = "block";
                } else {
                    buttonTop.style.display = "none";
                }
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        window.topFunction = topFunction;
    });
</script>

<style>
@media (max-width: 767px) {
    .col-lg {
        text-align: center;
    }

    .col-lg h1 {
        text-align: center;
    }

    #background-1, #background-2 {
        display: none;
    }
}

@media (min-width: 768px) and (max-width: 1091px) {
        .col-lg {
            text-align: center;
        }

        .col-lg h1,
        .col-lg span {
            text-align: center;
        }

        #background-1, #background-2 {
        display: none;
    }
}

.nav-item{
    display: inline-block;
    position: relative;
    color: #8C52FF;
}

.nav-item:after{
    content: '';
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #8C52FF;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
}

.nav-item:hover:after{
    transform: scaleX(1);
    transform-origin: bottom left;
}

.btn-gabung{
    max-width: 100%;
    padding: 10px;
    border-radius: 40px;
    box-shadow: 3px 3px 10px black;
    text-align: center;
    font-weight: bold;
    color: white;
}

.tittle {
    margin-top: 100px;
    color: #FCBE57;
    font-family: "Poppins", sans-serif;
    font-weight: 700;
    font-style: normal;
}

.paragraf{
    margin-top: 50px;
    font-family: "Poppins", sans-serif;
    font-weight: 700;
    font-style: normal;
}

.card {
    background-color: white;
    box-shadow: 3px 4px 45px #EEEEEE;
}

.card h5, p {
    padding: 3px;
}

.logo-tekno,
.logo-materi,
.logo-jam,
.logo-sertif {
    width: 48px;
    margin: 5px;
}

.logo-gmail,
.logo-linkedin,
.logo-instagram,
.logo-twitter {
    font-size: 50px;
    margin: 10px;
    color: black;
}

.logo-gmail:hover, 
.logo-linkedin:hover,
.logo-instagram:hover,
.logo-twitter:hover {
   color: #8C52FF;
}

#buttonTop {
    position: fixed;
    z-index: 99;    
    bottom: 80px;
    right: 30px;
    font-size: 50px;
    cursor: pointer;
    display: none;
}

#buttonTop:hover {
    color: #FCBE57;
}

#background-1 {
    position: absolute;
    top: 2410px;
    left: 0px;
    width: 180px;
    height: 180px;
    z-index: -1;
    border-radius: 0 12rem 0 0;
    background-color: rgb(189, 187, 189);
}

#background-2 {
    position: absolute;
    top: 2050px;
    left: 1248px;
    width: 100px;
    height: 190px;
    z-index: -1;
    border-radius: 12rem 0 0 12rem;
    background-color: rgb(189, 187, 189);
}

</style>