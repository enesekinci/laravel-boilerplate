<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>{{ config('app.name') }}</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Laravel projeleriniz için hazırlanmış olan bu admin paneli ile projelerinizi daha hızlı bir şekilde geliştirebilirsiniz.">
    <meta name="keywords"
        content="laravel, admin, panel, dashboard, template, ui, kit, admin panel, admin template, web, app, ui, interface, admin dashboard, admin ui, web dashboard, html template, html admin template, bootstrap, css3, responsive, metronic, admin theme, backend, fronted, flat, flat design, ui components, web components, widgets, responsive web">
    <meta name="author" content="Phoenixcoded">

    <!-- [Favicon] icon -->
    <link rel="icon" href="/theme/dashboard/assets/images/favicon.svg" type="image/x-icon">
    <!-- [Font] Family -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/inter/inter.css" id="main-font-link" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="/theme/dashboard/assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="/theme/dashboard/assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="/theme/dashboard/assets/css/style-preset.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    @yield('css')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <x-dashboard.layout.pre-loader />
    <!-- [ Pre-loader ] End -->

    <!-- [ Sidebar Menu ] start -->
    <x-dashboard.layout.sidebar />
    <!-- [ Sidebar Menu ] end -->

    <!-- [ Header Topbar ] start -->
    <x-dashboard.layout.header />
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <x-dashboard.layout.breadcrumb />
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                @yield('content')
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <x-dashboard.layout.footer />
    <!-- Required Js -->
    <script src="/theme/dashboard/assets/js/plugins/popper.min.js"></script>
    <script src="/theme/dashboard/assets/js/plugins/simplebar.min.js"></script>
    <script src="/theme/dashboard/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/theme/dashboard/assets/js/fonts/custom-font.js"></script>
    <script src="/theme/dashboard/assets/js/config.js"></script>
    <script src="/theme/dashboard/assets/js/pcoded.js"></script>
    <script src="/theme/dashboard/assets/js/plugins/feather.min.js"></script>

    <x-dashboard.layout.sidebar-settings />

    @yield('js')

</body>
<!-- [Body] end -->

</html>
