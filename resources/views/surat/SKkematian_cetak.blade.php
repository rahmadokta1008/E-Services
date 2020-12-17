<!DOCTYPE html>
<html>


<style type="text/css">
body{
  background:#525659!important;
}
.container{
  width:700px;
  padding:30px;
  margin:0 auto;
  background:#fff!important;
}
  .pdf{
   
    margin-left: 0px;
    margin-right: 0px;
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
    margin-left: 500px;
    margin-top: 0px;
    margin-bottom: 0px;
    
  }
  .isipengaduan{
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
  }
  .table{
    align:left;
  }

  .text{
    text-align:justify;
  
  }
</style>

 <body>
 <div class="container">
  <div class="pdf">
  <table border="0" align="center" width="700px" height="0px">
      <tr>
        <td width="70px"><img style="margin-left: 0px; margin-right: 0px;" class="img" src="{{asset('img/logo_lamteng.png')}}" width="90px" height="105px" ></td>
          <td ><center>
            <div class="kop">
            <font size="5" face="Times New Roman" >PEMERINTAH KABUPATEN LAMPUNG TENGAH</font><br>
            <font size="5" face="Times New Roman" >KECAMATAN PUNGGUR</font><br>
            <font size="6" face="Times New Roman">KANTOR KEPALA KAMPUNG NGESTIRAHAYU</font><br>
            <font size="3" face="Times New Roman"><i>Jalan Raya Punggur-Metro,Kec. Punggur Kab. Lampung Tengah</i></font>
           </div> </center></td>
      </tr>
      </table>
            <hr class="garis" width="100%" align="center" color="#000000">
            <hr class="gariss" width="100%" align="center" color="#000000">
  
    </div>
  
    <div class="isipengaduan">
    <center>
    <font style="" size="3" face="Times New Roman"><b><u>SURAT KETERANGAN KEMATIAN</u></b></font><br>
    
    <font style="" size="3" face="Times New Roman"><b>Nomor : {{$surat->nosurat}}</b></font><br><br><br>
    </center>
    <div class="text">
    <font style="" size="3" face="Times New Roman">Yang bertanda tangan dibawah ini menerangkan bahwa :</font><br><br>
    </div>
  @foreach($pmeninggal as $p)
    <table style="margin-left: 60px;" cellpadding="3" cellspacing="3" >
            align="right" border="0">
         <thead>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Nama</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : <b>{{ $p->nama }}</b></font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Tempat, Tgl. Lahir</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{$p->tempat_lahir}}, {{$p->tanggal_lahir}}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Jenis Kelamin</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{ $p->jenis_kelamin}}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Pekerjaan</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{ $p->jenis_pekerjaan}}</font></td>
            </tr>
            <tr>
                <td><font style="" size="3" face="Times New Roman">Alamat</font></td>
                <td><font style="" size="3" face="Times New Roman">  : {{ $p->dusun}}, RT. {{ $p->rt}} / {{ $p->rw}}</font></td>
            </tr>
            <tr>
                <td></td>
                <td><font style="" size="3" face="Times New Roman"> &nbsp;&nbsp;Kampung Ngestirahayu Kecamatan Punggur.</font></td>
            </tr>
            <tr>
                <td></td>
                <td><font style="" size="3" face="Times New Roman"> &nbsp;&nbsp;Kabupaten Lampung Tengah.</font></td>
            </tr>
         </thead>
    </table>
    @endforeach
<br>
    <div class="text">
    <font size="3" face="Times New Roman">Telah meninggal dunia pada :</font><br>
    </div>

<table style="margin-left: 60px;" cellpadding="3" cellspacing="3">
    <tr>
        <td width="120px"><font style="" size="3" face="Times New Roman">Hari</font></td>
        <td width="600px"><font style="" size="3" face="Times New Roman"> : {{ $surat->hari}}</font></td>
    </tr>
    <tr>
        <td width="120px"><font style="" size="3" face="Times New Roman">Tanggal</font></td>
        <td width="600px"><font style="" size="3" face="Times New Roman"> : {{ $surat->tgl}}</font></td>
    </tr>
    <tr>
        <td width="120px"><font style="" size="3" face="Times New Roman">Di</font></td>
        <td width="600px"><font style="" size="3" face="Times New Roman"> : {{ $surat->tempat}}</font></td>
    </tr>
    <tr>
        <td width="130px"><font style="" size="3" face="Times New Roman">Disebabkan karena</font></td>
        <td width="600px"><font style="" size="3" face="Times New Roman"> : {{ $surat->sebabninggal}}</font></td>
    </tr>
</table>
<br>
<br>
<div class="text">
    <font size="3" face="Times New Roman">Surat keterangan ini dibuat berdasarkan keadaan yang sebenarnya, dan untuk dipergunakan sebagaimana mestinya.</font><br>
</div><br>

<table style="margin-left: 0px;">
    <tr>
        <td width="200px"><font style="" size="3" face="Times New Roman">Nama Pelapor</font></td>
        <td width="500px"><font style="" size="3" face="Times New Roman"> : {{ $surat->pihakkedua}}</font></td>
    </tr>
    <tr>
        <td width="200px"><font style="" size="3" face="Times New Roman">Hub. dengan yang meninggal</font></td>
        <td width="500px"><font style="" size="3" face="Times New Roman"> : {{ $surat->hubungan}}</font></td>
    </tr>
</table>
<br>


    <div class="opd">
    <font size="3" face="Times New Roman">Dikeluarkan di	: Ngestirahayu</font>
    <br>
    <font size="3" face="Times New Roman"><u>Pada tanggal	&nbsp;&nbsp;&nbsp;:  {{$surat->tglsurat}}</u></font>
    <br>
    <font size="3" face="Times New Roman">Kepala Kampung Ngestirahayu</font>
    <br>
    <br>
    <br>
    <br>
    <br>
    <font size="3" face="Times New Roman"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>SUBAGIYO</u></b></font>
    </div>

  </div>
  <script>
  window.addEventListener("load", window.print());
</script>
  </body>
  </html>

