@extends('web-app.layouts.default')
@section('title','Dashboard')

@section('content')

<div class="row">
    <<div class="col-xl-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Style</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control input-default " placeholder="input-default">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-rounded" placeholder="input-rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection