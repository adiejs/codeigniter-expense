<div class="page-wrapper">
        <div class="content">
          <div class="page-header">
            <div class="page-title">
              <h4>Daftar Pemasukan</h4>
              <h6>Pilih tombol tambah pemasukan untuk menambah daftar pemasukan.</h6>
            </div>
            <div class="page-btn" onclick="openModal()">
              <a href="javascript:void(0);" class="btn btn-added"
                ><img
                  src="<?= base_url('assets/img/icons/plus.svg') ?>"
                  alt="img"
                  class="me-1"
                />Pemasukan</a
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
                      <th>Product Name</th>
                      <th>No. Transaki</th>
                      <th>Harga Satuan</th>
                      <th>Terjual</th>
                      <th>Total</th>
                      <th>Laba</th>
                      <th>Tanggal</th>
                      <th>Pengguna</th>
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
                      <td class="productimgname">
                        <a href="javascript:void(0);" class="product-img">
                          <img
                            src="<?= base_url('assets/img/product/'). $d->gambar ?>"
                            alt="product"
                          />
                        </a>
                        <a href="javascript:void(0);"><?= $d->nama_produk ?></a>
                      </td>
                      <td><?= $d->kode_transaksi ?></td>
                      <td><?= $d->harga_jual ?></td>
                      <td><?= $d->terjual ?></td>
                      <td><?= $d->total ?></td>
                      <td><?= $d->laba ?></td>
                      <td><?= $d->tanggal ?></td>
                      <td><?= $d->pengguna ?></td>
                      <td>
                        <a class="me-3" href="product-details.html">
                          <img src="<?= base_url('assets/img/icons/eye.svg') ?>" alt="img" />
                        </a>
                        <a class="me-3" href="editproduct.html">
                          <img src="<?= base_url('assets/img/icons/edit.svg') ?>" alt="img" />
                        </a>
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
              <h5 class="modal-title" id="exampleModalLabel">Tambah Pemasukan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= form_open('income/create') ?>
                    <div class="form-group">
                      <label>Nama Produk</label>
                      <select id="nama-produk" name="nama_produk" class="js-example-basic-single select2" onchange="autocompleted()">
                        <?php foreach ($data as $d): ?>
                          <option value="<?= $d->nama_produk ?>"  
                          data-modal="<?= $d->harga_modal ?>" 
                          data-jual="<?= $d->harga_jual ?>"
                          data-kode="<?= $d->kode_produk ?>">
                          <?= $d->nama_produk ?>
                        </option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <input hidden id="kode-produk" name="kode_produk" type="text" class="form-control" /> 
                    <div class="form-group">
                      <label>Harga Modal</label>
                      <input readonly id="harga-modal" name="harga_modal" type="text" class="form-control" />   
                    </div>
                    <div class="form-group">
                      <label>Harga Jual</label>
                      <input readonly id="harga-jual" name="harga_jual" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                      <label>Jumlah Terjual</label>
                      <input type="number" id="jumlah" name="jumlah" class="form-control" onchange="autocompleted()" min="1" required />
                    </div>
                    <div class="form-group">
                      <label>Total</label>
                      <input readonly id="total" name="total" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                      <label>Laba</label>
                      <input readonly id="laba" name="laba" type="text" class="form-control" />
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
