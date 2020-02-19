@extends('layouts.app')

@section('content')
    <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                  </div>
                  <form class="user" method="POST">

                    @csrf

                    <div class="form-group">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                <hr>

                                <div class="row">
                                  <div class="col-md-6">
                                    Belum punya akun?
                                  </div>

                                  <div class="col-md-6">
                                    <a href="{{ route('indexRegister') }}">
                                      <button type="button" class="btn btn-primary btn-block">
                                          {{ __('Daftar') }}
                                      </button>
                                    </a>
                                    
                                  </div>
                                </div>
                                

                                <!-- <div class="col-md-12">
                                    @if (Route::has('password.request'))
                                      <a class="nav-link" href="{{ route('password.request') }}">
                                          {{ __('Forgot Your Password?') }}
                                      </a>
                                    @endif
                                </div> -->

                                <!-- <div class="col-md-12">
                                    @if (Route::has('register'))                                        
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>                                        
                                    @endif
                                </div> -->
                                    
                            </div>
                        </div>
                    
                  </form>
                     
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>    
@endsection
