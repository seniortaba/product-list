<?php require_once 'partials/header.php'; ?>

<main>
    <form method="POST" action="../index.php">
        <div class="mb-3 row col-md-3">
            <label for="SKU" class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="SKU" name="SKU" value="">
            </div>
        </div>
        <div class="mb-3 row col-md-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="">
            </div>
        </div>
        <div class="mb-3 row col-md-3">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" name="price" value="">
            </div>
        </div>


    <div class="row col-md-2">
        <label for="select" class="col-form-label"></label>
    </div>
    <div class="row col-md-4">
        <select class="form-select" id="select" aria-label="Default select example">
            <option>Type Switcher</option>
            <option value="size">size</option>
            <option value="dimensions">dimensions</option>
            <option value="weight">weight</option>
        </select>
    </div>


    <br>
    <br>
    <div class="col-md-5" id="size" style="display:none">
        <div class="card mb-3 rounded-3 shadow-sm">
            <div class="card-body">
                <div class="mb-3 row ">
                    <label for="size" class="col-sm-2 col-form-label">Size</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="size" name="size" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5" id="dimension" style="display:none">
        <div class="card mb-3 rounded-3 shadow-sm">
            <div class="card-body">
                <div class="mb-3 row ">
                    <label for="height" class="col-sm-2 col-form-label">Height</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="height" name="height" value="">
                    </div>
                </div>
                <div class="mb-3 row ">
                    <label for="width" class="col-sm-2 col-form-label">Width</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="width" name="width" value="">
                    </div>
                </div>
                <div class="mb-3 row ">
                    <label for="length" class="col-sm-2 col-form-label">Length</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="length" name="length" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-5" id="weight" style="display:none">
        <div class="card mb-3 rounded-3 shadow-sm">
            <div class="card-body">
                <div class="mb-3 row ">
                    <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="weight" name="weight" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <p><input type="submit" value="Submit" name="submit" /></p>
    </form>
</main>
<?php require_once 'partials/footer.php'; ?>
