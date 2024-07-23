@extends('layout.app')

@section('title') Pickup @endsection
@section('title-header') Pickup @endsection
@section('breadcrumb') 

<li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Application</a></li>
<li class="breadcrumb-item active" aria-current="page">Pickup</li>

@endsection

@section('css')
<link href="https://cdn.datatables.net/v/bs5/dt-2.1.0/datatables.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="row">
               <div class="col-12 mb-30">
                  <div class="support-ticket-system support-ticket-system--search">

                    
                     
                              
                     <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                        <div class="table-responsive">
                           <table class="table mb-0 table-borderless " id="bookingtable">
                              <thead>
                                 <tr class="userDatatable-header">
                                    <th>
                                       <span class="userDatatable-title">Booking Time</span>
                                    </th>
                                    
                                    <th>
                                       <span class="userDatatable-title">Airwaybill</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Status</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Customer</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Kota Asal</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Kota Tujuan</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Service</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Action</span>
                                    </th>
                                    
                                 </tr>
                              </thead>
                              <tbody>
                                
                                 
                                    @foreach($pengiriman as $p)
                                    <tr>
                                    <td>{{ $p->created_date }}</td>
                                    <td>{{ $p->airwaybill_kode }}</td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-warning  color-warning userDatatable-content-status active">pickup</span>
                                       </div>
                                    </td>
                                    <td>{{ $p->kust->nama_kustomer }}</td>
                                    <td>{{ $p->kota_asal }}</td>
                                    <td>{{ $p->kota_tujuan }}</td>
                                    <td>{{ $p->layanan->nama_pelayanan }}</td>
                                    
                                                                 <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                          <li>
                                             <a href="#" title="print" class="edit">
                                                <i class="uil uil-print"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" title="edit" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" title="cancel" class="remove">
                                                <i class="uil uil-cancel"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>
                                    @endforeach


                              </tbody>
                           </table>
                        </div>
                        <div class="d-flex justify-content-end pt-30">

                           


                        </div>
                     </div>
                  </div>
               </div>
@endsection


@section('scripts')
<script src="https://cdn.datatables.net/v/bs5/dt-2.1.0/datatables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#bookingtable').DataTable();
    } );
</script>
@endsection