@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Lista de Materiais') }}

                </div>
                    <table class="table">
                        <tr>
                            <th>Código TISS</th>
                            <th>Nome Comercial</th>
                            <th>Descrição</th>
                            <th>Especialidade</th>
                            <th>Quantidade Fração</th>
                        </tr>
                            @foreach($materials as $item)
                            <tr>
                                <td>{{ $item->tiss_code }}</td>
                                <td>{{ $item->commercial_name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->specialty }}</td>
                                <td>{{ $item->min_frac_unity }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
