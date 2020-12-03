@extends('layouts.appuser2')

@section('content')
<section class="content">
      <div class="container-fluid">
      <br>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               
                <h3>{{$total_penduduk}}</h3>

                <p>Penduduk</p>
                </div>
                <div class="icon">
              <i class="far fa-user"></i>
            </div>
            <a href="/home/tampil" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        
        <!-- ./col -->
      </div>   
     
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$total_keluarga}}</h3>

              <p>Data Keluarga</p>
            </div>
            <div class="icon">
              <i class="fas fa-file"></i>
            </div>
            <a href="/home/kk" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$total_pengguna}}</h3>

              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="fas fa-fw fa-users"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circlet"></i></a>
          </div>
        </div>

      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$total_cetak}}</h3>

              <p>Daftar Surat</p>
            </div>
            <div class="icon">
              <i class="fas fa-fw fa-envelope"></i>
            </div>
            <a href="/home/datasurat" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="container">
        <div id="chart">
        </div>
      </div>  
      </div>  
      </div> 
      </div>
</section>
@stop 


@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
 Highcharts.chart('chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Surat'
    },
    
    xAxis: {
        categories: {!!json_encode($judul_surat)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Jenis Surat',
        data: {!!json_encode($jumlah)!!}
    }]
});
</script>
@stop