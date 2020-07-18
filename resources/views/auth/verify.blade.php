@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ověřit e-maiovou adresu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Na vaši e-mailovou adresu byl odeslán nový ověřovací odkaz.') }}
                        </div>
                    @endif

                    {{ __('Než budete pokračovat, zkontrolujte prosím v e-mailu ověřovací odkaz.') }}
                    {{ __('Pokud jste e-mail neobdrželi') }}, <a href="{{ route('verification.resend') }}">{{ __('klikněte sem a vyžádejte si další') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
