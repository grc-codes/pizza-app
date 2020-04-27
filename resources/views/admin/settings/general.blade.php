@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit General Settings </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit General Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                <!-- basic form -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Edit General Settings</h5>
                        <div class="card-body">
                            <form method="POST" action="/admin/settings/general" class="splash-container">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="site_title">Business Name</label>
                                    <input
                                        id="site_title"
                                        type="text"
                                        class="form-control form-control-lg @error('site_title') is-invalid @enderror"
                                        name="site_title"
                                        value="{{ old('site_title', $general_settings->site_title) }}"
                                        required
                                        autocomplete="site_title"
                                        autofocus
                                        placeholder="Add Site Title"
                                    >
                                    @error('site_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address_1">Address 1</label>
                                    <input
                                        id="address_1"
                                        type="text"
                                        class="form-control form-control-lg @error('address_1') is-invalid @enderror"
                                        name="address_1"
                                        value="{{ old('address_1', $general_settings->address_1) }}"
                                        required
                                        autocomplete="address_1"
                                        autofocus
                                        placeholder="Add Street Address"
                                    >
                                    @error('address_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address_2">Address 2</label>
                                    <input
                                        id="address_2"
                                        type="text"
                                        class="form-control form-control-lg @error('address_2') is-invalid @enderror"
                                        name="address_2"
                                        value="{{ old('address_2', $general_settings->address_2) }}"
                                        autocomplete="address_2"
                                        autofocus
                                        placeholder=""
                                    >
                                    @error('address_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input
                                        id="city"
                                        type="text"
                                        class="form-control form-control-lg @error('city') is-invalid @enderror"
                                        name="city"
                                        value="{{ old('city', $general_settings->city) }}"
                                        required
                                        autocomplete="city"
                                        autofocus
                                        placeholder="Add City"
                                    >
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input
                                        id="state"
                                        type="text"
                                        class="form-control form-control-lg @error('state') is-invalid @enderror"
                                        name="state"
                                        value="{{ old('state', $general_settings->state) }}"
                                        required
                                        autocomplete="state"
                                        autofocus
                                        placeholder="Add State"
                                    >
                                    @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="zipcode">Zipcode</label>
                                    <input
                                        id="zipcode"
                                        type="text"
                                        class="form-control form-control-lg @error('zipcode') is-invalid @enderror"
                                        name="zipcode"
                                        value="{{ old('zipcode', $general_settings->zipcode) }}"
                                        required
                                        autocomplete="zipcode"
                                        autofocus
                                        placeholder="Add Zipcode"
                                    >
                                    @error('zipcode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input
                                        id="phone_number"
                                        type="text"
                                        class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                        name="phone_number"
                                        value="{{ old('phone_number', $general_settings->phone_number) }}"
                                        required
                                        autocomplete="phone_number"
                                        autofocus
                                        placeholder="Add Phone Number"
                                    >
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form -->
                <!-- ============================================================== -->
            </div>
    </div>
@endsection