<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Pramuditya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
      @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
<nav id="header" class="fixed w-full z-30 top-0 text-black">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
            <a href="#home" class="flex text-center ">
                <h1 class="font-itim text-sky-400 text-[30px]">Pramuditya</h1>
            </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle" class="flex items-center p-1  text-birungu hover:text-blue-500 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="font-poppins w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-transparent backdrop-blur-3xl lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-black font-bold no-underline hover:text-btn-contact hover:drop-shadow-led hover:underline hover:bg-green-500 hover:rounded-full" href="#home">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black font-bold no-underline hover:text-btn-contact hover:drop-shadow-led hover:underline hover:bg-green-500 hover:rounded-full" href="#about">About Me</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black font-bold no-underline hover:text-btn-contact hover:drop-shadow-led hover:underline hover:bg-green-500 hover:rounded-full" href="#portofolio">Portofolio</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black font-bold no-underline hover:text-btn-contact hover:drop-shadow-led hover:underline hover:bg-green-500 hover:rounded-full" href="#skill">Service</a>
                    </li>
                </ul>
                <a href="#contact">
                    <button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-sky-400 text-yellow-400 font-bold rounded-3xl drop-shadow-led-black mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Contact Me
                </button>
                </a>
                <a href={{url('/login')}}>
                    <button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-sky-400 text-gray-700 font-bold rounded-3xl drop-shadow-led-black mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Login
                </button>
                </a>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>


<script>
    function scrollToContact() {
        // Mendapatkan elemen dengan id 'contact' menggunakan DOM
        var contactSection = document.getElementById('contact');
        
        // Menggunakan metode scrollIntoView untuk melakukan scroll ke elemen 'contact' secara halus
        contactSection.scrollIntoView({ behavior: 'smooth' });
    }
</script>
    
<!-- Hero Section Start -->
    <section id="home" class="pt-36 dark:bg-dark">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="sm:w-full self-center px-4 lg:w-1/2">
                    <h1 class=" text-sky-500 text-base font-semibold text-primary md:text-xl lg:text-2xl">Hai, 
                        I am <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl  text-black">Pramuditya</span> </h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Web Developer <span class="text-dark">| IT Departement </span></h2>
                    <p class="font-medium text-secondary mb-10 leading-relaxed">I, Pramuditya, graduated from SMK Islamiyah Adiwerna with a TBSM major. Currently I am studying
                    at the
                    Harapan Bersama Polytechnic, Tegal City, I am studying D3 Computer Engineering..</p>

                    <a href="#contact" class="text-base font-semibold text-white bg-green-500 py-3 px-8 rounded-full hover:bg-lime-500 hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi Saya</a>


                </div>
                <div class="sm:w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img src="{{ asset('img/saya.png') }}" alt="Pramuditya" class="max-w-full mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Hero Section End -->

<!-- About Section Start -->
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-sky-500 mb-3">Tentang Saya</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-lg dark:text-black">OJO KLALEN MANGAN CAH</h2>
                    <p class="font-mendium text-base text-secondary max-w-xl dark:text-black">Nuruti Gengsi Ora Mangan!</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark tex-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-black">Mari Berteman</h3>
                    <p class="font-mendium text-base text-secondary mb-6 dark:text-black">BANGGA MEN </p>
                    <div class="flex item-center">
                        <!-- Youtube -->
                        <a href="https://www.youtube.com/channel/Pramuditya3121" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/pramdtya.25/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/PrAmdtya/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/Prmdtya25" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <!-- Github -->
                    <a href="https://github.com/Pramuditya25" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- About Section End -->

<!-- Portfolio Section Start -->
    <section id="portofolio" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-bold text-3xl text-sky-400 text-primary mb-2">Project yang telah dibuat</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Bangga men</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Programmer yang kompeten menyadari sepenuhnya kapasitas otaknya yang terbatas. Karena itu, dia menyelesaikan tugasnya
                    dengan pendekatan yang penuh kerendahan hati, dan menghindari trik cerdik yang seperti penyakit. </p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{ asset('img/gr.png')}}" alt="Game Greenfoot" width="w-full">
                    </div>    
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Roket pada greenfoot |<span class="font-semibold text-lime-500 text-primary mb-2"> Greenfoot</span></h3>
                    <p class="font-medium text-base text-secondary">
                        Greenfoot adalah perangkat lunak yang didesain untuk pemula agar dapat terbiasa dengan Pemrograman Berorientasi Objek
                        (Object-Oriented Programming), yang mendukung pengembangan aplikasi bergambar dengan memakai bahasa pemrograman Java..
                    </p>                    
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{ asset('img/pj.png')}}" alt="Toko Sepatu" width="w-full items-center">
                    </div>    
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Toko Sepatu |<span class="font-semibold text-lime-400 text-primary mb-2"> Website</span></h3>
                    <p class="font-medium text-base text-secondary">
                        Web adalah nama umum untuk World Wide Web. Web adalah bagian dari Internet yang terdiri dari halaman-halaman yang dapat
                        diakses oleh browser Web. Meskipun Web memang menjadi bagian terbesar dari Internet, tetapi mereka beda satu sama lain.
                    </p>                    
                </div>
            </div> 
        </div>        
    </section>
<!-- Portfolio Section End -->

<!-- Skill Section Start  -->
    <section id="skill" class="pt-36 pb-32 bg-slate-700 dark:bg-slate-300">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto text-center mb-16">
                    <h4 class="font-bold text-3xl text-sky-400 text-primary mb-2">Skills</h4>
                    <h2 class="font-bold text-neutral-600 text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">Skill yang dimiliki</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Berikut ini beberapa pengetahuan yang berkaitan dengan website</p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset('img/HTML5_logo.png')}}" alt="HTML 5">
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset ('img/CSS_logo.png')}}" alt="CSS 3">
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset ('img/PHP-logo.png')}}" alt="PHP">
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset('img/bootstrap-5-logo.png')}}" alt="Bootstrap">
                    </a>
                </div>
                <div class="flex flex-wrap items-center justify-center">
                    <a href="#"
                        class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset ('img/Tailwind_CSS_Logo.png')}}" alt="Tailwind">
                        </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset ('img/mysql-logo.png')}}" alt="MySql">
                    </a>
                    <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset ('img/sqlserver.png')}}" alt="SQL Server">
                    </a>
                </div>
            </div>
        </div>
    </section>
<!-- Skill Section End -->

<!-- Hobby Section Start -->
    <section id="hobby" class="pt-36 pb-32 bg-slate-100 dark:bg-dark">
        <div class="container mx-auto">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-bold text-3xl text-primary mb-2">Hobby</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-sky-400">Kegemaran dan Kesukaan</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Orang yang suka dengan tantangan dan pengalaman baru.</p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overvlow-hidden mb-10 dark:bg-slate-800">
                        <img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Programming</a></h3>
                            <p class="font-medium text-base text-secondary mb-6">Mencoba beberapa bahasa program untuk membandingkan minat atau passion kita berada dimana?</p>
                            <a href="#" class="font-medium text-sm text-white py-2 px-4 rounded-lg bg-sky-500 border border-primary hover:bg-green-500 hover:text-white hover:opacity-80 transition duration-300 ease-in-out">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overvlow-hidden mb-10 dark:bg-slate-800">
                        <img src="https://source.unsplash.com/360x200?mountain" alt="mountain" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Traveling</a></h3>
                            <p class="font-medium text-base text-secondary mb-6">Mengexplore luasnya negeri ini dengan berkendara ataupun naik angkutan umum, menjadi suatu keseruan tersendiri yang hanya bisa di nikmati dengan cara Traveling. Dengan bonus mencoba kenikmatan wisata kuliner khas lokal.</p>
                            <a href="#" class="font-medium text-sm text-white py-2 px-4 rounded-lg bg-sky-500 border border-primary hover:bg-green-500 hover:text-white hover:opacity-80 transition duration-300 ease-in-out">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overvlow-hidden mb-10 dark:bg-slate-800">
                        <img src="https://source.unsplash.com/360x200?sport" alt="sport" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Olahraga</a></h3>
                            <p class="font-medium text-base text-secondary mb-6">Menyempatkan waktu Untuk berolahraga walaupun hanya 2 kali dalam sepekan untuk menjaga stamina tetap bugar dan sehat adalah keharusan.</p>
                            <a href="#" class="font-medium text-sm text-white py-2 px-4 rounded-lg bg-sky-500 border border-primary hover:bg-green-500 hover:text-white hover:opacity-80 transition duration-300 ease-in-out">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Hobby Section End -->

<!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-bold text-3xl text-sky-400 text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Hubungi Kami</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Tinggalkan pesan</p>
                </div>
            </div>
            <form method="POST">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-sky-400 font-bold text-primary">Nama</label>
                        <input type="text" id="name" name="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"value="{{ (isset($contact)) ? $contact->name:"" }}" />
                    </div> 
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-sky-400 font-bold text-primary">Email</label>
                        <input type="text" id="email" name="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" value="{{ (isset($contact)) ? $contact->email:"" }}" />
                    </div> 
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-sky-400 font-bold text-primary">Pesan</label>
                        <input type="text" id="message" name="pesan" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32" value="{{ (isset($contact)) ? $contact->pesan:"" }}" />
                    </div>
                    <div class="w-full px-4">
                    <button class="text-base font-semibold text-white bg-green-500 py-3 px-8 rounded-full w-full hover:bg-yellow-500 hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                    </div>
                </div>
            </form>            
        </div>
    </section>
<!-- Contact Section End -->

<!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-black font-medium md:w-1/3 ">
                    <h2 class="font-bold text-4xl text-sky-400 mb-5">Rumah</h2>
                    <h3 class="font-bold text-2xl mb-2">Hubungi Saya</h3>
                   <a href="mailto:Pramuditya303@gmail.com" class="hover:undeline">Pramuditya303@gmail.com</a>
                    <p>Tegal. JawaTengah</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-black mb-5">Hobby</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#hobby" class="inline-block text-base hover:underline text-black mb-3">Programming</a>
                        </li>
                        <li>
                            <a href="#hobby" class="inline-block text-base hover:underline text-black mb-3">Traveling</a>
                        </li>
                        <li>
                            <a href="#hobby" class="inline-block text-base hover:underline text-black mb-3">Olahraga</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-black mb-5">Tautan</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:underline text-black mb-3">Beranda</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base hover:underline text-black mb-3">Tentang Saya</a>
                        </li>
                        <li>
                            <a href="#portofolio" class="inline-block text-base hover:underline text-black mb-3">Portfolio</a>
                        </li>
                        <li>
                            <a href="#skill" class="inline-block text-base hover:underline text-black mb-3">Skills</a>
                        </li>
                        <li>
                            <a href="#hobby" class="inline-block text-base hover:underline text-black mb-3">Hobby</a>
                        </li>
                        <li>
                            <a href="#contact" class="inline-block text-base hover:underline text-black mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex item-center justify-center mb-5">
                    <!-- Youtube -->
                    <a href="https://www.youtube.com/channel/Pramuditya3121" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/pramdtya.25/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/PrAmdtya/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/Prmdtya25" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <!-- Github -->
                    <a href="https://github.com/Pramuditya25" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                </div>
                <p class="font-medium text-xs text-slate-500 text-center">Dibuat dengan <span></span> oleh <a href="http://instagram.com/pramdtya.25" target="_blank" class="font-bold text-primary">Pramuditya,</a>  Menggunakan <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500"> Tailwind CSS.</a></p>
            </div>
        </div>
    </footer>
<!-- Footer End -->

<!-- Back to top Start -->
    <a href="#home" id="to-top" class="hidden fixed bottom-4 right-4 z-[9999] justify-center items-center h-14 w-14 rounded-full bg-primary p-4 hover:animate-pulse">
        <span class="block h-5 w-5 border-t-2 border-l-2 rotate-45 mt-2"></span>
    </a>
 {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("backdrop-blur-xl");
                navaction.classList.remove("bg-blue");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-black");
                navaction.classList.add("text-black");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-transparent");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });

    </script>
     <script>
      
      const swal = $('.swal').data('swal');

        if(swal){
            Swal.fire({
                'title':'Success',
                'text' : swal,
                'icon': 'success',
                'showConfirmButton':false,
                'timer':2000
            })
        }
        </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }

    </script>
</body>
</html>
