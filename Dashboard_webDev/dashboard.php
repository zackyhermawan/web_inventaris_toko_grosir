<?php
include "database/database.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - Admin</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  </head>
  <body>
    <div class="d-flex main">
      <aside id="sidebar" class="sidebar pt-2 ">
        <div class="d-flex align-items-center justify-content-center">
          <span class="logo d-flex align-items-center justify-content-center my-3" style="color: var(--icon)">Logo</span>
        </div>
        <div class="position-relative">
          <button id="arrow-button" class="arrow position-absolute border-0 shadow-lg d-flex align-items-center justify-content-center rounded-5"><i class="bi bi-arrow-right"></i></button>
        </div>
        <div class="list-group mt-3">
        <a href="" class="close-btn p-1"><i class="bi bi-x-lg text-white fs-5 mx-2"></i></a>
          <a href="dashboard.php" class="menu dashboard-aside position-relative text-decoration-none mt-4 p-1 mx-2 rounded" aria-current="true"><i class="bi bi-house-fill fs-5 mx-2"></i><span class="position-absolute">Dashboard</span></a>
          <a href="manageData.php" class="menu text-decoration-none mt-4 p-1 mx-2 rounded" aria-current="true"><i class="bi bi-dropbox fs-5 mx-2"></i><span class="position-absolute">Manage Data</span></a>
          <a class="menu nav-link position-relative text-decoration-none mt-4 p-1 mx-2 rounded text-white" data-bs-toggle="collapse" href="#kelolaProduk" role="button" aria-expanded="false" aria-controls="kelolaProduk">
          <i class="bi bi-box-seam-fill fs-5 mx-2"></i><span class="position-absolute">Kelola Stok<i class="bi ms-2 bi-caret-down-fill"></i>
          </span>
          </a>
          <div class="kelolastok-dropdown collapse" id="kelolaProduk">
            <ul class="list-unstyled ps-3 d-flex flex-column gap-2">
              <li class="d-flex align-items-center my-2" style="margin-left: 2rem;"><a href="barangMasuk.php" class="menu me-2 p-1 nav-link text-white rounded">Barang Masuk</a></li>
              <li class="d-flex align-items-center" style="margin-left: 2rem;"><a href="barangKeluar.php" class="menu me-2 p-1 nav-link text-white rounded">Barang Keluar</a></li>
            </ul>
          </div>
          <a href="laporan.php" class="menu text-decoration-none mt-4 p-1 mx-2 rounded" aria-current="true"><i class="bi bi-file-earmark-text-fill fs-5 mx-2"></i><span class="position-absolute">Laporan</span></a>
          <a href="logout.php" class="logout d-flex align-items-center text-decoration-none text-danger position-absolute mt-4 p-1 mx-2" aria-current="true"
            ><i class="bi bi-box-arrow-in-left fs-5 mx-2"></i><span class="=position-absolute">Logout</span></a
          >
        </div>
      </aside>

      <div class="content container-fluid">
        <nav class="navbar px-4 ">
          <div class="container-fluid position-relative d-flex align-items-center">
            <div class="header d-flex align-items-center">
              <i id="hamburger-menu" class="bi bi-list mx-2" style="font-size: 2rem"></i>
              <div class="header-nav">
                <p class="fs-4 m-0 fw-semibold" >Hallo, Admin!</p>
                <p class="d-flex m-0">May your day always be right</p>
              </div>
            </div>
            <div class="dropdown">
              <button class="btn cards border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi text-secondary bi-sun-fill"></i>
              </button>
              <ul class="dropdown-menu cards">
                <li><a id="lightmode-mobile" class="dropdown-item text-secondary" href="#"><i class="me-2 bi bi-sun-fill"></i>light</a></li>
                <li><a id="darkmode-mobile" class="dropdown-item text-secondary" href="#"><i class="me-2 bi bi-moon-stars-fill"></i>Dark</a></li>
              </ul>
            </div>
            <div class="profile cards rounded-5 p-1 d-flex justify-content-between">
              <input class="switch" type="checkbox" id="darkmode-toggle" />
              <label class="checkbox-label" for="darkmode-toggle">
                <i class="sun bi bi-sun-fill"></i>
                <i class="moon bi bi-moon-stars-fill"></i>
              </label>
              <a href="#" id="profil" class="d-flex align-items-center justify-content-center text-decoration-none"
                ><i class="bi bi-person-fill fs-5 d-flex bg-white d-flex align-items-center justify-content-center rounded-5 text-secondary"></i
              ></a>
            </div>

            <div id="popup" class="popup cards position-absolute rounded shadow-lg">
              <div class="user-profil p-4">
                <div class="user-info d-flex align-items-center justify-content-center">
                  <img src="asset/user.png" class="w-50 mb-3" alt="" />
                  <h2>Budi</h2>
                </div>
                <div class="m-auto border-bottom border-1 border-black border-dark-subtle"></div>
                <div class="user d-flex align-items-center justify-content-center my-2">
                  <span class="fs-4 ">Admin</span>
                </div>
                <div class="logout-profil ">
                  <div class="m-auto border-bottom border-1 border-black border-dark-subtle"></div>
                  <div class="user d-flex align-items-center justify-content-center my-2">
                    <a href="logout.php" class="fs-5 text-decoration-none text-danger d-flex align-items-center"><i class="bi bi-box-arrow-in-left fs-5 mx-2"></i>Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>

        <div class="main-content position-absolute mt-5">
          <div class="container-fluid px-5 pt-4 py-5">
            <h2 class="mb-3">Dashboard</h2>
            <div id="setion-dashboard" class="d-flex gap-4 flex-wrap">
              <div class="info-stok d-flex gap-4 col">
                <div class="card cards shadow-sm border-0 col">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2">Barang Masuk</h6>
                    <div class="data d-flex justify-content-between">
                      <img src="asset/open-box.png" class="object-fit-contain" style="width: 70px" />
                      <h2 class="card-title mt-3">100</h2>
                    </div>
                  </div>
                </div>
                <div class="card cards shadow-sm border-0 col">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 ">Barang Keluar</h6>
                    <div class="data d-flex justify-content-between">
                      <img src="asset/return-box.png" class="object-fit-contain" style="width: 70px" />
                      <h2 class="card-title mt-3">100</h2>
                    </div>
                  </div>
                </div>
                <div class="card cards shadow-sm border-0 col">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 ">Barang Keluar</h6>
                    <div class="data d-flex justify-content-between">
                      <img src="asset/return-box.png" class="object-fit-contain" style="width: 70px" />
                      <h2 class="card-title mt-3">100</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gap-4">
                <div class="data-stok d-flex gap-4">
                  <div class="card cards shadow-sm border-0 col">
                    <div class="card-body">
                      <h5 class="card-title">Barang Masuk</h5>
                      <div class="mt-3 d-flex justify-content-between gap-3">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                              </tr>
                              <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                              </tr>
                              <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                  </div>

                  <div class="card cards shadow-sm border-0 col">
                    <div class="card-body">
                      <h5 class="card-title">Barang Keluar</h5>
                      <div class="mt-3 d-flex justify-content-between gap-3">
                          <table class="table table-hover rounded-2">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                              </tr>
                              <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                              </tr>
                              <tr>
                                <th>3</th>
                                <td>Larry the Bird</td>
                                <td>Larry the Bird</td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="chart d-flexm-0 col">
                  <div class="card cards shadow-sm border-0 px-2 col">
                    <canvas id="cookieChart" width=100%></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="chart.js"></script>
  </body>
</html>
