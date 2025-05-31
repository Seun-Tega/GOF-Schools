@extends('layouts.admin')



@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Appication Menu
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Application</li>
        </ol>
      </nav>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Students Menu</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Fullname</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Guardian</th>
                    <th>Phone</th>
                    <th>Full Details</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($students as $student )
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::ucfirst($student->student_name) }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->guardian_name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                      <a class="btn btn-outline-primary" href="{{ route('student.details', ['student' => $student->id]) }}">View</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endsection