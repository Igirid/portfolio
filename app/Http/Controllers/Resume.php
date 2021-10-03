<?php

namespace App\Http\Controllers;


class Resume extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return response()->file(resource_path('pdf/cv.pdf'));
    }
}
