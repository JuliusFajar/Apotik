@extends('layouts.dash')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        @for ($i = 1; $i <= 6; $i++)
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">Grid Item {{ $i }}</div>
                <div class="card-body">
                    <h5 class="card-title">Panadol {{ $i }}</h5>
                    <p class="card-text">Each item contains 10 butir/pcs.</p>
                    <a href="#" class="btn btn-primary">Rp 70,000</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
</div>
@endsection
