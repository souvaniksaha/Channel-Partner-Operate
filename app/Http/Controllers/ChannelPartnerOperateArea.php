<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channelpartnerpincode;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ChannelpartnerpincodesImport;

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
}
