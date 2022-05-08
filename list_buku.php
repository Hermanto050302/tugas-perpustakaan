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
          <h1 class="m-0">Data Buku</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Buku</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Nama Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>ISBN</th>
                <th>Bahasa</th>
                <th>Deskripsi</th>
                <th>Stock</th>
                <th>Actions</th>
                <th>Klasifikasi</th>
                <th>Warna Label</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Dasar-Dasar Penguasaan Pemrograman Web</td>
                <td>Agusriandi</td>
                <td>-</td>
                <td>2018</td>
                <td>978-602-453-905-4</td>
                <td>Indonesia</td>
                <td>Pada bab 1 dan 2 menjadi pembahasan dari HTML atau Hypertext Markup Language. HTML dasar pada Bab 1 dan HTML Lanjut pada bab 2. Hal ini dimaksudkan agar pembaca memiliki pemahaman dasar untuk melanjutkan ke bab-bab selanjutnya. Bab 3 dan selanjutnya dibahas tentang pembuatan website pribadi dengan CSS, pembuatan website komersil. Pembuatan website ini diharapkan mampu mengasah keterampilan para pembaca untuk menjadi desain web propesional.</td>
                <td>10</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example"><a href="#" class="btn btn-warning">Edit</a><a href="#" class="btn btn-danger">Delete</a></div>
                </td>
                <td>Baik</td>
                <td>Hijau</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Buku Sakti Pemrograman Web</td>
                <td>Didik Setiawan</td>
                <td>Anak Hebat Indonesia</td>
                <td>2017</td>
                <td>9786</td>
                <td>Indonesia</td>
                <td>Buku Pemrograman Web ini mengenalkan bagian dari sebuah pembentukan pemrograman web. Buku ini sebagian besar menyajikan langkah-langkah program yang disusun secara terstruktur. Dengan adanya langkah-langkah program tersebut, diharapkan pembaca dapat mempraktikkan secara langsung dan dapat menyimpulkan sendiri maksud dari setiap perintah dalam program dengan cara melihat hasil yang ditampilkan di web browser.</td>
                <td>10</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example"><a href="#" class="btn btn-warning">Edit</a><a href="#" class="btn btn-danger">Delete</a></div>
                </td>
                <td>Baik</td>
                <td>Hijau</td>
              </tr>
            </tbody>
            <tfoot>
                <tr>
                <th>Id</th>
                <th>Judul</th>
                <th>Nama Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>ISBN</th>
                <th>Bahasa</th>
                <th>Deskripsi</th>
                <th>Stock</th>
                <th>Actions</th>
                <th>Klasifikasi</th>
                <th>Warna Label</th>
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