@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastrar Novo Item de Medicamento') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('meditemstore')}}">
                        @method('Post');
                        @csrf
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Medicamento') }}</label>

                            <div class="col-md-6">
                                {!! Form::select('medicines', $medicines, null, ) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Nota Fiscal') }}</label>

                            <div class="col-md-6">
                                {!! Form::select('nfes', $nfes, null, ) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Data de Validade') }}</label>

                            <div class="col-md-6">
                                {!! Form::date('val_date', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Número do lote') }}</label>

                            <div class="col-md-6">
                                {!! Form::text('num_batch', null, ['class' => 'form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Cadastrar') }}
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
