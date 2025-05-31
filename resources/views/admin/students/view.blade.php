@extends('layouts.admin')

@section('page-title')
    Applicant Info
@endsection

@section('content')
    <style>
        th,
        td {
            padding: 10px 20px;
            width: 600px;
        }

        table,
        tr,
        th,
        td {
            border: none
        }
    </style>


    <div class="row">

        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Student Information</h4>
                    <div class="table-responsive">
                        <table class="table ">
                            <tr>
                                <th>Full Name</th>
                                <td>{{ $student->student_name }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $student->address }}</td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>{{ $student->gender }}</td>
                            </tr>
                            <tr>
                                <th>DOB</th>
                                <td>{{ $student->dob }}</td>
                            </tr>



                        </table>
                    </div>

                </div>



            </div>


            <!-- end card -->
        </div>



    </div>

    <div class="row my-4">

        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Enrollment Information</h4>
                    <div class="table-responsive">
                        <table class="table ">
                            <tr>
                                <th>School Location</th>
                                <td>{{ $student->location }}</td>
                            </tr>
                            <tr>
                                <th>Class Applied</th>
                                <td>{{ $student->student_class }}</td>
                            </tr>
                            <tr>
                                <th>Student Type</th>
                                <td>{{ $student->student_type }}</td>
                            </tr>
                            <tr>
                                <th>Medical condition</th>
                                <td>{{ $student->condition ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Applicant Message</th>
                                <td>{{ $student->message ?? 'N/A' }}</td>
                            </tr>
                        </table>
                    </div>

                </div>



            </div>


            <!-- end card -->
        </div>



    </div>

    <div class="row my-4">

        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Guardian Information</h4>
                    <div class="table-responsive">
                        <table class="table ">
                            <tr>
                                <th>Guardian</th>
                                <td>{{ $student->guardian_name }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $student->phone }}</td>
                            </tr>
                            <tr>
                                <th>Relationship-to-student</th>
                                <td>{{ $student->relationship_to_student }}</td>
                            </tr>
                            <tr>
                                <th>Guardian Address</th>
                                <td>{{ $student->guardian_address }}</td>
                            </tr>




                        </table>
                    </div>

                </div>



            </div>


            <!-- end card -->
        </div>



    </div>
@endsection
