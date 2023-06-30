@extends('theme')

@section('title')
FINANCIAL

@endsection

@section('content')

<table>
  <thead>
    <tr>
      <th>Date</th>
      <th>Description</th>
      <th>Amount</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      <td> {{ \Carbon\Carbon::parse($data->date)->diffForHumans() }}</td>
      <td>{{$data->name}}</td>
      <td class="amount">{{$data->amount}}</td>
    </tr>
   
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th colspan="2">Total:</th>
      <td id="totalAmount">₦</td>
    </tr>
  </tfoot>
</table>

<script>
  window.addEventListener('DOMContentLoaded', () => {
    const amountElements = document.querySelectorAll('.amount');
    let total = 0;

    amountElements.forEach(element => {
      const amount = parseFloat(element.textContent);
      total += amount;
    });

    document.getElementById('totalAmount').textContent = total.toFixed(2);
  });
</script>

@endsection