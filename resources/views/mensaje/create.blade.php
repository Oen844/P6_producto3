@extends('layouts.app')
@section('title', 'Manda un mensaje')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">


                    {{ __('Crear mensaje') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
