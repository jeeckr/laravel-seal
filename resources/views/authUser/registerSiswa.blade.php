@extends('template.authTemplate.AppRegister')

@section('style_css')

<style>
    body {
        overflow-y: hidden;
    }

    .main {
        padding: 40px !important;
    }

    figure {
        margin-bottom: 0 !important;
    }

    .signup-content {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .signup-image-link {
        margin-top: 2rem;
    }
</style>

@endsection

@section('content')

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Daftar Siswa</h2>
                <form action="{{ route('createSiswa') }}" method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="/assets/img/signup-image.jpg" alt="sing up image"></figure>
                <a href="{{ route('loginSiswa') }}" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>

@endsection