<div class="sidebar-wrapper">
         <div class="sidebar sidebar-collapse" id="sidebar">
            <div class="sidebar__menu-group">
               <ul class="sidebar_nav">
                  <li >
                     <a   class="nav-link {{ request()->is('dashboard') ? 'active' : '' }} " href="{{route('dashboard')}}"    >
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard</span>
                     </a>
                  <li >
                  
                  <li class="menu-title mt-30">
                     <span>Applications</span>
                  </li>
                  <!--<li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-envelope"></span>
                        <span class="menu-text">Mail</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="/mail">Inbox</a>
                        </li>
                        <li class="">
                           <a href="read-email.html">Send
                              Email</a>
                        </li>
                     </ul>
                  </li>-->
                  <li class="has-child {{ request()->is('masterdata*') ? 'open' : '' }}">
                     <a href="#" class="{{ request()->is('masterdata*') ? 'active' : '' }}"  >
                        <span class="nav-icon uil uil-bag"></span>
                        <span class="menu-text text-initial">Master Data</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="{{ request()->is('masterdata/country*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.country')}}">Country</a>
                        </li>
                        <li class="{{ request()->is('masterdata/city*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.city')}}">City</a>
                        </li>
                        <li class="{{ request()->is('masterdata/agent*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.agent')}}">Agent
                              </a>
                        </li>
                        <li class="{{ request()->is('masterdata/customer*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.customer')}}">
                              Customer</a>
                        </li>
                        <li class="{{ request()->is('masterdata/users*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.users')}}">users</a>
                        </li>
                        <li class="{{ request()->is('masterdata/ratecustomer*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.ratecustomer')}}">Rate Customer</a>
                        </li>
                        <li class="{{ request()->is('masterdata/vendor*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.vendor')}}">Vendor</a>
                        </li>
                        <li class="{{ request()->is('masterdata/traffic*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.traffic')}}">Traffic</a>
                        </li>
                        <li class="{{ request()->is('masterdata/pricelistagentoutbound*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.pricelistagentoutbound')}}">Pricelist Agent Outbound</a>
                        </li>
                        <li class="{{ request()->is('masterdata/pricelistagentinbound*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.pricelistagentinbound')}}">Pricelist Agent Inboubd</a>
                        </li> <li class="{{ request()->is('masterdata/pricelistagentcross*') ? 'active' : '' }}">
                           <a href="{{route('masterdata.pricelistagentcross')}}">Pricelist Agent Cross</a>
                        </li>
                        
                        


                     </ul>
                  </li>
                 
                  
                  <li class="has-child {{ request()->is('application*') ? 'open' : '' }}">
                     <a href="#" class="{{ request()->is('application*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-folder"></span>
                        <span class="menu-text">Application</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="{{ request()->is('application/booking*') ? 'active' : '' }}">
                           <a href="{{route('application.booking')}}">Booking</a>
                        </li>
                        <li class="{{ request()->is('application/pickup*') ? 'active' : '' }}">
                           <a href="{{route('application.pickup')}}">Pickup</a>
                        </li>
                        <li class="{{ request()->is('application/manifest-pickup*') ? 'active' : '' }}">
                           <a href="{{route('application.manifest-pickup')}}">Manifest Pickup</a>
                        </li>
                        <li class="{{ request()->is('application/manifest-outbound*') ? 'active' : '' }}">
                           <a href="{{route('application.manifest-outbound')}}">Manifest Outbound</a>
                        </li>
                        <li class="{{ request()->is('application/manifest-inbound*') ? 'active' : '' }}">
                           <a href="{{route('application.manifest-inbound')}}">Manifest Inbound</a>
                        </li>
                        <li class="{{ request()->is('application/manifest-delivery*') ? 'active' : '' }}">
                           <a href="{{route('application.manifest-delivery')}}">Manifest Delivery</a>
                        </li>
                        <li class="{{ request()->is('application/delivery*') ? 'active' : '' }}">
                           <a href="{{route('application.delivery')}}">Delivery</a>
                        </li>
                        <li class="{{ request()->is('application/airwaybill*') ? 'active' : '' }}">
                           <a href="{{route('application.airwaybill')}}">Airwaybill</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child {{ request()->is('finance*') ? 'open' : '' }}">
                     <a href="#" class="{{ request()->is('finance*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-dollar-alt"></span>
                        <span class="menu-text">Finance</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="#{{ request()->is('finance/costing-pickup*') ? 'active' : '' }}">
                           <a href="{{route('finance.costing-pickup')}}">Costing Pickup</a>
                        </li>
                        <li class="{{ request()->is('finance/costing-delivery*') ? 'active' : '' }}">
                           <a href="{{route('finance.costing-delivery')}}">Costing Delivery</a>
                        </li>
                        <li class="{{ request()->is('finance/costing-outbound*') ? 'active' : '' }}">
                           <a href="{{route('finance.costing-outbound')}}">Costing Outbound</a>
                        </li>
                        <li class="{{ request()->is('finance/costing-inbound*') ? 'active' : '' }}">
                           <a href="{{route('finance.costing-inbound')}}">Costing Inbound</a>
                        </li>
                        <li class="{{ request()->is('finance/costing-cross-city*') ? 'active' : '' }}">
                           <a href="{{route('finance.costing-cross-city')}}">Costing Cross City</a>
                        </li>
                        <li class="{{ request()->is('finance/invoice-agent*') ? 'active' : '' }}">
                           <a href="{{route('finance.invoice-agent')}}">Invoice Agent</a>
                        </li>
                        <li class="{{ request()->is('finance/invoice-agent-compare*') ? 'active' : '' }}">
                           <a href="{{route('finance.invoice-agent-compare')}}">Invoice Agent Compare</a>
                        </li>
                        <li class="{{ request()->is('finance/invoice-customer*') ? 'active' : '' }}">
                           <a href="{{route('finance.invoice-customer')}}">Invoice Customer</a>
                        </li>
                       
                        <li class="{{ request()->is('finance/invoice-or*') ? 'active' : '' }}">
                           <a href="{{route('finance.invoice-or')}}">Invoice OR</a>
                        </li>
                        <li class="{{ request()->is('finance/profit-loss*') ? 'active' : '' }}">
                           <a href="{{route('finance.profit-loss')}}">Profit & Loss</a>
                        </li>
                        <li class="{{ request()->is('finance/awb-uninvoiced*') ? 'active' : '' }}">
                           <a href="{{route('finance.awb-uninvoiced')}}">AWB Uninvoiced</a>
                        </li>
                     </ul>
                  </li>
                  
                  
                  <li class="has-child {{ request()->is('warehouse*') ? 'open' : '' }}">
                     <a href="#" class="{{ request()->is('warehouse*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-home"></span>
                        <span class="menu-text">Warehouse</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="{{ request()->is('warehouse/rack*') ? 'active' : '' }}">
                           <a href="{{route('warehouse.rack')}}">Rack</a>
                        </li>
                        <li class="{{ request()->is('warehouse/inventory*') ? 'active' : '' }}">
                           <a href="{{route('warehouse.inventory')}}">Inventory</a>
                        </li>
                        <li class="{{ request()->is('warehouse/report*') ? 'active' : '' }}">
                           <a href="{{route('warehouse.report')}}">Report
                              Warhouse</a>
                        </li>
                        <li class="{{ request()->is('warehouse/booking*') ? 'active' : '' }}">
                           <a href="{{route('warehouse.booking')}}">Booking AWB Warehouse  </a>
                        </li>
                        
                     </ul>
                  </li>
                  <li class="has-child {{ request()->is('report*') ? 'open' : '' }}">
                     <a href="#" class="{{ request()->is('report*') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-print"></span>
                        <span class="menu-text">Report</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>                        
                        <li class="{{ request()->is('report/awb-by-customer*') ? 'active' : '' }}">
                           <a href="{{route('report.awb-by-customer')}}">Airwaybill By Customer</a>
                        </li>
                        <li class="{{ request()->is('report/manifest-pickup*') ? 'active' : '' }}">
                           <a href="{{route('report.manifest-pickup')}}">Manifest Pickup</a>                              
                        </li>
                        <li class="{{ request()->is('report/manifest-outbound*') ? 'active' : '' }}">
                           <a href="{{route('report.manifest-outbound')}}">Manifest Outbound</a>                              
                        </li>
                        <li class="{{ request()->is('report/manifest-inbound*') ? 'active' : '' }}">
                           <a href="{{route('report.manifest-inbound')}}">Manifest Inbound</a>                              
                        </li>
                        <li class="{{ request()->is('report/manifest-delivery*') ? 'active' : '' }}">
                           <a href="{{route('report.manifest-delivery')}}">Manifest Delivery</a>                              
                        </li>                        
                     </ul>
                  </li>
                  
               </ul>
            </div>
         </div>
      </div>