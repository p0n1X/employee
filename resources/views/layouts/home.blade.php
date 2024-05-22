@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <!-- Side widgets-->
            <div class="col-lg-2">
                <!-- Filter widget-->
                <div class="card mb-4">
                    <div class="card-header">{{ __('Filter') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <form method="GET" action="/">
                                <div class="form-floating mt-2">
                                    <select id="company" name="company" class="form-select" aria-label="Default select example">
                                    <option selected>{{ old('company') ?? $filter["company"]}}</option>
                                    <option value="null"></option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->company }}">{{ $company->company }}</option>
                                    @endforeach
                                    </select>
                                    <label for="company">{{ __('Company') }}</label>
                                </div>
                                <div class="form-floating mt-2">
                                    <select id="city" name="city" class="form-select" aria-label="Default select example">
                                    <option selected>{{ old('city') ?? $filter["city"] }}</option>
                                    <option value="null"></option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->city }}">{{ $city->city }}</option>
                                    @endforeach
                                    </select>
                                    <label for="city">{{ __('City') }}</label>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">{{ __('Filter') }}</button>
                                <a class="btn btn-secondary float-end mt-2" href="/" role="button">{{ __('Reset') }}</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard widget -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <table class="table table-bordered" id="employeeTable">
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
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
