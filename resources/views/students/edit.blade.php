<!doctype html>
<html lang="en">
    <head>
        <title>Edit Student</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.3.2 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>

        <main>
            <div class="container mt-4">
                <h1 class="text-success">Edit Student</h1>
                <a href="{{ route('students.index') }}" class="btn btn-primary mb-3">View All Students</a>

                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="student_code" class="form-label">Student Code (Unique)</label>
                        <input type="text" class="form-control" id="student_code" name="student_code"
                               value="{{ old('student_code', $student->student_code) }}" required />
                    </div>

                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                               value="{{ old('first_name', $student->first_name) }}" required />
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                               value="{{ old('last_name', $student->last_name) }}" required />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{ old('email', $student->email) }}" />
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                               value="{{ old('phone', $student->phone) }}" />
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3">{{ old('address', $student->address) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="career" class="form-label">Career</label>
                        <input type="text" class="form-control" id="career" name="career"
                               value="{{ old('career', $student->career) }}" required />
                    </div>

                    <div class="mb-3">
                        <label for="enrollment_year" class="form-label">Enrollment Year</label>
                        <input type="number" class="form-control" id="enrollment_year" name="enrollment_year"
                               value="{{ old('enrollment_year', $student->enrollment_year) }}" min="1900" max="2099" required />
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo URL (optional)</label>
                        <input type="text" class="form-control" id="photo" name="photo"
                               value="{{ old('photo', $student->photo) }}" placeholder="https://example.com/photo.jpg" />
                    </div>

                    <button type="submit" class="btn btn-primary">Update Student</button>
                </form>
            </div>
        </main>

        <footer>
            <!-- place footer here -->
        </footer>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
                integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>