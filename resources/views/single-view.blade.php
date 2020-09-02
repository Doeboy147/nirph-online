@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('home') }}"> Go Back</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8">
                            <div class="card border">
                                <h5 class="text-center"> {{ $user->name }}</h5>
                                <div class="card-body text-center">
                                    <i class="fa fa-feed fa-3x"></i>
                                    <h4 class="text-left"> Details</h4>

                                    <table class="table table-striped">
                                        <tr class="text-left">
                                            <th>Name</th>
                                            <td> {{ $user->name }}</td>
                                        </tr>
                                        <tr class="text-left">
                                            <th>Email</th>
                                            <td> {{ $user->email }}</td>
                                        </tr>
                                        <tr class="text-left">
                                            <th>Date of Birth</th>
                                            <td> {{ $user->birthday }}</td>
                                        </tr>
                                        <tr class="text-left">
                                            <th>Subscription</th>
                                            <td> {{ $user->package }}</td>
                                        </tr>
                                    </table>
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
