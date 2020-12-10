@extends('layouts.appuser2')

@section('content')
<html>
<script type="text/javascript" src="../plugins/jquery/jquery.min.js"></script>
<style type="text/css">
  .pdf{
    margin-top: 30px;
  }
  .kop{
    line-height: 25px;
  }
  .img{
    margin-top: 0px;
  }
  .garis{
    margin-top: 2px;
  }
  .gariss{
    margin-top: -14px;
  }
  .kepada{
    margin-top: 20px;
    margin-left: 600px;

  }
  .nomor{
    margin-top: -190px;
    margin-bottom: 150px;
    margin-left: 40px;
  }
  .opd{
    margin-left: 280px;
    margin-top: 0px;
    margin-bottom: 175px;
    
  }
  .isipengaduan{
    margin-top: 0px;
    margin-left: 70px;
    margin-right: 70px;
  }
  .table{
    align:left 200px;
  }

  .text{
    text-align:justify;
  
  }
</style>
</style>
 <body class="page">
  <div class="container col-sm-12">
 <a href="/home/datasurat" class="btn btn-primary btn-sm">Kembali</a><br><br>
  </div>
 
  <div class="container card col-sm-10">
    
  <div class="pdf">
   <!-- <table border="0" align="center" width="750px" height="1px">
      <tr>
          <td><img style="margin-left: 0px; margin-right: 0px;" class="img" src="/img/logo_lamteng.png" width="105px" height="120px" ></td>
          <td ><center>
            <div class="kop">
            <font size="5" face="Times New Roman" >PEMERINTAH KABUPATEN LAMPUNG TENGAH</font><br>
            <font size="5" face="Times New Roman" >KECAMATAN PUNGGUR</font><br>
            <font size="6" face="Times New Roman">KANTOR KEPALA KAMPUNG Ngestirahayu</font><br>
            <font size="3" face="Times New Roman"><i>Jalan Raya Punggur-Metro,Kec. Punggur Kab. Lampung Tengah</i></font>
           </div> </center></td>
      </tr>
      </table>
            <hr class="garis" width="85%" align="center" color="#000000">
            <hr class="gariss" width="85%" align="center" color="#000000">
  -->
    </div>
    
    <div class="isipengaduan">
    <center>
    <font style="" size="3" face="Times New Roman"><b><u>SURAT PERNYATAAN IZIN KERAMAIAN</u></b></font><br>
    
    <!--<font style="" size="3" face="Times New Roman"><b>Nomor : {{$surat->nosurat}}</b></font>--><br><br><br>
    </center>
    <div class="text">
    <font style="" size="3" face="Times New Roman">Yang bertanda tangan dibawah ini :</font><br><br>
    </div>
  @foreach($penduduk as $p)
    <table style="margin-left: 0px;" cellpadding="3" cellspacing="3" 
            align="right" border="0">
         <thead>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Nama</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : <b>{{ $p->nama }}</b></font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Umur</font></td>
              <td><font style="" size="3" face="Times New Roman"> : - </font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Pekerjaan</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{ $p->jenis_pekerjaan}}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Alamat</font></td>
              <td><font style="" size="3" face="Times New Roman">  : {{ $p->dusun}}, RT. {{ $p->rt}} / {{ $p->rw}} Kampung Ngestirahayu Kecamatan Punggur.</font></td>
            </tr>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Nik / no. tlp.</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : {{ $p->nik }}</font></td>
            </tr>
            <tr>
              <td colspan="2"><font style="" size="3" face="Times New Roman"><b>Sebagai pihak pemohon</b></font></td>
            </tr>
            
         </thead>
    </table>
    @endforeach
    <br>
    <table style="margin-top: 10px;" cellpadding="3" cellspacing="3" 
            align="right" border="0">
         <thead>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Nama</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : {{ $surat->nama }}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Alamat</font></td>
              <td><font style="" size="3" face="Times New Roman">  : {{ $surat->alamat}}</font></td>
            </tr>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Nik / no. tlp.</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : {{ $surat->notlp }}</font></td>
            </tr>
            <tr>
              <td colspan="2"><font style="" size="3" face="Times New Roman"><b>Sebagai Pemilik Orgen/ Hiburan</b></font></td>
            </tr>
         </thead>
    </table>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>

        <div class="text">
    <font size="3" face="Times New Roman">Sehubungan dengan permohonan saya tentang Izin Keramaian kepada Kapolsek Punggur Nomor  : </font><br>
   </div>
    
        <table style="margin-left: 0px;" cellpadding="3" cellspacing="3" 
            align="right" border="0">
         <thead>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Dalam Rangka</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : {{$surat->keperluan}}</font></td>
            </tr>
              <td><font style="" size="3" face="Times New Roman">Hiburan</font></td>
              <td><font style="" size="3" face="Times New Roman">  : {{$surat->hiburan}}</font></td>
            </tr>
            <tr>
              <td width="250px"><font style="" size="3" face="Times New Roman">Yang akan dilaksanakan pada  </font></td>
              <td width="400px"><font style="" size="3" face="Times New Roman"> : </font></td>
            </tr>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Hari</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : {{ $surat->hari}}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Tanggal</font></td>
              <td><font style="" size="3" face="Times New Roman">  : {{ $surat->tgl}}</font></td>
            </tr>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Waktu</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : Pukul 08.00 Wib s/d selesai.</font></td>
            </tr>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Tempat</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : {{$surat->tempat}}</font></td>
            </tr>
         </thead>
    </table>
    <br><br><br><br><br><br><br><br><br><br>

    <div class="text">
    <font size="3" face="Times New Roman">Dengan ini saya selaku tuan rumah / panitia / dan pemilik Orgen bersedia membuat pernyataan sebagai berikut :</font><br>
    
    <table align="left" border="0">
         <thead>
            <tr>
              <td width="20px"><font style="" size="3" face="Times New Roman">1. </font></td>
              <td width="700px"><font style="" size="3" face="Times New Roman">Hiburan hanya akan dilaksanakan pada siang hari dari pukul <b>07.30 WIB s/d 18.00 WIB.</b></font></td>
            </tr>
            <tr>
              <td valign="top" width="20px"><font style="" size="3" face="Times New Roman">2. </font></td>
              <td width="700px"><font style="" size="3" face="Times New Roman">Sanggup dan bersedia menjamin tidak ada Narkoba dan Minuman Keras serta Perjudian selama hajatan/ hiburan berlangsung</font></td>
            </tr>
            <tr>
              <td valign="top" width="20px"><font style="" size="3" face="Times New Roman">3. </font></td>
              <td width="700px"><font style="" size="3" face="Times New Roman">Sanggup dan bersedia menciptakan situasi kamtibmas yang kondusif dengan menjamin keamanan selama hajatan / hiburan berlangsung.</font></td>
            </tr>
            <tr>
              <td width="20px"><font style="" size="3" face="Times New Roman">4. </font></td>
              <td width="715px"><font style="" size="3" face="Times New Roman">Sanggup dan bersedia mentaati dan mematuhi semua yang tertera dalam surat izin keramaian.</font></td>
            </tr>
            <tr>
        
              <td valign="top" width="20px"><font style="" size="3" face="Times New Roman">5. </font></td>
              <td width="715px"><font style="" size="3" face="Times New Roman">Apabila terjadi pelanggaran ataupun menyalahi peraturan yang telah ditentukan oleh berwajib maka yang bersangkutan sanggup dan bersedia ditindak sesuai dengan Hukum yang berlaku</font></td>
            </tr>
         </thead>
    </table>
    <br>
   </div>
   <br><br><br><br><br><br><br><br><br>

   <div class="text">
    <font size="3" face="Times New Roman">Demikian Surat pernyataan ini saya buat dengan sebenar-benarnya dalam keadaan sehat jasmani dan rohani dan tanpa paksaan dari pihak manapun.</font><br>
  </div>


  <div style="margin-left: 500px; margin-top: 30px;">
    <font size="3" face="Times New Roman">Dikeluarkan di	: Ngestirahayu</font>
  </div><br>

  <table height="120px" border="0">
    <tr>
      <td valign="top" align="center" width="500px"><font size="3" face="Times New Roman">Pemilik Orgen/ Hiburan</font></td>
      <td valign="top"align="center" width="500px"><font size="3" face="Times New Roman">Yang Membuat Pernyataan</font></td>
    </tr>
    <tr>
      <td valign="bottom" align="center" width="500px"><font size="3" face="Times New Roman"><b>{{$surat->pihakkedua}}</b></font></td>
      <td valign="bottom"align="center" width="500px"><font size="3" face="Times New Roman"><b>{{$surat->nama}}</b></font></td>
    </tr>
  </table>



  
<center>
    <font size="3" face="Times New Roman">Mengetahui,</font>
    <br>
    </center>
    <div class="opd">
    <font size="3" face="Times New Roman">Kepala Kampung Ngestirahayu</font>
    <br>
    <br>
    <br>
    <br>
    <br>
    <font size="3" face="Times New Roman"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>SUBAGIYO</u></b></font>
    </div>
    

  </div>
 </body>
 </html>
@stop
