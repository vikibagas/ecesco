@extends('layout.app')

@section('title') Country @endsection
@section('title-header') Country @endsection
@section('breadcrumb') 

<li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Master Data</a></li>
<li class="breadcrumb-item active" aria-current="page">Country</li>

@endsection

@section('css')
<link href="https://cdn.datatables.net/v/bs5/dt-2.1.0/datatables.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="row">
               <div class="col-12 mb-30">
                  <div class="support-ticket-system support-ticket-system--search">

                     <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                           <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                              <a href="#" class="btn btn-primary"">Add New</a>
                           </div>
                        </div>
                        
                     </div>

                     
                              
                     <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                        <div class="table-responsive">
                           <table class="table mb-0 table-borderless " id="countrytable">
                              <thead>
                                 <tr class="userDatatable-header">
                                    <th>
                                       <span class="userDatatable-title">ID</span>
                                    </th>
                                    
                                    <th>
                                       <span class="userDatatable-title">Country</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Code</span>
                                    </th>
                                    <th>
                                       <span class="userDatatable-title">Action</span>
                                    </th>
                                    
                                 </tr>
                              </thead>
                              <tbody>
                                
                                 <tr>
                                    <td>#01</td>
                                    <td>Negara</td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">active</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                         
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                             </a>
                                          </li>
                                       </ul>
                                    </td>
                                 </tr>
                                    @foreach($countries as $country)
                                    <tr>
                                    <td>{{ $country->id_negara }}</td>
                                    <td>{{ $country->nama_negara }}</td>
                                    <td>
                                       <div class="userDatatable-content d-inline-block">
                                          <span class="bg-opacity-success  color-success userDatatable-content-status active">active</span>
                                       </div>
                                    </td>
                                    <td>
                                       <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                         
                                          <li>
                                             <a href="#" class="edit">
                                                <i class="uil uil-edit"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#" class="remove">
                                                <i class="uil uil-trash-alt"></i>
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
        $('#countrytable').DataTable();
    } );
</script>
@endsection