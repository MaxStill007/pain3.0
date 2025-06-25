@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="text-CustomWhite mb-0">{{ __('Мои заказы') }}</h2>
                <a href="{{ route('order.create') }}" class="btn btn-CustomPrimary text-white py-2 px-4 fw-bold">
                    <i class="fas fa-plus me-2"></i>{{ __('Новый заказ') }}
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($orders->isEmpty())
                <div class="card bg-CustomBorder border-0">
                    <div class="card-body text-center py-5 text-CustomWhite">
                        <i class="fas fa-inbox fs-1 text-CustomPrimary mb-3"></i>
                        <h4 class="headlines">{{ __('У вас пока нет заказов') }}</h4>
                        <p class="">{{ __('Создайте свой первый заказ') }}</p>
                        <a href="{{ route('order.create') }}" class="btn btn-CustomPrimary border-3 border-CustomPrimary text-CustomWhite mt-3">
                            {{ __('Создать заказ') }}
                        </a>
                    </div>
                </div>
            @else
                <div class="row gy-4">
                    @foreach($orders as $order)
                    <div class="col-md-6 col-lg-4 py-3 py-md-0">
                        <div class="card  bg-CustomBorder border-0 h-100">
                            <div class="card-body text-CustomWhite">
                                <!-- Заголовок и статус в одной строке -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="card-title mb-0 headlines">{{ $order->title }}</h5>
                                    <span class="badge bg-{{ 
                                        $order->status == 'pending' ? 'CustomBrown' : 
                                        ($order->status == 'accepted' ? 'CustomPrimary' : 
                                        ($order->status == 'completed' ? 'success' : 'secondary'))
                                    }}">
                                        {{ $order->status == 'pending' ? 'В обработке' : 
                                           ($order->status == 'accepted' ? 'Принят' : 
                                           ($order->status == 'completed' ? 'Завершен' : $order->status))
                                        }}
                                    </span>
                                </div>

                                <!-- Описание заказа -->
                                <p class="card-text mb-4">{{ \Illuminate\Support\Str::limit($order->description, 120) }}</p>
                                
                                <!-- Бюджет и дата в одной строке -->
                                <div class="d-flex justify-content-between border-top border-CustomBorder pt-3">
                                    <div>
                                        <span class="text-CustomGray">{{ __('Бюджет') }}:</span>
                                        <div class="fw-bold">{{ number_format($order->amount, 2) }} ₽</div>
                                    </div>
                                    <div class="text-end">
                                        <span class="text-CustomGray">{{ __('Создан') }}:</span>
                                        <div>{{ $order->created_at->format('d.m.Y') }}</div>
                                    </div>
                                </div>
                                
                                <!-- Кнопка подробнее -->
                                <div class="mt-4">
                                    <a href="#" class="text-CustomPrimary text-decoration-none d-flex align-items-center" style="gap: 8px">
                                        <h5 class="mb-0">Подробнее</h5>
                                        <span class="material-icons-outlined">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection