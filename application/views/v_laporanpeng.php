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
                                <li class="active"><a href="/tagihan-listrik/awal"><i class="menu-icon icon-dashboard"></i>Tentang Aplikasi
                                </a></li>
                                <li class="active"><a href="utama"><i class="menu-icon icon-dashboard"></i>Cek Tagihan
                                </a></li>
                                <li><a href="laporanpeng"><i class="menu-icon icon-bullhorn"></i>Laporan</a>
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
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>News Feed</h3>
                            </div>
                            <div class="module-body">
                                
                                    <form method="post" action="/tagihan-listrik/laporanpeng/simpan">
                                        <div class="row-fluid">
                                            
                                            <input type="text" name="nomor" id="nomor" style="width: 97%" style="scroll-behavior: 20px" placeholder="tulis nomor meter anda">
                                        </div>

                                        <div class="row-fluid">
                                            
                                            <input type="text" name="komentar" id="komentar" style="width: 97%" placeholder="tulis komentar anda" ">
                                        </div>
                                        <div class="row-fluid">
                                            
                                        </div>
                                        <div class="clearfix">
                                        
                                            <input type="submit" name="simpan" class="btn btn-primary pull-right" value="KIRIM">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                <tr ><td></td></tr>
                                    
                                    <tbody>
            <?  foreach ($data as $r)
            {   echo "<tr>
                        <td>Nomor Meter</td>
                        <td>".$r->nomor_meter."</td>
                        <tr>
                        </tr>
                        <td>Komentar</td>
                        <td>".$r->komentar."</td>
                          </tr>
                          <tr>
                          <td>Balasan</td>
                          <td>".$r->balas."</td></tr> ";
            }
        ?> 
        
                                    </tbody>
                                    
                                </table>
                            </div>

                                    

                                        
                               
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
        <script src="<?= base_url()?>assets/scripts/common.js" type="text/javascript"></script>
      
    </body>
