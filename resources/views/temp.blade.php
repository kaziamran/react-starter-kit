<!DOCTYPE html>
<html lang="en-US">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ config('app.name', 'Online Shop') }}</title>
        @include('partials/head')
    </head>
    <body>
        <header>
            <div class="bg-white px-12 py-4 flex flex-row items-center justify-between"> 
                <h1 class="text-red-800 font-bold capitalize">online shop</h1>
                <div class="flex justify-center gap-4">
                    <a href="" class="w-7">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(230,29,29,1)"><path d="M12.0049 0.999695C14.7663 0.999695 17.0049 3.23827 17.0049 5.99969V7.99969H20.0049C20.5572 7.99969 21.0049 8.44741 21.0049 8.99969V20.9997C21.0049 21.552 20.5572 21.9997 20.0049 21.9997H4.00488C3.4526 21.9997 3.00488 21.552 3.00488 20.9997V8.99969C3.00488 8.44741 3.4526 7.99969 4.00488 7.99969H7.00488V5.99969C7.00488 3.23827 9.24346 0.999695 12.0049 0.999695ZM17.0049 10.9997H15.0049V11.9997C15.0049 12.552 15.4526 12.9997 16.0049 12.9997C16.5177 12.9997 16.9404 12.6137 16.9982 12.1163L17.0049 11.9997V10.9997ZM9.00488 10.9997H7.00488V11.9997C7.00488 12.552 7.4526 12.9997 8.00488 12.9997C8.51772 12.9997 8.94039 12.6137 8.99815 12.1163L9.00488 11.9997V10.9997ZM12.0049 2.99969C10.4072 2.99969 9.10122 4.24861 9.00998 5.82342L9.00488 5.99969V7.99969H15.0049V5.99969C15.0049 4.40201 13.756 3.09603 12.1812 3.00479L12.0049 2.99969Z"></path></svg>
                    </a>
                    <a href="" class="bg-red-600 px-3 py-1 rounded-xs">login</a>
                </div>
            </div>
            <nav class="relative block bg-yellow-50">
                <ul class="flex flex-row items-center justify-center p-3 gap-8">
                    <li class="">
                        <a class="text-red-600 font-semibold capitalize text-base" href="">home</a>
                    </li>
                    <li class="">
                        <a class="text-red-600 font-semibold capitalize text-base" href="">service</a>
                    </li>
                     <li class="">
                        <a class="text-red-600 font-semibold capitalize text-base" href="">category</a>
                    </li>
                    <li class="">
                        <a class="text-red-600 font-semibold capitalize text-base" href="">contact</a>
                    </li>  
                </ul>
            </nav>
        </header>
        <section class="shop_banner">
            <div class="bg-[url('/images/Rf-Online-Shopping.jpg')] bg-cover bg-center"></div>
        </section>

    </body>
</html>
