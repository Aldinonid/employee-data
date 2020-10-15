<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <h1 class="m-0 text-dark">Hi <?= $name; ?>, Welcome to Dashboard</h1>
    <br><br>
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= count($karyawan); ?></h3>
              <p>Karyawan</p>
            </div>
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->

      </div>
    </div>
  </section>
</div>