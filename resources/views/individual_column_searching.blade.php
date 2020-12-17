@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Datatable</div>
            <div class="panel-body">
                <p>Employee Records</p>
            </div>

            <!-- Table -->
            <table class="table" id="datatable-column-searching">
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

                <tfoot>
                    <tr>
                        <td><input type="test" id="search-name" class="form-control datatable-column-searching-input" placeholder="Search Here"></td>
                        <td><input type="test" id="search-emp-code" class="form-control datatable-column-searching-input" placeholder="Search Here"></td>
                        <td><input type="test" id="search-designation" class="form-control datatable-column-searching-input" placeholder="Search Here"></td>
                        <td><input type="test" id="search-salary" class="form-control datatable-column-searching-input" placeholder="Search Here"></td>
                        <td><input type="test" id="search-department" class="form-control datatable-column-searching-input" placeholder="Search Here"></td>
                        <td><input type="test" id="search-mobile" class="form-control datatable-column-searching-input" placeholder="Search Here"></td>
                        <td><input type="test" id="search-email" class="form-control datatable-column-searching-input" placeholder="Search Here"></td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>

@endsection
