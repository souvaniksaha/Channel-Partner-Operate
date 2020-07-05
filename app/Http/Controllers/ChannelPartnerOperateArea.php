<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channelpartnerpincode;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ChannelpartnerpincodesImport;
use DB;
class ChannelPartnerOperateArea extends Controller
{
    public function index(){
        $cplist = Channelpartnerpincode::paginate(10);
        return view('cpoa.index',compact('cplist'));
    }

    public function store()
    {
       $file = request()->file('file')->store('import');
       (new ChannelpartnerpincodesImport)->import($file);
       return back()->withStatus('File Imported Successfully!');

    }

    public function dropDown()
    {
        $allStates = Channelpartnerpincode::get()->groupBy('state');
        return view('cpoa.dropdown',compact('allStates'));
    }

    public function fetch()
    {
       $select = request()->get('select');
       $value = request()->get('value');
       $dependent = request()->get('dependent');
       $data = Channelpartnerpincode::
                 where($select,$value)
                ->groupBy($dependent)
                ->get();
                $output = '<option value="">Select '.ucfirst($dependent).'</option>';
                foreach($data as $row){
                     $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
                }
        echo $output;
    }
}
