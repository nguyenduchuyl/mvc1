<?php include 'views/admin/layoutadmin/master.php' ?>

<?php startblock('title') ?>
    Bill
<?php endblock() ?>
<?php startblock('content') ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Đồ gỗ nhóm 5</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/views/admin/index.php">Home</a></li>
                    <li class="breadcrumb-item active">Bill</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Information Bill
                    </div>

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>Id Bill</th>
                                <th>number</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id Bill</th>
                                <th>number</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>asdsad</td>
                                <td>12121212</td>

                                <td>

                                    <a href="#">detail</a>|
                                    <a href=#">edit </a>
                                </td>
                            </tr>
                            <tr>
                                <td>dasd2</td>
                                <td>S1333</td>

                                <td>

                                    <a href="#">detail</a>|
                                    <a href=#">edit </a>
                                </td>
                            </tr>
                            <tr>
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