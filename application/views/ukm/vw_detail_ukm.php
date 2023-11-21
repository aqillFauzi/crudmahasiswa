<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail UKM
                </div>
                <div class="card-body">

                    <h2 class="card-title">
                        <?= $ukm['nama_ukm']; ?>
                    </h2>
                    <h6 class="card-subtitle mb-2 text-muted">
                    <td><img src="<?= base_url('assets/assets/img/ukm/') . $ukm['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                        
                    </h6>
                    <div class="row">
                        <div class="col-md-4">Nama Ketua</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                        <?= $ukm['nama_ketua']; ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">Nama Wakil</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $ukm['nama_wakil']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Tahun Di Resmikan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $ukm['tahun_diresmikan']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Banyak Peminat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $ukm['banyak_peminat']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Visi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $ukm['visi']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Misi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $ukm['misi']; ?>
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Ukm') ?>" class="badge bg-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
