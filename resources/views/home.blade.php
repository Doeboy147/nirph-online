@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 col-md-2">
                            <div class="card border">
                                <h5 class="text-center"> Name Surname</h5>
                                <div class="card-body text-center">
                                    <i class="fa fa-user fa-3x"></i>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6 col-md-6 col-sm-6">
                                            <a class="btn btn-primary btn-block" href="/edit">Edit</a>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-6">
                                            <a class="btn btn-danger btn-block" href="/delete">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 col-md-2">
                            <div class="card border">
                                <h5 class="text-center"> Name Surname</h5>
                                <div class="card-body text-center">
                                    <i class="fa fa-user fa-3x"></i>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6 col-md-6 col-sm-6">
                                            <a class="btn btn-primary btn-block" href="/edit">Edit</a>
                                        </div>
                                        <div class="col-6 col-md-6 col-sm-6">
                                            <a class="btn btn-danger btn-block" href="/delete">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
