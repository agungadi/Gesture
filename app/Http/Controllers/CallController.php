<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Antrian;
use App\Call;
use Illuminate\Http\Request;
class CallController extends Controller
{

    public function next()
    {
        $date = Carbon::now()->format('Y-m-d');

        $cek = Antrian::where([
            ['status', '0'],
            ['keperluan','skck'],
        ])->whereDate('created_at', $date)->orderBy('no_antrian', 'asc')->first();


        return response()->json($cek);


    }



    public function monitor()
    {
        $date = Carbon::now()->format('Y-m-d');

        $cek = Antrian::where([
            ['status', '1'],
            ['keperluan','skck'],
        ])->whereDate('created_at', $date)->orderBy('no_antrian', 'asc')->update(['status' => '1'])
        ->first();


    }



    public function skck(Request $request)
    {


        $antrian = Antrian::where([
            ['keperluan', 'skck'],
            ['status', '0'],
            ])->whereDate('created_at', Carbon::today())->get();
        return view('admin.skck', compact('antrian'));
    }

    public function sktlk(Request $request)
    {


        $antrian = Antrian::where([
            ['keperluan', 'sktlk'],
            ['status', '0'],
            ])->whereDate('created_at', Carbon::today())->get();
        return view('admin.sktlk', compact('antrian'));
    }

    public function lp(Request $request)
    {


        $antrian = Antrian::where([
            ['keperluan', 'lp'],
            ['status', '0'],
            ])->whereDate('created_at', Carbon::today())->get();
        return view('admin.lp', compact('antrian'));
    }

    public function sp2hp(Request $request)
    {


        $antrian = Antrian::where([
            ['keperluan', 'sp2hp'],
            ['status', '0'],
            ])->whereDate('created_at', Carbon::today())->get();
        return view('admin.sp2hp', compact('antrian'));
    }


    public function sttp(Request $request)
    {

        $antrian = Antrian::where([
            ['keperluan', 'sttp'],
            ['status', '0'],
            ])->whereDate('created_at', Carbon::today())->get();
        return view('admin.sttp', compact('antrian'));
    }

    public function sttlp(Request $request)
    {

        $antrian = Antrian::where([
            ['keperluan', 'sttlp'],
            ['status', '0'],
            ])->whereDate('created_at', Carbon::today())->get();
        return view('admin.sttlp', compact('antrian'));
    }

    public function skld(Request $request)
    {

        $antrian = Antrian::where([
            ['keperluan', 'skld'],
            ['status', '0'],
            ])->whereDate('created_at', Carbon::today())->get();
        return view('admin.skld', compact('antrian'));
    }
}


