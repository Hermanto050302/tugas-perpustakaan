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
          <h1 class="m-0">Data Mahasiswa</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Mahasiswa</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Email</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>No Telepon</th>
                <th>Actions</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>aispradnyawati@gmail.com</td>
                <td>200030632</td>
                <td>Ni Komang Ais Pradnyawati</td>
                <td>Sistem Informasi</td>
                <td>2020</td>
                <td>085888555999</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example"><a href="#" class="btn btn-warning">Edit</a><a href="#" class="btn btn-danger">Delete</a></div>
                </td>
                <td>Br. Kenanga, Batubulan Kangin</td>
              </tr>
              <tr>
                <td>2</td>
                <td>hermantoimade@gmail.com</td>
                <td>200030222</td>
                <td>I Made Hermanto</td>
                <td>Sistem Informasi</td>
                <td>2020</td>
                <td>085888555777</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example"><a href="#" class="btn btn-warning">Edit</a><a href="#" class="btn btn-danger">Delete</a></div>
                </td>
                <td>Br. Batuaji, Batubulan Kangin</td>
              </tr>
            </tbody>
            <tfoot>
               <tr>
                <th>Id</th>
                <th>Email</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>No Telepon</th>
                <th>Actions</th>
                <th>Alamat</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
</div>

<?php include 'components/_footer.php' ?>