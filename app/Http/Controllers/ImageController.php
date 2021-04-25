<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController
{
    public function index(Request $request, $w = 0, $h = 0)
    {
        if ($w == 0) $w = null;
        if ($h == 0) $h = null;

        $img = $request->input("img");

        if ($img) $img = public_path(urldecode($img));

        if ($img && file_exists($img)) {
            $img = $img;
        } else {
            $img =  public_path() . '/images/default.jpg';
        }

        $tmp = \Image::make($img);
        if ($tmp->mime() == 'image/gif') return response()->file($img);

        $cache = \Image::cache(function($image) use($img, $w, $h) {
            $image->make($img);
            if (!$h) {
                $image->widen($w, function ($constraint) {
                    $constraint->upsize();
                });
            } elseif (!$w) {
                $image->heighten($h, function ($constraint) {
                    $constraint->upsize();
                });
            } else {
                $image->fit($w, $h, function ($constraint) {
                    $constraint->upsize();
                });
            }
        }, 1440, true);

        return $cache->response('jpg');
    }
}
