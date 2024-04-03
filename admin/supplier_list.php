<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<!-- Styles -->
<style>
    .navSupplierList {
        background: darkblue;
    }
    .headerContent {
        box-shadow: 1px 5px 5px 1px rgba(0, 0, 0, 0.29);
        -webkit-box-shadow: 1px 5px 5px 1px rgba(0, 0, 0, 0.29);
        -moz-box-shadow: 1px 5px 5px 1px rgba(0, 0, 0, 0.29);
    }
    .card-body:hover {
        transition: 0.4s;
        background: whitesmoke;
    }
    * {
        font-family: "Figtree", sans-serif;
    }
</style>

<body>
    <!-- Header Component -->
    <?php include '../components/header.php' ?>

    <div class="row">
        <!-- Sidebar Component -->
        <?php include('../components/sidebar_admin.php') ?>

        <div class="col">
            <!-- HEADER TITLE -->
            <div class="row mb-5">
                <div class="container headerContent pt-4 pb-4 ps-5">
                    <span class="fw-light h3">Supplier List</span>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row ps-4 pe-4">
                <div class="row">
                    <div>
                        <!-- Buttons + Search Bar -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="input-group">
                                    <a href="add_supplier.php" class="btn btn-success">
                                        Add
                                    </a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control">
                                    <button class="btn btn-dark">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered shadow-sm">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>PC Express</td>
                                    <td>2nd Floor Cyberzone, 4027, Calamba, Laguna</td>
                                    <td>
                                        <div>
                                            <button class="btn btn-sm btn-primary">View Info</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Easy PC</td>
                                    <td>C28W+H3V, Alabang, Muntinlupa, Metro Manila</td>
                                    <td>
                                        <div>
                                            <button class="btn btn-sm btn-primary">View Info</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>