<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title"><?php echo $judul?> </h2><br>
                                <a href="<?php echo base_url('penerimaan/tambah')?>"><button type="button" class="btn btn-primary">Tambah</button></a>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NO</th>
                                    	<th>ID PENERIMAAN</th>
                                    	<th>ID SUPLYER</th>
                                        <th>TANGGAL</th>
                                        <th>JUMLAH</th>
                                        <th>AKSI</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $nourut = 1;
                                            foreach ($rows as $row) {
                                                ?>
                                                <tr>
                                                    <td><a href=""></a><?php echo $nourut++; ?></a></td>
                                                    <td><?php echo $row->id_penerimaan; ?></td>
                                                    <td><?php echo $row->id_user; ?></td>
                                                    <td><?php echo $row->tanggal; ?></td>
                                                    <td></td>
                                                    <td><a href="<?php echo base_url('penerimaan/detail')?>"><button type="button" class="btn btn-primary">DETAIL</button></a></td>
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