<div class="span9">
                        <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>Tagihan Listrik</h3>
                            </div>
                            
                                <div >
                                <table border="2" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nomor Meter</th>
                                            <th>tahun</th>
                                            <th>januari</th>
                                            <th>februari</th>
                                            <th>maret</th>
                                            <th>april</th>
                                            <th>mei</th>
                                            <th>juni</th>
                                            <th>juli</th>
                                            <th>agustus</th>
                                            <th>september</th>
                                            <th>oktober</th>
                                            <th>november</th>
                                            <th>desember</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
            <?  foreach ($data as $r)
            {   echo "<tr><td>".$r->nomor_meter."</td>
                          <td>".$r->tahun."</td>
                          <td>".$r->januari."</td>
                          <td>".$r->februari."</td>
                          <td>".$r->maret."</td>
                          <td>".$r->april."</td>
                          <td>".$r->mei."</td>
                          <td>".$r->juni."</td>
                          <td>".$r->juli."</td>
                          <td>".$r->agustus."</td>
                          <td>".$r->september."</td>
                          <td>".$r->oktober."</td>
                          <td>".$r->november."</td>
                          <td>".$r->desember."</td>
                          
                      <tr/>";
            }
        ?>
       
                         
                                    </tbody>
                                    <tfoot>
                                         <tr>
                                            <th>Nomor Meter</th>
                                            <th>tahun</th>
                                            <th>januari</th>
                                            <th>februari</th>
                                            <th>maret</th>
                                            <th>april</th>
                                            <th>mei</th>
                                            <th>juni</th>
                                            <th>juli</th>
                                            <th>agustus</th>
                                            <th>september</th>
                                            <th>oktober</th>
                                            <th>november</th>
                                            <th>desember</th>
                                            
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                                 <input type="button" class="btn btn-success" name="cetak" onclick="window.print()" value="CETAK">

                                 <a href="/tagihan-listrik/utama">kembali</a>
                                </div>
                            </div>
                            
                           
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                   