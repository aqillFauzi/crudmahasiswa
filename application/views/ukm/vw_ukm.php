<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Ukm/tambah" class="btn btn-info mb-2">Tambah UKM</a>
        </div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Ukm</td>
                        <td>Ketua</td>
                        <td>Tahun Resmi</td>
                        <td>Banyak Peminat</td>
                        <td>Gambar UKM</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($ukm as $um) : ?>
                        <tr>
                            <td>
                                <?= $i; ?>.
                            </td>
                            <td><?= $um['nama_ukm']; ?></td>
                            <td><?= $um['nama_ketua']; ?></td>
                            <td><?= $um['tahun_diresmikan']; ?></td>
                            <td><?= $um['banyak_peminat']; ?></td>
                            <td><img src="<?= base_url('assets/assets/img/ukm/') . $um['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                            <td>
                                <a href="<?= base_url('Ukm/hapus/') . $um['id']; ?>" class="badge bg-danger">Hapus</a>
                                <a href="<?= base_url('Ukm/edit/') . $um['id']; ?>" class="badge bg-warning">Edit</a>
                                <a href="<?= base_url('Ukm/detail/') . $um['id']; ?>" class="badge bg-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>