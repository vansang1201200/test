<?php require 'partials/head.php' ?>

<h1>Quán coffee</h1>


<div class="container">
    <a href="/showAddBrand" class="btn btn-primary">Add New Branch</a>
    <input style=" margin:10px 0px;" class="form-control mb-4" id="tableSearch" type="text" placeholder="Search..">
    <table class="table table-hover">
        <tr>
            <td>ID Oder</td>
            <td>Name Coffee</td>  
            <td>Price</td>     
            <td>Water Photo</td>
            <td>Action</td>
        </tr>
        <?php foreach ($listmenus as $menu) : ?>
        <tbody id="myTable">
            
       
            <tr>
                <td><?= $menu->ID_oder ?></td>
                <td><?= $menu->Name_coffee ?></td>
                <td><?= $menu->price ?></td>
                <td><img src="<?= 'data:image;base64,' . $menu->water_photo ?> " width="80px" height="80px"></td>
                <td><a href="/editmenus?id=<?= $menu->ID_oder ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                <td><a href="/deletemenu?id=<?= $menu->ID_oder ?>" class="btn btn-warning"><i class="fas fa-trash-alt"></i></i></a></td>
            </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>
<?php require 'partials/footer.php';


?>