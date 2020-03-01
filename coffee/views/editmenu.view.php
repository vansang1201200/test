<?php require 'partials/head.php' ?>

<form action="/editmenu" method="post" class="was-validated" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" class="form-control" name="ID_oder" value="<?= $menu[0]->ID_oder ?>">
        <label for="uname">Menu:</label>
        <input type="text" class="form-control" id="Name_coffee" placeholder="Enter Name coffee" name="Name_coffee" value="<?= $menu[0]->Name_coffee ?>" required>     
        <input type="file" class="form-control" id="water_photo" placeholder="Enter water coffee" name="water_photo" value="<?= $menu[0]->water_photo ?>" required><!-- <div class="valid-feedback">Valid.</div> -->
        <input type="number" class="form-control" id="price" placeholder="Enter Name coffee" name="price" value="<?= $menu[0]->price ?>" required>
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require 'partials/footer.php' ?>