@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <h3>{{ $chart1->options['chart_title'] }}</h3>
        </div>
        <div class="col-md-6">
            <h3 >Dashboard</h3>
        </div>
    </div>
    <div class="row justify-content-start">
        <div class="col-md-6">

          <table class="table">
            <tr>
              <td><h3>Expense Categories</h3></td>
              <td><h3>Total</h3</td>
            </tr>
            @if (count($expenses) > 0)
              @foreach ($expenses as $expense)
                <tr>
                  <td>{{ $expense->expense_category->name or '' }}</td>
                  <td>{{ $expense->expense_currency->symbol  . ' ' . number_format($expense->amount, 2, $expense->expense_currency->money_format_decimal, $expense->expense_currency->money_format_thousands) }}</td>
                </tr>
              @endforeach
          @endif
        </table>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    {!! $chart1->renderHtml() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
@endsection
