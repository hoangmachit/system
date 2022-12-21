<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HostingResource;
use App\Models\Hostings;
use Illuminate\Http\Request;
use Validator;

class HostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hostings = Hostings::orderBy('id', 'asc')->get();
        return sendResponse(
            [
                'hostings' => $hostings
            ],
            "Hosting retrieved successfully."
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
            'name'          => 'required',
            'gb'            => 'required',
            'ip'            => 'required',
            'ram'           => 'required',
            'note'          => 'required',
            'price'         => 'required',
            'price_special' => 'required',
            'status'        => 'required'
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
            return sendError('Validation Error.', $validator->errors(), 200);
        }
        $hosting = Hostings::create($data);
        return sendResponse(new HostingResource($hosting), 'Hosting created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hosting = Hostings::find($id);
        if (empty($hosting)) {
            return $this->sendError('Hosting not found.');
        }
        return sendResponse(new HostingResource($hosting), 'Hosting retrieved successfully.');
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
    public function update(Request $request, Hostings $hosting)
    {
        $data = $request->all();
        $roles  = $this->roles();
        $validator = Validator::make($data, $roles);
        if ($validator->fails()) {
            return sendError('Validation Error.', $validator->errors(), 200);
        }
        $hosting->name           = !empty($data['name']) ? $data['name'] : "";
        $hosting->gb             = !empty($data['gb'])  ? $data['gb'] : "";
        $hosting->ram            = !empty($data['ram'])  ? $data['ram'] : "";
        $hosting->ip             = !empty($data['ip'])  ? $data['ip'] : "";
        $hosting->price          = !empty($data['price'])  ? $data['price'] : 0;
        $hosting->price_special  = !empty($data['price_special'])  ? $data['price_special'] : 0;
        $hosting->status         = !empty($data['status'])  ? $data['status'] : 0;
        $hosting->save();
        return sendResponse(new HostingResource($hosting), 'Hosting updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hostings $hosting)
    {
        $hosting->delete();
        return sendResponse([], 'Hosting deleted successfully.');
    }
}
