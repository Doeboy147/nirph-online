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
                    <a href="/home" class="btn btn-primary"><i class="fa fa-feed"></i> Subscriptions</a>
                    <button data-toggle="modal" data-target="#add-product" class="btn btn-info shadow"><i
                            class="fa fa-plus"></i> Add Product
                    </button>
                    @include('includes.add-product')
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="text-left border-bottom mb-4">
                    <h5 class="text-muted"> Products</h5>
                </div>
                <div class="card">
                    <div class="bg-light">
                        <div class="row justify-content-center">
                            @if ($products->count() > 0 )
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered shadow">
                                            <tr class="table-info">
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Downloads</th>
                                                <th>Date Added</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach($products as $product)
                                            <tr>
                                                <td> {{ $product->name }}</td>
                                                <td> R {{ $product->price }}</td>
                                                <td> {{ $product->downloads }}</td>
                                                <td> {{ $product->created_at }}</td>
                                                <td class="float-right">
                                                    <a class="btn btn-primary shadow" href="/view-product/{{ $product->uuid }}"> Edit</a>
                                                    <a class="btn btn-danger shadow async delete" href="/delete-product/{{ $product->uuid }}"> Remove</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="card bg-light">
                                    <div class="card-body">
                                         {{ $products->links() }}
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
