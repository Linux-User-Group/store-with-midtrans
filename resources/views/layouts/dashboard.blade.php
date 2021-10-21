<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="./style/main.css" rel="stylesheet" />
    @stack('addon-style')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="./images/dashboard-store-logo.svg" alt="" class="my-4" />
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ url('/dashboard') }}" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="{{ url('/dashboard-products') }}" class="list-group-item list-group-item-action">My Products</a>
                    <a href="dashboard-transactions.html" class="list-group-item list-group-item-action">Transactions</a>
                    <a href="dashboard-settings.html" class="list-group-item list-group-item-action">Store Settings</a>
                    <a href="dashboard-account.html" class="list-group-item list-group-item-action">My Account</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            @yield('content')
            <!-- /#page-content-wrapper -->
        </div>

    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="./vendor/jquery/jquery.slim.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>

</html>
