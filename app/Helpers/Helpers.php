<?php
if (!function_exists('sendResponse')) {
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'result'    => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }
}
if (!function_exists('sendError')) {
    /**
     * Return error response.
     *
     * @return \Illuminate\Http\Response
     */
    function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
if (!function_exists('generateRandomString')) {
    /**
     * Return random string.
     *
     */
    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
if (!function_exists('photo')) {
    function photo($photo = "")
    {
        return config('app.url') . "/uploads/" . $photo;
    }
}
