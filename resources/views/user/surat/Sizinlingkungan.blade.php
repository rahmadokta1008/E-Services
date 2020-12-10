@extends('layouts.appuser2')

@section('content')
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
  .gar{
    margin-top: 13px;
    margin-bottom: 0px;
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
    margin-left: 600px;
    margin-top: 30px;
    margin-bottom: 30px;
    
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
  .tbl{
    margin-left: 70px;
    margin-right: 70px;
  }
</style>
 
  <br>
  <div class="container col-sm-12">
 <a href="/home/datasurat" class="btn btn-primary btn-sm">Kembali</a><br><br>
  </div>
 
  <div class="container card col-sm-10">
    
  <div class="pdf">
    <table border="0" align="center" width="750px" height="1px">
      <tr>
          <td><img style="margin-left: 0px; margin-right: 0px;" class="img" src="/img/logo_lamteng.png" width="105px" height="120px" ></td>
          <td ><center>
            <div class="kop">
            <font size="5" face="Times New Roman" >PEMERINTAH KABUPATEN LAMPUNG TENGAH</font><br>
            <font size="5" face="Times New Roman" >KECAMATAN PUNGGUR</font><br>
            <font size="6" face="Times New Roman">KANTOR KEPALA KAMPUNG TOTOKATON</font><br>
            <font size="3" face="Times New Roman"><i>Jalan Raya Punggur-Metro,Kec. Punggur Kab. Lampung Tengah</i></font>
           </div> </center></td>
      </tr>
      </table>
            <hr class="garis" width="85%" align="center" color="#000000">
            <hr class="gariss" width="85%" align="center" color="#000000">
  
    </div>
  
    <div class="isipengaduan">

    <center>
    <font style="" size="3" face="Times New Roman"><b><u>SURAT IZIN LINGKUNGAN</u></b></font><br><br>
    
    
    </center>
    @foreach($penduduk as $p)
    <div class="text">
    <font style="" size="3" face="Times New Roman">Yang bertanda tangan dibawah ini warga Dusun {{$surat->alamat}} Kampung Totokaton Kecamatan Punggur Kabupaten Lampung Tengah, menyatakan tidak keberatan dengan berdirinya usaha {{$surat->usaha}} milik :</font><br><br>
    </div>
      <table style="margin-left: 60px;" cellpadding="3" cellspacing="3" 
            align="right" border="0">
         <thead>
            <tr>
              <td width="170px"><font style="" size="3" face="Times New Roman">Nama</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : <b>{{ $p->nama }}</b></font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Tempat, Tgl. Lahir</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{$p->tempat_lahir}}, {{$p->tanggal_lahir}}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Jenis KelaminN</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{ $p->jenis_kelamin}}</font></td>
            </tr>
              <td><font style="" size="3" face="Times New Roman">Alamat</font></td>
              <td><font style="" size="3" face="Times New Roman">  : {{ $p->dusun}}. RT. {{ $p->rt}} / {{ $p->rw}}</font></td>
            </tr>
            <tr>
                <td></td>
                <td><font style="" size="3" face="Times New Roman"> &nbsp;&nbsp;Kampung Totokaton Kecamatan Punggur.</font></td>
            </tr>
            <tr>
                <td></td>
                <td><font style="" size="3" face="Times New Roman"> &nbsp;&nbsp;Kabupaten Lampung Tengah.</font></td>
            </tr>
         </thead>
    </table>
    <br>
    <br>
    
    @endforeach
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    
    <div class="text">
    
    <font size="3" face="Times New Roman">Demikian Surat Izin Lingkungan/Tetangga ini kami buat dengan sebenar-benarnya tanpa ada unsur paksaan dari pihak manapun.</font>
    </div>
    </div>
   
    <div class="opd">
    <font size="3" face="Times New Roman">Dikeluarkan di	: Totokaton</font>
    <br>
    <font size="3" face="Times New Roman"><u>Pada tanggal	&nbsp;&nbsp;&nbsp;:  {{$surat->tglsurat}}</u></font>
    <br>
    </div>
    <center>
    <font size="3" face="Times New Roman">Yang Menyatakan</font>
    <br>
    </center>



<table class="tbl" border="0">
        <tr>
            <td width="30px">1. </td>
            <td width="150px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></font></td>
            <td width="150px"><font size="3">..................................</font></td>
            <td width="30px">6. </td>
            <td width="150px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></td>
            <td width="150px"><font size="3">..................................</font></td>
        </tr>
        <tr>
            <td width="0px">2. </td>
            <td width="20px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></font></td>
            <td width="20px"><font size="3">..................................</font></td>
            <td width="0px">7. </td>
            <td width="20px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></td>
            <td width="20px"><font size="3">..................................</font></td>
        </tr><tr>
            <td width="0px">3. </td>
            <td width="20px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></font></td>
            <td width="20px"><font size="3">..................................</font></td>
            <td width="0px">8. </td>
            <td width="20px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></td>
            <td width="20px"><font size="3">..................................</font></td>
        </tr><tr>
            <td width="10px">4. </td>
            <td width="10px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></font></td>
            <td width="10px"><font size="3">..................................</font></td>
            <td width="10px">9. </td>
            <td width="10px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></td>
            <td width="10px"><font size="3">..................................</font></td>
        </tr><tr>
            <td width="10px">5. </td>
            <td width="10px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></font></td>
            <td width="10px"><font size="3">..................................</font></td>
            <td width="10px">10. </td>
            <td width="10px"><font size="3"><hr class="gar" width="150px" align="center" color="#000000"></td>
            <td width="10px"><font size="3">..................................</font></td>
        </tr>
</table>
<br>
<br>
<br>

    <center>
        <font size="3" face="Times New Roman">Mengetahui,</font><br>
        <font size="3" face="Times New Roman">Kepala Kampung Totokaton</font>
        <br>
        <br>
        <br>
        <br>
        <br>
        <font size="3" face="Times New Roman"><b><u>SUBAGIYO</u></b></font>
    </center>
    <br><br><br><br><br><br><br>

  </div>
@stop
