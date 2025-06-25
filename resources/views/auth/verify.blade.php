@extends('layouts.app')

@section('content')
<div class="container bg-CustomDark">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-CustomBorder">
                <div class="card-header">
                    <h4 class="mb-0 text-CustomWhite headlines">{{ __('Подтвердите свою электронную почту') }}</h4>
                </div>

                <div class="card-body text-CustomWhite">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('На ваш электронный адрес была отправлена новая ссылка для подтверждения.') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжить, пожалуйста, проверьте свою электронную почту на наличие ссылки для подтверждения.') }}
                    {{ __('Если вы не получили электронное письмо') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link text-CustomPrimary p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы запросить еще один') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
