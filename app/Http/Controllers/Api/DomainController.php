<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DomainResource;
use App\Models\Domains;
use App\Models\DomainInits;
use Illuminate\Http\Request;
use Validator;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $domains = Domains::orderBy('id', 'desc')->with('domain_init')->get();
        $domain_init =  DomainInits::all();
        return sendResponse(
            [
                'domains' => $domains,
                'domain_init' => $domain_init
            ],
            "Domain retrieved successfully."
        );
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
            'domain_name'    => 'required',
            'address'        => 'required',
            'domain_init_id' => 'required|integer',
            'price'          => 'required|integer',
            'price_special'  => 'required|integer',
            'date_payment'   => 'date',
            'year'           => 'integer',
            'status'         => 'required|integer'
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
        $domain = $request->get('domain');
        $roles  = $this->roles();
        $validator = Validator::make($domain, $roles);
        if ($validator->fails()) {
            return sendError('Validation Error.', $validator->errors(), 200);
        }
        $domain = Domains::create($domain);
        return sendResponse(new DomainResource($domain), 'Domain created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $domain = Domains::find($id);
        if (empty($domain)) {
            return sendError('Domain not found.');
        }
        $domain_init = DomainInits::all();
        return sendResponse([
            'domain' => $domain,
            'domain_init' => $domain_init
        ], 'Domain retrieved successfully.');
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
    public function update(Request $request, Domains $domain)
    {
        $data = $request->all();
        $roles  = $this->roles();
        $validator = Validator::make($data, $roles);
        if ($validator->fails()) {
            return sendError('Validation Error.', $validator->errors(), 200);
        }
        $domain->name             = !empty($data['name']) ? $data['name'] : null;
        $domain->domain_name      = !empty($data['domain_name'])  ? $data['domain_name'] : null;
        $domain->address          = !empty($data['address'])  ? $data['address'] : null;
        $domain->domain_init_id  = !empty($data['domain_init_id'])  ? $data['domain_init_id'] : null;
        $domain->note             = !empty($data['note'])  ? $data['note'] : null;
        $domain->price            = !empty($data['price'])  ? $data['price'] : 0;
        $domain->price_special    = !empty($data['price_special'])  ? $data['price_special'] : 0;
        $domain->date_payment     = !empty($data['date_payment'])  ? $data['date_payment'] : null;
        $domain->year             = !empty($data['year'])  ? $data['year'] : 0;
        $domain->status           = !empty($data['status'])  ? $data['status'] : 0;
        $domain->save();
        return sendResponse($domain, 'Domain updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domains $domain)
    {
        $domain->delete();
        return sendResponse([], 'Domains deleted successfully.');
    }
}
