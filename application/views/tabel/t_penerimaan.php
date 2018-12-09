<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title"><?php echo $judul?> </h2><br>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NO</th>
                                    	<th>ID PENERIMAAN</th>
                                    	<th>ID BARANG</th>
                                        <th>NAMA BARANG</th>
                                    	<th>JUMLAH</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $nourut = 1;
                                            foreach ($rows as $row) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $nourut++; ?></td>
                                                    <td><?php echo $row->id_penerimaan; ?></td>
                                                    <td><?php echo $row->id_barang; ?></td>
                                                    <td><<?php echo $row->nama_barang; ?></td>
                                                    <td><?php echo $row->jumlah_barang; ?></td>

                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>