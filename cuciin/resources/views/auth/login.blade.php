@extends('layouts.user')

@section('content')
<div class="badan">
    <div class="cuciin pt-5 pl-5 ml-5 center">
        <img class="cuciin" src="img/cuciin.png" alt="cuciin">
        <p class="tagline">"Bersihkan Bajumu, Tanpa Harus Keluar Rumah"</p>
    </div>
    <div class="card1 d-flex ml-auto" style="margin-right:15em">
        <div class="card-header cardTitle">Welcome!</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" class="row">
                @csrf

                <div class="col-md-8 offset-md-2 form-group">
                    <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
                    <!-- <div class="col-auto"> -->
                    <div class="">
                        <label class="sr-only" for="email">{{ __('E-Mail Address') }}</label>
                        <div class="inputEmail1 input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="inputEmail input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                    </svg></div>
                            </div>
                            <!-- <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username"> -->
                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus oninvalid="this.setCustomValidity('Email tidak boleh kosong')" oninput="setCustomValidity('')">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> -->
                </div>

                <div class="col-md-8 offset-md-2 form-group">
                    <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
                    <!-- <div class="col-auto"> -->
                    <div class="">
                        <label class="sr-only" for="email">{ __('Password') }}</label>
                        <div class="inputEmail1 input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="inputEmail input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg></div>
                            </div>
                            <!-- <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username"> -->
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> -->

                <div class="col-md-1 offset-md-2 form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="inputRemember form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 offset-md-2 form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="buttonLogin btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <!-- @if (Route::has('password.request')) -->
                    <div class="offset-2 row justify-content-center pt-3">
                        <p>Belum punya akun? Yuk</p>
                        <a class="clickDaftar pl-1" href="{{ route('register') }}">
                            Daftar!
                        </a>
                        <!-- @endif -->
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection