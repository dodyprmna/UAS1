<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $judul?></h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo $action;?>" method="POST">

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>id penerimaan</label>
                                                <input type="text" name="id" class="form-control" value="<?php echo $id ?>" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>ID barang</label>
                                                
                                                <select class="form-control" id="barang-list" name="idbarang">
                                                    <option>-Pilih Barang-</option>
                                                    <?php
                                                    foreach($barang as $r) { ?>
                                                      <option value="<?php echo $r->id_barang; ?>"><?php echo $r->nama_barang;?></option>
                                                      <?php } ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>jumlah</label>
                                                <input type="number" class="form-control"  name="jumlah" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-fill pull-right" name="Tambah">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>NO</th>
                                        <th>ID PENERIMAAN</th>
                                        <th>ID BARANG</th>
                                        <th>JUMLAH</th>
                                        <th>AKSI</th>
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
                                                    <td><?php echo $row->jumlah_barang; ?></td>
                                                    <td><a href="<?php echo base_url('Penerimaan/delete/'.$row->id_penerimaan.'/'.$row->id_barang); ?>"><button type="button" class="btn btn-primary">DELETE</button></a></td>
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