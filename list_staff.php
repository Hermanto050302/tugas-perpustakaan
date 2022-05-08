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
          <h1 class="m-0">Tabel Staff</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Staff</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>

                <td>01</td>
                <td>MADE AGUS PUTRA SUBALI, S.Kom., M.Kom</td>
                <td>0808089201</td>
                <td>subali@stikom-bali.ac.id</td>
                <td> 
                    <div class="btn-group" role="group" aria-label="Basic example">
                     <a href="#" class="btn btn-warning">Edit</a>
                     <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </td>
              </tr>
              <tr>
                <td>02</td>
                <td>I WAYAN JEPRIANA, S.Kom., M.Cs</td>
                <td>0806079201</td>
                <td>jepriana@stikom-bali.ac.id</td>
                 <td> 
                    <div class="btn-group" role="group" aria-label="Basic example">
                     <a href="#" class="btn btn-warning">Edit</a>
                     <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </td>
              </tr>
              <th>Id</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Email</th>
                <th>Actions</th>
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