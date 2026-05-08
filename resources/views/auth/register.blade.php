@extends('auth.app', ['title' => 'Register'])

@section('content')
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('assets/images/Logo.jpeg') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle" style="padding:10px;background: white;">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            placeholder="Masukkan Alamat Email" value="{{ old('email') }}" tabindex="1"
                                            required autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password"
                                                class="control-label @error('password') is-invalid @enderror">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            placeholder="Masukkan Password" tabindex="2" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="phone"
                                                class="control-label @error('phone') is-invalid @enderror">Phone</label>
                                        </div>
                                        <input id="phone" type="text" class="form-control" name="phone"
                                            placeholder="Masukkan Nomor Telepon" tabindex="3" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="address"
                                                class="control-label @error('address') is-invalid @enderror">Address</label>
                                        </div>
                                        <input id="address" type="text" class="form-control" name="address"
                                            placeholder="Masukkan Alamat" tabindex="4" required>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="asal_sekolah"
                                                class="control-label @error('asal_sekolah') is-invalid @enderror">Asal
                                                Sekolah</label>
                                        </div>
                                        <input id="asal_sekolah" type="text" class="form-control" name="asal_sekolah"
                                            placeholder="Masukkan Asal Sekolah" tabindex="5" required>
                                        @error('asal_sekolah')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Register
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
