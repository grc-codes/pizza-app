@extends('layouts.app')

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Sign Up To Receive Deals</h1>
                    <form method="POST" action="/offers">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input
                                        id="fname"
                                        type="text"
                                        class="form-control form-control-lg @error('fname') is-invalid @enderror"
                                        name="fname"
                                        value="{{ old('fname') }}"
                                        required
                                        autocomplete="fname"
                                        autofocus
                                        placeholder="John"
                                    >
                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input
                                        id="lname"
                                        type="text"
                                        class="form-control form-control-lg @error('lname') is-invalid @enderror"
                                        name="lname"
                                        value="{{ old('lname') }}"
                                        required
                                        autocomplete="lname"
                                        autofocus
                                        placeholder="Doe"
                                    >
                                    @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input
                                        id="email"
                                        type="text"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        autofocus
                                        placeholder="jdoe@gmail.com"
                                    >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone #</label>
                                    <input
                                        id="phone_number"
                                        type="tel"
                                        class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                        name="phone_number"
                                        value="{{ old('phone_number') }}"
                                        required
                                        autocomplete="phone_number"
                                        autofocus
                                        placeholder="973-123-4567"
                                    >
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>In signing up I acknowledge that I am 18 years of age or older, want to receive email offers from Peter Pies and, if I select to join Dine Rewards, agree to the terms and conditions of the program.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mb-2">
                                        Confirm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection