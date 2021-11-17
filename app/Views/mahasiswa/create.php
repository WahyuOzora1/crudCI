<body>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Tambah Mahasiswa</h5>
                    <form method="POST" action="<?= base_url('mahasiswa/store') ?>">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap" class="form-control" placeholder="Input Nama Lengkap ..." name="nama_lengkap">
                        </div>

                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" id="jenis" class="form-control" placeholder="Input Jenis Mahasiswa ..." name="jenis">
                        </div>

                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" id="jenis" class="form-control" placeholder="Input nim Mahasiswa ..." name="nim">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?=base_url("mahasiswa");?>">Kembali</a>
                    </form>

                </div>
            </div>
        </div>
    </div>