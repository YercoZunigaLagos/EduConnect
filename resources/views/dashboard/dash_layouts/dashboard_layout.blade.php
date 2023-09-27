<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />


    @yield('title')
    @include('dashboard.dash_layouts.links_layout')
    @yield('link')
</head>

<body class="antialiased text-blueGray-700">
    <div id="root">
        <!-- Menu lateral -->
        <!--@ switch($rol)
        @ case(1)
        @ include('dashboard.dash_layouts.menu_admin')
        @ break

        @ case(2)
        @ include('dashboard.dash_layouts.menu_teacher')
        @ break
        @ endswitch
        -->
        <!-- /Menu lateral-->
        @include('dashboard.dash_layouts.sidenav_layout')


        <div class="relative md:ml-64 bg-blueGray-50">
            <!-- Navbar -->
            @include('dashboard.dash_layouts.navbar_layout')


            <!-- Contenido -->
            @yield('content_dashboard')
            <!-- /Contenido -->

            <!-- Footer -->
            <footer class="block py-4">
                <div class="container px-4 mx-auto">
                    <hr class="mb-4 border-b-1 border-blueGray-200" />
                    <div class="flex flex-wrap items-center justify-center md:justify-between">
                        <div class="w-full px-4 md:w-4/12">
                            <div class="py-1 text-sm font-semibold text-center text-blueGray-500 md:text-left">
                                Copyright © <span id="get-current-year"></span>
                                <a href="https://www.creative-tim.com?ref=njs-dashboard"
                                    class="py-1 text-sm font-semibold text-blueGray-500 hover:text-blueGray-700">
                                    Creative Tim
                                </a>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-8/12">
                            <ul class="flex flex-wrap justify-center list-none md:justify-end">
                                <li>
                                    <a href="https://www.creative-tim.com?ref=njs-dashboard"
                                        class="block px-3 py-1 text-sm font-semibold text-blueGray-600 hover:text-blueGray-800">
                                        Creative Tim
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.creative-tim.com/presentation?ref=njs-dashboard"
                                        class="block px-3 py-1 text-sm font-semibold text-blueGray-600 hover:text-blueGray-800">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="http://blog.creative-tim.com?ref=njs-dashboard"
                                        class="block px-3 py-1 text-sm font-semibold text-blueGray-600 hover:text-blueGray-800">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-dashboard"
                                        class="block px-3 py-1 text-sm font-semibold text-blueGray-600 hover:text-blueGray-800">
                                        MIT License
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

            @include('dashboard.dash_layouts.script_layout')
            @yield('script')
        </div>
    </div>
</body>

</html>

