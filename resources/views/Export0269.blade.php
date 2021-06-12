<table cellspacing='0'>
		<tr>
			<th>Nomor Rak</th>
			<th>Judul Buku</th>
			<th>Tahun Buku</th>
            <th>Jenis Buku</th>
		</tr>
		@foreach($rak_buku as $rb)
		<tr>
			 <td>{{ $rb->id }}</td>
			 <td>{{ $rb->judul_buku }}</td>
             <td>{{ $rb->tahun_buku }}</td>
             <td>{{ $rb->jenis_b }}</td>
		</tr>
		@endforeach
</table>
