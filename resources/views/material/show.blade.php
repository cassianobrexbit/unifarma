@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detalhes do Material') }}</div>
                <table class="table">

                <tr>
                    <th>Número de Registro</th>
                    <td> {{ $material->tiss_code }} </td>
                </tr>
                <tr>
                    <th>Nome Comercial</th>
                    <td> {{  $material->commercial_name }} </td>
                </tr>
                <tr>
                    <th>Descrição</th>
                    <td> {{  $material->description }} </td>
                </tr>
                <tr>
                    <th>Especialidade</th>
                    <td> {{  $material->specialty }} </td>
                </tr>
                <tr>
                  <th>Unidade de Fracionamento</th>
                  <td>{{ $material->min_frac_unity  }}
                </tr>
                <tr>
                  <th>Quantidade Fracionamento</th>
                  <td>{{ $material->frac_qtd  }}
                </tr>
                <tr>
                  <th>Medicamento Fracionável</th>
                  <td>{{ $material->is_frac  }}
                </tr>
                <tr>
                    <th>Disponibilidade</th>
                    <td> {{ $material->available_status }} </td>
                </tr>
                <tr>
                  <th>Status de Validade</th>
                  <td>{{ $material->valid_status  }}
                </tr>
                <tr>
                  <th>Quantidade Disponível</th>
                  <td>{{ $material->quantity  }}
                </tr>
                <tr>
                  <th>Data de Validade</th>
                  <td>{{ $material->val_date  }}
                </tr>
              </table>
            </div>
        </div>
    </div>
  </div>
@endsection
