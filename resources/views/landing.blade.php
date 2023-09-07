<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSA Diseños</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-dosis">

    <header>
        <nav class="wrapper h-20 flex items-center justify-between">
            <a href="/landingpage" class="w-1/3 max-w-[140px]">
                <img src="{{ asset('images/logo.svg') }}" class="w-full" alt="logo">
            </a>

            <input type="checkbox" id="menu" class="peer hidden">
            <label for="menu" class="bg-open-menu w-6 h-5 bg-cover bg-center cursor-pointer peer-checked:bg-close-menu transition-all z-50 md:hidden"></label>

            <div class="fixed inset-0 bg-gradient-to-b from-white/70 to-black/70 translate-x-full peer-checked:translate-x-0 transition-transform md:static md:bg-none md:translate-x-0">
                <ul class="absolute inset-x-0 top-24 p-12 bg-white w-[90%] mx-auto rounded-md h-max text-center grid gap-6 font-bold text-dark-blue shadow-2xl md:w-max md:bg-transparent md:p-0 md:grid-flow-col md:static">
                    <li>
                        <a href="#">Pricing</a>
                    </li>
                    <li>
                        <a href="#">Product</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Careers</a>
                    </li>
                    <li>
                        <a href="#">Community</a>
                    </li>
                </ul>
            </div>

            <a href="#" class="button shadow-sm shadow-bright-red/30 hidden py-3 lg:block">Get Started</a>
        </nav>

        <section class="wrapper grid gap-8 justify-items-center items-center pb-12 md:grid-cols-2 md:py-24">
            <img src="{{ asset('images/illustration-intro.svg') }}" class="w-full max-w-lg md:order-1" alt="ilustración">

            <article class="text-center space-y-6 md:text-left md:space-y-8">
                <h1 class="text-4xl font-bold text-very-dark-blue md:text-5xl">
                    Bring everyone together to build better products
                </h1>
                <p class="text-dark-grayish-blue">
                    Manage makes it simple for software teams to plan day-to-day tasks while keeping the larger team goals in view.
                </p>
                <a href="#" class="button mx-auto shadow-xl shadow-bright-red/30 md:mx-0">Get Started</a>
            </article>
        </section>
    </header>

    <main>
        <section class="wrapper text-center py-24 grid gap-12">
            <article>
                <h2 class="text-3xl font-bold text-very-dark-blue mb-6">
                    What´s different about Manage
                </h2>
                <p class="text-dark-grayish-blue">
                    Manage provides all the functionality your team needs, without the complexity.
                    Our software is tailor-made for modern digital product teams.
                </p>
            </article>

            <div class="grid gap-12">
                <article class="space-y-4">
                    <p class="bg-very-pale-red rounded-l-full font-bold flex items-center">
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

                <article class="space-y-4">
                    <p class="bg-very-pale-red rounded-l-full font-bold flex items-center">
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

                <article class="space-y-4">
                    <p class="bg-very-pale-red rounded-l-full font-bold flex items-center">
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
    </main>
    
</body>
</html>