@extends('base')

@section('content')

<div class="container">
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
    {{session('error')}}
    </div>
    @endif

    <div class="row">
            <div class="col-md-4">
                <livewire:shippings.create/>
            </div>
            <div class="col-md-8">
                <livewire:shippings.index/>
            </div>
    </div>
</div>

@endsection
