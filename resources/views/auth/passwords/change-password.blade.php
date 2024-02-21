@extends('layouts.main')

@section('title')
    Change password
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                Attention </strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>
                                <i class="fa-solid fa-circle-check"></i>
                            </strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="col-xxl-4 col-xl-12">
                        <section class="section profile">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                                            @php
                                                // Mengambil instance pengguna yang sedang login
                                                $loggedInUser = Auth::user();
                                            @endphp

                                            @if ($loggedInUser)
                                                <img src="{{ asset('backend/assets/img/avatar.png') }}"
                                                    alt="{{ $loggedInUser->name }}" class="rounded-circle">
                                                <h2>{{ $loggedInUser->name }}</h2>
                                                <h3>Role : {{ $loggedInUser->role->role_name }}</h3>
                                                <h3><b>{{ $loggedInUser->email }}</b></h3>
                                            @else
                                                <p>Tidak ada pengguna yang sedang login.</p>
                                            @endif

                                            <div class="social-links mt-2">
                                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-body pt-3">
                                            <!-- Change Password Form -->
                                            <form action="{{ route('changePasswordPost') }}" method="POST"
                                                class="mt-5 pb-3">
                                                @csrf
                                                <div
                                                    class="row mb-3 form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                                    <label for="new-password"
                                                        class="col-md-4 col-lg-3 col-form-label">Current
                                                        Password</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input id="current-password" type="password" class="form-control"
                                                            name="current-password" required>

                                                        @if ($errors->has('current-password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('current-password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div
                                                    class="row mb-3 form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                        Password</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input id="new-password" type="password" class="form-control"
                                                            name="new-password" required>

                                                        @if ($errors->has('new-password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('new-password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="row mb-3 form-group">
                                                    <label for="new-password-confirm"
                                                        class="col-md-4 col-lg-3 col-form-label">Confirm
                                                        New
                                                        Password</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input id="new-password-confirm" type="password"
                                                            class="form-control" name="new-password_confirmation" required>
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                                </div>
                                            </form>
                                            <!-- End Change Password Form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main> <!-- End #main -->
@endsection
