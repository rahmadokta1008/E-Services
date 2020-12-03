<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- konten modal-->
                                <div class="modal-content modal-lg" role="document">
                                    <!-- heading modal -->
                                    <div class="modal-header" >
                                        
                                        <h4 class="modal-title"><center><b>Tambah Pengelola</b></center></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- body modal -->
                                    <div class="modal-body">
                                    <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-700">
                                        <div class="box box-info">
                                            <form method="post" action="/tambah/admin">
                                                <div class="form-group">
                                                    <label style="width:180px;">NIK</label>
                                                    <select name="nik" id="nik" class="form-control" style="width:400px;">
                                                        <option value="">Nama</option>
                                                        @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('change','#id', function(e){
                var id = e.target.value;
                console.log(id);
                $.get('{{ url('pengelola')}}/'+id, function(data){
                    document.getElementById('name').value = data.name;
                });
            });
        });
    </script>







                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- footer modal -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- Modal -->  