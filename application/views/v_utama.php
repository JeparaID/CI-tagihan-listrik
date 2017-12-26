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
        <link type="text/css" href="<?= base_url()?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url()?>/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url()?>/assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?= base_url()?>/assets/images/icons/css/font-awesome.css" rel="stylesheet">
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
                            
                           
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>



     <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="/tagihan-listrik/awal"><i class="menu-icon icon-dashboard"></i>Tentang Aplikasi
                                </a></li>
                                <li class="active"><a href="/tagihan-listrik/utama"><i class="menu-icon icon-search"></i>Cek Tagihan
                                </a></li>
                                <li><a href="laporanpeng"><i class="menu-icon icon-bullhorn"></i>Laporan </a>
                                </li>
                                
                            </ul>
                            <!--/.widget-nav-->
                            
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                
                                <li><a href="login"><i class="menu-icon icon-chevron-right"></i>Login </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>


                <div class="span9">
                    <div class="content">

                    
                        <div class="module">
                            <div class="module-head">
                                <h3>Selamat Datang</h3>
                            </div>                            
                            <div class="module-body">
                            <!-- <img src="<?= base_url()?>/assets/me.png">
                            <p>safjaslflf</p> -->
                        
                               <form class="form-horizontal row-fluid" action="/tagihan-listrik/utama/pilihdata" method="post">
                                    <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor Meteran</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="masukkan nomor meteran" data-original-title="" class="span8 tip" name="nomor" id="nomor" >

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input class="btn btn-success pull-left" type="submit" name="pilihdata" value="Cek Tagihan">
                                            
                                            </div>
                                        </div>
                                        </form>
                            </div>
                        </div><!--/.module-->

                    <br />
                        
                    </div><!--/.content-->
                </div><!--/.span9-->
            </div>
        </div><!--/.container-->
    </div><!--/.wrapper-->

    <div class="footer">
        <div class="container">
             

            <b class="copyright">&copy; Aghna Fikrunafuddin </b> All rights reserved.
        </div>
    </div>

    <script src="<?= base_url()?>/assets/scripts/jquery-1.9.1.min.js"></script>
    <script src="<?= base_url()?>/assets/scripts/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="<?= base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>/assets/scripts/datatables/jquery.dataTables.js"></script>
  
</body>