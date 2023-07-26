@extends('Layout.master')
@section('title', 'Roles')

@section('style')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
    <div class="inscription-form">
        <div class="container mt-3">
            <h3>Roles</h3>

{{-- @if (Session::get('success'))
<div class="alert alert-success ">
    {{Session::get('success')}}
</div>   
@endif            
@if (Session::get('failed'))
<div class="alert alert-danger ">
    {{Session::get('failed')}}
</div>   
@endif             --}}

<form method="POST" action="{{ route('add.role') }}" class="was-validated text-secondary">
                @csrf
                @method('POST')
                <div class="mb-3 mt-3">
                    <label for="id" class="form-label">Role ID</label>
                    <input type="text" class="form-control" id="id" placeholder="Enter Role ID" name="id"
                        required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="Libelle_Role" class="form-label">Role:</label>
                    <input type="Libelle_Role" class="form-control" id="Libelle_Role" placeholder="Enter Role" name="Libelle_Role"
                        required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>
        </div>
    </div>


@endsection

@section('script')

@endsection
