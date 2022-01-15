<?php include 'views/admin/layoutadmin/master.php' ?>

<?php startblock('title') ?>
    Account
<?php endblock() ?>
<?php startblock('content') ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/views/admin/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Account</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Information acccount
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Id </th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>username</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id </th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>username</th>

                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>kh2</td>
                                        <td>Nguyễn Đức Huy</td>
                                        <td>Hà Nội</td>
                                        <td>huychipheo@gmail.com</td>
                                        <td>04115</td>
                                        <td>huychipheo</td>

                                        <td>

                                            <a href="#">Detail</a>|
                                            <a href="#">Permission Role</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>kh2</td>
                                        <td>Nguyễn Duy Hiếu</td>
                                        <td>Hà Nội</td>
                                        <td>duyhiu125@gmail.com</td>
                                        <td>04116</td>
                                        <td>hieuhentai</td>

                                        <td>

                                            <a href="#">Detail</a>|
                                            <a href="#">Permission Role</a>
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

                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
<?php endblock() ?>