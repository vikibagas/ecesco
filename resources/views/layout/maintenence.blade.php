@extends('layout.app')

@section('title') Maintenence @endsection

@section('css')

@endsection

@section('content')
<div class="container-fluid">
            <div class="row justify-content-center">
               <div class="col-12">
                  <div class="min-vh-40 content-center">
                     <div class="maintenance-page text-center">
                        <img src="{{URL('img/svg/maintenance.svg')}}" alt="maintenance" class="svg" />
                        <h5 class="maintenance-page__title">We are currently performing maintenance</h5>
                        <p class="fw-500">We're making the system more awesome.We'll be back shortly.</p>
                     </div>
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