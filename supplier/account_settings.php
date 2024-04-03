<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Component -->
    <?php include '../components/header_supplier.php' ?>

    <div class="row">
        <!-- Sidebar Component -->
        <?php include('../components/sidebar_supplier.php') ?>

        <div class="col">
            <!-- HEADER TITLE -->
            <div class="row mb-5">
                <div class="container headerContent pt-4 pb-4 ps-5">
                    <span class="fw-light h3">Account Settings</span>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row p-5">
                <!-- Profile Information -->
                <div class="col">
                    <form action="" class="shadow border border-subtle p-5 rounded-3">
                        <div class="row mb-3">
                            <span class="h3">Profile Information</span>
                        </div>
                        <div class="row mb-3">
                            <div class="input-group">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" value="Supplier Name" readonly>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="input-group">
                                <span class="input-group-text">Email</span>
                                <input type="email" class="form-control" value="supplier@gmail.com">
                                <button class="btn btn-primary">Update</button>
                            </div>
                            <div class="mt-1">
                                <span class="fw-light">&nbsp;Last Update:&nbsp;<span>10/19/2022</span></span>
                            </div>
                        </div>
                        <div class="row text-end">
                            <div>
                                <a onclick="ToggleChangePassword()" class="btn btn-danger">Change Password</a>
                                <!-- <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#changePasswordCanvas" aria-controls="changePasswordCanvas">
                                    Change Password
                                </button> -->
                            </div>
                        </div>
                    </form>

                </div>
                <!-- Change Password -->
                <div class="col">
                    <form id="changePasswordForm" action="" class="shadow border border-subtle p-5 rounded-3">
                        <div class="row mb-3">
                            <div class="col">
                                <div>
                                    <span class="h3">Change Password</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div>
                                    <button onclick="ToggleChangePassword()" type="button" class="btn-close" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div>
                                <label for="" class="form-label">Current Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div>
                                <label for="" class="form-label">New Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="mt-1">
                                <span class="fw-light">&nbsp;Last Update:&nbsp;<span>12/31/2023</span></span>
                            </div>
                        </div>
                        <div class="row text-end">
                            <div>
                                <button class="btn btn-primary">Update Password</button>
                                <!-- <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#changePasswordCanvas" aria-controls="changePasswordCanvas">
                                    Change Password
                                </button> -->
                            </div>
                        </div>
                    </form>
                    <!-- <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="changePasswordCanvas" aria-labelledby="changePasswordLabel">
                        Test
                    </div> -->
                </div>
            </div>
        </div>

    </div>

</body>

</html>

<script>
    const changePassForm = document.getElementById('changePasswordForm');
    changePassForm.style.display = "none";

    function ToggleChangePassword() {
        if (changePassForm.style.display == "none") {
            changePassForm.style.display = "";
        } else {
            changePassForm.style.display = "none";
        }
    }
</script>