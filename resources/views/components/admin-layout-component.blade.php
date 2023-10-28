<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Cash Manager Plus @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <style>
        .sidebar .sidebar-menu>ul>li>a.active::after {
            width: 8px;
            content: "";
            height: 5px;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            background: #7638ff;
            -webkit-transition: all 0.5s;
            -ms-transition: all 0.5s;
            transition: all 0.5s;
            border-radius: 0 10px 10px 0px;
        }

        .page-wrapper .content {
            padding: 25px;

                {
                    {
                    -- background: url('/assets/img/profiles/main-bg.54ba4cc2.webp') no-repeat 0 0/cover;
                    background-attachment: fixed;
                    -webkit-overflow-scrolling: auto !important;
                    border-radius: 40px 40px 0 0;
                    --
                }
            }

            border: 1px solid hsla(0, 0%, 99%, 1);
            box-shadow: 0 20px 40px 0 hsla(252, 51%, 33.7%, 0.04);
        }

        .sidebar .sidebar-menu>ul>li>a {
            padding: 8px 25px;
            position: relative;
            color: #3F4254;
        }

        .sidebar .sidebar-menu>ul>li>a span {
            padding: 0 10px 0;
            font-size: 14px;
            font-weight: normal;
            color: #3F4254;
            line-height: 18px;
        }

        .sidebar .sidebar-menu>ul>li>a.active {
            background: #e9ecef;
            color: #7539FF;
            font-weight: 700;
            border-radius: 0px;
        }

        .sidebar .sidebar-menu>ul>li>a {
            padding: 12px 24px;
        }

        .sidebar .sidebar-menu>ul {
            padding: 0 0;
        }

        .content-page-header {
            margin: 0 0 20px 0;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <livewire:topbar-component />
        <livewire:sidebar-component />
        <div class="page-wrapper">
            <div class="content container-fluid pt-3">
                <div class="page-header">
                    <div class="content-page-header">
                        <h5>{{ $header }}</h5>
                        <div class="list-btn">
                            {{ $headerContent ?? '' }}
                        </div>
                    </div>
                </div>
                {{ $slot }}
            </div>
        </div>
        <x-modal-popup></x-modal-popup>
    </div>
    <script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        // $(document).ready(function() {
        //     $('#exampleModal').modal('show');
        // });
        // Select the button with data-bs-dismiss attribute
        var closeModalButton = document.querySelector('[data-bs-dismiss="modal"]');

        // Add a click event listener to close the modal when the button is clicked
        if (closeModalButton) {
            closeModalButton.addEventListener('click', function() {
                $('.modal').modal('hide');
            });
        }
    </script>
</body>

</html>
