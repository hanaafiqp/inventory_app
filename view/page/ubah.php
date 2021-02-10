<?php include('backend/get_detail_barang.php'); ?>
<main>
    <div class="py-5 bg-light">
        <div class="container">
            <h3>Ubah Barang</h3>
            <hr>
            <form class="row g-3 form-ubah" novalidate action="backend/ubah.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $data_barang['id_barang']; ?>" name="id_barang">
                <div class="col-md-6">
                    <div class="col-md-12 position-relative">
                        <label for="validationTooltip01" class="form-label">Nama Barang</label>
                        <input name="nama_barang" type="text" class="form-control" id="validationTooltip01" placeholder="Masukan Nama Barang..." value="<?php echo $data_barang['nama_barang']; ?>" required>
                        <div class="valid-tooltip">
                            Sudah Benar!
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <label for="validationTooltip02" class="form-label">Harga Barang</label>
                        <input name="harga_barang" type="number" class="form-control" id="validationTooltip02" placeholder="Masukan Harga Barang..." value="<?php echo $data_barang['harga_barang']; ?>"  required>
                        <div class="valid-tooltip">
                            Sudah Benar!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Deskripsi Barang</label>
                        <textarea name="deskripsi_barang" class="form-control" id="validationTextarea"
                            placeholder="Masukan Deskripsi Barang..." rows="8" required><?php echo str_replace("<br />", "\n", $data_barang['deskripsi_barang']); ?></textarea>
                        <div class="invalid-feedback">
                            Masukan deskripsi barang dengan benar...
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-12">
                        <label for="validationTextarea" class="form-label">Foto Barang</label>
                        <input type="file" name="foto_barang" class="form-control" aria-label="file example">
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="mb-12 text-center" style="background: white;border-radius: 15px;margin-top: 20px;">
                        <label for="validationTextarea" class="form-label" style="width: 100%;background: #e8e8e8;margin-top: 0px;padding: 10px;border-top-left-radius: 15px;border-top-right-radius: 15px;">Preview Foto Barang Sebelumnya</label>
                        <br>
                        <input type="hidden" value="<?php echo $data_barang['foto_barang']; ?>" name="foto_lama">
                        <img src="media/foto/<?php echo $data_barang['foto_barang']; ?>" alt="" style="width:225px;">
                    </div>
                </div>
                <div class="col-12">
                    <a href="<?php echo base_url(); ?>" class="btn btn-secondary" type="button">Kembali</a>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</main>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.form-ubah')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>