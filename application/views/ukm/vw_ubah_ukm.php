<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data UKM
                </div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $ukm['id']; ?>">
                        <div class="form-group">
                            <label for="nama_ukm">Nama UKM</label>
                            <input type="text" name="nama_ukm" class="form-control" value="<?= $ukm['nama_ukm']; ?>" id="nama_ukm" placeholder="Nama UKM">
                            <?= form_error('nama_ukm', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_ketua">Ketua</label>
                            <input type="text" name="nama_ketua" class="form-control" value="<?= $ukm['nama_ketua']; ?>" id="nama_ketua" placeholder="Nama Ketua">
                            <?= form_error('nama_ketua', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_wakil">Nama Wakil</label>
                            <input type="text" name="nama_wakil" class="form-control" value="<?= $ukm['nama_wakil']; ?>" id="nama_wakil" placeholder="Wakil">
                        </div>
                        <div class="form-group">
                            <label for="tahun_diresmikan">Tahun diresmikan</label>
                            <input type="text" name="tahun_diresmikan" class="form-control" value="<?= $ukm['tahun_diresmikan']; ?>" id="tahun_diresmikan" placeholder="Tahun diresmikan">
                            
                        </div>
                        <div class="form-group">
                            <label for="banyak_peminat">Banyak Peminat</label>
                            <input type="text" name="banyak_peminat" class="form-control" value="<?= $ukm['banyak_peminat']; ?>" id="banyak_peminat" placeholder="Banyak Peminat">
                            <?= form_error('banyak_peminat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="visi">Visi</label>
                            <input type="text" name="visi" class="form-control" value="<?= $ukm['visi']; ?>" id="visi" placeholder="Visi">
                        </div>
                        <div class="form-group">
                            <label for="misi">Misi</label>
                            <input type="text" name="misi" class="form-control" value="<?= $ukm['misi']; ?>" id="misi" placeholder="Misi">
                        </div>
                        <div class="form-group">
                           <img src="<?= base_url('assets/assets/img/ukm/') . $ukm ['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            
                        </div>
                        </div>
                        <a href="<?= base_url('Ukm') ?>" class="badge bg-danger">Tutup</a>
                        <button type="submit" name="tambah" class="badge bg-primary float-right">Ubah
                            UKM</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>