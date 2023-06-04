<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\PremiumCooperate;
use App\Models\PremiumTransaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PremiumController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_premium == 0) {
            return view("pages.mitra.permintaan.index");
        } else {
            return view("pages.mitra.permintaan.index_premium")->with([
                "premium_cooperates" => PremiumCooperate::whereMitraId(Auth::user()->id)->get()
            ]);
        }
    }

    public function index_bayar()
    {
        return view('pages.mitra.permintaan.bayar')->with([
            "admin" => User::whereRoleId(1)->first()
        ]);
    }

    public function store(Request $request)
    {
        $transaction_proof = $request->file("premium_transaction_proof")->store("bukti-pembayaran-premium", "public");
        PremiumTransaction::create([
            "user_id" => Auth::user()->id,
            "transaction_proof" => $transaction_proof
        ]);

        return redirect()->back()->with('success', "Pembayaran berhasil dikirim");
    }
}
