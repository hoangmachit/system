<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Contracts;
use App\Http\Resources\Api\ContractResource;
// use App\Models\ContractCancels;
// use App\Models\ContractPrices;
// use App\Models\ContractDesigns;
// use App\Models\ContractsCustomer;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $page = $request->page ?? config('page.contract');
        $contract = Contracts::with('designs', 'domains', 'hostings', 'cancels', 'customers', 'prices')->paginate($page);
        return sendResponse(new ContractResource($contract), "Contact retrieved successfully.");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Return array
     */
    private function roles()
    {
        return [
            'name'           => 'required',
            'code'    => 'required',
            'signing_date'        => 'date',
            'date_of_delivery' => 'date',
            'payment_1st'           => 'required',
            'payment_2st'          => 'required',
            'date_payment_1st'  => 'date',
            'date_payment_2st'   => 'date',
            'status'         => 'required'
        ];
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $roles  = $this->roles();
        $validator = Validator::make($data, $roles);
        if ($validator->fails()) {
            return sendError('Validation Error.', $validator->errors());
        }
        $contract = Contracts::create($data);
        return sendResponse(new ContractResource($contract), 'Contract created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
