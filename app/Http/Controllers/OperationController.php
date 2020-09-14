<?php

namespace App\Http\Controllers;

use App\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    
    public function index()
    {

        return response()->json(Operation::get());
        
    }
     
    public function operationByNum($numeroCompte)
    {

        return response()->json(Operation::find($numeroCompte));
        
    }
 

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Operation  $operation
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Operation $operation)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Operation  $operation
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Operation $operation)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Operation  $operation
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Operation $operation)
    // {
    //     //
    // }
}
