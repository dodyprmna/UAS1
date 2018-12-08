<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title"><?php echo $judul?> </h2><br>
                                 <?php if($this->session->userdata('level')=='admin'):?>
                                    <a href="<?php echo base_url('penerimaan/tambah')?>"><button type="button" class="btn btn-primary">Tambah</button></a>
                                <?php endif;?>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NO</th>
                                    	<th>ID PENERIMAAN</th>
                                    	<th>ID SUPPLIER</th>
                                        <th>TANGGAL</th>
                                        <th>JUMLAH</th>
                                         <?php if($this->session->userdata('level')=='admin'):?>
                                        <th>AKSI</th>
                                         <?php endif;?>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $nourut = 1;
                                            foreach ($rows as $row) {
                                                ?>
                                                <tr>
                                                    <td><a href=""></a><?php echo $nourut++; ?></a></td>
                                                    <td><a href="<?php echo base_url('penerimaan/tampilDetail/'.$row->id_penerimaan) ?>"><?php echo $row->id_penerimaan; ?></a></td>
                                                    <td><?php echo $row->id_user; ?></td>
                                                    <td><?php echo $row->tanggal; ?></td>
                                                    <td><?php echo $row->jumlah; ?></td>
                                                    <?php if($this->session->userdata('level')=='admin'):?>
                                                        <?php if($row->tanggal==date('Y-m-d')){?>
                                                            <td><a href="<?php echo base_url('penerimaan/detail/'.$row->id_penerimaan) ?>"><button type="button" class="btn btn-primary">ADD DETAIL</button></a></td>
                                                        
                                                        <?php } else {?>
                                                            <td></td>
                                                        <?php } ?>
                                                    <?php endif;?>
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
</div>)