@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    {{-- includes --}}
    {{-- =================== --}}

    {{-- Create Products --}}
    <div class="card mb-4">
        <div class="card-header">
            Create Products
        </div>
        <div class="card-body">
            @if ($errors->any())
                <!-- Corrected: Removed extra parenthesis -->
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li> - {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {{-- POST METHOD FORM --}}
            <!-- Corrected: Added missing quote -->
            <form method="POST" action="{{ route('admin.products.store') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <!-- Corrected: Removed misplaced 'row' attribute -->
                        <div class="mb-3">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"> Name: </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Corrected: Removed misplaced 'row' attribute -->
                        <div class="mb-3">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"> Price: </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="price" value="{{ old('price') }}" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label"> Description </label>
                    <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary"> Submit </button>
            </form>
        </div>
    </div>

    {{-- Manage Products --}}
    <div class="card">
        <div class="card-header">
            Manage Products
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <!-- Corrected: Assuming you're using Eloquent, access properties directly -->
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
