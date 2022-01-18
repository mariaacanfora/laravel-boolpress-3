@extends('layouts.admin')

@section('sidebar')
    @include('admin/partials/sidebar')
@endsection

@section('content')
    <div class="container">
        <div class="card mt-5" style="width: 18rem;">
            <div class="card-header">
                Account
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Username: {{Auth::user()->name}}</li>
            <li class="list-group-item">Email: {{Auth::user()->email}}</li>
            <li class="list-group-item"><a href="#">Recupera password</a></li>
            
            </ul>
        </div>
    </div>
@endsection