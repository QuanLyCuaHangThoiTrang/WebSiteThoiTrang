<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChiTietSanPham;
use App\Models\KichThuoc;
use App\Models\MauSac;

class ProductDetailController extends Controller
{
    public function index($MaSP, $MaSize, $MaMau)
    {
       // Lấy chi tiết sản phẩm theo các tham số
        $chiTietSanPham = ChiTietSanPham::where('MaSP', $MaSP)
                                        ->where('MaSize', $MaSize)
                                        ->where('MaMau', $MaMau)
                                        ->first();

        if (!$chiTietSanPham) {
            return abort(404, 'Chi tiết sản phẩm không tồn tại.');
        }
        $mauSacIds = ChiTietSanPham::where('MaSP', $MaSP)
                                    ->pluck('MaMau');
        $MauSac = MauSac::whereIn('MaMau', $mauSacIds)->get();

        $KichThuocIds = ChiTietSanPham::where('MaSP', $MaSP)
                                    ->where('MaMau',$MaMau)
                                    ->pluck('MaSize');
        $KichThuoc = KichThuoc::whereIn('MaSize', $KichThuocIds)->get();
        
        $SoLuongTonKho = $chiTietSanPham->SoLuongTonKho;
    
        // Truyền dữ liệu vào view
        return view('product_detail.index', [
                                            'chiTietSanPham' => $chiTietSanPham,
                                            'MauSac' => $MauSac, 
                                            'KichThuoc' => $KichThuoc,
                                            'SoLuongTonKho' => $SoLuongTonKho,
                                            ]);
    }
    public function getSizesByColor($MaMau,$MaSP)
    {
        // Lấy tất cả các kích thước tương ứng với mã màu
        $kichThuocIds = ChiTietSanPham::where('MaMau', $MaMau)
                                    ->where('MaSP',$MaSP)
                                    ->pluck('MaSize');
                                    
        $KichThuoc = KichThuoc::whereIn('MaSize', $kichThuocIds)->get();

        return response()->json($KichThuoc);
    }
    public function getProductDetails($maMau)
    {
        $chiTietSanPham = ChiTietSanPham::where('MaMau', $maMau)
                                        ->first(['SoLuongTonKho']);

        if ($chiTietSanPham) {
            return response()->json([
                'SoLuongTonKho' => $chiTietSanPham->SoLuongTonKho,
                
            ]);
        } else {
            return response()->json(['error' => 'Chi tiết sản phẩm không tồn tại.'], 404);
        }
    }
    public function getProductDetails1($MaSP, $MaSize, $MaMau)
    {
        // Lấy chi tiết sản phẩm dựa trên mã sản phẩm, kích thước, và màu
        $chiTietSanPham = ChiTietSanPham::where('MaSP', $MaSP)
                                        ->where('MaSize', $MaSize)
                                        ->where('MaMau', $MaMau)
                                        ->first();

        if ($chiTietSanPham) {
            return response()->json([
                'SoLuongTonKho' => $chiTietSanPham->SoLuongTonKho
            ]);
        } else {
            return response()->json(['error' => 'Chi tiết sản phẩm không tồn tại.'], 404);
        }
    }
}
