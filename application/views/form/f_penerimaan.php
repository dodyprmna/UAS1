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
                                <form action="<?php echo $action;?>" >
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
                                                <label>id supplier</label>
                                                <select class="form-control" id="supplier" name="idsuplier">
                                                    <option>-Pilih Suplier-</option>
                                                    <?php
                                                        foreach($suplier as $sup) { ?>
                                                      <option value="<?php echo $sup->id_user;?>"><?php echo $sup->username; ?></option>
                                                      <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="date" class="form-control" name="tanggal">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>jumlah</label>
                                                <input type="number" class="form-control" placeholder="jumlah" name="jumlah">
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