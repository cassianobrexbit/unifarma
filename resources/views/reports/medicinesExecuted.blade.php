@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Lista de Medicamentos') }}

                </div>
                    <table class="table">
                        <tr>
                            <th>Código TISS</th>
                            <th>Nome Comercial</th>

                            <th>Principio Ativo</th>
                            <th>Fração Mínima</th>
                            <th>Quantidade Fração</th>
                        </tr>
                            @foreach($medicines as $item)
                            <tr>
                                <td>{{ $item->tiss_code }}</td>
                                <td>{{ $item->commercial_name }}</td>
                                <td>{{ $item->active_principle }}</td>
                                <td>{{ $item->is_generic }}</td>
                                <td>{{ $item->min_frac_unity }}</td>
                                <td>{{ $item->frac_qtd }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
