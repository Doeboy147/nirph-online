@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="text-center"> {{ $product->name }}</h3>
                        <form class="async" action="/update-product/{{ $product->uuid }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" value="{{ $product->name }}" placeholder="Product Name" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="number" value="{{ $product->price }}" placeholder="Price" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="number" placeholder="Downloads" value="{{ $product->downloads }}" name="downloads" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="{{ route('products') }}" class="btn btn-secondary" data-dismiss="modal">Go Back</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
