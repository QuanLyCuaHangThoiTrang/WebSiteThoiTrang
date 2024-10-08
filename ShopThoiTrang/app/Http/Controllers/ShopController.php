<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSanPham;
use Illuminate\Http\Request;
use App\Models\SanPham;

class ShopController extends Controller
{
    public function index()
    {
        $chiTietSanPhams = ChiTietSanPham::with(['sanPham', 'kichThuoc', 'mauSac'])
        ->whereHas('sanPham', function($query) {
            $query->where('TrangThai', 1); // Kiểm tra trạng thái của sản phẩm
        })
        ->whereIn('MaCTSP', function($query) {
            // Truy vấn con để lấy MaCTSP đầu tiên cho mỗi MaSP
            $query->selectRaw('MIN(MaCTSP)')
                ->from('chitietsanpham')
                ->groupBy('MaSP');
        })
        ->paginate(1); // Phân trang với 10 mục trên mỗi trang

    // Truyền dữ liệu vào view
    return view('shop.index', ['chiTietSanPhams' => $chiTietSanPhams]);
    }  
    
}
