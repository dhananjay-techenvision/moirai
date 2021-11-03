<?php

namespace App\Http\Controllers\Admin;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderCouponHistory;
use App\OrderItem;
use Auth;
use DB;
use App\Exports\SellExport;
use Mail;

class ReportController extends Controller
{
    
    public function sell_report()
    {
        $data['page_title'] = 'Sell Report';
        $data['flag'] = 1;      
        $data['sell_details'] = OrderItem::Join('products', 'products.products_id', '=', 'order_items.prod_id')
                                    ->Join('orders', 'orders.order_id', '=', 'order_items.order_id')
                                    ->orderBy('order_items.id','desc')
                                    ->get();
        // dd($data);
        return view('Admin/webviews/manage_report_pages',$data);
    }

    public function sell_report_datewise(Request $req)
    {
        // dd($req);
        $data['page_title'] = 'Sell Report';
        $data['flag'] = 1;      
        $data['sell_details'] = OrderItem::Join('products', 'products.products_id', '=', 'order_items.prod_id')
                                    ->Join('orders', 'orders.order_id', '=', 'order_items.order_id')
                                    ->orderBy('order_items.id','desc')    
                                    ->whereBetween('orders.created_at', [$req->f_date, $req->t_date])                              
                                    ->get();
        // dd($data);
        return view('Admin/webviews/manage_report_pages',$data);
    }

    public function export(Request $request) 
    {
        $sell_details = OrderItem::Join('products', 'products.products_id', '=', 'order_items.prod_id')
                    ->Join('orders', 'orders.order_id', '=', 'order_items.order_id')
                    ->orderBy('order_items.id','desc')
                    ->get();
        // dd($orderData->count());       
        return Excel::download(new SellExport($sell_details), 'sell_report.xlsx');
        // return (new UsersExport)->download('orders.xlsx');
    }
}
