<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Capres
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Datacapres/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nik">nik</label>
                            <input type="text" name="nik" class="form-control" id="nik" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal</label>
                            <input type="text" name="asal" class="form-control" id="asal" placeholder="Asal">
                        </div>
                        <div class="form-group">
                            <label for="partai_pendukung">partai_pendukung</label>
                            <input type="text" name="partai_pendukung" class="form-control" id="partai_pendukung"
                                placeholder="partai_pendukung">
                        </div>
                        <div class="form-group">
                            <label for="riwayat_pekerjaan">Riwayat Pekerjaan</label>
                            <input type="text" name="riwayat_pekerjaan" class="form-control" id="riwayat_pekerjaan" placeholder="Riwayat Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur" placeholder="umur">
                        </div>
                        <a href="<?= base_url('Datacapres') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Data </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>