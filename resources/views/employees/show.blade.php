<!doctype html>
<html lang="en">
<head>
    <title>Employee Details</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <main>
        <div class="container mt-4">
            <h1 class="text-success">Employee Details</h1>
            <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to List</a>
            
            <div class="card mt-3">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Employee ID: {{ $employee->id }}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Name:</strong> {{ $employee->name }}</p>
                            <p><strong>Email:</strong> {{ $employee->email ?? 'N/A' }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Position:</strong> {{ $employee->position }}</p>
                            <p><strong>Salary:</strong> ${{ number_format($employee->salary, 2) }}</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <p><strong>Created:</strong> {{ $employee->created_at->format('M d, Y H:i') }}</p>
                            <p><strong>Last Updated:</strong> {{ $employee->updated_at->format('M d, Y H:i') }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>