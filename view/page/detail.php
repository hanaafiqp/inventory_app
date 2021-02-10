<?php 
include('backend/get_detail_barang.php');
?>
<main>
    <div class="py-5 bg-light">
        <div class="container">
            <h3>Detail Barang</h3>
            <hr>
            <div class="row">
            
                <div class="col-md-6">
                    <div class="col-md-12 position-relative">
                        <h6>Nama Barang</h6>
                        <p class="text-gray">
                            <small><?php echo $data_barang['nama_barang']; ?></small>
                        </p>
                    </div>
                    <div class="col-md-12 position-relative">
                        <h6>Harga Barang</h6>
                        <p class="text-gray">
                            <small><?php echo $data_barang['harga_barang']; ?></small>
                        </p>
                    </div>
                    <div class="mb-3">
                        <h6>Deskripsi Barang</h6>
                        <p class="text-gray">
                            <small><?php echo $data_barang['deskripsi_barang']; ?></small>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-12">
                        <figure class="figure">
                            <img src="media/foto/<?php echo $data_barang['foto_barang']; ?>" class="figure-img img-fluid rounded" alt="Disini foto barang">
                            <figcaption class="figure-caption">Foto Barang.</figcaption>
                        </figure>
                    </div>
                </div>
                </div>
                <div class="col-12">
                    <a href="<?php echo base_url(); ?>" class="btn btn-secondary" type="button">Kembali</a>
                </div>
        </div>
    </div>
</main>