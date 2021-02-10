<main>
    <div class="py-5 bg-light">
        <div class="container">
            <h3>Tambah Barang</h3>
            <hr>
            <form class="row g-3 form-tambah" novalidate action="backend/tambah.php" method="post" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="col-md-12 position-relative">
                        <label for="validationTooltip01" class="form-label">Nama Barang</label>
                        <input name="nama_barang" type="text" class="form-control" id="validationTooltip01" placeholder="Masukan Nama Barang..." required>
                        <div class="valid-tooltip">
                            Sudah Benar!
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <label for="validationTooltip02" class="form-label">Harga Barang</label>
                        <input name="harga_barang" type="number" class="form-control" id="validationTooltip02" placeholder="Masukan Harga Barang..." required>
                        <div class="valid-tooltip">
                            Sudah Benar!
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="validationTextarea" class="form-label">Deskripsi Barang</label>
                        <textarea name="deskripsi_barang" class="form-control" id="validationTextarea"
                            placeholder="Masukan Deskripsi Barang..." required></textarea>
                        <div class="invalid-feedback">
                            Masukan deskripsi barang dengan benar...
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-12">
                        <label for="validationTextarea" class="form-label">Foto Barang</label>
                        <input type="file" name="foto_barang" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
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
        var forms = document.querySelectorAll('.form-tambah')

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