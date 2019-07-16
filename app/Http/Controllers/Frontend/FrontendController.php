<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Loai;
use DB;
use Mail;
use App\Mail\ContactMailer;
class FrontEndController extends Controller
{
    public function index(Request $request){
        //Query top 3 sản phẩm mới nhất
        // Query builder
        $ds_top3_newest_loaisanpham = DB::table('cusc_loai')
            ->join('cusc_sanpham','cusc_loai.l_ma','=','cusc_sanpham.l_ma')
            ->orderBy('sp_capNhat')->take(3)->get();

        //query tìm danh sách sản phẩm
        $danhsachsanpham = $this->searchSanPham($request);

        return view('frontend.index')
                ->with('ds_top3_newest_loaisanpham',$ds_top3_newest_loaisanpham)
                ->with('danhsachsanpham',$danhsachsanpham);
    }

        /**
     * Hàm query danh sách sản phẩm theo nhiều điều kiện
     */
    private function searchSanPham(Request $request)
    {
        $query = DB::table('cusc_sanpham')->select('*');
        // Kiểm tra điều kiện `searchByLoaiMa`
        $searchByLoaiMa = $request->query('searchByLoaiMa');
        if ($searchByLoaiMa != null) {
        }
        $data = $query->get();
        return $data;
    }

        /**
     * Action hiển thị view Giới thiệu
     * GET /about
     */
    public function about()
    {
        return view('frontend.pages.about');
    }

        /** * Action hiển thị view Liên hệ * GET /contact */
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Action gởi email với các lời nhắn nhận được từ khách hàng
     * POST /lien-he/goi-loi-nhan
     */
    public function sendMailContactForm(Request $request)
    {
        $input = $request->all();
        Mail::to('dnmkhoi@cusc.ctu.edu.vn')->send(new ContactMailer($input));
        return $input;
    }
}
