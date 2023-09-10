@extends('layouts.app')

@extends('layouts.frontLayout')

@section('title', 'Portofolio | Fauzi Aulia')


@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <!-- Isi konten halaman selamat datang di sini -->


    <div class="container">

        <!-- -------------- MAIN ---------------- -->
        <main class="wrapper">
            <!-- -------------- FEATURED BOX ---------------- -->
            <section class="featured-box" id="home">
                <div class="featured-text">
                    <div class="featured-text-card">
                        <span>Hallo Guys</span>
                    </div>
                    
                    <div class="featured-name">
                        <p>I'm <span class="typedText"></span></p>
                    </div>
                    <div class="featured-text-info">
                        <p>I am a graphic designer and also a developer who works as a frontend developer
                        </p>
                    </div>
                    <div class="featured-text-btn">
                    <a href="https://drive.google.com/file/d/1AixYTCIWPTx91bax3nPx_9hYn985fHPb/view?usp=sharing" target="_blank">
                        <button class="btn">  Download CV</button>
                    </a>
                    </div>
                    
                </div>
                <div class="featured-image">
                    <div class="image">
                        <img src="{{ asset('image/foto.png') }}" alt="avatar">
                    </div>
                </div>      
            </section>
            <!-- -------------- ABOUT BOX ---------------- -->
            <section class="section" id="about">
                <div class="top-header">
                    <h1>About Me</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="about-info">
                            <h3 class="m-3">Kepoin Sini</h3>
                            <p class="m-3">Saya Fauzi Aulia, Lahir 21 November 2001 di Padang-Panjang Sumatera Barat. 
                                Saya merupakan lulusan sekolah IT di Telkom University Bandung. 
                                Saya adalah orang yang senang dalam bekerja sama, mudah bersosialiasi dan juga merupakan pendengar yang baik sehingga mampu menampung pendapat orang lain dan memberi solusi yang tepat. Selain itu juga saya adalah pribadi yang jujur, giat, mau belajar serta bertanggung jawab dalam setiap pekerjaan yang hadapi
                            </p>
                            <!-- <div class="about-btn">
                                <button class="btn">Download CV <i class="uil uil-import"></i></button>
                            </div> -->
                        </div>
                    </div>
                    <div class="col">
                        <div class="about-info">
                            <h3 class="m-3">Mau Kenal lebih?</h3>
                            <p class="m-3">Untuk mengenal lebih dalam, Yuk.. ikuti sosial media yang tertera dibawah!
                            </p>
                            <div class="social_icons">
                                <div class="icon">
                                <a href="https://www.instagram.com/_fauzi_uziii/" target="_blank">
                                    <i class="fa fa-instagram" style="font-size:32px;"></i>
                                </a>
                                </div>
                                <div class="icon">
                                <a href="https://www.linkedin.com/in/fauzi-aulia-801545208/" target="_blank">
                                    <i class="fa fa-linkedin-square" style="font-size:32px;"></i>
                                </a>
                                </div>
                                <div class="icon">
                                <a href="https://twitter.com/FauziAu09552155" target="_blank">
                                    <i class="fa fa-twitter" style="font-size:32px;"></i>
                                </a>
                                </div>
                                <div class="icon">
                                <a href="https://www.youtube.com/@fauziaulia7727" target="_blank">
                                    <i class="fa fa-youtube" style="font-size:32px;"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="skills-box">
                            <div class="skills-header">
                                <h3>Frontend</h3>
                            </div>
                            <div class="skills-list">
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>Bootstrap</span>
                                <span>JavaScript</span>
                                <span>Vue</span>
                                <span>React</span>
                                <span>Angular</span>
                            </div>
                        </div>
                       
                    </div> -->
                </div>
            </section>

            <!-- -------------- PROJECT BOX ---------------- -->

            <section class="section" id="projects">
                <div class="top-header">
                    <h1>Projects</h1>
                    <p>Berikut beberapa project yang saya pernah saya kerjakan
                </div>
                <div class="project-container row" >
                    <div class="project-container-box">
                        <div class="project-box" >
                            <img src="{{ asset('image/EKriminal.png') }}" alt="avatar">
                        </div>
                        <h3 class="m-3">Aplikasi E-Kriminal</h3>
                        <label>Projek ini adalah sebuah projek untuk memenuhi tugas Pemograman Berbasis MOBILE. Project ini dibangun menggunakan Android Studio Kotlin dengan mengunkan CRUD sederhana di dalamnya.</label>
                        
                    </div>
                    <div class="project-container-box">
                        <div class="project-box" >
                            <img src="{{ asset('image/Talentern.png') }}" alt="avatar">
                        </div>
                        <h3 class="m-3">Talentern</h3>
                        <label>Projek ini merupakan sebuah projek akhir untuk menuntaskan perkuliahan. projek ini di bangun menggunakan Framework Laravel & Js dengan menggunkan logika pemograman yang sedikit komplek</label>
                        
                    </div>
                    <div class="project-container-box">
                        <div class="project-box" >
                            <img src="{{ asset('image/Bem Kema FIT.png') }}" alt="avatar">
                        </div>
                        <h3 class="m-3">Video Profiling Bem Kema FIT</h3>
                        <label>Projek ini merupakan pembuatan profile organisasi Bem Kema FIT Telkom University tahun 2022, Proses Pengeditan menggunakan software Editing Adobe Premiere Pro, Adobe Photoshop, Dan Adobe After Effect dengan pengambilan gambar menggunakan sony 6400k</label>
                        
                    </div>
                    
                    
                </div>
                <div class="centered" style="display: flex;  justify-content: center;  align-items: center;">
                <!-- <button class="m-3">Selengkapnya</button> -->
                </div>
            </section>

            <!-- -------------- CONTACT BOX ---------------- -->

            <section class="section" id="contact">
                <div class="top-header">
                    <h1>Hubungi Saya</h1>
                    <span>Jika Ada Sesuatu Yang Mau di sampaikan Silahkan Hubungi Saya Melalui Form di Bawah</span>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="contact-info">
                            <h2 style="margin-bottom:10px">Find Me </h2>
                            <p><i class="fa fa-envelope" style="font-size:20px"></i> Email: auliaf198@gmail.com</p>
                            <!-- <p><i class="fa fa-phone" style="font-size:20px"></i></i> 083181832038</p> -->
                        </div>
                    </div>
                    
                    <div class="col">
                        <form id="contact-form"  action="https://formspree.io/f/mnqkvywp" method ="POST">
                            @csrf
                            <div class="form-control">
                                <div class="form-inputs">
                                    <input   id="name" type="text" name="full-name" class="input-field" placeholder="Name">
                                    @error('full-name')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                    <input id="email" type="email" name="email" class="input-field" placeholder="Email">
                                    @error('email')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-area">
                                    <textarea  id="message" name="message" type="text" placeholder="Message"></textarea>
                                    @error('message')
                                    <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="btn">Send <i class="fa fa-send" style="font-size:20px; transform: rotate(60deg);" ></i></button>
                            
                                </div>
                            </div>
                                <div class="loader ease-linear mt-5 rounded-full border-4 border-t-4 border-gray-200 h-6 w-6 mx-auto">             
                            </div>
                        </form>
   
                    </div>
                    
                </div>
            </section>

        </main>


    
    </div>




    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ----- MAIN JS ----- -->
    <script src="./script.js"></script>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
