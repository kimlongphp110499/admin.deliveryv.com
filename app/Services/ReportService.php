<?php

namespace App\Services;

use App\Models\Vendor;
use App\Models\Order;
use App\Models\Commission;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Numbers\Number;

class ReportService
{

    public function __constuct()
    {
        //
    }
   ////soNguoiBan
//    public function getTotalVendorsProperty()
//    {
//        return Number::n(Vendor::count())->round(3)->getSuffixNotation()->number;
//    }

   ////soNguoiBanMoi
//    public function getTotalVendorsInYearProperty()
//    {
//        return Number::n(Vendor::whereYear('created_at', Carbon::now()->year)->count())->round(3)->getSuffixNotation()->number;
//    }

    //tongSoSanPham
    // public function getTotalProductsProperty()
    // {
    //     return Product::active()->currentlyOpen()->count();
    // }

    ////soSanPhamMoi
    // public function getTotalProductsInYearProperty()
    // {
    //     return Product::active()->currentlyOpen()->whereYear('created_at', Carbon::now()->year)->count();
    // }  

    ////soLuongGiaoDich
    // public function getTotalOrdersProperty()
    // {
    //     return Number::n(Order::count())->round(3)->getSuffixNotation()->number;
    // }

    ////tongSoDonHangThanhCong
    // public function getTotalCompletedOrderProperty()
    // {
    //     return Order::currentStatus(['completed', 'delivered'])->count();
    // }

    ////tongSoDonHangKhongThanhCong
    // public function getTotalFailedOrderProperty()
    // {
    //     return Order::currentStatus(['failed'])->count();
    // }

    ////tongGiaTriGiaoDich
    // public function getTotalSalesProperty()
    // {
    //     return intval(Order::currentStatus(['completed', 'delivered'])->sum('total'));
    // }
        // Tổng số sản phẩm
        public function getTotalVendorsProperty()
        {
            $query = Vendor::query();
            $query = $this->builderQuery($query); // Apply date filters
            return $query->count();
        }
    
        public function getTotalVendorsInYearProperty()
        {
            $query = Vendor::whereYear('created_at', Carbon::now()->year);
            $query = $this->builderQuery($query); // Apply date filters
            return $query->count();
        }
    
        public function getTotalProductsProperty()
        {
            $query = Product::active()->currentlyOpen();
            $query = $this->builderQuery($query); // Apply date filters
            return $query->count();
        }
    
        public function getTotalProductsInYearProperty()
        {
            $query = Product::active()->currentlyOpen()->whereYear('created_at', Carbon::now()->year);
            $query = $this->builderQuery($query); // Apply date filters
            return $query->count();
        }
    
        public function getTotalOrdersProperty()
        {
            $query = Order::query();
            $query = $this->builderQuery($query); // Apply date filters
            return $query->count();
        }
    
        public function getTotalCompletedOrderProperty()
        {
            $query = Order::currentStatus(['completed', 'delivered']);
            $query = $this->builderQuery($query); // Apply date filters
            return $query->count();
        }
    
        public function getTotalFailedOrderProperty()
        {
            $query = Order::currentStatus(['failed']);
            $query = $this->builderQuery($query); // Apply date filters
            return $query->count();
        }
    
        public function getTotalSalesProperty()
        {
            $query = Order::currentStatus(['completed', 'delivered']);
            $query = $this->builderQuery($query); // Apply date filters
            return intval($query->sum('total'));
        }
    
        public function builderQuery($query)
        {
            if (config('app.use_secondary_db', false)) {
                $query = \DB::connection('mysql_secondary')->table($query->getQuery()->from);
            }
    
            return $query;
        }
}
