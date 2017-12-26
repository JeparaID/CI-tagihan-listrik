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


                <div class="span9">
                    <div class="content">

                    
                        <div class="module">
                            <div class="module-head">
                                <h3>Data Pelanggan</h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" >
                                    <thead>
                                        <tr>
                                            <th width="20%">Nomor Meter</th>
                                            <th width="20%">Username</th>
                                            <th width="20%">Password</th>
                                            <th width="20%">Nama</th>
                                            <th width="20%">Alamat</th>
                                            <th width="20%">Email</th>
                                            <th width="20%">Nomor Telepon</th>
                                            <th align="center" colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?  foreach ($data as $r)
            {   echo "<tr><td>".$r->nomor_meter."</td>
                          <td>".$r->username."</td>
                          <td>".$r->password."</td>
                          <td>".$r->nama."</td>
                          <td>".$r->alamat."</td>
                          <td>".$r->email."</td>
                          <td>".$r->no_telepon."</td>
                          
                          <td><center><a href='".base_url('tablepelanggan/ubah_pelanggan/'.$r->id_pelanggan)."'><i class='icon-edit'></i> Ubah</a></center>
                          </td>
                          <td><center><a href='".base_url('formpelanggan/hapus_pel/'.$r->id_pelanggan)."'  onClick=\"return confirm('Apakah Anda ingin menghapus data ini?')\"><i class='icon-remove'></i> Hapus</a></center>
                          </td>

                      <tr/>";
            }
        ?>
        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th width="20%">Nomor Meter</th>
                                            <th width="20%">Username</th>
                                            <th width="20%">Password</th>
                                            <th width="20%">Nama</th>
                                            <th width="20%">Alamat</th>
                                            <th width="20%">Email</th>
                                            <th width="20%">Nomor Telepon</th>
                                            <th align="center" colspan="2">Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
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
   <!--  <script>
        $(document).ready(function() {
            $('.datatable-1').dataTable();
            $('.dataTables_paginate').addClass("btn-group datatable-pagination");
            $('.dataTables_paginate > a').wrapInner('<span />');
            $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
            $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
        } );
    </script> -->
</body>