@extends('template.authTemplate.AppLogin')

@section('style_css')

<style>
    body {
        overflow-y: hidden;
        margin: 0 !important;
        margin-bottom: 0 !important;
    }

    .main {
        background-color: unset !important;
        background-image: linear-gradient(-41deg, #00c8ff, #092c79);
        height: 100vh;
    }

    figure {
        margin-bottom: 0 !important;
    }

    .signin-content {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .signup-image-link {
        margin-top: 2rem;
    }

    .signin-form {
        margin-top: 1rem;
    }

    .form-title {
        text-align: center;
        font-size: 30px;
    }

    .form-submit {
        padding-top: 11px !important;
    }

    .btn-login {
        border-radius: 100px !important;
        width: 9rem !important;
        height: 2.5rem;
        background-image: linear-gradient(-30deg, #00c8ff, #057abc);
    }

    .btn-kembali {
        border-radius: 100px !important;
        width: 9rem !important;
        float: right;
        height: 2.5rem;
        background-image: linear-gradient(-30deg, #00c8ff, #057abc);
    }
</style>

@endsection

@section('content')

<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="/assets/img/signin-image.jpg" alt="sing up image"></figure>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Login Siswa</h2>
                <form action="{{ route('loginSiswaStore') }}" method="POST" class="register-form" id="login-form">

                    @csrf
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required placeholder="Email" />

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}" required placeholder="Password" />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit btn-login" value="Masuk" />
                        <a href="{{ route('home') }}">
                            <input type="button" name="signin" id="signin" class="form-submit btn-kembali" value="Kembali" />
                        </a>
                    </div>
                </form>
                <!-- <a href="{{ route('formRegisterSiswa') }}" class="signup-image-link">Create an account</a> -->
            </div>
        </div>
    </div>
</section>
@endsection