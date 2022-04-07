<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>{{ config('app.name') }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.2.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.2.0') }}">
</head>

<body class="nk-body ui-rounder npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        @yield('content')
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/assets/js/bundle.js?ver=2.2.0') }}""></script>
    <script src="{{ asset('assets/assets/js/scripts.js?ver=2.2.0') }}""></script>

    <style>
        .bootstrap-select .dropdown-toggle .filter-option {
    position: absolute;
    top: 0;
    left: 0;
    padding-top: inherit;
    padding-right: inherit;
    padding-bottom: inherit;
    padding-left: inherit;
    height: 100%;
    width: 100%;
    text-align: left;
}
        select .form-control {
            height: calc(2.625rem + 2px) !important;
            padding: 0.6875rem 1rem !important;
            font-size: 0.9375rem !important;
            line-height: 1.25rem !important;
            border-radius: 5px !important;
            font-weight: 400 !important;
            display: block !important;
            width: 100% !important;
            height: calc(2.625rem + 2px) !important;
            padding: 0.6875rem 1rem !important;
            font-size: 0.9375rem !important;
            line-height: 1.25rem !important;
            border-radius: 5px !important;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
        }
    </style>

    <script>
        $('select').selectpicker();
    </script>
    <script>
        $(function() {
            $('#hasCv').change(function() {
                if($(this).is(':checked')) {
                    $('#uploadCv').css('display', 'none');
                } else {
                    $('#uploadCv').css('display', 'block');
                }
            });

            $('#coverLetter').change(function() {
                if($(this).is(':checked')) {
                    $('#coverLetterBox').css('display', 'block');
                } else {
                    $('#coverLetterBox').css('display', 'none');
                }
            });
        });
    </script>

</html>
