@extends('layouts.app-layout')
@section('content')
<main>
    <section class="MemberLogin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="Inner-wrapper">
                        <div class="LeftShadow"></div>
                        <div class="LoginForm">
                            <div class="pb-2">
                                <h1 class="LoginTitle"><span class="HighLight">Member</span> Login<span
                                        class="HighLight">!</span></h1>
                            </div>


                            <div class="mt-4">
                                @if ($errors->any())
                                    <div class="alertMessage mb-4" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session()->get('error'))
                                <div class="alertMessage mb-4" role="alert">
                                    Email and/or Password isn't correct. 😭
                                </div>
                                @endif
                                <form action="{{route('login.post')}}" method="post" id="login-form">
                                    @csrf
                                
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="form-floating mb-5">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password" name="password">
                                        <label for="password">Password</label>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                        <ul class="d-flex gap-3">
                                            <li>
                                                <div class="GoogleIcon">
                                                    <a href="#">
                                                        <img src="img/google-icon.svg" alt="Google" width="24"
                                                            height="24">
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="FaceBookIcon">
                                                    <a href="#">
                                                        <img src="img/icon-facebook.svg" alt="Facebook" width="24"
                                                            height="24">
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="d-flex mt-4">
                                        <ul class="d-flex gap-3 justify-content-between w-100">
                                            <li>
                                                <a href="#" class="UserLink">Forgot Password?</a>
                                            </li>
                                            <li>.</li>
                                            <li>
                                                <a href="#" class="UserLink">Create Account</a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="BootmImage">
                            <img src="img/Screens.webp" alt="Screen image" width="857" height="252">
                        </div>
                        <div class="RightShadow"></div>
                    </div>
                    <div class="ReadyKing w-100">
                        <div class="CatLogo">
                            <img class="w-100" src="img/cat-logo.webp" alt="Cat Logo" width="1004" height="483">
                        </div>
                        <div class="ContentWarper">
                            <h2>Ready to be the <span class="KingHighlight">king</span> of your game?</h2>
                            <button class="btn btn-dark mt-4">Smash Ranks</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    
@endsection
    

    