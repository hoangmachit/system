<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;

trait UploadPhoto
{
    public function uploadPhoto(Request $request)
    {
        if (!$request->hasFile('photo')) {
            return "";
        }
        $image = $request->file('photo');
        $photo = $image->getClientOriginalName();
        if ($image->move('images', $photo))
            return $photo;
        return "";
    }
}
