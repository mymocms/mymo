@extends('mymo::layouts.auth')

@section('content')
    <div class="mymo__layout__content">
        <div class="mymo__utils__content">
            <div class="mymo__auth__authContainer">
                <div class="mymo__auth__containerInner">
                    <div class="card mymo__auth__boxContainer">
                        <div class="text-dark font-size-24 mb-4">
                            <strong>Create your account</strong>
                        </div>
                        <div class="mb-4">
                            <p>
                                And start spending more time on your projects and less time managing your infrastructure.
                            </p>
                        </div>

                        <form action="" method="post" class="mb-4 form-ajax">
                            <div class="form-group mb-4">
                                <input type="text" name="email" class="form-control" placeholder="@lang('mymo::app.email_address')" autocomplete="off"/>
                            </div>

                            <button type="submit" class="btn btn-primary text-center w-100" data-loading-text="@lang('mymo::app.please_wait')">
                                <i class="fa fa-refresh"></i> @lang('mymo::app.forgot_password')
                            </button>
                        </form>
                    </div>
                    <div class="text-center pt-2 mb-auto">
                        <span class="mr-2">Already have an account?</span>
                        <a href="{{ route('auth.login') }}" class="kit__utils__link font-size-16">
                            Sign in
                        </a>
                    </div>
                </div>
                <div class="mt-auto pb-5 pt-5">
                    <div class="text-center">
                        Copyright © {{ date('Y') }} {{ get_config('sitename') }} - Provided by TAD CMS
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
