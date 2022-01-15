<?php include 'views/admin/layoutadmin/master.php' ?>

<?php startblock('title') ?>
    Product
<?php endblock() ?>
<?php startblock('content') ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Product</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/views/admin/index.php">Home</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
            <a href="#">add product</a><br/>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Infomation Product
                </div>

                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Id procduc</th>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Meterial</th>
                                <th>Price</th>
                                <th>Photo</th>
                                <th>In</th>
                                <th>MM</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <<th>Id</th>
                                <th>Id procduc</th>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Meterial</th>
                                <th>Price</th>
                                <th>Photo</th>
                                <th>In</th>
                                <th>MM</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>ip</td>
                                <td>ip12</td>
                                <td>iphone 12</td>
                                <td>15 inch</td>
                                <td>iorn</td>
                                <td>60000000</td>
                                <td>sdadad.jpg</td>
                                <td>2</td>
                                <td>Hdasdasasd</td>
                                <td>

                                    <a href="#">Edit</a>|
                                    <a href="#">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                                <td>...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php endblock() ?>