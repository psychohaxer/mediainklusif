<!-- <!DOCTYPE html> -->
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Media Jurnalistik Inklusif - <?= $page_title ?></title>

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/fav.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Mazer CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/zuramai/mazer@docs/demo/assets/compiled/css/iconly.css">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Plotly.js -->
    <script src="https://cdn.plot.ly/plotly-3.0.1.min.js" charset="utf-8"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.1/css/all.min.css" integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdn.statically.io/gh/FerryAr/fa-pro/main/css/all.css">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Tabulator 6.3.1 -->
    <link href="https://unpkg.com/tabulator-tables@6.3.1/dist/css/tabulator_bootstrap3.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Text Right */
        .text-right {
            text-align: right;
        }

        /* Text Center All */
        .text-center-all {
            text-align: center;
            vertical-align: middle;
        }

        /* Text Bold */
        .text-bold {
            font-weight: bold;
        }

        /* Text Italic */
        .text-italic {
            font-style: italic;
        }

        /* Text Underline */
        .text-underline {
            text-decoration: underline;
        }

        /* Infinite Horizontal Scroll */
        .infinite-horizontal-scroll {
            overflow-x: auto;
            white-space: nowrap;
        }

        /* Blinking Text */
        .blink {
            animation: blinker 1.0s linear infinite;
        }

        /* No Wrap */
        .no-wrap {
            white-space: nowrap;
        }

        /* Keyframes */
        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        /* ID 'dms' */
        #dms {
            color: #012970;
            font-family: "Nunito", sans-serif;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }

        /* Small table */
        .table.table-sm {
            margin: 0;
        }
        .table.table-sm th,
        .table.table-sm td {
            padding: 0.3rem 0.5rem !important;
        }
    </style>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

    <script>
        var base_url = "<?= base_url() ?>";
    </script>
</head>