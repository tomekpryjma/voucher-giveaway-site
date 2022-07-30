<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VoucherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return Inertia::render('Voucher/Index', [
            'data' => [
                'vouchers' => Voucher::notClaimed()->with('postedBy')->get()
            ],
            'routes' => [
                'voucher.view' => route('voucher.view')
            ]
        ]);
    }

    public function create()
    {
        return Inertia::render('Voucher/Create');
    }

    public function store(Request $request)
    {
    }

    public function view(Request $request, $id)
    {
        $voucher = Voucher::with('postedBy')->where('id', $id)->first();

        // flash if voucher is claimed
        if ($voucher->claimedBy && $voucher->claimedBy->id !== $request->user()->id) {
            $request->session()->flash('message', 'This voucher has been claimed.');
            return redirect(route('voucher.index'));
        }

        // and then redirect

        return Inertia::render('Voucher/View', [
            'data' => [
                'voucher' => $voucher,
                'steps' => 'foo',
            ]
        ]);
    }
}
