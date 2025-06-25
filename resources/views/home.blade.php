@extends('layouts.app')

@section('content')
<div class="container bg-CustomDark">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-CustomBorder">
                <div class="card-header">
                    <h4 class="mb-0 text-CustomWhite headlines">{{ __('Личный кабинет') }}</h4>
                </div>

                <div class="card-body text-CustomWhite">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы вошли в систему!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
