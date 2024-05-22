@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Employee') }}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/employee/post">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('First Name') }}</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Last Name') }}</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Age') }}</label>
                                <input type="number" class="form-control" id="age" name="age" value="">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Phone') }}</label>
                                <input type="number" class="form-control" id="phone" name="phone" value="">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('City') }}</label>
                                <input type="text" class="form-control" id="city" name="city" value="">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Email') }}</label>
                                <input type="email" class="form-control" id="email" name="email" value="">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Company') }}</label>
                                <input type="text" class="form-control" id="company" name="company" value="">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">{{ __('Create') }}</button>
                            <a class="btn btn-secondary float-end mt-2" href="/employee"
                               role="button">{{ __('Back') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
