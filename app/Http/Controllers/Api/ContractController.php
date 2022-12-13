<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Contracts;
use App\Http\Resources\ContractResource;
use Carbon\Carbon;
// use App\Models\ContractCancels;
// use App\Models\ContractPrices;
// use App\Models\ContractDesigns;
// use App\Models\ContractCustomers;

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
            'name'                  => 'required',
            'code'                  => 'required',
            'signing_date'          => 'date',
            'date_of_delivery'      => 'date',
            'payment_1st'           => 'required',
            'payment_2st'           => 'required',
            'date_payment_1st'      => 'date',
            'date_payment_2st'      => 'date',
            'status'                => 'required'
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
        $contract = Contracts::find($id);
        if (empty($contract)) {
            return $this->sendError('Contract not found.');
        }
        return sendResponse(new ContractResource($contract), 'Contract retrieved successfully.');
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
    public function update(Request $request, Contracts $contract)
    {
        $data = $request->all();
        $roles  = $this->roles();
        $validator = Validator::make($data, $roles);
        if ($validator->fails()) {
            return sendError('Validation Error.', $validator->errors());
        }
        $contract->name                 = !empty($data['name']) ? $data['name'] : "";
        $contract->code                 = !empty($data['code'])  ? $data['code'] : "";
        $contract->signing_date         = !empty($data['signing_date'])  ? $data['signing_date'] : Carbon::now();
        $contract->date_of_delivery     = !empty($data['date_of_delivery'])  ? $data['date_of_delivery'] : Carbon::now();
        $contract->payment_1st          = !empty($data['payment_1st'])  ? $data['payment_1st'] : 0;
        $contract->payment_2st          = !empty($data['payment_2st'])  ? $data['payment_2st'] : 0;
        $contract->date_payment_1st     = !empty($data['date_payment_1st'])  ? $data['date_payment_1st'] : Carbon::now();
        $contract->date_payment_2st     = !empty($data['date_payment_2st'])  ? $data['date_payment_2st'] : Carbon::now();
        $contract->note                 = !empty($data['note'])  ? $data['note'] : "";
        $contract->status               = !empty($data['status'])  ? $data['status'] : 1;
        $contract->save();
        return sendResponse(new ContractResource($contract), 'Contract updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contracts $contract)
    {
        $contract->delete();
        return sendResponse([], 'Contracts deleted successfully.');
    }
}
