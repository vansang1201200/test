<?php require 'partials/head.php' ?>

<form action="/addmenu" method="POST" class="was-validated" enctype="multipart/form-data">
    <div class="form-group">
        <label for="uname">Name_coffee:</label>
        <input type="text" class="form-control" id="brandName" placeholder="Enter Brand Name" name="Name_coffee" required>
        <!-- <div class="valid-feedback">Valid.</div> -->
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
    </div>
    </div>
    <div class="form-group">
        <label for="uname">Price:</label>
        <input type="text" class="form-control" id="brandName" placeholder="Enter Brand Name" name="price" required>
        <!-- <div class="valid-feedback">Valid.</div> -->
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
    </div>
    <div class="form-group">
        <label for="uname">Water_photo:</label>
        <input type="file" class="form-control" id="brandName" placeholder="Enter Brand Name" name="water_photo" required>
        <!-- <div class="valid-feedback">Valid.</div> -->
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
   
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require 'partials/footer.php' ?>