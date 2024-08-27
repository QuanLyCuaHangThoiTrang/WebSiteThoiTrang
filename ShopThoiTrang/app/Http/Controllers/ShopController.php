<?php

namespace App\Http\Controllers;

use App\Models\ChiTietSanPham;
use Illuminate\Http\Request;
use App\Models\SanPham;

class ShopController extends Controller
{
    public function index()
    {
         // Lấy tất cả chi tiết sản phẩm kèm theo thông tin sản phẩm
         $chiTietSanPhams = ChiTietSanPham::with('sanPham','kichThuoc','mauSac')
         ->whereIn('MaCTSP', function($query) {
             // Truy vấn con để lấy MaCTSP đầu tiên cho mỗi MaSP
             $query->selectRaw('MIN(MaCTSP)')
                 ->from('chitietsanpham')
                 ->groupBy('MaSP');
         })
         ->get();
    
        // Truyền dữ liệu vào view
        return view('shop.index', ['chiTietSanPhams' => $chiTietSanPhams]);
    }  
    public function show($MaSP)
    {
        return '123';
    } 
    public function showct($MaSP)
    {
        return '1234';
    } 
}
