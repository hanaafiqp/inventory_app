<?php include('backend/get_barang.php'); ?>
<main>
    <div class=" py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-3">
                <div class="col-lg-8">
                    <h4>Daftar Barang</h4>
                </div>
                <div class="col-lg-4" style="text-align:right;">
                    <a href="<?php echo base_url(); ?>?page=tambah" class="btn btn-success">Tambah Barang</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                $no = 0;
                foreach ($data_barang as $key => $value) {
                ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <?php
                            if ($value['foto_barang'] != '' && $value['foto_barang'] != null) {
                        ?>
                             <img src="media/foto/<?php echo $value['foto_barang']; ?>" alt="Foto Barang" style="height:225px;border-radius:15px;box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;">
                        <?php
                            }else{
                        ?>
                             <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Foto Barang</text>
                            </svg>
                        <?php        
                            }
                        ?>
                        <div class="card-body">
                            <p class="card-text"><?php echo $value['nama_barang']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><?php echo nl2br($value['deskripsi_barang']); ?></small>
                                <div class="btn-group">
                                    <a href="<?php echo base_url(); ?>?page=detail&id=<?php echo $value['id_barang']; ?>" type="button" style="margin-left:10px;"
                                        class="btn btn-sm btn-secondary">Detail</a>
                                    <a href="<?php echo base_url(); ?>?page=ubah&id=<?php echo $value['id_barang']; ?>"" type="button" style="margin-left:10px;"
                                        class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="<?php echo base_url(); ?>backend/hapus.php?id=<?php echo $value['id_barang']; ?>"" type="button" style="margin-left:10px;"
                                        class="btn btn-sm btn-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


</main>