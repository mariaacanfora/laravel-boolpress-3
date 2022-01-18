@extends('layouts.admin')

@section('sidebar')
    @include('admin/partials/sidebar')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="mt-5">Bentornat*  {{ Auth::user()->name }}!</h1>
    </div>
</div>
@endsection
