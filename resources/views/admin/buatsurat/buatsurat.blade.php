@extends('layouts.appuser')

@section('content')


<style>
.zoom {
  padding: 10px;
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<div class="card mt-1">
   
<body>
<div class="container">
<!--<div class="card mt-5"> -->
<div class="card-header text-center">
<h5><b>DAFTAR SURAT</b></h5>
</div>
<table cellpadding="12" cellspacing="15">
<tr>
            <td ><a href="/admin/buatSKtidakmampu"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td width="250px" align="left">Surat Keterangan Tidak Mampu</td>

            <td><a href="/admin/buatsuratcovid"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td width="250px" align="left">Surat Pengantar Covid </td>

            <td><a href="/admin/buatsuratIzinlingkungan"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Izin Lingkungan</td>
        </tr>
        <tr>
            <td><a href="/admin/buatSKberdomisili"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Keterangan Berdomisili </td>

            <td><a href="/admin/buatSKbelumnikah"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Belum Menikah </td>

            <td><a href="/admin/buatSKkematian"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Keterangan Kematian </td>
        </tr>
        <tr>
            <td><a href="/admin/buatSKktpsementara"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Kterangan KTP Sementara</td>

            <td><a href="/admin/buatSKmenikah"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Keterangan Menikah</td>

            <td><a href="/admin/buatSKusaha"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Keterangan Usaha </td>
        </tr>
        <tr>
            <td><a href="/admin/buatSpengantarImunisasi"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Pengantar Imunisasi </td>

            <td><a href="/admin/buatSPizinkeramaian"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Pengantar Izin Keramaian</td>

            <td><a href="/admin/buatSKakte"><div class="zoom"><img height="80px" src="/img/logo.png"></div></a></td>
            <td align="left">Surat Keterangan Akte </td>
        </tr>
</table>
</div>
</body>
</div>


@endsection


