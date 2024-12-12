<?php

namespace App\Http\Livewire;

use App\Http\Livewire\BaseLivewireComponent;
use App\Services\GoogleAnalyticsService;
use App\Services\ReportService;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

class ReportLivewire extends BaseLivewireComponent
{
    public $startDate;
    public $endDate;

    public $soLuongTruyCap = 0;
    public $soNguoiBan = 0;
    public $soNguoiBanMoi = 0;
    public $tongSoSanPham = 0;
    public $soSanPhamMoi = 0;
    public $soLuongGiaoDich = 0;
    public $tongSoDonHangThanhCong = 0;
    public $tongSoDonHangKhongThanhCong = 0;
    public $tongGiaTriGiaoDich = 0;
    protected $rules = [
        'startDate' => 'required|date',
        'endDate' => 'required|date|after_or_equal:startDate',
    ];

    public function mount()
    {
        $this->startDate = '';
        $this->endDate = now()->format('Y-m-d');
        $analyticsData = GoogleAnalyticsService::index();
        $this->soLuongTruyCap = $analyticsData['totalScreenPageViews'];

        $this->loadData();
    }
    
    public function submit() {
        $this->validate();
        $this->loadData();
    }

    public function loadData()
    {
        $analyticsData = GoogleAnalyticsService::index($this->startDate, $this->endDate);
        $this->soLuongTruyCap = $analyticsData['totalScreenPageViews'];
        $this->soNguoiBan = $this->getTotalVendorsProperty();
        $this->soNguoiBanMoi = $this->getTotalVendorsInYearProperty();
        $this->tongSoSanPham = $this->getTotalProductsProperty();
        $this->soSanPhamMoi = $this->getTotalProductsInYearProperty();
        $this->soLuongGiaoDich = $this->getTotalOrdersProperty();
        $this->tongSoDonHangThanhCong = $this->getTotalCompletedOrderProperty();
        $this->tongSoDonHangKhongThanhCong = $this->getTotalFailedOrderProperty();
        $this->tongGiaTriGiaoDich = $this->getTotalSalesProperty();
    }
  
    public function getTotalVendorsProperty()
    {
        $query = Vendor::query();
        $query = $this->dateQuery($query); // Apply date filters
        return $query->count();
    }

    public function getTotalVendorsInYearProperty()
    {
        $query = Vendor::whereYear('created_at', Carbon::now()->year);
        $query = $this->dateQuery($query); // Apply date filters
        return $query->count();
    }

    public function getTotalProductsProperty()
    {
        $query = Product::active()->currentlyOpen();
        $query = $this->dateQuery($query); // Apply date filters
        return $query->count();
    }

    public function getTotalProductsInYearProperty()
    {
        $query = Product::active()->currentlyOpen()->whereYear('created_at', Carbon::now()->year);
        $query = $this->dateQuery($query); // Apply date filters
        return $query->count();
    }

    public function getTotalOrdersProperty()
    {
        $query = Order::query();
        $query = $this->dateQuery($query); // Apply date filters
        return $query->count();
    }

    public function getTotalCompletedOrderProperty()
    {
        $query = Order::currentStatus(['completed', 'delivered']);
        $query = $this->dateQuery($query); // Apply date filters
        return $query->count();
    }

    public function getTotalFailedOrderProperty()
    {
        $query = Order::currentStatus(['failed']);
        $query = $this->dateQuery($query); // Apply date filters
        return $query->count();
    }

    public function getTotalSalesProperty()
    {
        $query = Order::currentStatus(['completed', 'delivered']);
        $query = $this->dateQuery($query); // Apply date filters
        return intval($query->sum('total'));
    }

    public function dateQuery($query)
    {
        if (config('app.use_secondary_db', false)) {
            $query = \DB::connection('mysql_secondary')->table($query->getQuery()->from);
        }

        $query = $query->when($this->startDate, function ($query) {
            return $query->whereDate("created_at", ">=", $this->startDate);
        })
        ->when($this->endDate, function ($query) {
            return $query->whereDate("created_at", "<=", $this->endDate);
        });

        return $query;
    }
    
    public function render()
    {
        return view('livewire.report-livewire');
    }
}
