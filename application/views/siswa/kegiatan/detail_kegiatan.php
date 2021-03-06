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
              <li class="breadcrumb-item"><a href="<?= base_url('siswa/home') ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('siswa/kegiatan') ?>">Kembali</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <?php $this->load->view('layouts/components/alert-bootstrap') ?>

        <div class="row">
          <div class="col-lg-6">
            
            <div class="card card-primary card-outline mb-3">
              <div class="card-header">
              <div class="row">
                <h5 class="m-0"><?= $kegiatan['tanggal'];?></h5>
                <a href="<?= base_url('siswa/Kegiatan/update/').$kegiatan['id_kegiatan'] ?>" class="btn btn-primary " style="margin-left: auto;"><i class="fas fa-fw fa-edit"></i></a>     
                </div>
              </div>
              <div class="card-body">
                <p class="card-text"><?= $kegiatan['uraian_kegiatan'];?></p>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->