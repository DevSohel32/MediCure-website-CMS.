<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use Hash;
use Auth;
use DB;

class AdminSubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::get();
        return view('admin.subscriber.index', compact('subscribers'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Subscriber::where('id',$id)->first();
        $obj->delete();

        return redirect()->route('admin_subscriber_index')->with('success', __('Data is deleted successfully'));
    }

    public function export()
    {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename=subscribers_'.date('Y-m-d_H-i-s').'.csv');
        
        $output = fopen('php://output', 'w');
        fputcsv($output, ['SL', 'Email']);
        
        $subscribers = DB::table('subscribers')->where('status', 1)->orderBy('id', 'asc')->get();
        
        $i = 0;
        foreach ($subscribers as $row) {
            $i++;
            fputcsv($output, [$i, $row->email]);
        }
        
        fclose($output);
        exit;
    }

}
