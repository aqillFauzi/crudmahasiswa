<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Ukm
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_ukm">Nama Ukm</label>
                            <input type="text" name="nama_ukm" value="<?= set_value('nama_ukm'); ?>" class="form-control" id="nama_ukm" placeholder="Nama Ukm">
                            <?= form_error('nama_ukm', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_ketua">Ketua</label>
                            <input type="text" name="nama_ketua" value="<?= set_value('nama_ketua'); ?>" class="form-control" id="nama_ketua" placeholder="Ketua Ukm">
                            <?= form_error('nama_ketua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_wakil">Wakil</label>
                            <input type="text" name="nama_wakil" value="<?= set_value('nama_wakil'); ?>" class="form-control" id="nama_wakil" placeholder="Wakil">   
                        </div>
                        <div class="form-group">
                            <label for="tahun_diresmikan">Tahun Di Resmikan</label>
                            <input type="text" name="tahun_diresmikan" value="<?= set_value('tahun_diresmikan'); ?>" class="form-control" id="tahun_diresmikan" placeholder="Tahun Di Resmikan">
                            
                        </div>
                        <div class="form-group">
                            <label for="banyak_peminat">Banyak Peminat</label>
                            <input type="text" name="banyak_peminat" value="<?= set_value('banyak_peminat'); ?>" class="form-control" id="banyak_peminat" placeholder="Banyak peminat">
                            <?= form_error('banyak_peminat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="visi">Visi</label>
                            <input type="text" name="visi" value="<?= set_value('visi'); ?>" class="form-control" id="visi" placeholder="Visi">   
                        </div>
                        <div class="form-group">
                            <label for="misi">Misi</label>
                            <input type="text" name="misi" value="<?= set_value('misi'); ?>" class="form-control" id="misi" placeholder="Misi">   
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <a href="<?= base_url('Ukm') ?>" class="badge bg-danger">Tutup</a>
                        <button type="submit" name="tambah" class="badge bg-primary float-right">Tambah
                            Ukm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>