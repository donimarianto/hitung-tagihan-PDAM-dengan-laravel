@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Hitung Tagihan PDAM</h1>
    </div>
    <div class="card-body">
        <form action="/calculate-bill" method="GET">
            <div class="form-group">
                <label for="pemakai">Pemakaian Air (m<sup>3</sup>):</label>
                <input type="number" class="form-control" id="pemakai" name="pemakai" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
    </div>
</div>
@endsection
