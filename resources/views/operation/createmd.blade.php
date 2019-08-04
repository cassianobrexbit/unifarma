@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nova Operação') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('opstore') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="medicine" class="col-md-4 col-form-label text-md-right">{{ __('Medicamento') }}</label>

                            <div class="col-md-6">
                                <input id="medicine" type="text" class="form-control" autofocus>

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
