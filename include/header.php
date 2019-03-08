<!DOCTYPE html>
<html>
<head>
    <title>Katika</title>
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
</head>
<style>
    @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

    body {
        background: #9053c7;
        background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
        background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
        background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
        background: linear-gradient(-135deg, #c850c0, #4158d0);
    }

    #page-content-wrapper{
        margin-left: 40px;
    }

    .bodyMain{
        background-color: white;
        height: 540px;
        border-radius: 16px;
        margin-top: -21px;
        padding-left: 17px;
    }

    #wrapper {
        padding-top: 50px;
        padding-left: 0;
        -webkit-transition: all .5s ease;
        -moz-transition: all .5s ease;
        -o-transition: all .5s ease;
        transition: all .5s ease;
    }

    @media (min-width: 992px) {
        #wrapper {
            padding-left: 225px;
        }
    }

    @media (min-width: 992px) {
        #wrapper #sidebar-wrapper {
            width: 260px;
            border-radius: 12px;
            height: 225px;

        }
    }

    #sidebar-wrapper {
        border-right: 1px solid #e7e7e7;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 225px;
        width: 0;
        height: 100%;
        margin-left: -217px;
        overflow-y: auto;
        background: #f8f8f8;
        -webkit-transition: all .5s ease;
        -moz-transition: all .5s ease;
        -o-transition: all .5s ease;
        transition: all .5s ease;
    }

    #sidebar-wrapper .sidebar-nav {
        position: absolute;
        top: 0;
        width: 260px;
        font-size: 14px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    #sidebar-wrapper .sidebar-nav li {
        text-indent: 0;
        line-height: 45px;
    }

    #sidebar-wrapper .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #428bca;
    }

    .sidebar-nav li:first-child a {
        background: #92bce0 !important;
        color: #fff !important;
    }

    #sidebar-wrapper .sidebar-nav li a .sidebar-icon {
        width: 45px;
        height: 45px;
        font-size: 14px;
        padding: 0 2px;
        display: inline-block;
        text-indent: 7px;
        margin-right: 10px;
        color: #fff;
        float: left;
    }

    #sidebar-wrapper .sidebar-nav li a .caret {
        position: absolute;
        right: 23px;
        top: auto;
        margin-top: 20px;
    }

    #sidebar-wrapper .sidebar-nav li ul.panel-collapse {
        list-style: none;
        -moz-padding-start: 0;
        -webkit-padding-start: 0;
        -khtml-padding-start: 0;
        -o-padding-start: 0;
        padding-start: 0;
        padding: 0;
    }

    #sidebar-wrapper .sidebar-nav li ul.panel-collapse li i {
        margin-right: 10px;
    }

    #sidebar-wrapper .sidebar-nav li ul.panel-collapse li {
        text-indent: 15px;
    }

    @media (max-width: 992px) {
        #wrapper #sidebar-wrapper {
            width: 45px;
        }
        #wrapper #sidebar-wrapper #sidebar #sidemenu li ul {
            position: fixed;
            left: 45px;
            margin-top: -45px;
            z-index: 1000;
            width: 200px;
            height: 0;
        }
    }

    .sidebar-nav li:first-child a {
        background: #92bce0 !important;
        color: #fff !important;
    }

    .sidebar-nav li:nth-child(2) a {
        background: #6aa3d5 !important;
        color: #fff !important;
    }

    .sidebar-nav li:nth-child(3) a {
        background: #428bca !important;
        color: #fff !important;
    }

    .sidebar-nav li:nth-child(4) a {
        background: #3071a9 !important;
        color: #fff !important;
    }

    .sidebar-nav li:nth-child(5) a {
        background: #245682 !important;
        color: #fff !important;
    }
</style>
<body>
<div id="wrapper">
    <div id="sidebar-wrapper">
        <aside id="sidebar">
            <ul id="sidemenu" class="sidebar-nav">
                <li>
                    <a href="accueil.php">
                        <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                        <span class="sidebar-title">Home</span>
                    </a>
                </li>
                <li>
                    <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="chckWithDate.php">
                        <span class="sidebar-icon"><i class="fa fa-database "></i></span>
                        <span class="sidebar-title">Verifier avec la Date</span>
                        <b class="caret"></b>
                    </a>
                </li>
                <li>
                    <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="check_transactionNummer.php">
                        <span class="sidebar-icon"><i class="fa fa-newspaper-o"></i></span>
                        <span class="sidebar-title">Verifier avec la Transactions</span>
                        <b class="caret"></b>
                    </a>
                </li>
                <li>
                    <a href="check_name_vorname.php">
                        <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                        <span class="sidebar-title">Verifier avec Nom et Prenom</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="myFunctionabmeldung()">
                        <span class="sidebar-icon"><i class="fa fa-terminal"></i></span>
                        <span class="sidebar-title">Abmelden</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
        <main id="page-content-wrapper" role="main">
            <div class="bodyMain">