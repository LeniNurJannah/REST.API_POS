<head>
    <link rel="stylesheet" href="{{ 'css/app.css' }}">
</head>



<h1>Profil &#128112</h1>
<hr>
    <table border='0'>
        @if($nama == 'Leni')
    <tr>
        <td>Nama Saya :</td>
        <td>{{ $nama }} </td>
</tr>
@endif
</table>

<hr>
<h1>contoh pengulangan</h1>
<table>
    @foreach($data_array['nama'] as $data)
    <tr>
        <td>Nama</td>
        <td>{{$data}}</td>
    </tr>
    @endforeach
</table>

    <hr>
<h2>contoh pengulangan forelse</h2>
<table>
    @forelse($data_array['nama'] as $data)
    <tr>
        <td>Nama</td>
        <td>{{$data}}</td>
    </tr>
    @empty
    <tr>
        <td colspan="2">Data masih kosong</td>
</tr>
                @endforelse
</table>

<hr>
<h3>contoh pengulangan for</h3>
<table>
    @for($i = 0; $i < count($data_array); $i++)
    <tr>
        <td>Nama</td>
        <td>{{$data}}</td>
    </tr>   
    @endfor 
</table>