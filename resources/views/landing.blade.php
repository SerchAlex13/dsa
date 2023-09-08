<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSA Diseños</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@200;300;400;500;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-vietnam">

    <header>
        <nav class="wrapper h-20 flex items-center justify-between">
            <a href="/landing" class="w-1/3 max-w-[140px]">
                <img src="{{ asset('images/logo.svg') }}" class="w-full" alt="logo">
            </a>

            {{-- <input type="checkbox" id="menu" class="peer hidden">
            <label for="menu" class="bg-open-menu w-6 h-5 bg-cover bg-center cursor-pointer peer-checked:bg-close-menu transition-all z-50 lg:hidden"></label> --}}

            <div class="fixed inset-0 bg-gradient-to-b from-white/70 to-black/70 translate-x-full peer-checked:translate-x-0 transition-transform z-40 lg:static lg:bg-none lg:translate-x-0">
                <ul class="absolute inset-x-0 top-24 p-12 bg-white w-[90%] mx-auto rounded-md h-max text-center grid gap-6 font-bold text-dark-blue shadow-2xl lg:w-max lg:bg-transparent lg:p-0 lg:grid-flow-col lg:static">
                    <li>
                        <a href="#" class="hover:text-dark-grayish-blue">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-dark-grayish-blue">Product</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-dark-grayish-blue">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-dark-grayish-blue">Careers</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-dark-grayish-blue">Community</a>
                    </li>
                </ul>
            </div>

            <a href="#" class="button shadow-sm shadow-bright-red/30 hidden py-3 lg:block">Get Started</a>
            
            <button id="menu-btn" class="block hamburger lg:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>

            <div class="lg:hidden">
                <div id="menu" class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                    <a href="#">Pricing</a>
                    <a href="#">Products</a>
                    <a href="#">About Us</a>
                    <a href="#">Careers</a>
                    <a href="#">Community</a>
                </div>
            </div>
        </nav>

        <section id="hero" class="wrapper grid gap-8 justify-items-center items-center pb-12 md:grid-cols-2 md:py-24">
            <img src="{{ asset('images/illustration-intro.svg') }}" class="w-full max-w-lg md:order-1" alt="ilustración">

            <article class="text-center space-y-6 md:text-left md:space-y-8">
                <h1 class="text-4xl font-bold text-very-dark-blue md:text-5xl">
                    Bring everyone together to build better products.
                </h1>
                <p class="text-dark-grayish-blue">
                    Manage makes it simple for software teams to plan day-to-day tasks while keeping the larger team goals in view.
                </p>
                <a href="#" class="button mx-auto shadow-xl shadow-bright-red/30 md:mx-0">Get Started</a>
            </article>
        </section>
    </header>

    <figure class="absolute inset-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('images/bg-tablet-pattern.svg') }}" class="absolute w-full -z-10 -top-24 -right-1/4 max-w-2xl" alt="figura">
    </figure>

    <main>
        <section id="features" class="wrapper text-center py-24 grid gap-12 md:grid-cols-2 md:text-left">
            <article>
                <h2 class="text-3xl font-bold text-very-dark-blue mb-6 md:text-4xl">
                    What´s different about Manage
                </h2>
                <p class="text-dark-grayish-blue">
                    Manage provides all the functionality your team needs, without the complexity.
                    Our software is tailor-made for modern digital product teams.
                </p>
            </article>

            <div class="grid gap-12">
                <article class="space-y-4 md:space-y-6">
                    <p class="bg-very-pale-red rounded-l-full font-bold flex items-center md:bg-transparent">
                        <span class="bg-bright-red text-white px-6 rounded-full py-2">
                            01
                        </span>
                        <span class="flex-1 p-2">
                            Track company-wide progress
                        </span>
                    </p>
                    <p class="text-dark-grayish-blue text-left">
                        See how your day-to-day tasks fit into the wider vision.
                        Go from tracking progress at the milestone level all the way done to the smallest of details.
                        Never lose sight of the bigger picture again.
                    </p>
                </article>

                <article class="space-y-4 md:space-y-6">
                    <p class="bg-very-pale-red rounded-l-full font-bold flex items-center md:bg-transparent">
                        <span class="bg-bright-red text-white px-6 rounded-full py-2">
                            02
                        </span>
                        <span class="flex-1 p-2">
                            Advanced built-in reports
                        </span>
                    </p>
                    <p class="text-dark-grayish-blue text-left">
                        Set internal delivery estimates and track progress toward company goals.
                        Our customisable dashboard helps you build out the reports you need to keep key stakeholders informed.
                    </p>
                </article>

                <article class="space-y-4 md:space-y-6">
                    <p class="bg-very-pale-red rounded-l-full font-bold flex items-center md:bg-transparent">
                        <span class="bg-bright-red text-white px-6 rounded-full py-2">
                            03
                        </span>
                        <span class="flex-1 p-2">
                            Everithing you need in one place
                        </span>
                    </p>
                    <p class="text-dark-grayish-blue text-left">
                        Stop jumping from one service to another to communicate, store files, track tasks and share documents.
                        Manage offers an all-in-one team productivity solution.
                    </p>
                </article>
            </div>
        </section>

        <section id="testimonials" class="wrapper text-center py-24">
            <h2 class="text-3xl font-bold text-very-dark-blue md:text-4xl">
                What they´ve said
            </h2>
            <div class="mt-24 mb-14">
                <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                    <article class="bg-very-light-gray pt-16 pb-12 px-4 relative flex flex-col items-center space-y-6 rounded-lg md:w-1/3">
                        <img src="{{ asset('images/avatar-anisha.png') }}" class="absolute w-24 aspect-square -top-12 inset-x-0 mx-auto" alt="avatar">
                        <h3 class="text-xl mb-4 pt-2 font-bold text-very-dark-blue">
                            Anisha Li
                        </h3>
                        <p class="text-dark-grayish-blue">
                            "Manage has supercharged our team´s workflow
                            The ability to mantain visibility on larger milestones at all times keeps everyone motivated"
                        </p>
                    </article>

                    <article class="hidden bg-very-light-gray pt-16 pb-12 px-4 relative flex-col items-center space-y-6 rounded-lg md:flex md:w-1/3">
                        <img src="{{ asset('images/avatar-ali.png') }}" class="absolute w-24 aspect-square -top-12 inset-x-0 mx-auto" alt="avatar">
                        <h3 class="text-xl mb-4 pt-2 font-bold text-very-dark-blue">
                            Ali Bravo
                        </h3>
                        <p class="text-dark-grayish-blue">
                            "We have been able to cancel so many other subscriptions since using Manage.
                            There is no more cross-channel confusion and everyone is much more focused."
                        </p>
                    </article>

                    <article class="hidden bg-very-light-gray pt-16 pb-12 px-4 relative flex-col items-center space-y-6 rounded-lg md:flex md:w-1/3">
                        <img src="{{ asset('images/avatar-richard.png') }}" class="absolute w-24 aspect-square -top-12 inset-x-0 mx-auto" alt="avatar">
                        <h3 class="text-xl mb-4 pt-2 font-bold text-very-dark-blue">
                            Richard Watts
                        </h3>
                        <p class="text-dark-grayish-blue">
                            "Manage has supercharged our team´s workflow
                            The ability to mantain visibility on larger milestones at all times keeps everyone motivated"
                        </p>
                    </article>
                </div>
            </div>
            <a href="#" class="button mx-auto shadow-xl shadow-bright-red/30">Get Started</a>
        </section>

        <section id="cta" class="bg-bright-red font-bold">
            <div class="wrapper py-24 text-center grid gap-6 md:grid-cols-[40%_40%] md:justify-between md:items-center md:text-left">
                <h2 class="text-4xl text-very-pale-red">
                    Simplify how your team works today.
                </h2>
                <a href="#" class="button text-bright-red bg-very-light-gray mx-auto md:mx-0 md:justify-self-end hover:bg-very-dark-blue">Get Started</a>
            </div>
        </section>
    </main>

    <footer class="bg-very-dark-blue py-24">
        <section class="wrapper grid gap-12 justify-items-center footer-area lg:footer-area-lg lg:grid-cols-3 lg:justify-items-stretch">
            <form class="flex gap-4 w-full min-w-[100px] [grid-area:form]">
                <input type="email" placeholder="Updates in your inbox..." class="min-w-[50px] flex-1 rounded-full px-4">
                <input type="submit" value="GO" class="py-3 px-8 bg-bright-red rounded-full text-white cursor-pointer hover:bg-bright-red-light">
            </form>

            <nav class="grid grid-cols-[max-content_max-content] gap-y-4 justify-between text-white w-4/5 [grid-area:navigation] lg:w-full">
                <a href="#" class="hover:text-bright-red">Home</a>
                <a href="#" class="hover:text-bright-red">Pricing</a>
                <a href="#" class="hover:text-bright-red">Products</a>
                <a href="#" class="hover:text-bright-red">About Us</a>
                <a href="#" class="hover:text-bright-red">Careers</a>
                <a href="#" class="hover:text-bright-red">Community</a>
                <a href="#" class="hover:text-bright-red">Privacy Policy</a>
            </nav>

            <div class="flex flex-wrap gap-4 justify-between w-full [grid-area:social-media]">
                <a href="#">
                    <img src="{{ asset('images/icon-facebook.svg') }}" class="w-8 " alt="facebook">
                </a>
                <a href="#">
                    <img src="{{ asset('images/icon-youtube.svg') }}" class="w-8" alt="youtube">
                </a>
                <a href="#">
                    <img src="{{ asset('images/icon-twitter.svg') }}" class="w-8" alt="twitter">
                </a>
                <a href="#">
                    <img src="{{ asset('images/icon-pinterest.svg') }}" class="w-8" alt="pinterest">
                </a>
                <a href="#">
                    <img src="{{ asset('images/icon-instagram.svg') }}" class="w-8" alt="instagram">
                </a>
            </div>
            <a href="#" class="[grid-area:logo]">
                <img src="{{ asset('images/logo.svg') }}" class="" alt="logo">
            </a>
            <p class="text-dark-grayish-blue text-center [grid-area:copyright] lg:text-right">
                Copyright 2020. All Rights Reserved
            </p>
        </section>
    </footer>
    
</body>
</html>