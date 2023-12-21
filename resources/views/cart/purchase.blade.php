@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card">
        <div class="header"> Purchase Completed
        </div>
    </div>
    <div class="card-body">
        <div class="alert alert-success" role="alert">
            Congrats! Purchase completed. Order number is <b> #{{ $viewData["order"]->getId() } }</b>
        </div>
    </div>
    </div>
@endsection
