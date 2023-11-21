<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a></div>
        <div class="col-md-12">
        <?= $this->session->flashdata('message'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Prodi</td>
                        <td>Ruangan</td>
                        <td>Jurusan</td>
                        <td>Akreditasi</td>
                        <td>Nama Kaprodi</td>
                        <td>Tahun Berdiri</td>
                        <td>Output Lulusan</td>
                        <td>Gambar</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($prodi as $pro): ?>
                    <tr>
                        <td><?= $i; ?>.</td>
                        <td><?= $pro['nama']; ?></td>
                        <td><?= $pro['ruangan']; ?></td>
                        <td><?= $pro['jurusan']; ?></td>
                        <td><?= $pro['akreditasi']; ?></td>
                        <td><?= $pro['nama_kaprodi']; ?></td>
                        <td><?= $pro['tahun_berdiri']; ?></td>
                        <td><?= $pro['output_lulusan']; ?></td>
                        <td><img src="<?= base_url('assets/assets/img/prodi/') . $pro['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                        <td>
                            <a href="<?= base_url('Prodi/hapus/') . $pro['id']; ?>" class="badge bg-danger">Hapus</a>
                            <a href="<?= base_url('Prodi/edit/') . $pro['id']; ?>" class="badge bg-warning">Edit</a>
                            <a href="<?= base_url('Prodi/detail/') . $pro['id']; ?>" class="badge bg-info">Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>