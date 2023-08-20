<?php

namespace App\Http\Controllers;

use App\Models\Load;
use Illuminate\Http\Request;

class LoadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('account.broker-dashboard.loads.index', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('account.broker-dashboard.loads.create', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        
        //Validation
        $validated = $request->validate([
            "pickup_date" => "required|string|",
            "drop_off_date" => "required|string|",
            "pickup_company_name" => "required|string|max:60",
            "pickup_company_phone" => "required|string|",
            "pickup_company_address" => "required|string|",
            "pickup_company_address2" => "required|string|",
            "pickup_company_city" => "required|string|",
            "pickup_company_state" => "required|string|",
            "pickup_company_zipcode" => "required|string|",
            "drop_off_company_name" => "required|string|max:60",
            "drop_off_company_phone" => "required|string|",
            "drop_off_company_address" => "required|string|",
            "drop_off_company_address2" => "required|string|",
            "drop_off_company_city" => "required|string|",
            "drop_off_company_state" => "required|string|",
            "drop_off_company_zipcode" => "required|string|",
            "status" => "required|string",
            "required_trailer" => "required|string|",
            "cargo_weight" => "required|string|",
            "load" => "required|string|",
            "commodity" => "required|string|",
            "rate" => "required|string|",
            "dimensions" => "required|string|",
            "additional_stops" => "string|nullable",
            "hazmat" => "boolean",
            "oversize" => "boolean",
            "military_load" => "boolean",     
        ]);

        $hazmat = ($request->hazmat) ? $request->hazmat : false; 
        $oversize = ($request->oversize) ? $request->oversize : false;
        $military_load = ($request->military_load) ? $request->military_load : false;

        //Calling the Load model
        $load = new Load;
        $load->pickup_date = $request->pickup_date;
        $load->drop_off_date = $request->drop_off_date;
        $load->pickup_company_name = $request->pickup_company_name;
        $load->pickup_company_phone = $request->pickup_company_phone;
        $load->pickup_company_address = $request->pickup_company_address;
        $load->pickup_company_address2 = $request->pickup_company_address2;
        $load->pickup_company_city = $request->pickup_company_city;
        $load->pickup_company_state = $request->pickup_company_state;
        $load->pickup_company_zipcode = $request->pickup_company_zipcode;
        $load->drop_off_company_name = $request->drop_off_company_name;
        $load->drop_off_company_phone = $request->drop_off_company_phone;
        $load->drop_off_company_address = $request->drop_off_company_address;
        $load->drop_off_company_address2 = $request->drop_off_company_address2;
        $load->drop_off_company_city = $request->drop_off_company_city;
        $load->drop_off_company_state = $request->drop_off_company_state;
        $load->drop_off_company_zipcode = $request->drop_off_company_zipcode;
        $load->status = $request->status;
        $load->required_trailer = $request->required_trailer;
        $load->cargo_weight = $request->cargo_weight;
        $load->type_of_load = $request->load;
        $load->commodity = $request->commodity;
        $load->rate = $request->rate;
        $load->dimensions = $request->dimensions;
        $load->additional_stops = $request->additional_stops;
        $load->hazmat = $hazmat;
        $load->oversize = $oversize;
        $load->military_load = $military_load;
        $load->user_id = $request->user()->id;
        //Store        

        $load->save();
        
        return redirect('account/broker-dashboard/loads');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}