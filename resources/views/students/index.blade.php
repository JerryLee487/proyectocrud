<!doctype html>
<html lang="en">
    <head>
        <title>Students</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <div class="container">
              <!-- ✅ Botón para regresar al dashboard -->
        <a href="{{ route('index.blade.php') }}" class="btn btn-secondary mb-3">← Back to Dashboard</a>
            <h1 class="text-info">Students</h1>
            <a href="{{ route('students.create') }}" class="btn btn-info">Add Students</a>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Career</th>
                        <th>Enrollment Year</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)

                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td> $ {{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->career }}</td>
                        <td>{{ $student->enrollment_year }}</td>
                        <td>
                            @if ($student->photo_url)
                                <img src="{{ $student->photo_url }}" alt="Photo of {{ $student->name }}" style="max-width: 100px; max-height: 100px; object-fit: cover;">
                            @else
                                N/A
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>

                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

