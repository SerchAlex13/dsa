<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/dsa_logo_sin_letras.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSA Diseños</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@200;300;400;500;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/957b649d7b.js" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-vietnam">

    <header class="h-24">
        <nav class="wrapper bg-white z-20 h-24 px-5 flex items-center justify-between w-full fixed top-0 shadow-lg">
            <a href="/landing" class="w-1/3 max-w-[120px]">
                <img src="{{ asset('images/dsa_logo.png') }}" class="w-full" alt="logo">
            </a>

            <div>
                <div class="flex inset-0 z-40">
                    <ul class="static inset-x-0 mx-auto h-max text-center grid grid-flow-col gap-6 font-bold text-marine-dsa shadow-2xl w-max bg-transparent p-0">
                        <li class="hidden md:flex">
                            <a href="#" class="hover:text-very-marine-dsa-light">Inicio</a>
                        </li>
                        <li class="hidden md:flex">
                            <a href="#" class="hover:text-very-marine-dsa-light">Productos</a>
                        </li>
                        <li class="hidden md:flex">
                            <a href="#" class="hover:text-very-marine-dsa-light">Conócenos</a>
                        </li>
                        <li class="hidden md:flex">
                            <a href="#" class="hover:text-very-marine-dsa-light">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div>
                <div id="menu" class="fixed hidden md:flex inset-0 z-40 bg-gradient-to-b from-white/70 to-black/70 transition-transform md:static md:bg-none md:translate-x-0">
                    <ul class="absolute inset-x-0 top-24 p-12 bg-white w-[90%] mx-auto rounded-md h-max text-center grid gap-6 font-bold text-marine-dsa shadow-2xl md:w-max md:bg-transparent md:p-0 md:grid-flow-col md:static">
                        <li class="md:hidden">
                            <a href="#" class="hover:text-very-marine-dsa-light">Inicio</a>
                        </li>
                        <li class="md:hidden">
                            <a href="#" class="hover:text-very-marine-dsa-light">Productos</a>
                        </li>
                        <li class="md:hidden">
                            <a href="#" class="hover:text-very-marine-dsa-light">Conócenos</a>
                        </li>
                        <li class="md:hidden">
                            <a href="#" class="hover:text-very-marine-dsa-light">Contacto</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-very-marine-dsa-light"><i class="fa-solid fa-circle-user fa-lg"></i></a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-very-marine-dsa-light"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <button id="menu-btn" class="block hamburger top-1 z-40 md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
        </nav>
    </header>
        
    <section id="hero" class="landingpage wrapper w-full grid gap-8 justify-items-center items-center px-12 pb-12 md:py-24">
        {{-- <img src="{{ asset('images/bg-beach6.png') }}" class="w-[90%] shadow-2xl max-w-lg rounded-3xl md:order-1" alt="ilustración"> --}}

        <article class="text-center space-y-6 md:text-left md:space-y-8 md:mt-10">
            
            <div class="text-4xl font-extrabold md:text-5xl">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-dsa to-very-marine-dsa-light">
                    DSA Diseños
                </span>
            </div>
            <p class="text-dark-grayish-blue">
                Nos enfocamos en la creación de ropa de calidad, por lo cual garantizamos una excelente durabilidad en todas nuestras prendas.
            </p>
            <a href="#" class="button md:mx-0">Ver productos</a>
        </article>
    </section>
    
    

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
            <a href="#" class="button mx-auto shadow-xl shadow-very-marine-dsa-light/30">Get Started</a>
        </section>

        <section id="cta" class="bg-cyan-dsa font-bold">
            <div class="wrapper py-24 text-center grid gap-6 md:grid-cols-[40%_40%] md:justify-between md:items-center md:text-left">
                <h2 class="text-4xl text-very-pale-red">
                    Simplify how your team works today.
                </h2>
                <a href="#" class="button shadow-lg from-very-marine-dsa-light to-marine-dsa-light shadow-very-marine-dsa-light/30  text-cyan-dsa block w-max py-4 px-12 rounded-full mx-auto md:mx-0 md:justify-self-end hover:from-marine-dsa-light hover:to-black">Get Started</a>
            </div>
        </section>
    </main>

    <footer class="bg-black py-24">
        <section class="wrapper grid gap-12 justify-items-center footer-area lg:footer-area-lg lg:grid-cols-3 lg:justify-items-stretch">
            <form class="flex gap-4 w-full min-w-[100px] max-h-[48px] [grid-area:form]">
                <input type="email" placeholder="Updates in your inbox..." class="min-w-[50px] flex-1 rounded-full px-4">
                <input type="submit" value="Ir" class="button shadow-none py-3 px-8 rounded-full text-white cursor-pointer">
            </form>

            <nav class="grid grid-cols-[max-content_max-content] gap-y-4 justify-between text-white w-4/5 [grid-area:navigation] lg:w-full">
                <a href="#" class="hover:text-cyan-dsa">Inicio</a>
                <a href="#" class="hover:text-cyan-dsa">Mi cuenta</a>
                <a href="#" class="hover:text-cyan-dsa">Productos</a>
                <a href="#" class="hover:text-cyan-dsa">Carrito</a>
                <a href="#" class="hover:text-cyan-dsa">Conócenos</a>
                <a href="#" class="hover:text-cyan-dsa">Contacto</a>
            </nav>

            <div class="flex flex-wrap gap-4 justify-between w-full [grid-area:social-media]">
                <a href="#">
                    <i class="fa-brands fa-facebook fa-xl text-white hover:text-very-marine-dsa-light"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-youtube fa-xl text-white hover:text-very-marine-dsa-light"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-x-twitter fa-xl text-white hover:text-very-marine-dsa-light"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-pinterest fa-xl text-white hover:text-very-marine-dsa-light"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-instagram fa-xl text-white hover:text-very-marine-dsa-light"></i>
                </a>
            </div>
            <a href="#" class="[grid-area:logo]">
                <img src="{{ asset('images/dsa_logo.png') }}" class="w-[146px]" alt="logo">
            </a>
            <p class="text-dark-grayish-blue text-center [grid-area:copyright] text-xs lg:text-right">
                Copyright &copy; 2023. Todos los derechos reservados
            </p>
        </section>
    </footer>
    
</body>
</html>