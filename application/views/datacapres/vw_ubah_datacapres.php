<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Capres
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Datacapres/update'); ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $calon_presiden['id']; ?>">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" value="<?= $calon_presiden['nama_lengkap']; ?>" class="form-control"
                                id="nama_lengkap" placeholder="nama_lengkap">
                        </div>
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" name="nik" value="<?= $calon_presiden['nik']; ?>" class="form-control"
                                id="nik" placeholder="nik">
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal</label>
                            <input type="text" name="asal" value="<?= $calon_presiden['asal']; ?>" class="form-control"
                                id="asal" placeholder="asal">
                        </div>
                        <div class="form-group">
                            <label for="partai_pendukung">Partai pendukung</label>
                            <input type="text" name="partai_pendukung" value="<?= $calon_presiden['partai_pendukung']; ?>" class="form-control"
                                id="partai_pendukung" placeholder="partai_pendukung">
                        </div>
                        <div class="form-group">
                            <label for="riwayat_pekerjaan">Riwayat pekerjaan</label>
                            <input type="text" name="riwayat_pekerjaan" value="<?= $calon_presiden['riwayat_pekerjaan']; ?>"
                                class="form-control" id="riwayat_pekerjaan" placeholder="Riwayat pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" value="<?= $calon_presiden['umur']; ?>" class="form-control"
                                id="umur" placeholder="Umur">
                        </div>
                        <a href="<?= base_url('Datacapres') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data
                            Capres</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>