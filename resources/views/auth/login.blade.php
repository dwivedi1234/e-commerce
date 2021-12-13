@extends('front.supportive.action')
@section('content')
<section class="bg0 p-t-75 p-b-120">
   <div class="container">
      <div class="row mt-5">
         <div class="col-md-3"></div>
         <div class="col-md-6">


           <form action="{{route('login')}}" method="post">
            {{ csrf_field() }}
            

            <div class="card">
                <div class="card-body">
                   <h3>Login</h3>
                   <hr>
                   <div class="bor8 m-b-20 how-pos4-parent">
                      <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Your Email Address">
                      <img class="how-pos4 pointer-none" src="{{asset('assets/images/icons/icon-email.png')}}" alt="ICON">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                   </div>
                   <div class="bor8 m-b-20 how-pos4-parent">
                      <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="password" placeholder="Your Password">
                      <img class="how-pos4 pointer-none" src="{{asset('assets/images/icons/icon-email.png')}}" alt="ICON">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                   </div>
                   {{-- 
                   <div class="bor8 m-b-20 how-pos4-parent">
                      <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                      </label>
                   </div>
                   --}}
                   <div class="bor8 m-b-20 how-pos4-parent">
                      <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                      {{ __('Login') }}
                      </button>
                      @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                      </a>
                      @endif
                   </div>
 
 
                </div>
             </div>

           </form>


         </div>
         <div class="col-md-3"></div>
      </div>
   </div>
</section>
@endsection