@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <strong> Welcome Back <span class="text-danger">{{ $user->name }}</span></strong>
                        <span class="float-right">
                            <a class="btn btn-danger btn-sm shadow" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </span>
                    </div>
                </div>
                <div class="mb-4">
                    <button data-toggle="modal" data-target="#add-product" class="btn btn-primary shadow"><i
                            class="fa fa-plus"></i> Add Product
                    </button>
                    <a href="/products" class="btn btn-info shadow"><i class="fa fa-eye"></i> View Products</a>
                    @include('includes.add-product')
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="text-left border-bottom mb-4">
                    <h5 class="text-muted"> Subscriptions</h5>
                </div>
                <div class="card">
                    <div class="bg-light">
                        <div class="row">
                            @if ($users->count() > 0 )
                                @foreach($users as $user)
                                    <div class="col-12 col-sm-12 col-xs-12 col-lg-2 col-md-2 mb-5">
                                        <div class="card shadow border">
                                            <div class="card-header bg-info">
                                                <h5 class="text-left"> {{ $user->name }}</h5>
                                            </div>
                                            <div class="card-body">
                                                <i class="fa fa-feed"></i> - {{ $user->package }} <br>
                                                <i class="fa fa-calendar"></i> - {{ $user->created_at }}
                                            </div>
                                            <div class="card-subtitle">
                                            </div>
                                            <div class="card-footer p-1">
                                                <div class="row">
                                                    <div class="col-6 col-md-6 col-sm-6">
                                                        <a class="btn btn-primary btn-block"
                                                           href="/view-item/{{ $user->uuid }}">View</a>
                                                    </div>
                                                    <div class="col-6 col-md-6 col-sm-6">
                                                        <a class="btn btn-danger btn-block async delete"
                                                           href="/delete-item/{{ $user->uuid }}">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="card bg-light">
                                    <div class="card-body">
                                         {{ $users->links() }}
                                    </div>
                                </div>
                            @else
                                <div class="col-md-12">
                                    <h4 class="text-center"> There's currently no subscribers</h4>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
