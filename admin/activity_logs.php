<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Logs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<!-- Styles -->
<style>
    .navActivityLogs {
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
                    <span class="fw-light h3" style="font-family: 'Figtree', sans-serif;">Activity Logs</span>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row ps-4 pe-4">
                <!-- Form -->
                <div class="row">
                    <!-- Radio Buttons + Search Bar -->
                    <div>
                        <div class="row mb-4">
                            <!-- Radio Buttons -->
                            <div class="col">
                                <div class="input-group">
                                    <div class="me-3">
                                        <span class="fw-bold">Show:</span>
                                    </div>
                                    <div class="form-check me-3">
                                        <input data-bs-theme="dark" type="radio" class="form-check-input" name="filterLogs" id="showAdminLogs" onchange="FilterLogs()">
                                        <label for="showAdminLogs" class="form-check-label">Admin</label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input data-bs-theme="dark" type="radio" class="form-check-input" name="filterLogs" id="showSupplierLogs" onchange="FilterLogs()">
                                        <label for="showSupplierLogs" class="form-check-label">Suppliers</label>
                                    </div>
                                    <div class="form-check">
                                        <input data-bs-theme="dark" type="radio" class="form-check-input" name="filterLogs" id="showAllLogs" onchange="FilterLogs()" checked>
                                        <label for="showAllLogs" class="form-check-label">All</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Search Bar -->
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
                    <div class="table">
                        <table class="table table-responsive table-hover table-bordered shadow-sm" id="activityLogsTable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Type</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1001</td>
                                    <td>
                                        <span class="badge text-bg-success">Admin</span>
                                    </td>
                                    <td>Admin Name</td>
                                    <td>Created a new Bill of Materials (<a href="#">#4156</a>)</td>
                                    <td>March 17, 2024</td>
                                    <td>10:31:31</td>
                                </tr>
                                <tr>
                                    <td>1002</td>
                                    <td>
                                        <span class="badge text-bg-warning">Supplier</span>
                                    </td>
                                    <td>Easy PC</td>
                                    <td>Submitted a quotation for <a href="#">Bill of Materials #4156</a></td>
                                    <td>March 19, 2024</td>
                                    <td>13:24:46</td>
                                </tr>
                                <tr>
                                    <td>1003</td>
                                    <td>
                                        <span class="badge text-bg-warning">Supplier</span>
                                    </td>
                                    <td>PC Express</td>
                                    <td>Submitted a quotation for <a href="#">Bill of Materials #4156</a></td>
                                    <td>March 21, 2024</td>
                                    <td>15:12:59</td>
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

<!-- Activity Logs Script -->
<script>
    const showAdminLogsCheck = document.getElementById('showAdminLogs');
    const showSupplierLogsCheck = document.getElementById('showSupplierLogs');
    const showAllLogsCheck = document.getElementById('showAllLogs');
    const table = document.getElementById('activityLogsTable');

    function FilterLogs() {
        if (showAllLogsCheck.checked) {
            tr = table.getElementsByTagName("tr");
            for (i = 1; i < tr.length; i++) {
                tdUserType = tr[i].getElementsByTagName("td")[1];
                if (tdUserType) {
                    txtValue = tdUserType.textContent || tdUserType.innerText;
                    if (txtValue.toUpperCase().indexOf('ADMIN') > -1 || txtValue.toUpperCase().indexOf('SUPPLIER') > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
        if (showAdminLogsCheck.checked) {
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                tdUserType = tr[i].getElementsByTagName("td")[1];
                if (tdUserType) {
                    txtValue = tdUserType.textContent || tdUserType.innerText;
                    if (txtValue.toUpperCase().indexOf('ADMIN') > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                    // if (tdUserType.innerText == "Admin") {
                    //     tr[i].style.display = "";
                    // } else {
                    //     tr[i].style.display = "none";
                    // }

                }
            }
        }
        if (showSupplierLogsCheck.checked) {
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                tdUserType = tr[i].getElementsByTagName("td")[1];
                if (tdUserType) {
                    txtValue = tdUserType.textContent || tdUserType.innerText;
                    if (txtValue.toUpperCase().indexOf('SUPPLIER') > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                    // if (tdUserType.innerText == "Supplier") {
                    //     tr[i].style.display = "";
                    // } else {
                    //     tr[i].style.display = "none";
                    // }
                }
            }
        }
    }
</script>