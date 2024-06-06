<div class="page-wrapper">
        <div class="content">
          <div class="page-header">
            <div class="page-title">
              <h4>Daftar Pengguna</h4>
              <h6>Pilih tombol tambah pengguna untuk menambah daftar pengguna.</h6>
            </div>
            <div class="page-btn" onclick="openModal()">
              <a href="javascript:void(0);" class="btn btn-added"
                ><img
                  src="<?= base_url('assets/img/icons/plus.svg') ?>"
                  alt="img"
                  class="me-1"
                />Pengguna</a
              >
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="table-top">
                <div class="search-set">
                  <div class="search-path">
                    <a class="btn btn-filter" id="filter_search">
                      <img src="<?= base_url('assets/img/icons/filter.svg') ?>" alt="img" />
                      <span
                        ><img src="<?= base_url('assets/img/icons/closes.svg') ?>" alt="img"
                      /></span>
                    </a>
                  </div>
                  <div class="search-input">
                    <a class="btn btn-searchset"
                      ><img src="<?= base_url('assets/img/icons/search-white.svg') ?>" alt="img"
                    /></a>
                  </div>
                </div>
                <div class="wordset">
                  <ul>
                    <li>
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="pdf"
                        ><img src="<?= base_url('assets/img/icons/pdf.svg') ?>" alt="img"
                      /></a>
                    </li>
                    <li>
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="excel"
                        ><img src="<?= base_url('assets/img/icons/excel.svg') ?>" alt="img"
                      /></a>
                    </li>
                    <li>
                      <a
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="print"
                        ><img src="<?= base_url('assets/img/icons/printer.svg') ?>" alt="img"
                      /></a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card mb-0" id="filter_inputs">
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <div class="row">
                        <div class="col-lg col-sm-6 col-12">
                          <div class="form-group">
                            <select class="select">
                              <option>Choose Product</option>
                              <option>Macbook pro</option>
                              <option>Orange</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg col-sm-6 col-12">
                          <div class="form-group">
                            <select class="select">
                              <option>Choose Category</option>
                              <option>Computers</option>
                              <option>Fruits</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg col-sm-6 col-12">
                          <div class="form-group">
                            <select class="select">
                              <option>Choose Sub Category</option>
                              <option>Computer</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg col-sm-6 col-12">
                          <div class="form-group">
                            <select class="select">
                              <option>Brand</option>
                              <option>N/D</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg col-sm-6 col-12">
                          <div class="form-group">
                            <select class="select">
                              <option>Price</option>
                              <option>150.00</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-1 col-sm-6 col-12">
                          <div class="form-group">
                            <a class="btn btn-filters ms-auto"
                              ><img
                                src="<?= base_url('assets/img/icons/search-whites.svg') ?>"
                                alt="img"
                            /></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table datanew">
                  <thead>
                    <tr>
                      <th>
                        <label class="checkboxs">
                          <input type="checkbox" id="select-all" />
                          <span class="checkmarks"></span>
                        </label>
                      </th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Terakhir Login</th>


                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
					        <?php foreach($data as $d): ?>
                    <tr>
                      <td>
                        <label class="checkboxs">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                      </td>
                      <td class="productimgname">
                        <a href="javascript:void(0);" class="product-img">
                          <img
                            src="<?= base_url('assets/img/profiles/'). $d->avatar ?>"
                            alt="product"
                          />
                        </a>
                        <a href="javascript:void(0);"><?= $d->name ?></a>
                      </td>
                      <td><?= $d->email ?></td>
                      <td><?= $d->username ?></td>
                      <td><?= $d->role ?></td>
                      <td><?= $d->last_login ?></td>


                      <td>
                        <a class="confirm-text" href="javascript:void(0);">
                          <img src="<?= base_url('assets/img/icons/delete.svg') ?>" alt="img" />
                        </a>
                      </td>
                    </tr>
					        <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
				    <?= form_open_multipart('user/create') ?>
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="nama_pengguna" required />
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" required />
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" required />
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" name="password" required />
                    </div>
                    <div class="form-group">
                      <label>Role</label>
					  <select name="role" class="select" required>
                          <option value="admin">Admin</option>
                          <option value="staff">Staff</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Foto</label>
                      <input type="file" class="form-control" name="gambar" />
                    </div>
                    <div class="text-end">
                      <button type="submit" value="submit" class="btn btn-primary">
                        Simpan
                      </button>
                    </div>
					    <?= form_close() ?>

            </div>
          </div>
        </div>
      </div>

