<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?= $judul; ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('siswa/home') ?>">Kembali</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

    <!-- =========================================================== -->
    <h5 class="mb-2">Info Box With <code></code></h5>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bookmarks</span>
                <span class="info-box-number">41,410</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>

                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

    <h5 class="mb-2">Info Box</h5>
    <div class="row">
    
    <?php foreach($materi as $m) : ?>
    <?php $tbl_pembimbing = $this->db->get_where('tbl_pembimbing',['id_pembimbing'=>$m['pembimbing_id']])->result_array();?>
    <?php foreach($tbl_pembimbing as $pembimbing) :?>
    
        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-dark">
                <span class="info-box-icon bg-primary "><i class="fas fa-book"></i></span>
                <div class="info-box-content">
                <div class="card-text text-bold"><?= $m['judul_tugas_siswa'] ?></div>
                <span class="info-box-text"><?= $pembimbing['nama_pembimbing'];?></span>
                <span class="info-box-text">Tanggal : <?= date('d-m-Y',strtotime($m['created_at'])) ?></span>
                <a href="<?= base_url('Siswa/materi/detail_materi/'.$m['id_tugas']);?>" class="btn btn-primary mt-3">Lihat</a>
              </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        
    <?php endforeach; ?>
    <?php endforeach; ?>
    
    </div>
        
        <div>
            <?= $this->pagination->create_links() ?>
        </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

