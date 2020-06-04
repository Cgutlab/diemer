@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 my-5">
            <div class="card p-3" style="border-radius: 5%">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid px-5 py-4" alt="">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="md-form form-group">
                            <div class="">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                                <label>Nombre de usuario</label>
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form form-group">
                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <label>Contraseña</label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block" style="background-color: #424758">Ingresar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
