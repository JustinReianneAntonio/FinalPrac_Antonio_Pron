@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Students Information') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <a href="{{ route('student.create') }}" class="btn btn-success">Add New Student</a>
        <div class="row">


                <div class="card-head">

                </div>

                <div class="card-body">



                    <table class="table table-bordered table-stiped fs-1 text-black">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Zip</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->fname }}</td>
                                    <td>{{ $student->mname }}</td>
                                    <td>{{ $student->lname }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->zip }}</td>

                                    <td>
                                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="7">No student found.</td></tr>
                            @endforelse


                        </tbody>



                    </table>
                </div>

                </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
