@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card shadow border">
                    <h4 class="text-center mt-3 mb-3">Sign Up</h4>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="name" placeholder="Full Name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="username" placeholder="Username" type="text"
                                           class="form-control @error('username') is-invalid @enderror" name="username"
                                           value="{{ old('username') }}" required autocomplete="name" autofocus>

                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" placeholder="Email Address" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="name" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="datepicker" placeholder="Date Of Birth" type="text"
                                           onfocus="(this.type='date')"
                                           class="form-control @error('birthday') is-invalid @enderror" name="birthday"
                                           value="{{ old('birthday') }}" required autocomplete="name" autofocus>

                                    @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <select class="form-control" name="package">
                                        <option class="text-muted"> Choose Subscription</option>
                                        <optgroup label="Monthly Subscriptions">
                                            <option value="basic"> Basic Subscription - R200 (100 Downloads)</option>
                                            <option value="standard" class="text-dark"> Standard Subscription - R300
                                                (250 Downloads)
                                            </option>
                                            <option value="awesome" class="text-dark"> Awesome Subscription - R400 (600
                                                Downloads)
                                            </option>
                                        </optgroup>
                                    </select>

                                    @error('package')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" placeholder="Password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password-confirm" placeholder="Confirm Password" type="password"
                                           class="form-control" name="password_confirmation" required
                                           autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
