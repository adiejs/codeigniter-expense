<div class="page-wrapper">
        <div class="content">
          <div class="page-header">
            <div class="page-title">
              <h4>Daftar Akun Pengeluaran</h4>
              <h6>Pilih tombol tambah untuk menambah daftar akun pengeluaran.</h6>
            </div>
            <div class="page-btn" onclick="openModal()">
              <a href="javascript:void(0);" class="btn btn-added"
                ><img
                  src="<?= base_url('assets/img/icons/plus.svg') ?>"
                  alt="img"
                  class="me-1"
                />Akun Pengeluaran</a
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
                      <th>Nama Akun</th>
                      <th>Kode Akun</th>
                      <th>Total Transaksi</th>
                      <th>Pengguna</th>
                      <th>Tanggal</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($list as $d): ?>
                    <tr>
                      <td>
                        <label class="checkboxs">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                      </td>
                      <td><?= $d->nama_akun ?></td>
                      <td><?= $d->kode_akun ?></td>
                      <td><?= $d->jumlah ?></td>
                      <td><?= $d->pengguna ?></td>
                      <td><?= $d->tanggal ?></td>
                      <td><?= $d->keterangan ?></td>
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
              <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= form_open('account/create') ?>
                    <div class="form-group">
                      <label>Nama Akun</label>
                      <input name="nama_akun" type="text" class="form-control" required />   
                    </div>
                    <div class="form-group">
                      <label>Keterangan</label>
                      <input name="keterangan" type="text" class="form-control" />
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
