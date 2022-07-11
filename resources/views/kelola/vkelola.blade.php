 @extends('master')
 @section('content')
 <style>
    .dataTables_wrapper .dataTables_length select {
      height: 29px;
      margin-bottom: 10px;
      font-size: 10px;
    }
    .dataTables_wrapper .dataTables_paginate{
      font-size: 12px;
    }
    .dataTables_paginate .paging_simple_numbers{
      margin-top: 50px;
    }
 </style>
 {{-- content --}}
 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        {{-- <h4 class="card-title">Kelola Kons</h4> --}}
        <div class="d-flex flex-row justify-content-between">
            <p class="card-description">
              <code>Data Rumah</code> 
            </p>
            <button type="button" class="btn btn-success btn-sm ">Tambah</button>
        </div>
        <div class="table-responsive pt-3">
          <table id="table_id" class=" tab-abi table-bordered table-hover table-striped display" style="width:100%">
            <thead style="background-color: rgb(75, 73, 172); color: rgb(255, 255, 255);">
              <tr>
                <th style="width: 1%">
                  #
                </th>
                <th style="width: 10%">
                  Ukuran Rumah (meter persegi)
                </th>
                <th style="width: 10%">
                  Jumlah Kamar Tidur
                </th>
                <th style="width: 15%">
                  Harga
                </th>
                <th style="width: 40px">
                  Alamat
                </th>
                <th style="width: 10%">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
                @foreach ($house as $h)
                  <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $h->ukuran }}</td>
                    <td>{{ $h->jml_kamar }}</td>
                    <td>{{ $h->harga }}</td>
                    <td>{{ $h->alamat }}</td>
                    <td >
                      <a type="button" href="#">
                        <span  class="badge badge-warning" style="font-size:10px"> Edit</span>
                      </a>
                      <a type="button" href="#">
                        <span  class="badge badge-danger" style="font-size:10px"> Delete</span>
                      </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  {{-- endcontent --}}
  @endsection