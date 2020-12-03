@extends('layouts.appuser2')
@section('content')

<div class="card mt-25" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootsrap/4.2.1/css/bootstrap.min.css">

<body>
<div class="container">

<div class="card-header text-center">
<h5>Bantuan</h5>
</div>
<div class="card-body">
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" >
             
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Contoh nomor surat ?
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="">
                <a href="#" class="nav-link">
               
                        <table width="80%" cellpadding="3" cellspacing="3" align="center">
                            <thead>
                                <tr>
                                <td width="30%"><font style="" size="3" face="Times New Roman">Surat Keterangan Tidak Mampu</font></td>
                                <td width="30%"><font style="" size="3" face="Times New Roman"> : <b>400/164/TK/VII/2020</b></font></td>
                                <td width="60%"><b>Keterangan :</b></td>
                                </tr>
                                <tr>
                                <td><font style="" size="3" face="Times New Roman">Surat Pengantar Covid</font></td>
                                <td><font style="" size="3" face="Times New Roman"> : <b>470/214/TK/VI/2020</b></font></td>
                                <td width="60%"rowspan="6"><img src="{{url('AdminLTE/dist/img/kode_surat.png') }}"></td>
                                </tr>
                                <tr>
                                <td><font style="" size="3" face="Times New Roman">Surat Izin Lingkungan</font></td>
                                <td><font style="" size="3" face="Times New Roman"> : <b>-</b></font></td>
                                </tr>
                                <tr>
                                <td><font style="" size="3" face="Times New Roman">Surat Keterangan Berdomisili</font></td>
                                <td><font style="" size="3" face="Times New Roman"> : <b>474.4/036/TK/II/2020</b></font></td>
                                </tr>
                                <tr>
                                <td ><font style="" size="3" face="Times New Roman">Surat Keterangan Belum Menikah</font></td>
                                <td  ><font style="" size="3" face="Times New Roman"> :  <b>474.2/363/TK/XII/2019</b></font></td>
                                </tr>
                                <tr>
                                <td  ><font style="" size="3" face="Times New Roman">Surat Keterangan Kematian</font></td>
                                <td  ><font style="" size="3" face="Times New Roman"> :  <b>474.3/232/TK/IV/2020</b></font></td>
                                </tr>
                                <tr>
                                <td  ><font style="" size="3" face="Times New Roman">Surat Keterangan KTP Sementara</font></td>
                                <td  ><font style="" size="3" face="Times New Roman"> : <b>474.4/265/TK/V/2019</b></font></td>
                                </tr>
                                <tr>
                                <td  ><font style="" size="3" face="Times New Roman">Surat Keterangan Menikah</font></td>
                                <td  ><font style="" size="3" face="Times New Roman"> : <b>474.4/102/TK/IV/2019</b></font></td>
                                </tr>
                                <tr>
                                <td  ><font style="" size="3" face="Times New Roman">Surat Keterangan Usaha</font></td>
                                <td  ><font style="" size="3" face="Times New Roman"> : <b>511/203/TK/VI/2020</b></font></td>
                                </tr>
                                <tr>
                                <td  ><font style="" size="3" face="Times New Roman">Surat Pengantar Imunisasi</font></td>
                                <td  ><font style="" size="3" face="Times New Roman"> : <b>470/050/TK/II/2020</b></font></td>
                                </tr>
                                <tr>
                                <td  ><font style="" size="3" face="Times New Roman">Surat Pernyataan Izin Keramaian</font></td>
                                <td  ><font style="" size="3" face="Times New Roman"> : <b>-</b></font></td>
                                </tr>
                                <tr>
                                <td  ><font style="" size="3" face="Times New Roman">Surat Keterangan Akte</font></td>
                                <td  ><font style="" size="3" face="Times New Roman"> : <b>474.4/006/TK/XII/2019</b></font></td>
                                </tr>
                            </thead>
                        </table>
                </a>
              </li> 
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Bagaimana mengganti kata sandi?
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="#" class="nav-link">
                    Untuk mengganti kata sandi, silahkan menghubungi sekretaris desa
                </a>
              </li> 
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class=""></i>
              <p>
                Bagaimana cara menambah data penduduk?
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="#" class="nav-link">
                    Untuk menambah data penduduk, silahkan menghubungi sekretaris desa
                </a>
              </li> 
            </ul>
          </li>


          </ui>
       </nav>
</div>
</div>
</body>
</div>
       @stop