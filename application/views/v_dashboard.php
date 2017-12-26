<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tagihan Listrik</title>
        <link type="text/css" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url()?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url()?>assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url()?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" >Tagihan Listrik</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                        <ul class="nav pull-right">
                            
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    
                                    
                                    <li class="divider"></li>
                                    <li><a href="login/logout" onclick="return confirm('Apkah anda ingin keluar?')">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="dashboard"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="laporan"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                
                                <li><a href="formpelanggan"><i class="menu-icon icon-paste"></i> Form Pelanggan </a></li>
                                <li><a href="formtagihan"><i class="menu-icon icon-paste"></i> Form Tagihan Pelanggan </a></li>
                                <li><a href="tablepelanggan"><i class="menu-icon icon-table"></i>Table Pelanggan </a></li>
                                <li><a href="tabletagihan"><i class="menu-icon icon-table"></i>Table Tagihan </a></li>
                                <!-- <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li> -->
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                               
                                <li><a href="login/logout"><i class="menu-icon icon-sigFnout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="laporan" class="btn-box big span4"><i class=" icon-inbox"></i><b>Laporan Pelanggan</b>
                                        <p class="text-muted">
                                            Lporan</p>
                                    </a><a href="tablepelanggan" class="btn-box big span4"><i class="icon-user"></i><b>Pelanggan PLN</b>
                                        <p class="text-muted">
                                            Pelanggan</p>
                                    </a><a href="tabletagihan" class="btn-box big span4"><i class="icon-money"></i><b>Tagihan Pelanggan</b>
                                        <p class="text-muted">
                                            Tagihan</p>
                                    </a>
                                </div>
                                
                            </div>
                            
                           
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; Aghna Fikrunafuddin </b>All rights reserved.
            </div>
        </div>
        <script src="<?= base_url()?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/scripts/common.js" type="text/javascript"></script>
      
    </body>
