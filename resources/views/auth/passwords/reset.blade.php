@extends('layouts.app')
@section('css')
    <style>
        .card {
            margin-top: 40px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <form  method="POST" action="{{ route('password.request') }}">
                    <div class="card-content">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <span class="card-title">Réinitialisation du mot de passe</span>
                        <hr>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" class="{{ $errors->has('email') ? 'invalid' : '' }}" required autofocus>
                                <label for="email" data-error="{{ $errors->has('email') ? $errors->first('email'): '' }}">Adresse e-mail</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" name="password" class="{{ $errors->has('password') ? 'invalid' : '' }}" required>
                                <label for="password" data-error="{{ $errors->has('password') ? $errors->first('password'): '' }}">Mot de passe</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password-confirm" type="password" name="password_confirmation" required>
                                <label for="password-confirm">Confirmation du mot de passe</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Réinitialisation du mot de passe
                            <i class="material-icons right">lock_open</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection