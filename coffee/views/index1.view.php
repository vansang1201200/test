<?php require 'partials/head.php' ?>

<h1>Quán coffee</h1>

<div class="container">
    <a href="/customers" class="btn btn-primary">Add New Customer</a>
    <table class="table table-hover">
        <tr>
            <td>ID Customer</td>
            <td>Name Customer</td>
            <td> Location</td>
            <td>ID Saff</td>
            <td>Action</td>
        </tr>
        <?php foreach ($listCustomers as $customer) : ?>

            <tr>
                <td><?= $customer->ID_customer ?></td>
                <td><?= $customer->Name_customer ?></td>
                <td><?= $customer->location ?></td>
                <td><?= $customer->ID_saff ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<?php require 'partials/footer.php' ?>