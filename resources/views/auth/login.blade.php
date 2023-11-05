<x-login-layout>
<div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              @php
              $setting=DB::table('business_settings')->where('id',1)->first();
              @endphp
              <div class="app-brand justify-content-center">
              <span class="app-brand-logo demo">
                   @if($setting->icon)
                   <img src="{{asset('assets/business')}}/{{$setting->icon}}" width="100" alt="icon">
                   @else
                   <img src="{{asset('assets/images/icon.png')}}" alt="icon" width="100">
                   @endif
                  </span>
                  @if($setting->name)
                  <span class="app-brand-text demo text-body fw-bolder" style="text-transform:uppercase;padding-left:2px;">{{$setting->name}}</span>
                  @else
                  <span class="app-brand-text demo text-body fw-bolder">Delvri Food</span>
                  @endif
              </div>
              <!-- /Logo -->
              @if($setting->name)
              <h4 class="mb-2">Welcome to <b style="text-transform:uppercase;padding-left:2px;">{{$setting->name}}</b>! 👋</h4>
              @else
              <h4 class="mb-2">Welcome to Delvri Food! 👋</h4>
              @endif
              <p class="mb-4">Please sign-in to your account and start the adventure</p>
              <x-jet-validation-errors class="mb-4" />
              <form id="formAuthentication"  class="mb-3" method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input class="form-control"  id="email" type="email" name="email" :value="old('email')" required autofocus/>
               
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="{{ route('password.request') }}">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password" />
               
                  </div>
                </div>
               
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

              
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
</x-login-layout>
