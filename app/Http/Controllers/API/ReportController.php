<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Services\GoogleAnalyticsService;
use App\Services\ReportService;

class ReportController extends Controller
{

    public function __construct(GoogleAnalyticsService $analyticsService, ReportService $reportService)
    {
        $this->analyticsService = $analyticsService;
        $this->reportService = $reportService;
    }

    public function index(Request $request)
    {
        $bctUser = env('BO_CONG_THUONG_ACCOUNT_USER', '');
        $bctPassword = env('BO_CONG_THUONG_ACCOUNT_PASSWORD', '');
        $userName = $request->input('UserName');
        $password = $request->input('Password');
    
        if ($userName !== $bctUser || $password !== $bctPassword) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }
        $analyticsData  = $this->analyticsService->index();
        $soNguoiBan = $this->reportService->getTotalVendorsProperty();
        $soNguoiBanMoi = $this->reportService->getTotalVendorsInYearProperty();
        $tongSoSanPham = $this->reportService->getTotalProductsProperty();
        $soSanPhamMoi = $this->reportService->getTotalProductsInYearProperty();
        $soLuongGiaoDich = $this->reportService->getTotalOrdersProperty();
        $tongSoDonHangThanhCong = $this->reportService->getTotalCompletedOrderProperty();
        $tongSoDonHangKhongThanhCong = $this->reportService->getTotalFailedOrderProperty();
        $tongGiaTriGiaoDich = $this->reportService->getTotalSalesProperty();

        $reportData = new Report();
        $reportData->soLuongTruyCap = $analyticsData['totalScreenPageViews'];
        $reportData->soNguoiBan = $soNguoiBan;
        $reportData->soNguoiBanMoi = $soNguoiBanMoi;
        $reportData->tongSoSanPham = $tongSoSanPham;
        $reportData->soSanPhamMoi = $soSanPhamMoi;
        $reportData->soLuongGiaoDich = $soLuongGiaoDich;
        $reportData->tongSoDonHangThanhCong = $tongSoDonHangThanhCong;
        $reportData->tongSoDonHangKhongThanhCong = $tongSoDonHangKhongThanhCong;
        $reportData->tongGiaTriGiaoDich = $tongGiaTriGiaoDich;
        return response()->json($reportData, 200);

    }
}
