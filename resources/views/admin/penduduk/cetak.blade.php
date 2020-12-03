<!DOCTYPE html>
<html>
<head>
	<title>Data Penduduk</title>
</head>
<body>
<style type="text/css">
body{
	background-image: url("img/home.png");
	background-repeat: no-repeat;
	background-size:cover;
  background-attachment: fixed;
  padding: 1mm;
  padding-right: 1mm;
        border-radius: 5px;
}
table.imagetable {
	font-family: TimesNewRoman, "Times New Roman", Times;
	font-size: 12px;
	
	
	border-collapse: collapse;
        height: 20mm;
        width: 40mm;
        padding: 3mm;
        padding-bottom: 10px;
        margin:1px;
        background: white;
        
    }
    @page {
        size: F4;
        margin: 0;
    }
    table.imagetable th {
	background: white;
	border-width: 1px;
    padding-left: 1px;
	padding-right: 1px;
	border-style: solid;
	border-color: #999999;
}
    table.imagetable td {
        background:white;
        border-width: 1px;
        padding-left: 3px;
        padding: 3px;
        border-style: solid;
        border-color: #999999;
    }
    .text{
    text-align:justify;

  }

    }



</style>
	<center>
		<h5>Data Penduduk Desa Ngestirahayu</h4>
	</center>

	<table class="imagetable">
		<thead>
        <tr>
                    <th valign="center">
                        No
                    </th>
                    <th>
                        NIK
                    </th>
                    <th>
                        No KK
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Tempat Lahir
                    </th>
                    <th>
                        Tanggal Lahir
                    </th>
                    <th>
                        Jenis Kelamin
                    </th>
                    <th>
                        Alamat
                    </th>
                   
                   <th>
                        RT
                    </th>
                    <th>
                        RW
                    </th>
                    <th>
                        Agama
                    </th>
                   <th>
                        Status Perkawinan
                    </th>
                    <th>
                        SHDK
                    </th>
                    <th>
                        Pekerjaan
                    </th>
                  
                 </tr>   
                 </thead>
                 <tbody>
               
				 @php
                        $no = 1;
                        @endphp
                        @foreach($penduduk as $p)
                 <tr>
                    <td align="center">
                        {{ $no++ }}
                    </td>
                    <td>
                        {{ $p->nik }}
                    </td>
                    <td>
                        {{ $p->nokk }}
                    </td>
                    <td width="120px">
                        <font size="1">{{ $p->nama }}</font>
                    </td>
                    <td width="87px">
                        <font size="1">{{ $p->tempat_lahir }}</font>
                    </td>
                    <td width="60px">
                        {{ $p->tanggal_lahir}}
                    </td>
                    <td>
                        {{ $p->jenis_kelamin }}
                    </td>
                    <td width="80px">
                        {{ $p->dusun }}
                    </td>
                  
                    <td align="center"width="25px">
                        {{ $p->rt }}
                    </td>
                    <td align="center" width="25px">
                        {{ $p->rw }}
                    </td>
                    <td align="center"width="60px">
                        <font size="1">{{ $p->agama }}</font>
                    </td>
                    <td width="80px">
                        <font size="1">{{ $p->status_perkawinan }}</font>
                    </td>
                    <td>
                        <font size="1">{{ $p->shdk }}</font>
                    </td>
                    <td >
                        {{ $p->jenis_pekerjaan }}
                    </td>
                   
    
            </tr>
            @endforeach
            </tbody>
	</table>
   
 
</body>
<script>
        window.Print(); 
    </script>
</html>
