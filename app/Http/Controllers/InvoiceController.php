<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Customer;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Invoice::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        $fiels = $request->validated();

        /**
         *  last customer is used because
         *  in the java app we can't get the payload
         */
        $lastCustomer = Customer::query()->latest()->first();

        $invocie = $lastCustomer->invoices()->create([
            'total' => $fiels['total'],
            'iva' => $fiels['iva'],
            'descuento' => $fiels['descuento'],
            'modo_pago' => $fiels['modo_pago'],
            'subtotal' => $fiels['subtotal'],
            'waiter_id' => $fiels['mesero'],
        ]);

        foreach ($fiels['productos'] as $product) {

            $invocie->products()->attach($product['id'], [
                'cantidad' => $product['cantidad'],
                'precio' => $product['precio'],
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
