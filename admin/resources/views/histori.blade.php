@extends('layouts.master')
@section('content')

        <!-- page content -->
        


            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Histori</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Jenis Laporan</th>
                          <th>Nama</th>
                          <th>Jenis Barang</th>
                          <th>Nama barang</th>
                          <th>Dekripsi</th>
                          <th>Tempat</th>
                          <th>Waktu</th>
                          <th>Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($tampil as $dt)
                            <tr>
                                <td></td>
                                <td>{{$dt->ID_user}}</td>
                                <td>{{$dt->Kategori}}</td>
                                <td>{{$dt->Nama_Barang}}</td>
                                <td>{{$dt->Deskripsi}}</td>
                                <td>{{$dt->Tempat}}</td>
                                <td>{{$dt->Waktu}}</td>
                                <td>{{$dt->Foto}}</td>
                                <td><a href="#edit" data-toggle="modal" class="btn btn-info" style="margin:8px;">Selesai</a></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


@endsection