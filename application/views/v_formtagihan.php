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
                                

                                <li><a href="login/logout"><i class="menu-icon icon-sigFnout"></i>Logout </a></li>
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

                                    <form class="form-horizontal row-fluid" action="formtagihan/simpan" method="post">

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor Meter</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="masukkan nomor meter" data-original-title="" class="span8 tip" name="nomor" id="nomor">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tahun</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="masukkan tahun" data-original-title="" class="span8 tip" name="tahun" id="tahun">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Januari</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="Januari" data-original-title="" class="span8 tip" name="januari" id="januari">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Februari</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="Februari" data-original-title="" class="span8 tip" name="februari" id="februari">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Maret</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="maret" data-original-title="" class="span8 tip" name="maret" id="maret">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">April</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="April" data-original-title="" class="span8 tip" name="april" id="april">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Mei</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="mei" data-original-title="" class="span8 tip" name="mei" id="mei">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Juni</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="Juni" data-original-title="" class="span8 tip" name="juni" id="juni">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Juli</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="juli" data-original-title="" class="span8 tip" name="juli" id="juli">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Agustus</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="agustus" data-original-title="" class="span8 tip" name="agustus" id="agustus">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">September</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="september" data-original-title="" class="span8 tip" name="september" id="september">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Oktober</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="oktober" data-original-title="" class="span8 tip" name="oktober" id="oktober">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">November</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="november" data-original-title="" class="span8 tip" name="november" id="november">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Desember</label>
                                            <div class="controls">
                                                <input data-title="A tooltip for the input" type="text" placeholder="desember" data-original-title="" class="span8 tip" name="desember" id="desember">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                               <input type="submit" name="simpan" value="Submit Form">
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
