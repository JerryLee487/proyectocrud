<!doctype html>
<html lang="en">
<head>
    <title>Client Details</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    <header></header>

    <main>
        <div class="container mt-4">
            <div class="card-header">
            Client ID: {{ $client->id }}

            <a href="{{ route('clients.index') }}" class="btn btn-primary mb-3">Back to List</a>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Name:</strong> {{ $client->name }}</p>
                            <p><strong>Email:</strong> {{ $client->email }}</p>
                            <p><strong>Phone:</strong> {{ $client->phone }}</p>
                            <p><strong>Address:</strong> {{ $client->address }}</p>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>