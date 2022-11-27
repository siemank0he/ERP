<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;


class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Invoice $invoice)
    {
        $invoicesList = $invoice->all();
        return view('invoices/list', ['invoicesList' => $invoicesList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $invoice = new Invoice();
        $invoice->name = "Faktura za Netflixa";
        $invoice->amount = 1;
        $invoice->price_netto = 47;
        $invoice->price_brutto = 60;
        $invoice->save();

        return redirect('invoices');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);
        return view('invoices/showInvoice', ['invoice' => $invoice]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        $invoice->name = "Faktura za garnek";
        $invoice->amount = 1;
        $invoice->price_netto = 158;
        $invoice->price_brutto = 201;
        $invoice->save();

        return redirect('invoices');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice =Invoice::find($id);
        $invoice->delete();
        return redirect('invoices');
    }
}
