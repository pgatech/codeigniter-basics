<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- /.row -->
    <div class="row">
        <div class="col-md-3 mb-3">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Mahasiswa</button>
        </div>
    </div>

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Tanggal Lahir</th>
                      <th>Jurusan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 1;
                        foreach ($mahasiswa as $mhs) :?>
                    <tr>
                      <td><?php echo $no++?></td>
                      <td><?php echo $mhs->nama?></td>
                      <td><?php echo $mhs->nim?></td>
                      <td><?php echo $mhs->tgl_lahir?></td>
                      <td><?php echo $mhs->jurusan?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'mahasiswa/tambah_aksi'?>">
  
            <div class="form-group">
                <label for="InputName1">Nama</label>
                <input type="text" name="nama" class="form-control" id="InputName1" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="InputNIM">NIM</label>
                <input type="text" name="nim" class="form-control" id="InputNIM" placeholder="Masukkan NIM">
            </div>
            <div class="form-group">
                <label for="InputTglLahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="InputTglLahir">
            </div>
            <div class="form-group">
                <label for="inputState">Jurusan</label>
                <select id="inputState" name="jurusan" class="form-control">
                    <option selected>Pilih</option>
                    <option>Teknik Informatika</option>
                    <option>Sistem Informasi</option>
                    <option>Desain Komunikasi Visual</option>
                </select>
            </div>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>