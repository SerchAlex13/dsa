<x-plantilla>

    <h1>Mi cuenta</h1>

</x-plantilla>



{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="aPIcwNgQz5YGRHtmzE6piuC2s19sEPv0J0kVKru8">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&amp;display=swap">

    <!-- Scripts -->
    <link rel="stylesheet" href="http://dsa.test/build/assets/app.31f4094f.css"><script type="module" src="http://dsa.test/build/assets/app.2896b7a8.js"></script>
    <!-- Styles -->
    <!-- Livewire Styles -->
<style>
[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {
    display: none;
}

[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {
    display:none;
}

[wire\:offline] {
    display: none;
}

[wire\:dirty]:not(textarea):not(input):not(select) {
    display: none;
}

input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
    animation-duration: 50000s;
    animation-name: livewireautofill;
}

@keyframes livewireautofill { from {} }
</style>
</head>
<body class="font-sans antialiased">
    <div x-data="{&quot;show&quot;:true,&quot;style&quot;:&quot;success&quot;,&quot;message&quot;:null}" :class="{ 'bg-indigo-500': style == 'success', 'bg-red-700': style == 'danger', 'bg-gray-500': style != 'success' &amp;&amp; style != 'danger' }" style="display: none;" x-show="show &amp;&amp; message" x-init="
            document.addEventListener('banner-message', event => {
                style = event.detail.style;
                message = event.detail.message;
                show = true;
            });
        " class="bg-indigo-500">
<div class="max-w-screen-xl mx-auto py-2 px-3 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between flex-wrap">
        <div class="w-0 flex-1 flex items-center min-w-0">
            <span class="flex p-2 rounded-lg bg-indigo-600" :class="{ 'bg-indigo-600': style == 'success', 'bg-red-600': style == 'danger' }">
                <svg x-show="style == 'success'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <svg x-show="style == 'danger'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <svg x-show="style != 'success' &amp;&amp; style != 'danger'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </span>

            <p class="ml-3 font-medium text-sm text-white truncate" x-text="message"></p>
        </div>

        <div class="shrink-0 sm:ml-3">
            <button type="button" class="-mr-1 flex p-2 rounded-md focus:outline-none sm:-mr-2 transition hover:bg-indigo-600 focus:bg-indigo-600" :class="{ 'hover:bg-indigo-600 focus:bg-indigo-600': style == 'success', 'hover:bg-red-600 focus:bg-red-600': style == 'danger' }" aria-label="Dismiss" x-on:click="show = false">
                <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
</div>

    <div class="min-h-screen bg-gray-100">
        <nav wire:id="1XdcUlOBNsJNDRBgMHtt" x-data="{ open: false }" class="bg-white border-b border-gray-100">
<!-- Primary Navigation Menu -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
        <div class="flex">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="http://dsa.test/dashboard">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="block h-9 w-auto">
<path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"></path>
<path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"></path>
</svg>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition" href="http://dsa.test/dashboard">
Dashboard
</a>
            </div>
        </div>

        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <!-- Teams Dropdown -->
            
            <!-- Settings Dropdown -->
            <div class="ml-3 relative">
                <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
<div @click="open = ! open">
    <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                    admin

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </span>
</div>

<div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0" @click="open = false" style="display: none;">
    <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Manage Account
                        </div>

                        <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="http://dsa.test/user/profile">Profile</a>

                        
                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="http://dsa.test/logout" x-data="">
                            <input type="hidden" name="_token" value="aPIcwNgQz5YGRHtmzE6piuC2s19sEPv0J0kVKru8">
                            <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="http://dsa.test/logout" @click.prevent="$root.submit();">Log Out</a>
                        </form>
    </div>
</div>
</div>
            </div>
        </div>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- Responsive Navigation Menu -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
        <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition" href="http://dsa.test/dashboard">
Dashboard
</a>
    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">
        <div class="flex items-center px-4">
            
            <div>
                <div class="font-medium text-base text-gray-800">admin</div>
                <div class="font-medium text-sm text-gray-500">admin@ejemplo.com</div>
            </div>
        </div>

        <div class="mt-3 space-y-1">
            <!-- Account Management -->
            <a class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition" href="http://dsa.test/user/profile">
Profile
</a>

            
            <!-- Authentication -->
            <form method="POST" action="http://dsa.test/logout" x-data="">
                <input type="hidden" name="_token" value="aPIcwNgQz5YGRHtmzE6piuC2s19sEPv0J0kVKru8">
                <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition" href="http://dsa.test/logout" @click.prevent="$root.submit();">
Log Out
</a>
            </form>

            <!-- Team Management -->
                        </div>
    </div>
</div>
</nav>

<!-- Livewire Component wire-end:1XdcUlOBNsJNDRBgMHtt -->
        <!-- Page Heading -->
                        <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Profile
    </h2>
                </div>
            </header>
        
        <!-- Page Content -->
        <main>
            <div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div wire:id="a7vuZlBYTQQ1JLhGHq5J" class="md:grid md:grid-cols-3 md:gap-6">
<div class="md:col-span-1 flex justify-between">
<div class="px-4 sm:px-0">
    <h3 class="text-lg font-medium text-gray-900">Profile Information</h3>

    <p class="mt-1 text-sm text-gray-600">
        Update your account's profile information and email address.
    </p>
</div>

<div class="px-4 sm:px-0">
    
</div>
</div>

<div class="mt-5 md:mt-0 md:col-span-2">
    <form wire:submit.prevent="updateProfileInformation">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <div class="grid grid-cols-6 gap-6">
                <!-- Profile Photo -->
    
    <!-- Name -->
    <div class="col-span-6 sm:col-span-4">
        <label class="block font-medium text-sm text-gray-700" for="name">
Name
</label>
        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" wire:model.defer="state.name" autocomplete="name">
                </div>

    <!-- Email -->
    <div class="col-span-6 sm:col-span-4">
        <label class="block font-medium text-sm text-gray-700" for="email">
Email
</label>
        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="email" type="email" wire:model.defer="state.email">
        
                </div>
            </div>
        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('a7vuZlBYTQQ1JLhGHq5J').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 mr-3">
Saved.
</div>

    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:loading.attr="disabled" wire:target="photo">
Save
</button>
            </div>
                </form>
</div>
</div>

<!-- Livewire Component wire-end:a7vuZlBYTQQ1JLhGHq5J -->
            <div class="hidden sm:block">
<div class="py-8">
    <div class="border-t border-gray-200"></div>
</div>
</div>
        
                        <div class="mt-10 sm:mt-0">
                <div wire:id="tlZGpgUUPpCxI7gVZpX5" class="md:grid md:grid-cols-3 md:gap-6">
<div class="md:col-span-1 flex justify-between">
<div class="px-4 sm:px-0">
    <h3 class="text-lg font-medium text-gray-900">Update Password</h3>

    <p class="mt-1 text-sm text-gray-600">
        Ensure your account is using a long, random password to stay secure.
    </p>
</div>

<div class="px-4 sm:px-0">
    
</div>
</div>

<div class="mt-5 md:mt-0 md:col-span-2">
    <form wire:submit.prevent="updatePassword">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-4">
        <label class="block font-medium text-sm text-gray-700" for="current_password">
Current Password
</label>
        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="current_password" type="password" wire:model.defer="state.current_password" autocomplete="current-password">
                </div>

    <div class="col-span-6 sm:col-span-4">
        <label class="block font-medium text-sm text-gray-700" for="password">
New Password
</label>
        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="password" type="password" wire:model.defer="state.password" autocomplete="new-password">
                </div>

    <div class="col-span-6 sm:col-span-4">
        <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
Confirm Password
</label>
        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="password_confirmation" type="password" wire:model.defer="state.password_confirmation" autocomplete="new-password">
                </div>
            </div>
        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('tlZGpgUUPpCxI7gVZpX5').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 mr-3">
Saved.
</div>

    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
Save
</button>
            </div>
                </form>
</div>
</div>

<!-- Livewire Component wire-end:tlZGpgUUPpCxI7gVZpX5 -->                </div>

            <div class="hidden sm:block">
<div class="py-8">
    <div class="border-t border-gray-200"></div>
</div>
</div>
        
                        <div class="mt-10 sm:mt-0">
                <div wire:id="ouhcaKG4UlVfJH90ETde" class="md:grid md:grid-cols-3 md:gap-6">
<div class="md:col-span-1 flex justify-between">
<div class="px-4 sm:px-0">
    <h3 class="text-lg font-medium text-gray-900">Two Factor Authentication</h3>

    <p class="mt-1 text-sm text-gray-600">
        Add additional security to your account using two factor authentication.
    </p>
</div>

<div class="px-4 sm:px-0">
    
</div>
</div>

<div class="mt-5 md:mt-0 md:col-span-2">
    <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
        <h3 class="text-lg font-medium text-gray-900">
                        You have not enabled two factor authentication.
                </h3>

    <div class="mt-3 max-w-xl text-sm text-gray-600">
        <p>
            When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.
        </p>
    </div>

    
    <div class="mt-5">
                        <span wire:then="enableTwoFactorAuthentication" x-data="" x-ref="span" x-on:click="$wire.startConfirmingPassword('ab2d1de5297198533ed96f794eb99eac')" x-on:password-confirmed.window="setTimeout(() => $event.detail.id === 'ab2d1de5297198533ed96f794eb99eac' &amp;&amp; $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);">
<button type="button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:loading.attr="disabled">
Enable
</button>
</span>

<div x-data="{
    show: window.Livewire.find('ouhcaKG4UlVfJH90ETde').entangle('confirmingPassword').defer,
    focusables() {
        // All focusable element types...
        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

        return [...$el.querySelectorAll(selector)]
            // All non-disabled elements...
            .filter(el => ! el.hasAttribute('disabled'))
    },
    firstFocusable() { return this.focusables()[0] },
    lastFocusable() { return this.focusables().slice(-1)[0] },
    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
}" x-init="$watch('show', value => {
    if (value) {
        document.body.classList.add('overflow-y-hidden');
        
    } else {
        document.body.classList.remove('overflow-y-hidden');
    }
})" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()" x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show" id="506a8cb247bad8f18658bdb3f794fabc" class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
<div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
</div>

<div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none;">
    <div class="px-6 py-4">
    <div class="text-lg">
        Confirm Password
    </div>

    <div class="mt-4">
        For your security, please confirm your password to continue.

    <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-3/4" type="password" placeholder="Password" x-ref="confirmable_password" wire:model.defer="confirmablePassword" wire:keydown.enter="confirmPassword">

                </div>
    </div>
</div>

<div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
    <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition" wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
Cancel
</button>

    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
Confirm
</button>
</div>
</div>
</div>
                </div>
    </div>
</div>
</div>

<!-- Livewire Component wire-end:ouhcaKG4UlVfJH90ETde -->                </div>

            <div class="hidden sm:block">
<div class="py-8">
    <div class="border-t border-gray-200"></div>
</div>
</div>
        
        <div class="mt-10 sm:mt-0">
            <div wire:id="rYsHRKbppeqGqXMUUhsf" class="md:grid md:grid-cols-3 md:gap-6">
<div class="md:col-span-1 flex justify-between">
<div class="px-4 sm:px-0">
    <h3 class="text-lg font-medium text-gray-900">Browser Sessions</h3>

    <p class="mt-1 text-sm text-gray-600">
        Manage and log out your active sessions on other browsers and devices.
    </p>
</div>

<div class="px-4 sm:px-0">
    
</div>
</div>

<div class="mt-5 md:mt-0 md:col-span-2">
    <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl text-sm text-gray-600">
        If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.
    </div>

                <div class="mt-5 space-y-6">
            <!-- Other Browser Sessions -->
                                <div class="flex items-center">
                    <div>
                                                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                                                </div>

                    <div class="ml-3">
                        <div class="text-sm text-gray-600">
                            Windows - Chrome
                        </div>

                        <div>
                            <div class="text-xs text-gray-500">
                                127.0.0.1,

                                                                        <span class="text-green-500 font-semibold">This device</span>
                                                                </div>
                        </div>
                    </div>
                </div>
                        </div>
    
    <div class="flex items-center mt-5">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:click="confirmLogout" wire:loading.attr="disabled">
Log Out Other Browser Sessions
</button>

        <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('rYsHRKbppeqGqXMUUhsf').on('loggedOut', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 ml-3">
Done.
</div>
    </div>

    <!-- Log Out Other Devices Confirmation Modal -->
    <div x-data="{
    show: window.Livewire.find('rYsHRKbppeqGqXMUUhsf').entangle('confirmingLogout').defer,
    focusables() {
        // All focusable element types...
        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

        return [...$el.querySelectorAll(selector)]
            // All non-disabled elements...
            .filter(el => ! el.hasAttribute('disabled'))
    },
    firstFocusable() { return this.focusables()[0] },
    lastFocusable() { return this.focusables().slice(-1)[0] },
    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
}" x-init="$watch('show', value => {
    if (value) {
        document.body.classList.add('overflow-y-hidden');
        
    } else {
        document.body.classList.remove('overflow-y-hidden');
    }
})" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()" x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show" id="7bfef3bbc87b550e8528db202ce06cfb" class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
<div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
</div>

<div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none;">
    <div class="px-6 py-4">
    <div class="text-lg">
        Log Out Other Browser Sessions
    </div>

    <div class="mt-4">
        Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.

            <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-3/4" type="password" placeholder="Password" x-ref="password" wire:model.defer="password" wire:keydown.enter="logoutOtherBrowserSessions">

                                </div>
    </div>
</div>

<div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
    <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition" wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
Cancel
</button>

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-3" wire:click="logoutOtherBrowserSessions" wire:loading.attr="disabled">
Log Out Other Browser Sessions
</button>
</div>
</div>
</div>
    </div>
</div>
</div>

<!-- Livewire Component wire-end:rYsHRKbppeqGqXMUUhsf -->            </div>

                        <div class="hidden sm:block">
<div class="py-8">
    <div class="border-t border-gray-200"></div>
</div>
</div>

            <div class="mt-10 sm:mt-0">
                <div wire:id="K3Tzvjni0scXHEtPdYBW" class="md:grid md:grid-cols-3 md:gap-6">
<div class="md:col-span-1 flex justify-between">
<div class="px-4 sm:px-0">
    <h3 class="text-lg font-medium text-gray-900">Delete Account</h3>

    <p class="mt-1 text-sm text-gray-600">
        Permanently delete your account.
    </p>
</div>

<div class="px-4 sm:px-0">
    
</div>
</div>

<div class="mt-5 md:mt-0 md:col-span-2">
    <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl text-sm text-gray-600">
        Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
    </div>

    <div class="mt-5">
        <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
Delete Account
</button>
    </div>

    <!-- Delete User Confirmation Modal -->
    <div x-data="{
    show: window.Livewire.find('K3Tzvjni0scXHEtPdYBW').entangle('confirmingUserDeletion').defer,
    focusables() {
        // All focusable element types...
        let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'

        return [...$el.querySelectorAll(selector)]
            // All non-disabled elements...
            .filter(el => ! el.hasAttribute('disabled'))
    },
    firstFocusable() { return this.focusables()[0] },
    lastFocusable() { return this.focusables().slice(-1)[0] },
    nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
    prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
    nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
    prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
}" x-init="$watch('show', value => {
    if (value) {
        document.body.classList.add('overflow-y-hidden');
        
    } else {
        document.body.classList.remove('overflow-y-hidden');
    }
})" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()" x-on:keydown.shift.tab.prevent="prevFocusable().focus()" x-show="show" id="36ac91a8122577c7b197539ebb1a5123" class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
<div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
</div>

<div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none;">
    <div class="px-6 py-4">
    <div class="text-lg">
        Delete Account
    </div>

    <div class="mt-4">
        Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.

            <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-3/4" type="password" placeholder="Password" x-ref="password" wire:model.defer="password" wire:keydown.enter="deleteUser">

                                </div>
    </div>
</div>

<div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
    <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition" wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
Cancel
</button>

            <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
Delete Account
</button>
</div>
</div>
</div>
    </div>
</div>
</div>

<!-- Livewire Component wire-end:K3Tzvjni0scXHEtPdYBW -->                </div>
                </div>
</div>
        </main>
    </div>

    
    <!-- Livewire Scripts -->

<script src="/livewire/livewire.js?id=de3fca26689cb5a39af4" data-turbo-eval="false" data-turbolinks-eval="false"></script>
<script data-turbo-eval="false" data-turbolinks-eval="false">
if (window.livewire) {
    console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
}

window.livewire = new Livewire();
window.livewire.devTools(true);
window.Livewire = window.livewire;
window.livewire_app_url = '';
window.livewire_token = 'aPIcwNgQz5YGRHtmzE6piuC2s19sEPv0J0kVKru8';

/* Make sure Livewire loads first. */
if (window.Alpine) {
    /* Defer showing the warning so it doesn't get buried under downstream errors. */
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function() {
            console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
        })
    });
}

/* Make Alpine wait until Livewire is finished rendering to do its thing. */
window.deferLoadingAlpine = function (callback) {
    window.addEventListener('livewire:load', function () {
        callback();
    });
};

let started = false;

window.addEventListener('alpine:initializing', function () {
    if (! started) {
        window.livewire.start();

        started = true;
    }
});

document.addEventListener("DOMContentLoaded", function () {
    if (! started) {
        window.livewire.start();

        started = true;
    }
});
</script>


</body>
</html> --}}