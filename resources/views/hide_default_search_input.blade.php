@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Datatable</div>
            <div class="panel-body">
                <p>
                    Hide default searchbox but search feature is not disabled and add custom search.
                </p>
                
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        
                        <input type="search" id="dt-custom-name-search-input" class="form-control" placeholder="Search Name Here">
                        
                    </div>
                </div>
                
                <!-- Table -->
                <table class="table" id="datatable-hide-default-search-input">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Designation</th>
                            <th>Salary</th>
                            <th>Department</th>
                            <th>Mobile</th>
                            <th>Email</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->emp_code }}</td>
                            <td>{{ $employee->designation }}</td>
                            <td>{{ $employee->salary }}</td>
                            <td>{{ $employee->department }}</td>
                            <td>{{ $employee->mobile }}</td>
                            <td>{{ $employee->email }}</td>
                        </tr>
                        @endforeach

                    </tbody>

                    
                </table>
            </div>

        </div>

    </div>
</div>

@endsection
