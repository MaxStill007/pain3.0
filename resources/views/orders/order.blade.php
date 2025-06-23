@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-CustomDark text-CustomWhite shadow-lg">
                <div class="card-header bg-CustomOrange text-dark">
                    <h4 class="mb-0 text-CustomWhite headlines">{{ __('Создать новый заказ') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('order.store') }}">
                        @csrf
                        <input type="text" class="d-none" 
                        value="{{ Auth::user()->name }}" readonly>
                        <input type="text" class="d-none" 
                        value="{{ Auth::user()->email }}" readonly>
                        

                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('Название продукта') }}</label>
                            <input id="title" type="text" class="form-control bg-CustomDark2 @error('title') is-invalid @enderror" 
                                   name="title" value="{{ old('title') }}" required autofocus>
                            
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('Описание') }}</label>
                            <textarea id="description" class="form-control bg-CustomDark2 @error('description') is-invalid @enderror" 
                                      name="description" rows="4" required>{{ old('description') }}</textarea>
                            
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">{{ __('Бюджет (₽)') }}</label>
                            <input id="amount" type="number" step="0.01" class="form-control bg-CustomDark2 @error('amount') is-invalid @enderror" 
                                   name="amount" value="{{ old('amount') }}" required>
                            
                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-CustomPrimary text-white border-CustomPrimary py-2 fw-bold">
                                {{ __('Создать заказ') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection