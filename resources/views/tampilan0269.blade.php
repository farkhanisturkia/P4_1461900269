<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilkan Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 
    <div>
        <header>
		    <li><a href="/print0269">download</a></li>
        </header>
        <div class="menu-tengah">
            <div class="kotak">
	            <h3>Data Buku</h3><br>
                <center>
                <table border="1">
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
	            </table></center>
	        </div>
        </div>
    </div>
</body>
</html>
