<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        @include('partials/head')
    </head>
    <body style="padding: 60px">
        <div class="nav_section">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/products">Products</a>
                </li>
                <!-- <li>
                    <a href="/productsTable">Products Table</a>
                </li> -->
            </ul>
        </div>
        @yield('content')
    </body>
</html>
