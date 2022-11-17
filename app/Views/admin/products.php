<?= $this->extend('layouts/admin_base') ?>

<?= $this->section('content') ?>
<style>
    tr:hover {
        background-color: #efefef;
    }
</style>
<h3>Products</h3>
<div class="table-responsive">
<table class="table align-middle mb-0 bg-light">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Status</th>
      <th>Category</th>
      <th><input class="form-check-input mx-3" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." /></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://images.macrumors.com/t/9r84bU_ZTOTrUixxwhjHUFsAvD4=/800x0/smart/article-new/2017/09/iphonexdesign.jpg?lossy"
              alt=""
              style="width: 45px; height: 45px"
              class=""
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><a class="text-body" href="<?= base_url() . "/admin/products/1231548" ?>">iPhone X</a></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">24,000</p>
        <p class="text-muted mb-0">PHP</p>
      </td>
      <td>
        <span class="badge badge-success rounded-pill d-inline">Active</span>
      </td>
      <td>Uncategorized</td>
      <td>
          <input class="form-check-input mx-3" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." />
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://www.pinoytechnoguide.com/wp-content/uploads/2020/09/realme-7-Pro.jpg"
              class=""
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><a class="text-body" href="<?= base_url() . "/admin/products/1231548" ?>">Realme 7 Pro</a></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">15,990</p>
        <p class="text-muted mb-0">PHP</p>
      </td>
      <td>
        <span class="badge badge-info rounded-pill d-inline"
              >Draft</span
          >
      </td>
      <td>Uncategorized</td>
      <td>
        <input class="form-check-input mx-3" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." />
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://urbangadgets.ph/wp-content/uploads/DJi-Mini-2-02.jpg"
              class=""
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><a class="text-body" href="<?= base_url() . "/admin/products/1231548" ?>">DJI Mini 2</a></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">18,991</p>
        <p class="text-muted mb-0">PHP</p>
      </td>
      <td>
        <span class="badge badge-info rounded-pill d-inline">Draft</span>
      </td>
      <td>Uncategorized</td>
      <td>
        <input class="form-check-input mx-3" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." />
      </td>
    </tr>
  </tbody>
</table>
</div>
<?= $this->endSection() ?>