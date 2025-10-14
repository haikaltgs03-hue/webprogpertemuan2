<div class="container">

<a href="./">Home</a>
<a href="{{ route('dtteman') }}">Teman</a>

</div>

<div class="container">
    <h3>Data Teman</h3>
    
    @if(empty($dt))
        <p>Tidak ada Data</p>
    @else
    <table border="1" cellpadding="5" cellspacing="0">
  <thead>

    <tr>
      <th>idbuku</th>
      <th>namateman</th>
      <th>alamat</th>
      <th>kota</th>
      <th>telp</th>
      <th>wa</th>
    </tr>

  </thead>
  @foreach($dt as $d)
  <tbody>

  
    <tr>
      <td>{{$d['idbuku']}}</td>
      <td>{{$d['namateman']}}</td>
      <td>Jl. Merdeka No. 10</td>
      <td>Jakarta</td>
      <td>021-1234567</td>
      <td>08123456789</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif

</div>