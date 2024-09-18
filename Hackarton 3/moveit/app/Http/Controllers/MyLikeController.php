<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyLikeController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        //verificar si el registro existe
        if ($request->user()->myLikes()->where('product_id', $request->product_id)->exists()) {
            //eliminar el registro
            $request->user()->myLikes()->where('product_id', $request->product_id)->delete();
            return back();
        }

        $request->user()->myLikes()->create($request->only('product_id'));

        return back();
    }

}
