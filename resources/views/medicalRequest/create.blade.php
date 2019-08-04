@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nova GUIA') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('mreqstore') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Número de Registro') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('reg_number', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Beneficiario') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('client_name', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                {!! Form::email('client_email', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('client_phone', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('client_cellphone', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status da Guia') }}</label>

                            <div class="col-md-6">
                                {!! Form::select('status', array('Pendente' => 'Pendente', 'Executada' => 'Executada'), null, ['placeholder' => 'Seleciono o Status da GUIA', 'class' => 'filestyle']) !!}

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Atualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
