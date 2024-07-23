@extends('layout.app')

@section('title') dashboard @endsection
@section('title-header') Dashboard @endsection
@section('breadcrumb') 

<li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>


@endsection

@section('css')

@endsection

@section('content')
                <div class="row">
                  <div class="col-xxl-12 mb-25">
                     <div class="card banner-feature--18 d-flex">
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-xl-6">
                                 <div class="card-body px-25">
                                    <h1 class="banner-feature__heading color-white">Welcome To E-CESCO Dashboard</h1>
                                    <p class="banner-feature__para color-white">E-CESCO makes goods delivery activities easy
                                    </p>
                                    <div class="d-flex justify-content-sm-start justify-content-center">
                                       <button class="banner-feature__btn btn btn-primary color-white btn-md px-20 radius-xs fs-15" type="button">Learn More</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="banner-feature__shape px-md-25 px-25 py-sm-0 pt-15 pb-30 d-flex justify-content-sm-end justify-content-center">
                                    <img src="img/header-banner.png" alt="img" class="svg">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-sm-6 mb-25">
                     <!-- Card 1  -->
                     <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">





                        <div class="overview-content w-100">
                           <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                              <div class="ap-po-details__titlebar">
                                 <h1>1507</h1>
                                 <p>Total Airwaybill Success (This Month)</p>
                              </div>
                              <div class="ap-po-details__icon-area">
                                 <div class="svg-icon order-bg-opacity-primary color-primary">

                                    <i class="uil uil-plane"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="ap-po-details-time">
                              <span class="color-success"><i class="las la-arrow-up"></i>
                                 <strong>7.36%</strong></span>
                              <small>Since last month</small>
                           </div>
                        </div>

                     </div>
                     <!-- Card 1 End  -->
                  </div>
                  <div class="col-xxl-3 col-sm-6 mb-25">
                     <!-- Card 2  -->
                     <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">





                        <div class="overview-content w-100">
                           <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                              <div class="ap-po-details__titlebar">
                                 <h1>23.478</h1>
                                 <p>Total KG  (Last Month)</p>
                              </div>
                              <div class="ap-po-details__icon-area">
                                 <div class="svg-icon order-bg-opacity-primary color-primary">

                                    <i class="uil uil-chart"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="ap-po-details-time">
                              <span class="color-danger"><i class="las la-arrow-down"></i>
                                 <strong>4.36%</strong></span>
                              <small>Since last month</small>
                           </div>
                        </div>

                     </div>
                     <!-- Card 2 End  -->
                  </div>
                  <div class="col-xxl-3 col-sm-6 mb-25">
                     <!-- Card 3 -->
                     <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">





                        <div class="overview-content w-100">
                           <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                              <div class="ap-po-details__titlebar">
                                 <h1>Rp. 2.987.654</h1><h5></h5>
                                 <p>Total Sales(This Month) (EXAMPLE)</p>
                              </div>
                              <div class="ap-po-details__icon-area">
                                 <div class="svg-icon order-bg-opacity-secondary color-secondary">

                                    <i class="uil uil-usd-circle"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="ap-po-details-time">
                              <span class="color-success"><i class="las la-arrow-up"></i>
                                 <strong>9.36%</strong></span>
                              <small>Since last month</small>
                           </div>
                        </div>

                     </div>
                     <!-- Card 3 End  -->
                  </div>
                  <div class="col-xxl-3 col-sm-6 mb-25">
                     <!-- Card 4  -->
                     <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">





                        <div class="overview-content w-100">
                           <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                              <div class="ap-po-details__titlebar">
                                 <h1>2</h1>
                                 <p>New Customers</p>
                              </div>
                              <div class="ap-po-details__icon-area">
                                 <div class="svg-icon order-bg-opacity-warning color-warning">

                                    <i class="uil uil-users-alt"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="ap-po-details-time">
                              <span class="color-success"><i class="las la-arrow-up"></i>
                                 <strong>25.36%</strong></span>
                              <small>Since last month</small>
                           </div>
                        </div>

                     </div>
                     <!-- Card 4 End  -->
                  </div>
                  <div class="col-xxl-12 col-lg-12 mb-25">

                     <div class="card border-0 chartLine-po-details h-100">
                        <div class="card-header border-0 px-25 pt-25 pb-30">





                           <div class="chartLine-po-details__overview-content w-100">
                              <div class=" chartLine-po-details__content d-flex flex-wrap justify-content-between">
                                 <div class="chartLine-po-details__titlebar">
                                    <h1>Total Sales (EXAMPLE)</h1>
                                    <p>(LAST 6 months)</p>
                                 </div>
                              </div>
                              <div class="chartLine-po-details__time">
                                 <h5>Rp 1.017.023.213</h5>
                                 <span class="color-success"><i class="fas fa-arrow-up"></i>
                                    <strong>11.36%</strong></span>
                              </div>
                           </div>

                        </div>
                        <!-- ends: .card-header -->
                        <div class="card-body">
                           <div class="wp-chart">
                              <div class="parentContainer">


                                 <div>
                                    <canvas id="totalSaleMonth"></canvas>
                                 </div>


                              </div>
                           </div>
                        </div>
                        <!-- ends: .card-body -->
                     </div>

                  </div>
                  <div class="col-xxl-12 col-lg-12 mb-25">

                     <div class="card revenueChartTwo border-0">
                        <div class="card-header">
                           <h6>Airwaybill has been invoiced (This Month) (EXAMPLE)</h6>
                           
                        </div>
                        <!-- ends: .card-header -->
                        <div class="card-body px-sm-50 pb-sm-30 pt-sm-50 px-30 pb-30 pt-25">
                           <div class="parentContainer position-relative">

                              <div class="storage color-primary">
                                 <div class="storage"></div>
                              </div>

                           </div>
                           <div class="sales-target d-flex justify-content-around mt-20">
                              <div class="sales-target__single">
                                 <span>Completed</span>
                                 <h3>921</h3>
                              </div>
                              <!-- ends: .cashflow-display__single -->
                              <div class="sales-target__single">
                                 <span>In progress</span>
                                 <h3>65</h3>
                              </div>
                              <!-- ends: .cashflow-display__single -->
                           </div>
                           <!-- ends: .performance-stats -->
                        </div>
                        <!-- ends: .card-body -->
                     </div>

                  </div>
                  

                  
               </div>
@endsection


@section('scripts')
   <script src="{{ asset('assets/vendor_assets/js/Chart.min.js') }}"></script>
   <script src="{{ asset('assets/vendor_assets/js/apexcharts.min.js') }}"></script>
   <script src="{{ asset('assets/theme_assets/js/charts.js') }}"></script>
   
   
   
   
   <script>
    function storage(idName, series, height) {
    var storage = {
        chart: {
            height: height,
            type: "radialBar"
        },

        series: series,

        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 15,
                    size: "70%",
                },

                dataLabels: {
                    showOn: "always",
                    style: {
                        fontFamily: 'Jost, sans-serif',
                    },
                    name: {
                        show: false,
                    },
                    value: {
                        color: "currentColor",
                        fontSize: "45px",
                        fontWeight: "600",
                        offsetY: 20,
                        show: true,
                        formatter: function (val) {
                            return val + '%'
                        }
                    },
                    track: {
                        background: "rgba(130,49,211, .10)",
                    },
                }
            }
        },

        colors: ["currentColor"],
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                type: "horizontal",
                gradientToColors: ["currentColor"],
                stops: [0, 100]
            }
        },

        grid: {
            padding: {
                top: -23,
                bottom: -16,
            }
        },

        stroke: {
            lineCap: "round",
        },
    };
    if ($(idName).length > 0) {
        new ApexCharts(document.querySelector(idName), storage).render();
    }
}
storage('.storage', [90], 271);

    $(document).ready( function () {
        $('#bookingtable').DataTable();
        
    } );

    
</script>
@endsection