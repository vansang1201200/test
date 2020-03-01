<?php require 'partials/head.php' ?>

<form action="/deletemenu" method="post" class="was-validated">
    <div class="form-group">
        <input type="hidden" class="form-control" name="ID_oder" value="<?= $menu[0]->ID_oder ?>">
        <label for="uname">delete:</label>
        <input type="text" class="form-control" id="Name_coffee" placeholder="Enter  Name_coffee" name="brand_name" value="<?= $menu[0]->Name_coffee ?>" required>
        <!-- <div class="valid-feedback">Valid.</div> -->
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require 'partials/footer.php' ?>