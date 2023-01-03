<?= $this->extend('layouts/admin_base') ?>

<?= $this->section('content') ?>
<div class="row align-items-center mb-4">
    <div class="col-1 text-end">
        <a class="text-body" href="<?= base_url() . "/admin/products" ?>" ><i class="fas fa-arrow-left"></i></a>
    </div>
    <div class="col-11 text-start">
        <h3 class="m-0 p-0">Add product</h3>
    </div>
</div>
<form class="row justify-content-center" method="post" accept-charset="utf-8">
    <div class="col-md-5">
        <div class="card mb-4">
            <div class="card-body">
                <div class="form-outline mb-3">
                    <input name="productTitle" type="text" id="productTitle" class="form-control" required>
                    <label class="form-label" for="productTitle">Title</label>
                </div>
                <div class="form-outline">
                    <textarea name="productDescription" style="resize: none" class="form-control" id="productDescription" rows="4"></textarea>
                    <label class="form-label" for="productDescription">Description</label>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">Media</h5>
                <label for="formFileMultiple" class="form-label">Upload media</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
        </div>
        <div class="card mb-4">    
            <div class="card-body">
                <h5 class="card-title mb-3">Unique Identifiers</h5>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="form-outline mb-3">
                            <input name="productSKU" type="text" id="productSKU" class="form-control">
                            <label class="form-label" for="productSKU">SKU</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-3">
                            <input name="productMPN" type="text" id="productMPN" class="form-control">
                            <label class="form-label" for="productMPN">MPN</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-3">
                            <input name="productUPC" type="text" id="productUPC" class="form-control">
                            <label class="form-label" for="productUPC">UPC</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-3">
                            <input name="productISBN" type="text" id="productISBN" class="form-control">
                            <label class="form-label" for="productISBN">ISBN</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-3">
                            <input name="productBrand" type="text" id="productBrand" class="form-control">
                            <label class="form-label" for="productBrand">Brand</label>
                        </div>
                    </div>               
                </div>
            </div>
        </div>        
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">Pricing</h5>
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="form-outline mb-3">
                            <input name="productPrice" type="number" id="productPrice" class="form-control" required>
                            <label class="form-label" for="productPrice">Price</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline mb-3">
                            <select name="productCurrency" class="form-select" aria-label="Select currency">
                                <option value="USD">USD</option>
                                <option value="PHP">PHP</option>  
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">Organization</h5>
                <div class="form-outline mb-3">
                    <input name="productTag" type="text" id="productTag" class="form-control">
                    <label class="form-label" for="productTag">Review form tag</label>
                </div>
                <div class="form-outline mb-3">
                <select name="productCategory" class="form-select" aria-label="Select category">
                    <option value="uncategorized">Uncategorized</option>
                </select>
            </div>   
            </div>         
        </div>       
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title mb-3">Status</h5>
                <div class="form-check form-check-inline">
                    <input name="productStatus" class="form-check-input" type="radio" name="productStatus" id="productActive" value="published" checked/>
                    <label class="form-check-label" for="productActive">Published</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input name="productStatus" class="form-check-input" type="radio" name="productStatus" id="productDraft" value="hidden" />
                    <label class="form-check-label" for="productDraft">Hidden</label>
                </div>
                <div class="form-check">
                    <input name="productBlacklisted" class="form-check-input" type="checkbox" value="blacklisted" id="productBlacklisted" />
                    <label class="form-check-label" for="productBlacklisted">Blacklisted</label>
                </div>
            </div>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
<?= $this->endSection() ?>