<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DesignResource;
use App\Models\Designs;
use Validator;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = Designs::all();
        return sendResponse(DesignResource::collection($designs), "Design retrieved successfully.");
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
        $data['font_family'] = !empty($data['font_family']) ? $data['font_family'] : "";
        $data['url_example'] = !empty($data['url_example']) ? $data['url_example'] : "";
        $data['code'] = generateRandomString();
        $design = Designs::create($data);
        return sendResponse(new DesignResource($design), 'Design created successfully.');
    }
    /**
     * Rreturn roles
     *
     */
    private function roles()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'url' => 'required',
            'date_start' => 'date',
            'date_finish' => 'date',
            'status' => 'required',
            'photo' => 'required',
        ];
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $design = Designs::find($id);
        if (empty($design)) {
            return $this->sendError('Design not found.');
        }
        return sendResponse(new DesignResource($design), 'Design retrieved successfully.');
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
    public function update(Request $request, Designs $design)
    {
        $data = $request->all();
        $roles  = $this->roles();
        $validator = Validator::make($data, $roles);
        if ($validator->fails()) {
            return sendError('Validation Error.', $validator->errors());
        }
        $design->first_name  = !empty($data['first_name']) ? $data['first_name'] : "";
        $design->last_name   = !empty($data['last_name'])  ? $data['last_name'] : "";
        $design->url         = !empty($data['url'])  ? $data['url'] : "";
        $design->font_family = !empty($data['font_family'])  ? $data['font_family'] : "";
        $design->url_example = !empty($data['url_example'])  ? $data['url_example'] : "";
        $design->date_start  = !empty($data['date_start'])  ? $data['date_start'] : "";
        $design->date_finish = !empty($data['date_finish'])  ? $data['date_finish'] : "";
        $design->status      = !empty($data['status'])  ? $data['status'] : 0;
        $design->photo       = !empty($data['photo'])  ? $data['photo'] : "";
        $design->save();
        return sendResponse(new DesignResource($design), 'Design updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designs $design)
    {
        $design->delete();
        return sendResponse([], 'Design deleted successfully.');
    }
}
