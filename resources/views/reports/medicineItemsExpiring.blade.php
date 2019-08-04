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
                        <th>Medicamento</th>
                        <th>Validade</th>
                        <th>Lote</th>
                        <th>Nosta Fiscal</th>
                        <th>Disponibilidade</th>
                    </tr>
                        @foreach($medicine_items as $item)
                        <tr>
                            <td>{{ \App\Medicine::where(['id' => $item->medicine_id])->pluck('commercial_name')->first() }}</td>
                            <td>{{ $item->val_date }}</td>
                            <td>{{ $item->num_batch }}</td>
                            <td>{{ $item->nf_number }}</td>
                            <td>{{ $item->available_status }}</td>
                        </tr>
                        @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>


@endsection
