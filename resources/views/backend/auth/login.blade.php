@extends('backend.layout.master')

@section('content')
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/backend') }}/img/logo.png" alt="">
                                <span class="d-none d-lg-block">School Management</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your credentials to login</p>
                                </div>
                                @include('backend.auth.message')
                                <form class="row g-3 needs-validation" novalidate action="" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Your Email</label>
                                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                                        <div class="invalid-feedback">Please enter a valid Email address!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Your Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                        <a href="{{route('backend.auth.forgotPassword')}}" class="small mb-0 text-decoration-underline text-muted">Forget Password?</a>
                                    </div>
                                    <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">Remember Me</label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>

                                    <div class="col-12">
                                        <p class="small mb-0">Don't have an account? <a href="{{route('backend.auth.register')}}">Create an account</a></p>
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
