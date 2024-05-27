<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>dsafsaf</h1>
    @if (isset($tagihan))
        <p> aaa: {{$pemakaian}} m <sup>3</sup></p>
        <p>Total:Rp.{{number_format($tagihan,0,',','.')}}</p>
        @endif
    <from method="post" action="{{ route ('folderbaru.hitungTagihan') }}">
    @csrf
    <label for="">hitung</label>
    <input type="number" name="pemakaian" id="pemakaian" required>
    <button type="submit">Hitung</button>
    </from>
</body>
</html>