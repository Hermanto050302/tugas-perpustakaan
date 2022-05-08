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
          <h1 class="m-0">Form Mahasiswa</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <form>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                <label for="exampleInputid">id</label>
                                <input type="numer" class="form-control" id="exampleInputid" placeholder="Enter id">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="exampleInputid_buku">id_buku</label>
                                <input type="text" class="form-control" id_buku="exampleInputid_buku" placeholder="Enter id_buku">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="exampleInputid_buku">id_staf</label>
                                <input type="text" class="form-control" id_buku="exampleInputid_buku" placeholder="Enter id_buku">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="exampleInputdate">tanggal_peminjaman</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="exampleInputdate">tanggal_pengembalian</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="exampleInputPassword1">Prodi</label>
                                <select class="form-control">
                                    <option>Dipinjam</option>
                                    <option>Dikembalikan</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check col-12">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>

<?php include 'components/_footer.php' ?>