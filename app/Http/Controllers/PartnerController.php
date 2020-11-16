<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{

    public function index()
    {
        $partners = Partner::orderBy('id', 'desc')->simplePaginate(10);
        return view('partner.index', compact('partners'));
    }

    public function edit(Partner $partner)
    {
        return view('partner.edit', compact('partner'));
    }

    public function update(Partner $partner, Request $request)
    {
        $partner->update($request->all());
        return redirect()->route('partner.index');
    }

    public function create(Partner $partner)
    {
        return view('partner.create', compact('partner'));
    }

    public function store(Request $request)
    {
        $partner = new Partner($request->all());
        $partner->save();
        return redirect()->route('partner.index');
    }
}
