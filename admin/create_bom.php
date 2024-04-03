<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<!-- Styles -->
<style>
    .navCreateBom {
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
                    <span class="fw-light h3">Create Bill of Materials</span>
                </div>
            </div>

            <!-- Main Content -->
            <div class="row p-5">
                <div class="col">
                    <form class="shadow border border-subtle p-5 rounded-3">
                        <div class="row mb-3">
                            <span class="h3">Bill of Materials</span>
                        </div>
                        <div class="row mb-3">
                            <div>
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div>
                                <label class="form-label">Description</label>
                                <textarea name="" id="" cols="30" rows="5" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div>
                                <label class="form-label">Upload PDF</label>
                                <input type="file" class="form-control" required>
                            </div>
                        </div>
                        <div class="row justify-content-end mb-3">
                            <div class="input-group justify-content-end">
                                <div class="form-check me-3">
                                    <input data-bs-theme="dark" type="radio" class="form-check-input" required name="addOption" id="publish" onchange="FilterLogs()">
                                    <label for="publish" class="form-check-label">Publish</label>
                                </div>
                                <div class="form-check me-3">
                                    <input data-bs-theme="dark" type="radio" class="form-check-input" required name="addOption" id="draft" onchange="FilterLogs()">
                                    <label for="draft" class="form-check-label">Draft</label>
                                </div>
                            </div>
                        </div>
                        <div class="row text-end">
                            <div>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>

    </div>

</body>

</html>