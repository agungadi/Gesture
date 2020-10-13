<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function upload(){
		return view('video');
    }

    public function proses_upload(Request $request){

        $file = $request->file('file');
        $name = 'upload' . '.' . $file->getClientOriginalExtension();
        $file->move('video', $name);

        return view('video');
	}
}

