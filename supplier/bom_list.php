<?php
////////////// FOR CHANGING UI DEPENDING ON USER CONDITION (TEMP) //////////////
const userHasSubmittedQuotation = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOM List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<!-- Styles -->
<style>
    .navBomList {
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
    <?php include '../components/header_supplier.php' ?>

    <div class="row">
        <!-- Sidebar Component -->
        <?php include('../components/sidebar_supplier.php') ?>

        <div class="col">
            <!-- HEADER TITLE -->
            <div class="row mb-5">
                <div class="container headerContent pt-4 pb-4 ps-5">
                    <span class="fw-light h3">Posted Bill of Materials</span>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row ps-4 pe-4">
                <div class="row">
                    <!-- Search Bar -->
                    <div>
                        <div class="row mb-4">
                            <div class="col">
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
                        <table class="table table-responsive table-hover table-bordered shadow-sm">
                            <thead>
                                <tr>
                                    <!-- <th>Id</th> -->
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date Posted</th>
                                    <!-- <th>Time</th> -->
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>1</td> -->
                                    <td>4156</td>
                                    <td>IT Equipment</td>
                                    <td>Mouse, keyboards, & monitors</td>
                                    <td>March 17, 2024</td>
                                    <!-- <td>10:31:31</td> -->
                                    <td>
                                        <?php if (userHasSubmittedQuotation) { ?>
                                            <!-- Display if supplier has submitted a quotation -->
                                            <span class="badge text-bg-success">Quotation Submitted</span>
                                        <?php } else { ?>
                                            <!-- Display if supplier has not yet submitted a quotation -->
                                            <span class="badge text-bg-warning">No Quotation Submitted</span>                                            
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#viewBomModal">
                                            View Info
                                        </button>
                                        <!-- View Info Modal -->
                                        <div class="modal fade" id="viewBomModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewBomModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-fullscreen">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="row w-100">
                                                            <div class="col">
                                                                <span class="modal-title ps-5 fs-4 fw-light">View Info</span>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <button class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row min-vh-100">

                                                            <!-- Submit a Quotation -->
                                                            <div class="mb-4 p-4">
                                                                <form action="" class="form-control w-75 shadow-sm border rounded-3 p-5">
                                                                    <div class="row mb-3">
                                                                        <span class="fw-light fs-3">Submit a Quotation</span>
                                                                    </div>
                                                                    <?php if (userHasSubmittedQuotation) { ?>
                                                                        <div class="row w-50">
                                                                            <span class="alert alert-warning">You already submitted a quotation for this bill.<br>Submitting another one will replace your previous quotation.</span>
                                                                        </div>
                                                                    <?php } ?>
                                                                    <div class="row w-50 mb-3">
                                                                        <div>
                                                                            <label for="" class="form-label">Upload PDF</label>
                                                                            <input type="file" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row w-50 mb-5">
                                                                        <div>
                                                                            <label for="" class="form-label">Total Price</label>
                                                                            <div class="input-group w-auto">
                                                                                <span class="input-group-text fw-bold">₱</span>
                                                                                <input type="text" class="form-control" placeholder="Enter total amount">
                                                                                <span class="input-group-text fw-bold">.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex flex-row justify-content-between">
                                                                        <div class="input-group w-auto">
                                                                            <div class="input-group-text">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                                                                </svg>
                                                                            </div>
                                                                            <button type="button" class="btn btn-secondary border" onclick="ToggleBOM()" id="btnBillOfMaterials">
                                                                                Bill of Materials
                                                                            </button>
                                                                            <?php if (userHasSubmittedQuotation) { ?>
                                                                                <button type="button" class="btn btn-secondary border" onclick="ToggleQuotation()" id="btnSubmittedQuotation">
                                                                                    Submitted Quotation
                                                                                </button>
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="w-auto">
                                                                            <?php if (userHasSubmittedQuotation) { ?>
                                                                                <button class="btn btn-warning">Update</button>
                                                                                <button class="btn btn-danger">Remove</button>
                                                                            <?php } else { ?>
                                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <!-- PDF -->
                                                            <div class="row" id="pdfRow">
                                                                <!-- Bill of Materials -->
                                                                <div class="col" id="billOfMaterials">
                                                                    <div>
                                                                        <form class="shadow border rounded-3 p-5">
                                                                            <div class="row mb-3">
                                                                                <div class="d-flex flex-row align-items-center justify-content-between">
                                                                                    <span class="fw-light fs-3">Bill of Materials (#4156)</span>
                                                                                    <button type="button" class="btn-close" onclick="ToggleBOM()"></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-4">
                                                                                <div class="col">
                                                                                    <span class="fw-bold">Date Posted:&nbsp;<span class="fw-normal">March 17, 2024</span></span><br>
                                                                                    <span class="fw-bold">Title:&nbsp;<span class="fw-normal">IT Equipment</span></span><br>
                                                                                    <span class="fw-bold">Description:&nbsp;<span class="fw-normal">Mouse, keyboards, & monitors</span></span><br>
                                                                                </div>
                                                                            </div>
                                                                            <object data="../pdf/bom_sample_4156.pdf" type="application/pdf" class="border rounded-2 min-vh-100" width="100%" height="100%" style="border:none"></object>
                                                                        </form>
                                                                    </div>
                                                                    <div>

                                                                    </div>
                                                                </div>
                                                                <!-- Submitted Quotation -->
                                                                <?php if (userHasSubmittedQuotation) { ?>
                                                                    <div class="col" id="submittedQuotation">
                                                                        <form action="" class="shadow border rounded-3 p-5">
                                                                            <div class="row mb-3">
                                                                                <div class="d-flex flex-row align-items-center justify-content-between">
                                                                                    <span class="fw-light fs-3">Submitted Quotation (#1001)</span>
                                                                                    <button type="button" class="btn-close" onclick="ToggleQuotation()"></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-4">
                                                                                <div class="col">
                                                                                    <span class="fw-bold">Date Submitted:&nbsp;<span class="fw-normal">March 22, 2024</span></span><br>
                                                                                    <span class="fw-bold">Time:&nbsp;<span class="fw-normal">16:26:21</span></span><br><br>
                                                                                </div>
                                                                            </div>
                                                                            <iframe src="../pdf/quotation_sample.pdf" class="border rounded-2 min-vh-100" width="100%" height="100%" style="border:none"></iframe>
                                                                        </form>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

<!-- Scripts -->
<script>
    const billOfMaterials = document.getElementById('billOfMaterials');
    const submittedQuotation = document.getElementById('submittedQuotation');

    const btnSubmittedQuotation = document.getElementById('btnSubmittedQuotation');
    const btnBillOfMaterials = document.getElementById('btnBillOfMaterials');

    submittedQuotation.style.display = "none";
    btnSubmittedQuotation.classList.add('btn-primary');
    btnSubmittedQuotation.classList.remove('btn-secondary');

    function ToggleQuotation() {
        document.getElementById('pdfRow').style.display = "";
        if (submittedQuotation.style.display == "none") {
            submittedQuotation.style.display = "";
            btnSubmittedQuotation.classList.add('btn-secondary');
            btnSubmittedQuotation.classList.remove('btn-primary');
        } else {
            submittedQuotation.style.display = "none";
            btnSubmittedQuotation.classList.remove('btn-secondary');
            btnSubmittedQuotation.classList.add('btn-primary');
        }
        if (submittedQuotation.style.display == "none" && billOfMaterials.style.display == "none") {
            document.getElementById('pdfRow').style.display = "none";
        }

    }

    function ToggleBOM() {
        document.getElementById('pdfRow').style.display = "";
        if (billOfMaterials.style.display == "none") {
            billOfMaterials.style.display = "";
            btnBillOfMaterials.classList.add('btn-secondary');
            btnBillOfMaterials.classList.remove('btn-primary');
        } else {
            billOfMaterials.style.display = "none";
            btnBillOfMaterials.classList.remove('btn-secondary');
            btnBillOfMaterials.classList.add('btn-primary');
        }
        if (submittedQuotation.style.display == "none" && billOfMaterials.style.display == "none") {
            document.getElementById('pdfRow').style.display = "none";
        }
    }
</script>