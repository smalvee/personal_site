<!DOCTYPE html>
<html lang="en">



<head>
    <!-- commom meta tag -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo/faveicon.png" type="image/x-icon">
    <!--=== fontaswesome ===-->
    <link rel="stylesheet" href="assets/fontaswesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/fontaswesome/css/fontawesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&amp;family=Roboto+Slab:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="css/vendor/slick.css" />
    <!--=== main css ===-->
    <link rel="stylesheet" href="css/tailwind.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <title>SM Alvee</title>

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
                <!-- website Logo -->
                <!-- <a href="index.html">
                    <img class="h-[26px] lg:h-[32px]" src="images/logo/logo 1.png" alt="" />
                </a> -->
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

        <!-- mobile menu start -->
        <nav id="navbar" class="hidden lg:hidden">
            <ul class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
                <li>
                    <a class="mobile-menu-items-active" href="aboutOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-regular fa-user"></i>
                        </span>About </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="/resume">
                        <span class="mr-2 text-xl">
                            <i class="fa-regular fa-file-lines"></i>
                        </span>Resume </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="/works">
                        <span class="mr-2 text-xl">
                            <i class="fas fa-briefcase"></i>
                        </span>Works </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="/gallery">
                        <span class="mr-2 text-xl">
                            <i class="fa-brands fa-blogger"></i>
                        </span>Gallery </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="/contact">
                        <span class="mr-2 text-xl">
                            <i class="fa-solid fa-address-book"></i>
                        </span> Contact </a>
                </li>
            </ul>
        </nav>
        <!-- mobile menu end -->

        <div class="container grid grid-cols-12 md:gap-10 justify-between lg:mt-[220px]">
            <!-- sidber personal info -->
            <div class="col-span-12 lg:col-span-4 hidden lg:block h-screen sticky top-44">
                <div class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                    <!-- profile image -->
                    <img src="images/about/smalvee.jpg" class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]" alt="about" />
                    <div class="pt-[100px] pb-8">
                        <h2 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> SM Rais Uddin Alvee </h2>
                        <h3 class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
                            SQA Engineer </h3>
                        @include('social_network')
                        <!-- personal infomation start -->
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
                        <!-- personal infomation end-->
                        <!-- dowanload button -->
                        <a href="/pdf/resume.pdf" target="blank">
                            <button class="dowanload-btn">
                                <img class="mr-3" src="images/icons/dowanload.png" alt="icon" /> Download CV </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-8">
                <!-- header for mobile devices start -->
                <header class="lg:w-[560px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white dark:bg-[#111111]">
                    <nav class="hidden lg:block">
                        <ul class="flex">
                            <li> <a class="menu-active" href="/">
                                    <span class="text-xl mb-1">
                                        <i class="fa-regular fa-user"></i>
                                    </span> About </a></li>
                            <li> <a class="menu-item" href="/resume">
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
                </header>
                <!-- header for mobile devices end -->

                <!-- about me section start -->
                <div>
                    <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
                        <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                            <!-- about page title -->
                            <h2 class="after-effect after:left-52">About Me</h2>
                            <!-- personal info for mobile devices start -->
                            <div class="lg:hidden">
                                <div class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                                    <!-- profile image  -->
                                    <img src="images/about/smalvee.jpg" class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]" alt="about" />
                                    <div class="pt-[100px] pb-8">
                                        <h2 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> SM Rais Uddin Alvee
                                        </h2>
                                        <h3 class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
                                            SQA Engineer </h3>

                                        @include('social_network')

                                        <!-- personal info start -->
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
                                                    <p class="dark:text-white">Demra, Dhaka, bangladesh</p>
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
                                        <!-- personal info end -->

                                        <!-- dowanload button -->
                                        <a href="/pdf/resume.pdf" target="blank">
                                            <button class="dowanload-btn">
                                                <img class="mr-3" src="images/icons/dowanload.png" alt="icon" /> Download CV </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- personal info for mobile devices end -->

                            <div class="lg:grid grid-cols-12 md:gap-10 pt-4 md:pt-[30px] items-center hidden">
                                <div class="col-span-12 space-y-2.5">
                                    <div class="lg:mr-16">
                                        <p class="text-[#44566c] dark:text-color-910 leading-7"> I'm a Software Testing & Quality Assurance (SQA) Engineer from Dhaka, Bangladesh.
                                            Also working in web development and print media. </p>
                                        <p class="text-[#44566c] leading-7 mt-2.5 dark:text-color-910"> I enjoy turning complex problems into simple and beautiful ones. </p>
                                    </div>
                                    <div></div>
                                </div>
                            </div>

                        </div>

                        <!-- what i do section start -->
                        <div class="pb-12 px-2 sm:px-5 md:px-10 lg:px-14">
                            <h3 class="text-[35px] dark:text-white font-bold font-robotoSlab pb-5"> What I do! </h3>
                            <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">

                                <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
                                    <img class="w-10 h-10 object-contain block" src="images/icons/icon.svg" alt="icon" />
                                    <div class="space-y-2">
                                        <h3 class="dark:text-white text-[22px] font-semibold"> Software Testing </h3>
                                        <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]" style="text-align:justify;">
                                            Software Testing is a method to check whether the actual software product matches the
                                            expected requirements and ensure that the product is usable for clients. It involves
                                            the execution of software or system components using manual or automated tools to
                                            evaluate one or more properties of interest. </p>
                                    </div>
                                </div>

                                <div class="about-box bg-[#f3faff] dark:bg-transparent">
                                    <img class="w-10 h-10 object-contain block" src="images/icons/icon5.svg" alt="icon" />
                                    <div class="space-y-2">
                                        <h3 class="dark:text-white text-[22px] font-semibold"> Web Application </h3>
                                        <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]" style="text-align:justify;">
                                            A Web application (Web app) is an application program that is stored on a remote server
                                            and delivered over the Internet through a browser interface. Web applications can be
                                            designed for a wide variety of uses and can be used by anyone; from an organization
                                            to an individual for numerous reasons.</p>
                                    </div>
                                </div>

                                <!-- <div class="about-box bg-[#fefaf0] dark:bg-transparent">
                                    <img class="w-10 h-10 object-contain block" src="images/icons/icon1.svg"
                                        alt="icon" />
                                    <div class="space-y-2">
                                        <h3 class="dark:text-white text-[22px] font-semibold"> App Development </h3>
                                        <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                                    </div>
                                </div> -->

                                <!-- <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
                                    <img class="w-10 h-10 object-contain block" src="images/icons/icon2.svg"
                                        alt="icon" />
                                    <div class="space-y-2">
                                        <h3 class="dark:text-white text-[22px] font-semibold"> Photography </h3>
                                        <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                                    </div>
                                </div> -->

                                <div class="about-box bg-[#fff0f8] dark:bg-transparent">
                                    <img class="w-10 h-10 object-contain block" src="images/icons/icon4.svg" alt="icon" />
                                    <div class="space-y-2">
                                        <h3 class="dark:text-white text-[22px] font-semibold"> Desktop Application </h3>
                                        <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]" style="text-align:justify;">
                                            A desktop application is a software program that can be run on a standalone computer
                                            to perform a specific task by an end-user. </p>
                                    </div>
                                </div>

                                <div class="about-box bg-[#fff4f4] dark:bg-transparent">
                                    <img class="w-10 h-10 object-contain block" src="images/icons/icon3.svg" alt="icon" />
                                    <div class="space-y-2">
                                        <h3 class="dark:text-white text-[22px] font-semibold"> Photography </h3>
                                        <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]" style="text-align:justify;">
                                            I like capturing. I am a professional photographer which is my hobby. I enjoyed the
                                            click what I do. Beside I like to travel and want to explore the beauty of earth. </p>
                                    </div>
                                </div>





                            </div>
                        </div>

                        <!-- what i do section start -->
                        <!-- <div class="px-2 sm:px-5 md:px-10 lg:px-14">
                            <div class="bg-[#F8FBFB] dark:bg-[#0D0D0D] max-w-full h-auto py-10 rounded-xl">
                                <h3 class="text-center dark:text-white text-6xl mb-3 font-semibold"> Clients </h3>
                               
                                <div class="slickOne text-center px-2 pt-8">
                                    <div>
                                        <img class="overflow-hidden brand-img" src="images/slider/brand.png"
                                            alt="brand icon" />
                                    </div>
                                    <div>
                                        <img class="overflow-hidden brand-img" src="images/slider/brand1.png"
                                            alt="brand icon" />
                                    </div>
                                    <div>
                                        <img class="overflow-hidden brand-img" src="images/slider/brand2.png"
                                            alt="brand icon" />
                                    </div>
                                    <div>
                                        <img class="overflow-hidden brand-img" src="images/slider/brand3.png"
                                            alt="brand icon" />
                                    </div>
                                    <div>
                                        <img class="overflow-hidden brand-img" src="images/slider/brand4.png"
                                            alt="brand icon" />
                                    </div>
                                    <div>
                                        <img class="overflow-hidden brand-img" src="images/slider/brand1.png"
                                            alt="brand icon" />
                                    </div>
                                    <div>
                                        <img class="overflow-hidden brand-img" src="images/slider/brand1.png"
                                            alt="brand icon" />
                                    </div>
                                </div>
                               
                            </div>
                        </div> -->

                        <!-- footer start -->
                        @include('footer')
                        <!-- footer section end -->
                    </div>
                </div>
                <!-- about me section start -->
            </div>
        </div>
    </div>
    <!-- End bgHomeBg -->


    <!--==== js =====-->
    <script src="js/vendor/jquary.min.js"></script>
    <script src="js/vendor/slick.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>



</html>