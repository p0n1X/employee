@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }} <a class="btn btn-success float-end"
                                                                      href="{{ url('/employee/create') }}">{{ __('Add new Employee') }}</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <th># {{ $employee->id }}</th>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->age }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->city }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->company }}</td>
                                    <td><a class="btn btn-primary" href="/employee/edit/{{ $employee->id }}">Edit</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger deleteBtn"
                                                value="{{ $employee->id }}">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('employee.modal')
@endsection
