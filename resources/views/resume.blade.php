<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo/faveicon.png" type="image/x-icon">
    <title>SM Alvee </title>
    <!--=== fontaswesome ===-->
    <link rel="stylesheet" href="assets/fontaswesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/fontaswesome/css/fontawesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&amp;family=Roboto+Slab:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <!--=== main css ===-->
    <link rel="stylesheet" href="css/tailwind.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body>

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

    <div class="bg-homeBg dark:bg-homeTwoBg-dark min-h-screen bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full">
        <div class="section-bg">
            <div class="w-full flex justify-between px-4">

                <div class="flex items-center">
                    <!-- mobile toggle button -->
                    <button id="menu-toggle" type="button" class="menu-toggle-btn">
                        <i id="menu-toggle-open-icon" class="fa-solid fa-bars text-xl "></i>
                        <i id="menu-toggle-close-icon" class="fa-solid fa-xmark text-xl hidden  "></i>
                    </button>
                    <!-- dark and light mode toggle -->
                    <button id="theme-toggle" type="button" class="dark-light-btn">
                        <i id="theme-toggle-dark-icon" class="fa-solid text-xl fa-moon hidden"></i>
                        <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl hidden"></i>
                    </button>

                </div>
            </div>
        </div>
        <!-- end section-bg -->

        <nav id="navbar" class="hidden lg:hidden">
            <ul class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
                <li>
                    <a class="mobile-menu-items" href="/">
                        <span class="mr-2 text-xl">
                            <i class="fa-regular fa-user"></i>
                        </span> About </a>
                </li>
                <li>
                    <a class="mobile-menu-items-active" href="/resume">
                        <span class="mr-2 text-xl">
                            <i class="fa-regular fa-file-lines"></i>
                        </span> Resume </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="/works">
                        <span class="mr-2 text-xl">
                            <i class="fas fa-briefcase"></i>
                        </span> Works </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="/gallery">
                        <span class="mr-2 text-xl">
                            <i class="fa-brands fa-blogger"></i>
                        </span> Gallery </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="/contact">
                        <span class="mr-2 text-xl">
                            <i class="fa-solid fa-address-book"></i>
                        </span> Contact </a>
                </li>
            </ul>
        </nav>
        <!-- end navbar -->

        <div class="container grid grid-cols-12 md:gap-10 justify-between lg:mt-[220px]">
            <!-- sidber personal info -->
            <div class="col-span-12 lg:col-span-4 hidden lg:block h-screen sticky top-44">
                <div class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                    <!-- profile image -->
                    <img src="images/about/smalvee.jpg" class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]" alt="about avatar" />
                    <div class="pt-[100px] pb-8">
                        <h1 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> SM Rais Uddin Alvee </h1>
                        <h3 class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
                            SQA Engineer </h3>

                        @include('social_network')

                        <div class="p-7 rounded-2xl mt-7 bg-[#F3F6F6] dark:bg-[#1D1D1D]">
                            <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] pb-2.5">
                                <span class="socialbtn bg-white dark:bg-black text-[#E93B81] shadow-md">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </span>
                                <div class="text-left ml-2.5">
                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Phone </p>
                                    <p class="dark:text-white">+880 170706 6081</p>
                                </div>
                            </div>
                            <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                <span class="socialbtn bg-white dark:bg-black text-[#6AB5B9] shadow-md">
                                    <i class="fa-solid fa-envelope-open-text"></i>
                                </span>
                                <div class="text-left ml-2.5">
                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Email </p>
                                    <p class="dark:text-white">info@smalvee.me</p>
                                </div>
                            </div>
                            <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                <span class="socialbtn bg-white dark:bg-black text-[#FD7590] shadow-md">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <div class="text-left ml-2.5">
                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Location </p>
                                    <p class="dark:text-white">Demra, Dhaka, Bangladesh</p>
                                </div>
                            </div>
                            <div class="flex py-2.5">
                                <span class="socialbtn bg-white dark:bg-black text-[#C17CEB] shadow-md">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </span>
                                <div class="text-left ml-2.5">
                                    <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Birthday </p>
                                    <p class="dark:text-white">July 08</p>
                                </div>
                            </div>
                        </div>

                        <!-- dowanload button -->
                        <button class="dowanload-btn">
                            <img class="mr-3" src="images/icons/dowanload.png" alt="icon" /> Download CV </button>
                    </div>
                </div>
            </div>
            <!-- sidber info end -->

            <div class="col-span-12 lg:col-span-8">
                <header class="lg:w-[560px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white dark:bg-[#111111]">
                    <nav class="hidden lg:block">
                        <nav class="hidden lg:block">
                            <ul class="flex">
                                <li> <a class="menu-item" href="/">
                                        <span class="text-xl mb-1">
                                            <i class="fa-regular fa-user"></i>
                                        </span> About </a></li>
                                <li> <a class="menu-active" href="/resume">
                                        <span class="text-xl mb-1">
                                            <i class="fa-regular fa-file-lines"></i>
                                        </span> Resume </a></li>
                                <li> <a class="menu-item" href="/works">
                                        <span class="text-xl mb-1">
                                            <i class="fas fa-briefcase"></i>
                                        </span> Works </a></li>
                                <li><a class="menu-item" href="/gallery">
                                        <span class="text-xl mb-1">
                                            <i class="fa-brands fa-blogger"></i>
                                        </span> Gallery </a></li>
                                <li> <a class="menu-item" href="/contact">
                                        <span class="text-xl mb-1">
                                            <i class="fa-solid fa-address-book"></i>
                                        </span> Contact </a></li>
                            </ul>
                        </nav>
                    </nav>
                </header>

                <div>
                    <!-- resume section start -->
                    <div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
                        <div class="container sm:px-5 md:px-10 lg:px-14">
                            <div class="py-12 px-4 md:px-0">
                                <!-- resume page title -->
                                <h2 class="after-effect after:left-44">Resume</h2>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-x-6 gap-y-6 mt-[30px]">
                                    <!-- eductation start -->
                                    <div>
                                        <div class="flex items-center space-x-2 mb-4">
                                            <i class="fa-solid text-6xl text-[#F95054] fa-graduation-cap"></i>
                                            <h4 class="text-5xl dark:text-white font-medium"> Education </h4>
                                        </div>
                                        <div class="bg-[#fff4f4] dark:bg-transparent py-4 pl-5 pr-3 space-y-2 mb-6 rounded-lg dark:border-[#212425] dark:border-2">
                                            <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2021</span>
                                            <h3 class="text-xl dark:text-white"> B.Sc. in Software Engineering </h3>
                                            <p class="dark:text-[#b7b7b7]"> Daffodil Internation University,<br> Dhaka, Bangladesh </p>
                                        </div>
                                        <div class="bg-[#fff1fb] dark:bg-transparent py-4 pl-5 pr-3 space-y-2 rounded-lg mb-6 dark:border-[#212425] dark:border-2">
                                            <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2015</span>
                                            <h3 class="text-xl dark:text-white"> Higher Secondary School Certificate </h3>
                                            <p class="dark:text-[#b7b7b7]"> Dr. Mahbubur Rahaman Mollah College<br>Dhaka, Bangladesh </p>
                                        </div>
                                        <div class="py-4 pl-5 bg-[#fff4f4] dark:bg-transparent pr-3 space-y-2 rounded-lg dark:border-[#212425] dark:border-2">
                                            <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2013</span>
                                            <h3 class="text-xl dark:text-white">Secondary School Certificate</h3>
                                            <p class="dark:text-[#b7b7b7]"> Bawany High School & College<br> Dhaka, Bangladesh </p>
                                        </div>
                                    </div>
                                    <!-- eductation end -->

                                    <!-- experiment start -->
                                    <div>
                                        <div class="flex items-center space-x-2 mb-4">
                                            <i class="fa-solid text-6xl text-[#F95054] fa-briefcase"></i>
                                            <h4 class="text-5xl dark:text-white font-medium"> Experience </h4>
                                        </div>
                                        <div class="py-4 pl-5 pr-3 space-y-2 mb-6 rounded-lg bg-[#eef5fa] dark:bg-transparent dark:border-[#212425] dark:border-2">
                                            <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">December, 2021 - Present</span>
                                            <h3 class="text-xl dark:text-white"> SQA Engineer </h3>
                                            <p class="dark:text-[#b7b7b7]"> Trifork </p>
                                        </div>
                                        <div class="bg-[#f2f4ff] dark:bg-transparent py-4 pl-5 pr-3 space-y-2 rounded-lg mb-6 dark:border-[#212425] dark:border-2">
                                            <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">October, 2020 - July, 2021</span>
                                            <h3 class="text-xl dark:text-white">Web Developer </h3>
                                            <p class="dark:text-[#b7b7b7]">Digital IT.</p>
                                        </div>
                                        <div class="py-4 bg-[#eef5fa] dark:bg-transparent pl-5 pr-3 space-y-2 rounded-lg dark:border-[#212425] dark:border-2">
                                            <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">September, 2018 - July, 2020</span>
                                            <h3 class="text-xl dark:text-white">Web Developer</h3>
                                            <p class="dark:text-[#b7b7b7]"> Softhand IT Soluations Ltd. </p>
                                        </div>
                                    </div>
                                    <!-- experiment start -->
                                </div>
                            </div>
                        </div>


                        <!-- working section start -->
                        <div class="container bg-color-810 dark:bg-[#0D0D0D] py-12 px-2 sm:px-5 md:px-10 lg:px-20">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="col-span-1">
                                    <h4 class="text-5xl dark:text-white font-medium mb-6"> Working Skills </h4>
                                    <div class="mb-5">
                                        <div class="flex justify-between mb-1">
                                            <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">
                                                SQA</span>
                                            <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">65%</span>
                                        </div>
                                        <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                            <div class="bg-[#FF6464] h-1 rounded-full" style="width: 65%"></div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="flex justify-between mb-1">
                                            <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">
                                                Web Application</span>
                                            <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">85%</span>
                                        </div>
                                        <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                            <div class="bg-[#9272d4] h-1 rounded-full" style="width: 85%"></div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="flex justify-between mb-1">
                                            <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">Desktop Application</span>
                                            <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">65%</span>
                                        </div>
                                        <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                            <div class="bg-[#5185d4] h-1 rounded-full" style="width: 65%"></div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="flex justify-between mb-1">
                                            <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">Photography</span>
                                            <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">90%</span>
                                        </div>
                                        <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                            <div class="bg-[#ca56f2] h-1 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-span-1">
                                    <h4 class="text-5xl dark:text-white font-medium mb-8"> Knowledges </h4>
                                    <div class="flex gap-y-5 gap-x-2.5 flex-wrap">
                                        <!-- <button class="resume-btn">HTML, CSS, JS, jQuery</button> -->
                                        <button class="resume-btn">Selenium</button>
                                        <button class="resume-btn">Laravel</button>
                                        <button class="resume-btn">Python, PHP, JAVA, C#</button>
                                        <button class="resume-btn">MySQL, SQL, MongoDB</button>
                                        <button class="resume-btn">Wordpress</button>
                                        <button class="resume-btn">Documentation</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- working section end -->

                        <!-- footer start -->
                        @include('footer')
                        <!-- footer end -->
                    </div>
                    <!-- resume section start -->
                </div>
            </div>
        </div>
    </div>

    <!--==== js =====-->
    <script src="js/vendor/jquary.min.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>



</html>