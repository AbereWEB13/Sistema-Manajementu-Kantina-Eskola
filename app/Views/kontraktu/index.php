<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>

<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>

<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="section-header-button">
            <a href="<?= base_url('kontraktu/add') ?>" class="main-btn primary-btn btn-hover btn-sm">
              <i class="lni lni-plus"></i> Aumenta Kontraktu
            </a>
          </div>
        </div>
        <!-- BODY -->
        <div class="card-body">

          <!-- SEARCH AND SHOW ENTRIES -->
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
          <!-- END SEARCH AND SHOW ENTRIES -->

          <div class="card-body">
            <div class="table-wrapper table-responsive">
              <table class="table" id="tabel">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Naran Kontraktu</th>
                    <th>Naran Fatin</th>
                    <th>Data Hahu</th>
                    <th>Data Remata</th>
                    <th>Total Osan $</th>

                    <th class="text-center">Asaun</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($kontraktu as $key => $row) : ?>
                    <tr>
                      <td><?= ++$key ?></td>
                      <td><?= $row['naran'] ?></td>
                      <td><?= $row['naran_fatin'] ?></td>
                      <td><?= $row['data_hahu'] ?></td>
                      <td><?= $row['data_remata'] ?></td>
                      <td><?= $row['total_osan'] ?></td>
                      <td>
                        <div class="action d-flex gap-2 justify-content-center">

                          <!-- Edit -->
                          <a href="<?= base_url('kontraktu/edit/' . $row['id_kontraktu']) ?>"
                            class="text-success" title="Hadia">
                            <i class="lni lni-pencil"></i>
                          </a>

                          <!-- Delete -->
                          <a href="<?= base_url('kontraktu/delete/' . $row['id_kontraktu']) ?>"
                            class="text-danger" id="btn-hamos" title="Apaga">
                            <i class="lni lni-trash-can"></i>
                          </a>

                          <!-- View -->
                          <a href="<?= base_url('kontraktu/note/' . $row['id_kontraktu']) ?>"
                            class="text-dark" title="Haré Dadus">
                            <i class="lni lni-eye"></i>
                          </a>

                        </div>
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
            <!-- END INFO & PAGINATION -->

          </div>
        </div>
      </div>
    </div>
  </div>
  <?= $this->endSection() ?>