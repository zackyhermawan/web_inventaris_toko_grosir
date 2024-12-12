<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - Admin</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  </head>
  <body>
    <div class="d-flex main">
      <aside id="sidebar" class="sidebar pt-2">
        <div class="d-flex align-items-center justify-content-center">
          <span class="d-flex logo align-items-center justify-content-center my-3" style="color: var(--icon)">Logo</span>
        </div>
        <div class="position-relative">
          <button id="arrow-button" class="arrow position-absolute border-0 shadow-lg d-flex align-items-center justify-content-center rounded-5"><i class="bi bi-arrow-right"></i></button>
        </div>
        <div class="list-group mt-3">
        <a href="" class="close-btn p-1"><i class="bi bi-x-lg text-white fs-5 mx-2"></i></a>
          <a href="dashboard.php" class="menu text-decoration-none mt-4 p-1 mx-2 rounded" aria-current="true"><i class="bi bi-house-fill fs-5 mx-2"></i><span class="position-absolute">Dashboard</span></a>
          <a href="manageData.php" class="menu text-decoration-none mt-4 p-1 mx-2 rounded" aria-current="true"><i class="bi bi-dropbox fs-5 mx-2"></i><span class="position-absolute">Manage Data</span></a>
          <a href="kelolaStok.php" class="menu text-decoration-none mt-4 p-1 mx-2 rounded" aria-current="true"><i class="bi bi-box-seam-fill fs-5 mx-2"></i><span class="position-absolute">Kelola Stok</span></a>
          <a href="laporan.php" class="menu text-decoration-none mt-4 p-1 mx-2 rounded" aria-current="true"><i class="bi bi-file-earmark-text-fill fs-5 mx-2"></i><span class="position-absolute">Laporan</span></a>
          <a href="logout.php" class="logout d-flex align-items-center text-decoration-none text-danger position-absolute mt-4 p-1 mx-2" aria-current="true"
            ><i class="bi bi-box-arrow-in-left fs-5 mx-2"></i><span class="=position-absolute">Logout</span></a
          >
        </div>
      </aside>

      <div class="content container-fluid">
        <nav class="navbar px-4 navbar-expand-lg">
          <div class="container-fluid position-relative d-flex align-items-center">
          <div class="header d-flex align-items-center ">
              <i id="hamburger-menu" class="bi bi-list mx-2" style="font-size: 2rem"></i>
              <div class="header-nav">
                <a class="navbar-brand fw-semibold" href="#">Hallo, Admin!</a>
                <p class="d-flex m-0">May your day always be right</p>
              </div>
            </div>
            <div class="profile rounded-5 p-1 d-flex justify-content-between">
              <input class="switch" type="checkbox" id="darkmode-toggle" />
              <label class="checkbox-label" for="darkmode-toggle">
                <i class="bi bi-sun-fill"></i>
                <i class="bi bi-moon-stars-fill"></i>
              </label>
              <a href="#" id="profil" class="d-flex align-items-center justify-content-center text-decoration-none"
                ><i class="bi bi-person-fill fs-5 d-flex bg-white d-flex align-items-center justify-content-center rounded-5 text-secondary"></i
              ></a>
            </div>

            <div id="popup" class="popup position-absolute rounded shadow-lg">
              <div class="user-profil p-4">
                <div class="user-info d-flex align-items-center justify-content-center">
                  <img src="asset/user.png" class="w-50 mb-3" alt="" />
                  <h2>Budi</h2>
                </div>
                <div class="m-auto border-bottom border-1 border-black border-dark-subtle w-75"></div>
              </div>
            </div>
          </div>
        </nav>

        <div class="main-content position-absolute mt-5">
          <div class="container-fluid px-5 pt-4 py-5">
            <div class="= d-flex justify-content-between mb-3">
            <h2 class="mb-3">Laporan</h2>

            <div class="filter d-flex">
                <form class="d-flex" role="search">
                    <div class="input-group" style="height: 7px">
                        <input type="text" class="search form-control rounded-start-5 border-0" placeholder="Search" aria-label="Search" aria-describedby="search-icon">
                        <span class="search input-group-text rounded-end-5 border-0" id="search-icon">
                        <i class=" bi bi-search"></i>
                        </span>
                    </div>
                </form>
                <form>
                    <div class="mb-3">
                        <div class="d-flex">
                            <select class="form-select ms-2">
                                <option selected>Pilih Bulan</option>
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option">Oktober</option>
                                <option">November</option>
                                <option">Desember</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            </div>
            <div class="flex-wrap container-fluid">
              <div class="data-stok row">
                <div class="card pt-5 cards shadow-sm border-0 col-md-12">
                  <div class="overflow-x-auto card-body">
                    <div class="overflow-x-auto">
                    <table class="table border-secondary px-2">
                      <thead>
                        <tr>
                          <th style="width: 30px;">No</th>
                          <th>Nama Barang</th>
                          <th>Kategori</th>
                          <th>Stok Awal</th>
                          <th>Barang Keluar</th>
                          <th>Barang Masuk</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Barang 1</td>
                          <td>Pakaian</td>
                          <td>1</td>
                          <td>1</td>
                          <td>Masuk</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="btn-download d-flex align-items-center justify-content-center">
                        <a href="" class="fs-4 text-white bg-primary px-4 rounded text-center"><i class="bi bi-cloud-arrow-down"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- FORM ADD DATA -->
          <form method="POST" class="w-100 h-50 p-4 d-flex flex-column rounded-3 justify-content-center">
            <div class="mb-3">
              <input type="text" name="nama_produk" placeholder="Nama Produk" class="form-control" id="" aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
              <label class="form-label">Kategori</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori1" value="Elektronik" />
                <label class="form-check-label" for="kategori1">Elektronik</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori2" value="Pakaian" />
                <label class="form-check-label" for="kategori2">Pakaian</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori3" value="Makanan" />
                <label class="form-check-label" for="kategori3">Makanan</label>
              </div>
            </div>
            <div class="mb-3">
              <input type="number" name="stok_awal" placeholder="Stok Awal" class="form-control" id="" />
            </div>
            <div class="mb-3">
              <input type="number" name="harga_beli" placeholder="Harga Beli" class="form-control" id="" />
            </div>
            <div class="mb-3">
              <input type="number" name="harga_jual" placeholder="Harga Jual" class="form-control" id="" />
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- *Button name=submit nabrak sama type=button -->
          <button name="submit" class="btn btn-primary">Add changes</button>
        </div>
        <!-- *PENEMPATAN FORM (gak bisa di submit jika button tidak didalam tag form) -->
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Edit -->
  <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" class="w-100 h-50 p-4 d-flex flex-column rounded-3 justify-content-center">
            <div class="mb-3">
              <input type="email" name="nama_produk" placeholder="Nama Produk" class="form-control" id="" aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
              <label class="form-label">Kategori</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori1" value="Elektronik" />
                <label class="form-check-label" for="kategori1">Elektronik</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori2" value="Pakaian" />
                <label class="form-check-label" for="kategori2">Pakaian</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kategori" id="kategori3" value="Makanan" />
                <label class="form-check-label" for="kategori3">Makanan</label>
              </div>
            </div>
            <div class="mb-3">
              <input type="number" name="stok_awal" placeholder="Stok Awal" class="form-control" id="" />
            </div>
            <div class="mb-3">
              <input type="number" name="harga_beli" placeholder="Harga Beli" class="form-control" id="" />
            </div>
            <div class="mb-3">
              <input type="number" name="harga_jual" placeholder="Harga Jual" class="form-control" id="" />
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- *name=save nabrak dengan type=button -->
          <button name="save" class="btn btn-primary">Save changes</button>
        <!-- *PENEMPATAN FORM (gak bisa di klik jika button tidak didalam tag form) -->  
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Delete -->
  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Produk</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="w-100 h-50 p-4 d-flex flex-column rounded-3 justify-content-center">
            <p class="fw-semibold">Apakah anda yakin ingin menghapus {nama produk} ini?</p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- *name=delete nabrak dengan type=button -->
          <button name='delete' class='btn btn-danger'>Delete</button>"
          <!-- *PENEMPATAN FORM (gak bisa di klik jika button tidak didalam tag form) --> 
        </form>
        </div>
      </div>
    </div>
  </div>
</html>