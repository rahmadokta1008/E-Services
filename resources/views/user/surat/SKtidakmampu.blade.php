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
    margin-top: 70px;
    margin-bottom: 200px;
    
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
            <font size="6" face="Times New Roman">KANTOR KEPALA KAMPUNG NGESTIRAHAYU</font><br>
            <font size="3" face="Times New Roman"><i>Jalan Raya Punggur-Metro,Kec. Punggur Kab. Lampung Tengah</i></font>
           </div> </center></td>
      </tr>
      </table>
            <hr class="garis" width="85%" align="center" color="#000000">
            <hr class="gariss" width="85%" align="center" color="#000000">
  
    </div>
  
    <div class="isipengaduan">

    <center>
    <font style="" size="3" face="Times New Roman"><b><u>SURAT KETERANGAN TIDAK MAMPU</u></b></font><br>
    
    <font style="" size="3" face="Times New Roman"><b>Nomor : {{$surat->nosurat}}</b></font><br><br><br>
    </center>
    <div class="text">
    <font style="" size="3" face="Times New Roman">Yang bertanda tangan dibawah ini Kepala Kampung Ngestirahayu Kecamatan Punggur Kabupaten Lampung Tengah dengan ini menerangkan bahwa :</font><br><br>
    </div>
  @foreach($penduduk as $p)
    <table style="margin-left: 60px;" cellpadding="3" cellspacing="3" 
            align="right" border="0">
         <thead>
            <tr>
              <td width="120px"><font style="" size="3" face="Times New Roman">Nama</font></td>
              <td width="600px"><font style="" size="3" face="Times New Roman"> : <b>{{ $p->nama }}</b></font></td>
            </tr>
         
            <tr>
              <td><font style="" size="3" face="Times New Roman">Jenis Kelamin</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{ $p->jenis_kelamin}}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Agama</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{ $p->agama}}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Status Perkawinan</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{ $p->status_perkawinan}}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Pekerjaan</font></td>
              <td><font style="" size="3" face="Times New Roman"> : {{ $p->jenis_pekerjaan}}</font></td>
            </tr>
            <tr>
              <td><font style="" size="3" face="Times New Roman">Alamat</font></td>
              <td><font style="" size="3" face="Times New Roman">  : {{ $p->dusun}}. RT. {{ $p->rt}} / {{ $p->rw}}</font></td>
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
    <br>
    <br>
    
    @endforeach
    <br><br><br><br><br><br><br><br><br><br><br><br>


    
    <div class="text">
    <font size="3" face="Times New Roman">Nama tersebut diatas adalah benar-benar penduduk Kampung Ngestirahayu Kecamatan Punggur Kabupaten Lampung Tengah, menurut pengamatan kami orang tersebut diatas termasuk <u><b>Keluarga Yang Tidak Mampu.</b></u></font><br>
    <font size="3" face="Times New Roman">Surat keterangan ini di gunakan untuk <b><u>{{$surat->keperluan}}.</u></b></font><br></br>
    <font size="3" face="Times New Roman">Demikian surat keterangan ini dibuat dengan sebenar-benarnya untuk dipergunakan semestinya.</font>
    </div>
    </div>
   
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
@stop
