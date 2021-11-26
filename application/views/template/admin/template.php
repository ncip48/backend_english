<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>
    <link rel="icon" href="icon.png">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!--Daterangepicker -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Select2 CSS -->
    <link href="<?= base_url('assets/') ?>select2/dist/css/select2.min.css" rel="stylesheet" />

    <link href="<?= base_url('assets/'); ?>css/main-admin.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="<?= base_url('assets/') ?>js/jquery-1.12.1.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

    <style type="text/css">
        img[src=""] {
            display: none;
        }

        .ck-editor__editable_inline {
            min-height: 300px !important;
        }

        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }

        ::-webkit-scrollbar-track {
            width: 5px;
            height: 5px;
            background: #f5f5f5;
        }

        ::-webkit-scrollbar-thumb {
            width: 1em;
            height: 1em;
            background-color: #ddd;
            outline: 1px solid slategrey;
            border-radius: 1rem;
        }

        .text-small {
            font-size: 0.9rem;
        }

        .messages-box,
        .chat-box {
            height: 505px;
            overflow-y: scroll;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        /* input::placeholder {
            font-size: 0.9rem;
            color: #999;
        } */

        .active-success {
            background-color: #1cc88a !important;
        }

        .separator {
            display: flex;
            align-items: center;
            text-align: center;
        }

        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #000;
        }

        .separator:not(:empty)::before {
            margin-right: .25em;
        }

        .separator:not(:empty)::after {
            margin-left: .25em;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">