<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>

<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>


<div class="tables-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <div class="section-header-button">
            <a href="<?= base_url('costumer/add') ?>" class="main-btn primary-btn btn-hover btn-sm">
              <i class="lni lni-plus"></i> Aumenta Kostumer
            </a>
          </div>
        </div>
        <!-- BODY -->
        <div class="card-body">

          <!-- SEARCH & SHOW -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label>
                Show
                <select id="showEntries"
                  class="form-select form-select-sm d-inline-block w-auto">
                  <option value="5" selected>5</option>
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                </select>
                entries
              </label>
            </div>

            <div class="col-md-6 text-end">
              <label>Search</label>
              <input type="text" id="searchInput"
                class="form-control form-control-sm d-inline-block w-50"
                placeholder="">

            </div>
          </div>

          <div class="card-body">
            <div class="table-wrapper table-responsive">
              <table class="table" id="tabel">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Naran Kostumer</th>
                    <th>Seksu</th>
                    <th>Numeru Telefone</th>
                    <th>Enderesu</th>
                    <th>Email</th>
                    <th>Imajen</th>
                    <th class="text-center">Asaun</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($costumer as $key => $row) : ?>
                    <tr>
                      <td><?= ++$key ?></td>
                      <td><?= $row['naran'] ?></td>
                      <td><?= $row['seksu'] ?></td>
                      <td><?= $row['numeru_telemovel'] ?></td>
                      <td><?= $row['enderesu'] ?></td>
                      <td><?= $row['email'] ?></td>
                      <td>
                        <img src="<?= base_url('uploads/' . ($row['image'] ? $row['image'] : 'default.png')) ?>" width="50" height="50">
                      </td>
                      <td>
                        <div class="action d-flex gap-2 justify-content-center">

                          <!-- Edit -->
                          <a href="<?= base_url('costumer/edit/' . $row['id_costumer']) ?>"
                            class="text-success" title="Hadia">
                            <i class="lni lni-pencil"></i>
                          </a>

                          <!-- Delete -->
                          <a href="<?= base_url('costumer/delete/' . $row['id_costumer']) ?>"
                            class="text-danger" id="btn-hamos" title="Apaga">
                            <i class="lni lni-trash-can"></i>
                          </a>

                          <!-- View -->
                          <a href="<?= base_url('costumer/note/' . $row['id_costumer']) ?>"
                            class="text-dark" title="Haré Dadus">
                            <i class="lni lni-eye"></i>
                          </a>
                        </div>
                      </td>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>

            <!-- INFO & PAGINATION -->
            <div class="d-flex justify-content-between align-items-center mt-3">
              <div id="tableInfo" class="text-muted small">
                Showing 0 to 0 of 0 entries
              </div>
              <nav>
                <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?= $this->endSection() ?>