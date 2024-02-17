@extends('recruiter.layouts.auth')
@section('recruiter_page_title', 'Reset Password')
@section('recruiter_auth_content')
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Reset Password -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-4 mt-2">
                <a href="{{route('index')}}" class="app-brand-link gap-2">
                  <img src="{{asset('images/logo.png')}}" alt="" width="150">
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1 py-2 text-center">Reset Password 🔒</h4>
              <form  action="{{route('recruiter.update.password')}}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{$token}}">
                <input type="hidden" name="email" value="{{$email}}">
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">New Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      {{-- id="password" --}}
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" />
                      @error('password')
                        @php
                            notify()->error($message)
                        @endphp
                    @enderror
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="confirm-password">Confirm Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      {{-- id="confirm-password" --}}
                      class="form-control"
                      name="password_confirmation"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" />
                      @error('password_confirmation')
                        @php
                            notify()->error($message)
                        @endphp
                    @enderror
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary d-grid w-100 mb-3">Set new password</button>
                <div class="text-center">
                  <a href="{{route('recruiter.login')}}">
                    <i class="ti ti-chevron-left scaleX-n1-rtl"></i>
                    Back to login
                  </a>
                </div>
              </form>
            </div>
          </div>
          <!-- /Reset Password -->
        </div>
      </div>
@endsection()