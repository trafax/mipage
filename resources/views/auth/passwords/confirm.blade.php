@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Bevestig wachtwoord</div>

                <div class="card-body">
                    Bevestig uw wachtwoord voordat u verder gaat.

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row gy-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Wachtwoord</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Bevestig wachtwoord
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Wachtwoord vergeten?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
