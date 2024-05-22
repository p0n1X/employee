@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ __('Edit Employee') }} </div>
                    <div class="card-body">
                        <form method="POST" action="/employee/update">
                            @csrf
                            @method('PATCH')
                            <div class="form-group mb-2">
                                <label for="name">{{ __('First Name') }}</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                       value="{{ old('first_name') ?? $employee->first_name }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="name">{{ __('Last Name') }}</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                       value="{{ old('last_name') ?? $employee->last_name }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="name">{{ __('Age') }}</label>
                                <input type="number" class="form-control" id="age" name="age"
                                       value="{{ old('age') ?? $employee->age }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="name">{{ __('Phone') }}</label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                       value="{{ old('phone') ?? $employee->phone }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="name">{{ __('City') }}</label>
                                <input type="text" class="form-control" id="city" name="city"
                                       value="{{ old('city') ?? $employee->city }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="name">{{ __('Email') }}</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       value="{{ old('email') ?? $employee->email }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="name">{{ __('Company') }}</label>
                                <input type="text" class="form-control" id="company" name="company"
                                       value="{{ old('company') ?? $employee->company }}">
                            </div>
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $employee->id }}">
                            <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                            <a class="btn btn-secondary float-end" href="/category" role="button">{{ __('Back') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
