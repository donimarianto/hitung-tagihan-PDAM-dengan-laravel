@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Tagihan PDAM</h1>
    </div>
    <div class="card-body">
        <p><strong>Pemakaian Air:</strong> {{ $pemakai }} m<sup>3</sup></p>
        <p><strong>Total Tagihan:</strong> Rp. {{ number_format($bill, 0, ',', '.') }}</p>
    </div>
    <div class="card-footer">
        <a href="/pdam-form" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
