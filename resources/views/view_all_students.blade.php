<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>View All Students</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div><h3>View All Students</h3></div>
            @if(session()->has('msg'))
                <div class="alert alert-success mt-2" role="alert">
                        {{session()->get('msg')}}
               </div>
            @endif
            {{-- out Put of forms data --}}
            <div class="col-md-12 col-lg-12 col-sm-12">
                <a class="btn btn-primary float-end mb-2" style="float:right;" href="{{Route('students.create')}}">Create New Student</a>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Marks</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $student->name}}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->password }}</td>
                            <td>{{$student->marks }}</td>
                            <td>
                                <div class="d-flex">
                                    {{-- edit the record of the student --}}
                                <a href="{{ route('students.edit', $student->id) }}"
                                    class="btn btn-primary me-3">edit</a>

                                    {{-- delete the record of a student --}}
                                <form action="{{ route('students.destroy', $student->id) }}" method="post"
                                    class="">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </div>

                        </td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
            </div>

        </div>


</body>
</html>
