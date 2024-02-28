@extends('layouts.auth')
@section('page_title', 'Reset Password')
@section('auth_content')
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Confirm Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a href="{{route('index')}}" class="app-brand-link gap-2">
                            <img src="{{asset('images/logo.png')}}" alt="" width="150">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h6 class="mb-1 py-2 text-center">🔒 This is a secure area of the application. Please confirm your password before continuing.</h6>
                    <form  action="{{route('password.confirm')}}" method="POST">
                        @csrf
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    {{-- id="password" --}}
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary d-grid w-100 mb-3">Confirm</button>
                    </form>
                </div>
            </div>
            <!-- /Confirm Password -->
        </div>
    </div>
@endsection()

{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">--}}
{{--        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}--}}
{{--    </div>--}}

{{--    <form method="POST" action="{{ route('password.confirm') }}">--}}
{{--        @csrf--}}

{{--        <!-- Password -->--}}
{{--        <div>--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Confirm') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
