<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

use App\Livewire\Masterdata\UsersPage as Us;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Masterdata\CountryController;
use App\Http\Controllers\Application\BookingController;
use App\Http\Controllers\Application\AirwaybillController;

use App\Http\Controllers\Application\PickupController;




Route::group(['middleware' => ['auth']], function () {

    /*Route::get('/dashboard', function () {
        return view('content.dashboard');
    });*/
    //layout via lviveware
    //Route::get('/dashboard',DashboardPage::class);
    //MAIL

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/inbox', function () {
        return view('content.mail');
    });
    Route::get('/outbox', function () {
        return view('content.mail');
    });
    
    //END MAIL

    //MASTER DATA
    Route::get('/masterdata/country', [CountryController::class, 'index'])->name('masterdata.country');
    Route::get('/masterdata/city', function () {
        return view('layout.maintenence');
    })->name('masterdata.city');

    Route::get('/masterdata/agent', function () {
        return view('layout.maintenence');
    })->name('masterdata.agent');

    Route::get('/masterdata/customer', function () {
        return view('layout.maintenence');
    })->name('masterdata.customer');

    Route::get('/masterdata/users', function () {
        return view('layout.maintenence');
    })->name('masterdata.users');

    Route::get('/masterdata/ratecustomer', function () {
        return view('layout.maintenence');
    })->name('masterdata.ratecustomer');

    Route::get('/masterdata/vendor', function () {
        return view('layout.maintenence');
    })->name('masterdata.vendor');

    Route::get('/masterdata/traffic', function () {
        return view('layout.maintenence');
    })->name('masterdata.traffic');

    Route::get('/masterdata/pricelistagentoutbound', function () {
        return view('layout.maintenence');
    })->name('masterdata.pricelistagentoutbound');
    Route::get('/masterdata/pricelistagentinbound', function () {
        return view('layout.maintenence');
    })->name('masterdata.pricelistagentinbound');

    Route::get('/masterdata/pricelistagentcross', function () {
        return view('layout.maintenence');
    })->name('masterdata.pricelistagentcross');
    //END MASTERDATA



    // APPLICATIOn
    Route::get('/application/booking', [BookingController::class, 'index'])->name('application.booking');
    Route::get('/application/airwaybill', [AirwaybillController::class, 'index'])->name('application.airwaybill');
    Route::get('/application/pickup', [PickupController::class, 'index'])->name('application.pickup');
    
    Route::get('/application/manifest-pickup', function () {
        return view('layout.maintenence');
    })->name('application.manifest-pickup');
    
    Route::get('/application/manifest-outbound', function () {
        return view('layout.maintenence');
    })->name('application.manifest-outbound');
    //
    Route::get('/application/manifest-inbound', function () {
        return view('layout.maintenence');
    })->name('application.manifest-inbound');

    Route::get('/application/manifest-delivery', function () {
        return view('layout.maintenence');
    })->name('application.manifest-delivery');
    
    Route::get('/application/delivery', function () {
        return view('layout.maintenence');
    })->name('application.delivery');
    //selesai application

    //mulai finance
    Route::get('/finance/costing-pickup', function () {
        return view('layout.maintenence');
    })->name('finance.costing-pickup');

    Route::get('/finance/costing-delivery', function () {
        return view('layout.maintenence');
    })->name('finance.costing-delivery');
    Route::get('/finance/costing-outbound', function () {
        return view('layout.maintenence');
    })->name('finance.costing-outbound');
    Route::get('/finance/costing-inbound', function () {
        return view('layout.maintenence');
    })->name('finance.costing-inbound');
    Route::get('/finance/costing-cross-city', function () {
        return view('layout.maintenence');
    })->name('finance.costing-cross-city');
    Route::get('/finance/invoice-agent', function () {
        return view('layout.maintenence');
    })->name('finance.invoice-agent');
    Route::get('/finance/invoice-agent-compare', function () {
        return view('layout.maintenence');
    })->name('finance.invoice-agent-compare');
    Route::get('/finance/invoice-customer', function () {
        return view('layout.maintenence');
    })->name('finance.invoice-customer');
    Route::get('/finance/invoice-or', function () {
        return view('layout.maintenence');
    })->name('finance.invoice-or');
    Route::get('/finance/profit-loss', function () {
        return view('layout.maintenence');
    })->name('finance.profit-loss');
    Route::get('/finance/awb-uninvoiced', function () {
        return view('layout.maintenence');
    })->name('finance.awb-uninvoiced');
    //selesai finance

    //mulai report
    Route::get('/report/awb-by-customer', function () {
        return view('layout.maintenence');
    })->name('report.awb-by-customer');
    Route::get('/report/manifest-pickup', function () {
        return view('layout.maintenence');
    })->name('report.manifest-pickup');
    Route::get('/report/manifest-outbound', function () {
        return view('layout.maintenence');
    })->name('report.manifest-outbound');
    Route::get('/report/manifest-inbound', function () {
        return view('layout.maintenence');
    })->name('report.manifest-inbound');
    Route::get('/report/manifest-delivery', function () {
        return view('layout.maintenence');
    })->name('report.manifest-delivery');

    //selesai report
    //mulai warehouse
    Route::get('/warehouse/rack', function () {
        return view('layout.maintenence');
    })->name('warehouse.rack');
    Route::get('/warehouse/inventory', function () {
        return view('layout.maintenence');
    })->name('warehouse.inventory');
    Route::get('/warehouse/report', function () {
        return view('layout.maintenence');
    })->name('warehouse.report');
    Route::get('/warehouse/booking', function () {
        return view('layout.maintenence');
    })->name('warehouse.booking');

    //selsai warehouse
    Route::get('/test_dashboard', function () {
        return view('page_after_login');
    });
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('auth/login');
    });
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/ceklogin', [ 'as' => 'ceklogin', 'uses' => 'App\Http\Controllers\Auth\LoginController@ceklogin'] );
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

/*Route::get('/login', [LoginController::class, 'index']);
Route::post('/ceklogin', [ 'as' => 'ceklogin', 'uses' => 'App\Http\Controllers\Auth\LoginController@ceklogin'] );*/




