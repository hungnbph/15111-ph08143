@extends('admin-layout.master')
@section('title', 'title list')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">list</h1>
          </div><!-- /.col -->
          <div class="col-sm-12">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->age }} </td>
                    <td>
                        @if ($student->gender == 0)
                            Female
                        @elseif ($student->gender == 1)
                            Male
                        @else
                            Nothing
                        @endif
                    </td>
                    <td>{{ $student->adress }}</td>
                    <td>{{ $student->is_active == 1 ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>

</table>


          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   

            
          <!-- /.col-md-6 -->

            
    <!-- /.content -->
  </div>
    
    @endsection
    
