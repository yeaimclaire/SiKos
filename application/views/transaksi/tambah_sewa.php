<div class="section">
    <div class="container mt-2 mb-2 ">
        <div class="card border-info mt-2">
            <div class="card-body">
                <?php foreach ($detail as $dt) : ?>

                    <form action=" <?= base_url('transaksi/sewa/tambah_sewa_aksi') ?> " method="POST">


                        <div class="form-group">
                            <label>Harga Sewa /Tahun</label>
                            <input type="hidden" name="id_kos" value="<?= $dt->id_kos ?>">
                            <input type="text" name="harga" class="form-control" value="<?= $dt->harga ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="date" name="tgl_sewa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" class="form-control">
                        </div>

                        <button class="btn btn-info">Sewa</button>
                        <a href="<?= base_url('user/index') ?>" class="btn btn-warning text-light"> Kembali</a>

                    </form>


                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>