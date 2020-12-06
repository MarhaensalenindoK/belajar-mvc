<div class="container mt-3">

  <!-- // Flashing -->
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>


<div class="row">
  <div class="col-lg-6">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark tombolTambahData" data-toggle="modal" data-target="#formModal">
      Tambah Data Siswa
    </button>
  </div>
</div>
<!-- SEARCH -->
<div class="row">
  <div class="col-lg-6">
    <form action="<?= BASEURL; ?>/siswa/cari" method="post">

      <div class="input-group mt-3">
        <input type="text" class="form-control" placeholder="Cari Siswa..." name="keyword" id="keyword" aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-outline-info" type="submit" id="tombolCari">Cari</button>
        </div>
      </div>
    </form>
  </div>
</div>

  <div class="row">
    <div class="col-lg-6">


      <h3 class="mt-3">Daftar Siswa</h3>

    <ul class="list-group">
      <?php foreach ($data['sw'] as $sw):?>
    <li class="list-group-item"><?= $sw['nama']; ?>
      <!-- HAPUS -->
      <a href="<?= BASEURL; ?>/siswa/hapus/<?= $sw['id']; ?>" class="badge badge-secondary float-right ml-2" onclick="return confirm('Yakin ingin menghapus data siswa ini?')">hapus</a>
      <!-- UBAH -->
      <a href="<?= BASEURL; ?>/siswa/ubah/<?= $sw['id']; ?>" class="badge badge-info float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $sw['id']; ?>">ubah</a>
      <!-- Detail Siswa -->
      <a href="<?= BASEURL; ?>/siswa/detail/<?= $sw['id']; ?>" class="badge badge-primary float-right ml-2">detail</a>
    </li>
    <?php  endforeach; ?>
    </ul>

    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Form -->
       <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
         <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" >
          </div>
          <div class="form-group">
            <label for="nis">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis" >
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" >
          </div>

          <div class="form-group">
      <label for="jurusan">Jurusan</label>
      <select class="form-control" id="jurusan" name="jurusan">
        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
        <option value="Multimedia">Multimedia</option>
        <option value="Teknik Komputer  dan Jaringan">Teknik Komputer  dan Jaringan</option>
        <option value="Otomisasi Tata Kelola Perkantoran">Otomisasi Tata Kelola Perkantoran</option>
        <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
        <option value="Tataboga">Tataboga</option>
        <option value="Perhotelan">Perhotelan</option>


      </select>
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
