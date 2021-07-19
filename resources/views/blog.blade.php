@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('post'))
                    <div class="alert alert-success" role="alert">
                        {{ session('post') }}
                    </div>
                    @endif

                    @include('post.add')

                    <br>
                    <div class="row">
                    @include('post.list')
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
