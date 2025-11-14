<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - CRUD System</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        body { background-color: #f8f9fa; }
        .card-icon {
            font-size: 2.5rem;
            color: #28a745;
        }
        .card-title {
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container py-4">

        <h1 class="text-center text-success mb-4">📊 Dashboard - CRUD System</h1>

        <div class="row g-4">
            <!-- Products -->
            <div class="col-md-6 col-lg-3">
                <div class="card shadow-sm h-100 text-center">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 220px;">
                        <div class="card-icon mb-3">📦</div>
                        <h5 class="card-title">Products</h5>
                        <p class="text-muted">Manage your products</p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary mt-2">Go to Products</a>
                    </div>
                </div>
            </div>

            <!-- Students -->
            <div class="col-md-6 col-lg-3">
                <div class="card shadow-sm h-100 text-center">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 220px;">
                        <div class="card-icon mb-3">🎓</div>
                        <h5 class="card-title">Students</h5>
                        <p class="text-muted">Manage student records</p>
                        <a href="{{ route('students.index') }}" class="btn btn-primary mt-2">Go to Students</a>
                    </div>
                </div>
            </div>

            <!-- Clients -->
            <div class="col-md-6 col-lg-3">
                <div class="card shadow-sm h-100 text-center">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 220px;">
                        <div class="card-icon mb-3">👥</div>
                        <h5 class="card-title">Clients</h5>
                        <p class="text-muted">Manage your clients</p>
                        <a href="{{ route('clients.index') }}" class="btn btn-primary mt-2">Go to Clients</a>
                    </div>
                </div>
            </div>

            <!-- Employees -->
            <div class="col-md-6 col-lg-3">
                <div class="card shadow-sm h-100 text-center">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 220px;">
                        <div class="card-icon mb-3">👔</div>
                        <h5 class="card-title">Employees</h5>
                        <p class="text-muted">Manage your team</p>
                        <a href="{{ route('employees.index') }}" class="btn btn-primary mt-2">Go to Employees</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 text-muted">
            <p>💡 Click on any card to manage your records.</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
</body>
</html>