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
                                    <li><a href="login/logout">Logout</a></li>
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
                                
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                

                                <li><a href="login/logout><i class="menu-icon icon-sigFnout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>Forms Pelanggan</h3>
                            </div>
                            <div class="module-body">

                                    <form class="form-horizontal row-fluid" method="post" action="/tagihan-listrik/tablepelanggan/proses_ubah_pelanggan">

                                       
                                           
                                                <input type="hidden" name="id_pel" id="id_pel" value="<?=$pel->id_pelanggan ?>">
                                           
                                                                                
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor Meteran</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="masukkan nomor meteran" data-original-title="" class="span8 tip" name="nomor" id="nomor" value="<?=$pel->nomor_meter ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Username</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="masukkan username" data-original-title="" class="span8 tip" name="username" id="username" value="<?=$pel->username ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Password</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="password" placeholder="Masukkan Password Anda" data-original-title="" class="span8 tip" name="password" id="password" value="<?=$pel->password ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Pelanggan</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="Masukkan Nama Anda" data-original-title="" class="span8 tip" id="nama" name="nama" value="<?=$pel->nama ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Alamat</label>
                                            <div class="controls">
                                                <textarea class="span8" rows="5" placeholder="Masukkan Alamat" id="alamat" name="alamat" value="<?=$pel->nama ?>"></textarea>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Email</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="Masukkan Email Anda" data-original-title="" class="span8 tip" id="email" name="email" value="<?=$pel->email ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">No. Telpon</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="Masukkan Nomor Telepon" data-original-title="" class="span8 tip" id="no_telp" name="no_telp" value="<?=$pel->no_telepon ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <input type="submit" name="ubah" value="Submit Form">
                                            </div>
                                        </div>
                                    </form>
                            
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
