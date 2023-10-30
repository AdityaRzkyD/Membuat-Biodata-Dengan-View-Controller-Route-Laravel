<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>BIODATA(Menggunakan Foreach)</h1>
    @foreach (['Nama' => $Nama,
    'Kelas' => $Kelas,
    'NPM' => $NPM,
    'Alamat' => $Alamat,
    'TanggalLahir' => $TanggalLahir,
    'Hobi' => $Hobi] as $key => $Value)
        <li>{{$key}}:{{$Value}}</li>
    @endforeach
</body>
</html>