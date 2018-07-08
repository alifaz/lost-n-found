@extends('layouts.master')
@section('content')

        <!-- page content -->
        


            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Klaim</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th colspan="5">Pengklaim</th>
                          <th colspan="4">Penemu</th>
                          <th rowspan="2">Verifikasi</th>
                        </tr>
                        <tr>
                          <th>Nama Pengklaim</th>
                          <th>Jenis Barang</th>
                          <th>Nama barang</th>
                          <th>Dekripsi</th>
                          <th>Foto</th>
                          <th>Nama Penemu</th>
                          <th>Nama barang</th>
                          <th>Dekripsi</th>
                          <th>Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="#edit" data-toggle="modal" class="btn btn-info" style="margin:8px;">Accept</a></td>
                      </tr>
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