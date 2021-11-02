@extends('web-app.layouts.default')
@section('title', 'Add Company')

@section('content')

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Company Information</h4>
                </div>

                <p class="text-danger">{{session('err')}}</p>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route(!isset($company->id) ? 'company.store' : 'company.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control input-default"
                                    value="{{ $company->name ?? '' }}" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control input-default"
                                    value="{{ $company->phone ?? '' }}" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control input-default"
                                    value="{{ $company->email ?? '' }}" placeholder="Email">
                            </div>

                            

                            <div class="form-group">
                                <textarea name="description" id="description" value="{{ $company->description ?? '' }}"
                                    class="form-control input-default" placeholder="Description"
                                    style="min-height: 200px;"></textarea>
                            </div>

                            <div align="center">
                                <button class="btn btn-success">Register Company</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>

@endsection
