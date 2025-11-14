<!doctype html>
<html lang="en">
<head>
    <title>Edit Employee</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <main>
        <div class="container mt-4">
            <h1 class="text-success">Edit Employee</h1>
            <a href="{{ route('employees.index') }}" class="btn btn-primary">View All Employees</a>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong> Please fix the following:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="mt-3">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $employee->name) }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $employee->email) }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="position" name="position" value="{{ old('position', $employee->position) }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="number" step="0.01" class="form-control" id="salary" name="salary" value="{{ old('salary', $employee->salary) }}" required min="0">
                </div>
                
                <button type="submit" class="btn btn-success">Update Employee</button>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>