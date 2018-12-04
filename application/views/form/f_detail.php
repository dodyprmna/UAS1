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
                                <form action="" method="POST">

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>id penerimaan</label>
                                                <input type="text" class="form-control" name="idpenerimaan" value="<?php echo $row->id_penerimaan?>" disabled="">
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
                                            <button type="tambah" class="btn btn-info btn-fill pull-right" name="Tambah">+</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="date" class="form-control" name="tanggal" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>jumlah</label>
                                                <input type="number" class="form-control" placeholder="jumlah" name="jumlah" required="required">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>