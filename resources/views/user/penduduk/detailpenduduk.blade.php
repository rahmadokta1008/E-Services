<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- konten modal-->
                                <div class="modal-content modal-lg" role="document">
                                    <!-- heading modal -->
                                    <div class="modal-header" >

                                    <h4 class="modal-title"><center><b>Detail Penduduk</b></center></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                    <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-700">
                                        <div class="box box-info">
                                       
                                        @foreach($penduduk as $p)
                                            <table align="center" id="data_users_reguler" class="table-bordered table-hover table-striped">
                                                <thead >
                                                <div class="col-md-4">
                                                <tr>
                                                    <th width="700px">NIK</th>
                                                    <td width="600px">{{ $p->nik}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama</th>
                                                    <td>{{ $p->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kelamin</th>
                                                    <td>{{ $p->jenis_kelamin}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat Lahir</th>
                                                    <td>{{ $p->tempat_lahir }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Lahir</th>
                                                    <td>{{ $p->tanggal_lahir}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Agama</th>
                                                    <td>{{ $p->agama}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Pendidikan</th>
                                                    <td>{{ $p->pendidikan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Pekerjaan</th>
                                                    <td>{{ $p->jenis_pekerjaan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Status Perkawinan</th>
                                                    <td>{{ $p->status_perkawinan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>SHDK</th>
                                                    <td>{{ $p->shdk}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Kewarganegaraan</th>
                                                    <td>{{ $p->kewarganegaraan}}</td>
                                                </tr>
                                                <tr>
                                                 <th>Nama Ayah</th>
                                                    <td>{{ $p->nama_ayah}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Ibu</th>
                                                    <td>{{ $p->nama_ibu}}</td>
                                                </tr>
                                                <tr>
                                                    <th>No KK</th>
                                                    <td>{{ $p->nokk}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Dusun</th>
                                                    <td>{{ $p->dusun}}</td>
                                                </tr>
                                                <tr>
                                                    <th>RT</th>
                                                    <td>{{ $p->rt}}</td>
                                                </tr>
                                                <tr>
                                                    <th>RW</th>
                                                    <td>{{ $p->rw}}</td>
                                                </tr>
                                                </div>
                                                @endforeach
                                            </table>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                    </div>
                                    <!-- footer modal -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- Modal -->  


