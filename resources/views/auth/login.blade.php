@extends(welcomeTheme().'layouts.app') 
@section('title')
<title>{{websiteTitle('Login')}}</title>
@endsection 
@section('SEO')
<meta name="description" content="{!!general()->meta_description!!}" />
<meta name="keywords" content="{{general()->meta_keyword}}" />
<meta property="og:title" content="{{websiteTitle('Login')}}" />
<meta property="og:description" content="{!!general()->meta_description!!}" />
<meta property="og:image" content="{!!general()->meta_description!!}" />
<meta property="og:url" content="{{route('login')}}" />
<link rel="canonical" href="{{route('login')}}">
@endsection 
@push('css')
<style>
    .auth-section { padding: 90px 0 110px; background: var(--visanet-white2, #eef2f5); }
    .auth-card { max-width: 480px; margin: 0 auto; background: #fff; border-radius: 14px; padding: 45px 40px 38px; box-shadow: 0 20px 50px rgba(29, 37, 58, .08); border-top: 4px solid var(--visanet-base, #e50c37); }
    .auth-card__icon { width: 70px; height: 70px; margin: 0 auto 18px; border-radius: 50%; background: rgba(var(--visanet-base-rgb, 229, 12, 55), .1); color: var(--visanet-base, #e50c37); display: flex; align-items: center; justify-content: center; font-size: 28px; }
    .auth-card__title { text-align: center; font-size: 28px; font-weight: 700; color: var(--visanet-black3, #1d253a); margin: 0 0 6px; }
    .auth-card__text { text-align: center; color: var(--visanet-text, #636363); margin: 0 0 30px; }
    .auth-card__alert { background: rgba(var(--visanet-base-rgb, 229, 12, 55), .08); border-left: 3px solid var(--visanet-base, #e50c37); color: var(--visanet-base, #e50c37); border-radius: 6px; padding: 10px 14px; margin-bottom: 20px; font-size: 14px; }
    .auth-card__alert span { display: block; }
    .auth-field { margin-bottom: 20px; }
    .auth-field label { display: block; font-size: 14px; font-weight: 600; color: var(--visanet-black3, #1d253a); margin-bottom: 8px; }
    .auth-field__control { position: relative; }
    .auth-field__control > i { position: absolute; left: 18px; top: 50%; transform: translateY(-50%); color: var(--visanet-gray, #92918f); font-size: 15px; pointer-events: none; }
    .auth-field__control input { width: 100%; height: 54px; border: 1px solid #e3e6ea; border-radius: 8px; background: #f8f9fb; padding: 0 50px 0 46px; font-size: 15px; color: var(--visanet-black3, #1d253a); outline: none; transition: border-color .3s, background .3s, box-shadow .3s; }
    .auth-field__control input:focus { border-color: var(--visanet-base, #e50c37); background: #fff; box-shadow: 0 0 0 4px rgba(var(--visanet-base-rgb, 229, 12, 55), .08); }
    .auth-field__toggle { position: absolute; right: 8px; top: 50%; transform: translateY(-50%); width: 38px; height: 38px; border: 0; background: none; color: var(--visanet-gray, #92918f); cursor: pointer; border-radius: 50%; }
    .auth-field__toggle:hover { color: var(--visanet-base, #e50c37); }
    .auth-card__forgot { display: block; text-align: right; font-size: 14px; margin: -8px 0 24px; color: var(--visanet-base, #e50c37); }
    .auth-card__submit { width: 100%; justify-content: center; }
    .auth-card__footer { text-align: center; margin: 26px 0 0; padding-top: 22px; border-top: 1px solid #eceef1; color: var(--visanet-text, #636363); font-size: 15px; }
    .auth-card__footer a { color: var(--visanet-base, #e50c37); font-weight: 600; }
    .auth-card a:hover { color: var(--visanet-black3, #1d253a); }
    @media (max-width: 575px) { .auth-section { padding: 60px 0 70px; } .auth-card { padding: 35px 22px 30px; } }
</style>
@endpush 
@section('contents')
@include(welcomeTheme().'layouts.pageHeader', ['title' => 'Login'])

<section class="auth-section">
    <div class="container">
        <div class="auth-card" data-aos="fade-up" data-aos-duration="1300">
            <div class="auth-card__icon"><i class="fas fa-user-lock"></i></div>
            <h3 class="auth-card__title">Welcome Back</h3>
            <p class="auth-card__text">Log in to your account to continue</p>

            @if($errors->has('username') || $errors->has('password') || session('error'))
            <div class="auth-card__alert">
                @if($errors->has('username'))<span>{{ $errors->first('username') }}</span>@endif
                @if($errors->has('password'))<span>{{ $errors->first('password') }}</span>@endif
                @if(session('error'))<span>{{ session('error') }}</span>@endif
            </div>
            @endif

            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="auth-field">
                    <label for="username">Username or Email Address *</label>
                    <div class="auth-field__control">
                        <i class="fas fa-envelope"></i>
                        <input type="text" id="username" name="username" value="{{old('username')}}" placeholder="Enter your email" required />
                    </div>
                </div>
                <div class="auth-field">
                    <label for="password">Password *</label>
                    <div class="auth-field__control">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required />
                        <button type="button" class="auth-field__toggle showPassword" aria-label="Show password"><i class="fas fa-eye-slash"></i></button>
                    </div>
                </div>
                <a href="{{route('forgotPassword')}}" class="auth-card__forgot">Forgot your password?</a>
                <button type="submit" class="visanet-btn-two auth-card__submit">
                    LOG IN <span class="visanet-btn-two__icon"><i class="icon-arrow-right-3"></i></span>
                </button>
            </form>

            <p class="auth-card__footer">Don't have an account? <a href="{{route('register')}}">Sign Up</a></p>
        </div>
    </div>
</section>
@endsection

@push('js')
<script>
    document.querySelectorAll('.showPassword').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var input = btn.parentNode.querySelector('input');
            var show = input.type === 'password';
            input.type = show ? 'text' : 'password';
            btn.querySelector('i').className = show ? 'fas fa-eye' : 'fas fa-eye-slash';
            btn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
        });
    });
</script>
@endpush
