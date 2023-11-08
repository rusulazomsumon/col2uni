<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- head -->
        @include('backend.inclueds.header')
    </head>
    <body class="sb-nav-fixed">
        <!-- nav -->
        @include('backend.inclueds.nav')
    
        <div id="layoutSidenav">
            <!-- Sidebar -->
            @include('backend.inclueds.sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield('page_title')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">@yield('page_sub_title')</li>
                        </ol>
                        <!-- ================================== -->
                        <!-- page body content  -->
                        @yield('content')
                        <!-- page body content end -->
                        <!-- ================================== -->
                    </div>
                    <!-- dashboard body area end  -->
                </main>
                <!-- footer -->
                @include('backend.inclueds.footer')
            </div>
        </div>
        <!-- Scripts -->
        @include('backend.inclueds.script')
    </body>
</html>
