<!doctype html>
<html lang="en">
<head>
    <title>Employees</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <main>
        <div class="container mt-4">
              <!-- ✅ Botón para regresar al dashboard -->
        <a href="{{ route('index.blade.php') }}" class="btn btn-secondary mb-3">← Back to Dashboard</a>
            <h1 class="text-info">Employees</h1>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('employees.create') }}" class="btn btn-info mb-3">Create Employee</a>
            
            @if($employees->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email ?? 'N/A' }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>${{ number_format($employee->salary, 2) }}</td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm">View</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="alert alert-warning">
                No employees found. <a href="{{ route('employees.create') }}">Create the first one!</a>
            </div>
            @endif
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>