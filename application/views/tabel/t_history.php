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
                                    	<th>ID HISTORY</th>
                                    	<th>TANGGAL HISTORY</th>
                                        <th>AKSI</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($rows as $row) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row->id_history; ?></td>
                                                    <td><?php echo $row->tanggal_history; ?></td>
                                                    <td><?php echo $row->aksi; ?></td>
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