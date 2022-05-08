<?php 
include 'helpers/main.php';
include 'components/_header.php';
include 'components/_sidebar.php'; 

?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tabel Peminjaman</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Peminjaman</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>id_buku</th>
                <th>id_mahasiswa</th>
                <th>id_staff</th>
                <th>tanggal_peminjaman</th>
                <th>tanggal_pengembalian</th>
                <th>status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>001</td>
                <td>200030077</td>
                <td>01</td>
                <td>08-05-2022</td>
                <td>15-05-2022</td>
                <td>dikembalikan</td>
              </tr>
              <tr>
                <td>2</td>
                <td>004</td>
                <td>200030222</td>
                <td>02</td>
                <td>09-05-2022</td>
                <td>16-05-2022</td>
                <td>dipinjam</td>
              </tr>
              <tr>
                <th>Id</th>
                <th>id_buku</th>
                <th>id_mahasiswa</th>
                <th>id_staff</th>
                <th>tanggal_peminjaman</th>
                <th>tanggal_pengembalian</th>
                <th>status</th>
              </tr>
            </tbody>
            <tfoot>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
</div>

<?php include 'components/_footer.php' ?>