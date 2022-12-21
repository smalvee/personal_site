<!DOCTYPE html>
<html lang="en">



<head>
    <!-- common meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo/faveicon.png" type="image/x-icon">
    <!--==== fontaswesome  =====-->
    <link rel="stylesheet" href="assets/fontaswesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/fontaswesome/css/fontawesome.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&amp;family=Roboto+Slab:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!--=== jquary modal css ===-->
    <link rel="stylesheet" href="css/vendor/jquery.modal.min.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/tailwind.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <title>SM Alvee </title>
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
                    <img class="h-[26px] lg:h-[32px]" src="images/logo/logo.png" alt="logo" />
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
            <ul
                class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
                <li>
                    <a class="mobile-menu-items" href="/">
                        <span class="mr-2 text-xl">
                            <i class="fa-regular fa-user"></i>
                        </span> About </a>
                </li>
                <li>
                    <a class="mobile-menu-items" href="/resume">
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
                    <a class="mobile-menu-items-active" href="/gallery">
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
        <!-- mobile menu end -->

        <div class="container grid grid-cols-12 md:gap-10 justify-between lg:mt-[220px]">
            <!-- sidber personal info -->
            <div class="col-span-12 lg:col-span-4 hidden lg:block h-screen sticky top-44">
                <div
                    class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                    <!-- profile image -->
                    <img src="images/about/smalvee.jpg"
                        class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]"
                        alt="about avatar" />
                    <div class="pt-[100px] pb-8">
                        <h1 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> SM Rais Uddin Alvee </h1>
                        <h3
                            class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
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
                        <!-- personal info end -->

                        <!-- dowanload button -->
                        <button class="dowanload-btn">
                            <img class="mr-3" src="images/icons/dowanload.png" alt="icon" /> Download CV </button>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-8">
                <!-- header for mobile devices start -->
                <header
                    class="lg:w-[560px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white dark:bg-[#111111]">
                    <nav class="hidden lg:block">
                        <ul class="flex">
                            <li> <a class="menu-item" href="/">
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
                            <li><a class="menu-active" href="/gallery">
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
                <!-- header for mobile devices start -->

                <!-- blog   section start -->
                <section class="bg-white lg:rounded-2xl dark:bg-[#111111]">
                    <div class="container px-4 sm:px-5 md:px-10 lg:px-[60px]">
                        <div class="pb-12">
                            <h2 class="after-effect after:left-32 mt-12 lg:mt-0">Gallery</h2>
                            <div class="grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 mt-[30px] grid gap-x-10 gap-y-7 mb-6">
                                <!-- blog items one start -->
                                <!-- <div
                                    class="p-5 rounded-lg mb-2 h-full bg-[#fcf4ff] dark:bg-transparent dark:border-[#212425] dark:border-2">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#ex1" rel="modal:open">
                                            <img class="rounded-lg w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110"
                                                src="images/blog_images/small/1.jpg" alt="blog image" />
                                        </a>
                                    </div>
                                    <div class="flex mt-4 text-tiny text-gray-lite dark:text-[#A6A6A6]">
                                        <span>17 April</span>
                                        <span class="dot-icon">Inspiration</span>
                                    </div>
                                    <h3
                                        class="text-lg font-medium dark:text-white duration-300 transition cursor-pointer mt-3 pr-4 hover:text-[#FA5252] dark:hover:text-[#FA5252]">
                                        <a href="#ex1" rel="modal:open">How to Own Your Audience by Creating an Email
                                            List.</a>
                                    </h3>
                                </div> -->
                                <!-- blog items one end -->

                                <!-- blog items two start -->

                                <!-- <div
                                    class="p-5 rounded-lg mb-2 h-full bg-[#eefbff] dark:bg-transparent dark:border-[#212425] dark:border-2">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#ex2" rel="modal:open">
                                            <img class="rounded-lg w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110"
                                                src="images/blog_images/small/2.jpg" alt="blog image" />
                                        </a>
                                    </div>
                                    <div class="flex mt-4 text-tiny text-gray-lite dark:text-[#A6A6A6]">
                                        <span>10 April</span>
                                        <span class="dot-icon">Inspiration</span>
                                    </div>
                                    <h3
                                        class="text-lg font-medium dark:text-white duration-300 transition cursor-pointer mt-3 pr-4 hover:text-[#FA5252] dark:hover:text-[#FA5252]">
                                        <a href="#ex2" rel="modal:open"> Everything You Need to Know About Web
                                            Accessibility. </a>
                                    </h3>
                                </div> -->
                                <!-- blog items two end -->

                                <!-- blog items three start -->
                                <!-- <div
                                    class="p-5 rounded-lg mb-2 h-full dark:border-[#212425] dark:border-2 bg-[#fcf4ff] dark:bg-transparent">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#ex3" rel="modal:open">
                                            <img class="rounded-lg w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110"
                                                src="images/blog_images/small/3.jpg" alt="blog image" />
                                        </a>
                                    </div>
                                    <div class="flex mt-4 text-tiny text-gray-lite dark:text-[#A6A6A6]">
                                        <span>21 April</span>
                                        <span class="dot-icon">Web Design</span>
                                    </div>
                                    <h3
                                        class="text-lg font-medium dark:text-white duration-300 transition cursor-pointer mt-3 pr-4 hover:text-[#FA5252] dark:hover:text-[#FA5252]">
                                        <a href="#ex3" rel="modal:open">he window know to say beside you</a>T
                                    </h3>
                                </div> -->
                                <!-- blog items three end -->

                                <!-- blog items four start -->
                                <!-- <div
                                    class="p-5 rounded-lg mb-2 h-full dark:border-[#212425] bg-[#fcf4ff] dark:bg-transparent dark:border-2">
                                    <div class="overflow-hidden rounded-lg">
                                        <a href="#ex4" rel="modal:open">
                                            <img class="rounded-lg w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110"
                                                src="images/blog_images/small/4.jpg" alt="blog image" />
                                        </a>
                                    </div>
                                    <div class="flex mt-4 text-tiny text-gray-lite dark:text-[#A6A6A6]">
                                        <span>27 April</span>
                                        <span class="dot-icon">Inspiration</span>
                                    </div>
                                    <h3
                                        class="text-lg font-medium dark:text-white duration-300 transition cursor-pointer mt-3 pr-4 hover:text-[#FA5252] dark:hover:text-[#FA5252]">
                                        <a href="#ex4" rel="modal:open">Top 10 Toolkits for Deep Learning in 2021.</a>
                                    </h3>
                                </div> -->
                                <!-- blog items four end -->

                            </div>
                        </div>
                    </div>

                    <!-- footer section start -->
                    @include('footer')
                    <!-- footer section end -->
                </section>
                <!-- blog section end -->
            </div>

            <!-- modal  for item one start -->
            <div id="ex1" class="modal-container modal">
                <div class="dark:scrollbarDark scrollbarLight overflow-y-scroll max-h-[60vh] lg:max-h-[80vh]">
                    <div class="pr-3 pb-2">
                        <img class="w-full md:h-[450px] object-cover rounded-xl mt-6" src="images/blog_images/1.jpg"
                            alt="blog image" />
                        <div class="flex mt-4 text-tiny text-black dark:text-white">
                            <span>177 April</span>
                            <span class="dot-icon">Inspiration</span>
                        </div>
                        <h2 class="dark:text-white sm:text-3xl mt-2 font-medium">How to Own Your Audience by Creating an
                            Email List.</h2>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum conseqr quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta
                            inventore dolorum consequuntur quo obcaecati rerum sit non. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consetur quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, sit amet consectetur adipisicing elit.
                            Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis
                            doloremque soluta inventore dolorum consequuntur. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo
                            obcaecati rerum sit non. </p>
                    </div>

                    <div class="rounded-lg mt-6 bg-gradient-to-r from-[#FA5252] to-[#DD2476] p-[1px] mr-3">
                        <div class="dark:bg-[#232220] bg-[#ffffff] flex p-4 rounded-lg">
                            <div>
                                <img class="md:w-[125px] rounded-xl" src="images/about/about.jpg" alt="blog image" />
                            </div>
                            <div class="pl-5">
                                <div class="flex justify-between items-center">
                                    <h3 class="dark:text-white text-[22px] font-medium">Rafia Ana</h3>
                                    <span class="dark:text-[#dedede] text-tiny">15 min ago</span>
                                </div>
                                <p class="dark:text-white md:pr-16">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Sequi nam ad, unde vel aut soluta atque consequatur. Omnis, debitis nihil?</p>
                                <button
                                    class="dark:text-[#dedede] text-tiny hover:text-[#FA5252] dark:hover:text-[#FA5252]">Reply</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center md:justify-end space-x-4 mt-8 mr-3">
                        <h6 class="dark:text-white text-[20px]">Login with:</h6>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1773EA]">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <i class="fa-brands fa-twitter"></i>
                                </span>
                            </a>
                            <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#0072b1]">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="pr-3 pb-4">
                            <form class="w-full">
                                <label class="block mb-2">
                                    <span class="dark:text-white text-[25px] font-medium">Leave a Reply</span>
                                    <textarea
                                        class="block w-full mt-3 p-3 dark:text-white hover:outline-none hover:border-0 focus:outline-none rounded dark:bg-[#0b0b0b5e] bg-gray"
                                        rows="3"></textarea>
                                </label>
                                <button class="comment-btn">Comment</button>
                            </form>
                        </div>
                    </div>

                </div>
                <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark ">Close</a>
            </div>
            <!-- modal  for item one end -->

            <!-- modal  for item two start -->
            <div id="ex2" class="modal-container modal">
                <div class="dark:scrollbarDark scrollbarLight overflow-y-scroll max-h-[60vh] lg:max-h-[80vh]">
                    <div class="pr-3 pb-2">
                        <img class="w-full md:h-[450px] object-cover rounded-xl mt-6" src="images/blog_images/2.jpg"
                            alt="blog image" />
                        <div class="flex mt-4 text-tiny text-black dark:text-white">
                            <span>10 April</span>
                            <span class="dot-icon">Inspiration</span>
                        </div>
                        <h2 class="dark:text-white sm:text-3xl mt-2 font-medium">Everything You Need to Know About Web
                            Accessibility.</h2>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum conseqr quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta
                            inventore dolorum consequuntur quo obcaecati rerum sit non. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consetur quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, sit amet consectetur adipisicing elit.
                            Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis
                            doloremque soluta inventore dolorum consequuntur. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo
                            obcaecati rerum sit non. </p>
                    </div>

                    <div class="rounded-lg mt-6 bg-gradient-to-r from-[#FA5252] to-[#DD2476] p-[1px] mr-3">
                        <div class="dark:bg-[#232220] bg-[#ffffff] flex p-4 rounded-lg">
                            <div>
                                <img class="md:w-[125px] rounded-xl" src="images/about/about.jpg" alt="blog image" />
                            </div>
                            <div class="pl-5">
                                <div class="flex justify-between items-center">
                                    <h3 class="dark:text-white text-[22px] font-medium">Rafia Ana</h3>
                                    <span class="dark:text-[#dedede] text-tiny">15 min ago</span>
                                </div>
                                <p class="dark:text-white md:pr-16">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Sequi nam ad, unde vel aut soluta atque consequatur. Omnis, debitis nihil?</p>
                                <button
                                    class="dark:text-[#dedede] text-tiny hover:text-[#FA5252] dark:hover:text-[#FA5252]">Reply</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center md:justify-end space-x-4 mt-8 mr-3">
                        <h6 class="dark:text-white text-[20px]">Login with:</h6>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1773EA]">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <i class="fa-brands fa-twitter"></i>
                                </span>
                            </a>
                            <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#0072b1]">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="pr-3 pb-4">
                            <form class="w-full">
                                <label class="block mb-2">
                                    <span class="dark:text-white text-[25px] font-medium">Leave a Reply</span>
                                    <textarea
                                        class="block w-full mt-3 p-3 dark:text-white hover:outline-none hover:border-0 focus:outline-none rounded dark:bg-[#0b0b0b5e] bg-gray"
                                        rows="3"></textarea>
                                </label>
                                <button class="comment-btn">Comment</button>
                            </form>
                        </div>
                    </div>

                </div>
                <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark ">Close</a>
            </div>

            <!-- modal  for item two end -->

            <!-- modal  for item three start -->
            <div id="ex3" class="modal-container modal">
                <div class="dark:scrollbarDark scrollbarLight overflow-y-scroll max-h-[60vh] lg:max-h-[80vh]">
                    <div class="pr-3 pb-2">
                        <img class="w-full md:h-[450px] object-cover rounded-xl mt-6" src="images/blog_images/3.jpg"
                            alt="blog image" />
                        <div class="flex mt-4 text-tiny text-black dark:text-white">
                            <span>07 April</span>
                            <span class="dot-icon">Inspiration</span>
                        </div>
                        <h2 class="dark:text-white sm:text-3xl mt-2 font-medium">The window know to say beside you</h2>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum conseqr quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta
                            inventore dolorum consequuntur quo obcaecati rerum sit non. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consetur quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, sit amet consectetur adipisicing elit.
                            Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis
                            doloremque soluta inventore dolorum consequuntur. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo
                            obcaecati rerum sit non. </p>
                    </div>

                    <div class="rounded-lg mt-6 bg-gradient-to-r from-[#FA5252] to-[#DD2476] p-[1px] mr-3">
                        <div class="dark:bg-[#232220] bg-[#ffffff] flex p-4 rounded-lg">
                            <div>
                                <img class="md:w-[125px] rounded-xl" src="images/about/about.jpg" alt="blog image" />
                            </div>
                            <div class="pl-5">
                                <div class="flex justify-between items-center">
                                    <h3 class="dark:text-white text-[22px] font-medium">Rafia Ana</h3>
                                    <span class="dark:text-[#dedede] text-tiny">15 min ago</span>
                                </div>
                                <p class="dark:text-white md:pr-16">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Sequi nam ad, unde vel aut soluta atque consequatur. Omnis, debitis nihil?</p>
                                <button
                                    class="dark:text-[#dedede] text-tiny hover:text-[#FA5252] dark:hover:text-[#FA5252]">Reply</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center md:justify-end space-x-4 mt-8 mr-3">
                        <h6 class="dark:text-white text-[20px]">Login with:</h6>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1773EA]">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <i class="fa-brands fa-twitter"></i>
                                </span>
                            </a>
                            <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#0072b1]">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="pr-3 pb-4">
                            <form class="w-full">
                                <label class="block mb-2">
                                    <span class="dark:text-white text-[25px] font-medium">Leave a Reply</span>
                                    <textarea
                                        class="block w-full mt-3 p-3 dark:text-white hover:outline-none hover:border-0 focus:outline-none rounded dark:bg-[#0b0b0b5e] bg-gray"
                                        rows="3"></textarea>
                                </label>
                                <button class="comment-btn">Comment</button>
                            </form>
                        </div>
                    </div>

                </div>
                <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark ">Close</a>
            </div>
            <!-- modal  for item three end -->

            <!-- modal  for item four start -->
            <div id="ex4" class="modal-container modal">
                <div class="dark:scrollbarDark scrollbarLight overflow-y-scroll max-h-[60vh] lg:max-h-[80vh]">
                    <div class="pr-3 pb-2">
                        <img class="w-full md:h-[450px] object-cover rounded-xl mt-6" src="images/blog_images/4.jpg"
                            alt="blog image" />
                        <div class="flex mt-4 text-tiny text-black dark:text-white">
                            <span>177 April</span>
                            <span class="dot-icon">Inspiration</span>
                        </div>
                        <h2 class="dark:text-white sm:text-3xl mt-2 font-medium">Top 10 Toolkits for Deep Learning in
                            2021.</h2>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum conseqr quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, enim corporis omnis doloremque soluta
                            inventore dolorum consequuntur quo obcaecati rerum sit non. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consetur quo obcaecati
                            rerum sit non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga consequatur
                            delectus porro sapiente molestias, magni quasi sed, sit amet consectetur adipisicing elit.
                            Fuga consequatur delectus porro sapiente molestias, magni quasi sed, enim corporis omnis
                            doloremque soluta inventore dolorum consequuntur. </p>
                        <p class="dark:text-white font-normal text-[15px] sm:text-sm my-4"> Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Fuga consequatur delectus porro sapiente molestias, magni
                            quasi sed, enim corporis omnis doloremque soluta inventore dolorum consequuntur quo
                            obcaecati rerum sit non. </p>
                    </div>

                    <div class="rounded-lg mt-6 bg-gradient-to-r from-[#FA5252] to-[#DD2476] p-[1px] mr-3">
                        <div class="dark:bg-[#232220] bg-[#ffffff] flex p-4 rounded-lg">
                            <div>
                                <img class="md:w-[125px] rounded-xl" src="images/about/about.jpg" alt="blog image" />
                            </div>
                            <div class="pl-5">
                                <div class="flex justify-between items-center">
                                    <h3 class="dark:text-white text-[22px] font-medium">Rafia Ana</h3>
                                    <span class="dark:text-[#dedede] text-tiny">15 min ago</span>
                                </div>
                                <p class="dark:text-white md:pr-16">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Sequi nam ad, unde vel aut soluta atque consequatur. Omnis, debitis nihil?</p>
                                <button
                                    class="dark:text-[#dedede] text-tiny hover:text-[#FA5252] dark:hover:text-[#FA5252]">Reply</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center md:justify-end space-x-4 mt-8 mr-3">
                        <h6 class="dark:text-white text-[20px]">Login with:</h6>
                        <div class="flex space-x-3">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1773EA]">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <i class="fa-brands fa-twitter"></i>
                                </span>
                            </a>
                            <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#0072b1]">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="pt-3">
                        <div class="pr-3 pb-4">
                            <form class="w-full">
                                <label class="block mb-2">
                                    <span class="dark:text-white text-[25px] font-medium">Leave a Reply</span>
                                    <textarea
                                        class="block w-full mt-3 p-3 dark:text-white hover:outline-none hover:border-0 focus:outline-none rounded dark:bg-[#0b0b0b5e] bg-gray"
                                        rows="3"></textarea>
                                </label>
                                <button class="comment-btn">Comment</button>
                            </form>
                        </div>
                    </div>

                </div>
                <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark ">Close</a>
            </div>

            <!-- modal  for item four end -->

        </div>
    </div>


    <!--=== js ===-->
    <script src="js/vendor/jquary.min.js"></script>
    <script src="js/vendor/jquery.modal.min.js"></script>
    <!--=== main js ===-->
    <script src="js/main.js"></script>
</body>



</html>