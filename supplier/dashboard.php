<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Component -->
    <?php include('../components/header_supplier.php') ?>
    <div class="row">
        <!-- Sidebar Component -->
        <?php include('../components/sidebar_supplier.php') ?>
        <!-- Content -->
        <div class="col">

            <!-- HEADER TITLE -->
            <div class="row mb-5">
                <div class="container headerContent pt-4 pb-4 ps-5">
                    <span class="fw-light h3">Dashboard</span>
                </div>
            </div>

            <!-- Main Content -->
            <!-- CARDS -->
            <div class="row ps-4 pe-4">
                <div class="col d-flex">
                    <!-- Card 1 -->
                    <div class="card bg-white shadow-sm" style="width: 18rem;">
                        <div class="card-body pb-0">
                            <h5 class="card-title w-auto">No. of BOMs</h5>
                            <p class="card-text w-auto">
                            <div class="row mb-2">
                                <div class="col">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="darkgray" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
                                        <path d="M6 12v-2h3v2z" />
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3z" />
                                    </svg>
                                </div>
                                <div class="col-auto d-flex justify-content-center align-items-center">
                                    <span class="h1">20</span>
                                </div>
                            </div>
                            <div class="row">
                                <a href="#" class="d-flex text-dark text-decoration-none">
                                    <div class="col">
                                        View Bill Of Materials List
                                    </div>
                                    <div class="col-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LINE BREAK -->
            <div class="row border mt-5 mb-4 ms-4 me-4"></div>

            <!-- CHART -->
            <div class="row ms-4 me-4 mb-5">
                <canvas id="myChart"></canvas>
            </div>

        </div>
    </div>

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>

<!-- Scripts -->
<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Company 1', 'Company 2', 'Company 3', 'Company 4', 'Company 5', 'Company 6'],
            datasets: [{
                label: 'Submitted Quotations',
                data: [13, 19, 4, 6, 14, 9],
                borderWidth: 1,

            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    labels: {
                        font: {
                            size: 16
                        }
                    }
                }
            }
        }
    });
</script>