@extends('Layout.master')
@section('title', 'Home')

@section('style')

@endsection

@section('content')
    <div class="inscription-form">
        <div class="container mt-3">
            <h3>Inscription</h3>
            <p>Try to submit the form.</p>

            <form method="POST" action="{{route('user.data')}}" class="was-validated text-secondary">
                @csrf
                {{-- @method('POST') --}}
                <div class="mb-3 mt-3">
                    <label for="fname" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="fname"
                        required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email"
                        required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"
                        required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                    <label class="form-check-label" for="myCheck">I agree on Conditions.</label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </div>
                {{-- concours --}}
                <div class="border border-success p-2 mb-2 p-3">
                    <p>Participer au concours</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="role" value="2"
                            checked required>
                        <label class="form-check-label" for="role">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="role" value="1">
                        <label class="form-check-label" for="role">
                            Pas Maintenant
                        </label>
                    </div>
                    <select class="form-select mt-3" aria-label="Default select example">
                        <option selected>Categories</option>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                        <option value="3">Enfants</option>
                        <option value="3">Haute-Couture</option>
                        <option value="3">Accessoires</option>
                    </select>
                    <div class="mb-3 mt-3">
                        <label for="formFile" class="form-label">Telecharger le croquis</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                
                <br>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>
        </div>
    </div>


@endsection

@section('script')

@endsection
