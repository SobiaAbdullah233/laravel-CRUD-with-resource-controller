<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>crud in laravel</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            @if (session()->has('msg'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('msg') }}
                </div>
            @endif
            <div class="col-md-12 col-lg-12 col-sm-12">
                <form action="{{ url('students') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name"
                            name="name">
                            @error('name')
                            <div class="error bg-danger mt-1 text-white p-2">{{ $message }}</div>
                              @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                            name="email">
                            @error('email')
                            <div class="error bg-danger mt-1 text-white p-2">{{ $message }}</div>
                              @enderror
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                            name="password">
                            @error('password')
                            <div class="error bg-danger mt-1 text-white p-2">{{ $message }}</div>
                              @enderror
                    </div>
                    <div class="form-group">
                        <label for="pwd">Marks:</label>
                        <input type="number" class="form-control" id="marks" placeholder="Enter marks"
                            name="marks">
                            @error('marks')
                            <div class="error bg-danger mt-1 text-white p-2">{{ $message }}</div>
                              @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Submit</button>

            </div>
        </div>
    </div>


</body>

</html>
