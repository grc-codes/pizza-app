@extends('layouts.app')

@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get On The List</h1>
                    <form method="POST" action="/reservations">
                        @csrf
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
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input
                                id="email"
                                type="email"
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
                                placeholder="973-437-2345"
                            >
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="guests_total">Guest(s)</label>
                            <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror" id="guests_total">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="time">Time</label>
                            <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror" id="time">
                              <option value="6">6:00 PM</option>
                              <option value="7">7:00 PM</option>
                              <option value="8">8:00 PM</option>
                              <option vaue="9">9:00 PM</option>
                              <option value="10">10:00 PM</option>
                            </select>
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-2">
                                Confirm
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    Please Note: This is not a reservation. You will be added to the current wait list. You may have a short wait once you arrive while we prepare your table.
                </div>
            </div>
        </div>
    </div>
@endsection