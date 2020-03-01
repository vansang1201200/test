<?php require 'partials/head.php' ?>

<form action="/addcustomers" method="POST" class="was-validated" enctype="multipart/form-data">
    <div class="form-group">
        <label for="uname">	Name_cutomer:</label>
        <input type="text" class="form-control" id="brandName" placeholder="Enter Brand Name" name="Name_customer" required>
        <!-- <div class="valid-feedback">Valid.</div> -->
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
    </div>
    </div>
    <div class="form-group">
        <label for="uname">location:</label>
        <input type="number" class="form-control" id="brandName" placeholder="Enter Brand Name" name="location" required>
        <!-- <div class="valid-feedback">Valid.</div> -->
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
    </div>
    <div class="form-group">
        <label for="uname">ID_saff:</label>
        <input type="number" class="form-control" id="brandName" placeholder="Enter Brand Name" name="ID_saff" required>
        <!-- <div class="valid-feedback">Valid.</div> -->
        <div class="invalid-feedback">Vui lòng điền name chi nhánh</div>
   
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require 'partials/footer.php' ?>