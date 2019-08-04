@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Relatórios') }}

                </div>
                    <table class="table">
                      <tr>
                          <th>Medicamentos aguardando Execução</th>
                          <td><a href="{{ url('reports/medicinesByStatus') }}">Ver Relatório</a></td>
                      </tr>
                      <tr>
                          <th>Medicamentos Executados</th>
                          <td><a href="{{ url('reports/medicinesExecuted') }}">Ver Relatório</a></td>
                      </tr>
                      <tr>
                          <th>Medicamentos Expirando em 30dias</th>
                          <td><a href="{{ url('reports/medicinesExpiring') }}">Ver Relatório</a></td>
                      </tr>
                      <tr>
                          <th>Guias Expirando em 30dias</th>
                          <td><a href="{{ url('reports/medicalRequestsExpiring') }}">Ver Relatório</a></td>
                      </tr>
                      <tr>
                          <th>Guias Canceladas</th>
                          <td><a href="{{ url('reports/medicalRequestsCanceled') }}">Ver Relatório</a></td>
                      </tr>
                      <tr>
                          <th>Guias Executadas</th>
                          <td><a href="{{ url('reports/medicalRequestsExecuted') }}">Ver Relatório</a></td>
                      </tr>
                      <tr>
                          <th>Guias Vencidas</th>
                          <td><a href="{{ url('reports/medicalRequestsExpired') }}">Ver Relatório</a></td>
                      </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
