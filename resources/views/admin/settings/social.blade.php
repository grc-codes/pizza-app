@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit Social Settings </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Social Settings</li>
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
                        <h5 class="card-header">Edit Social Settings</h5>
                        <div class="card-body">
                            <form method="POST" action="/admin/settings/social" class="splash-container">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="facebook_url">Facebook Profile URL</label>
                                    <input
                                        id="facebook_url"
                                        type="text"
                                        class="form-control form-control-lg @error('facebook_url') is-invalid @enderror"
                                        name="facebook_url"
                                        value="{{ old('facebook_url', $social_settings->facebook_url) }}"
                                        required
                                        autocomplete="facebook_url"
                                        autofocus
                                        placeholder="Add Facebook URL"
                                    >
                                    @error('facebook_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="twitter_url">Twitter Profile URL</label>
                                    <input
                                        id="twitter_url"
                                        type="text"
                                        class="form-control form-control-lg @error('twitter_url') is-invalid @enderror"
                                        name="twitter_url"
                                        value="{{ old('twitter_url', $social_settings->twitter_url) }}"
                                        required
                                        autocomplete="twitter_url"
                                        autofocus
                                        placeholder="Add Twitter URL"
                                    >
                                    @error('twitter_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="instagram_url">Instagram Profile URL</label>
                                    <input
                                        id="instagram_url"
                                        type="text"
                                        class="form-control form-control-lg @error('instagram_url') is-invalid @enderror"
                                        name="instagram_url"
                                        value="{{ old('instagram_url', $social_settings->instagram_url) }}"
                                        autocomplete="instagram_url"
                                        autofocus
                                        placeholder="Add Instagram URL"
                                    >
                                    @error('instagram_url')
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