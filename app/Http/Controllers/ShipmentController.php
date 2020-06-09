<?php

namespace App\Http\Controllers;

use App\Parcel;
use App\Shipment;
use App\ShipmentHistory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $shipments = Shipment::paginate(15);
        return view('controlpanel.shipments.index', compact('shipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parcels = Parcel::all();
        $users = User::all();

        return view('controlpanel.shipments.create', compact('parcels', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();

        //Generate Tracking Number
        function TrackingId($length = 6){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = 'SLINK-TRACK';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $input['tracking_id'] = TrackingId();

        $shipment = Shipment::create($input);

        //Add all values to data array
        $data = [
            'parcel' => $shipment->parcel->name,
            'email' => $shipment->user->email,
            'name' => $shipment->user->name,
            'tracking_id' => $input['tracking_id'],
        ];

        //send email to user
        Mail::send('emails.new-shipment', $data, static function($message) use ($data){
            $message->from('info@swiftlogservices.com', 'Swift Logistics Services');
            $message->to($data['email'], $data['name']);
            $message->replyTo('info@swiftlogservices.com', 'Swift Logistics Services');
            $message->subject('Your shipment has been initiated');
        });

        //flash notification
        Session::flash('success', 'Shipment for '.$data['name'].' has been initiated');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $shipment = Shipment::findOrFail($id);
        return view('controlpanel.shipments.edit', compact('shipment' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //get ID
        $shipment = Shipment::findOrFail($id);

        $shipment->update($request->all());

        //session notification
        Session::flash('success', 'Updated');

        return redirect()->back();
    }

    public function insertCheckpoint($id)
    {
        $shipment = Shipment::findOrFail($id);
        return view('controlpanel.shipments.insert-checkpoint', compact('shipment' ));
    }

    public function activateShipment(Request $request, $id)
    {
        //get ID
        $shipment = Shipment::findOrFail($id);

        if($shipment->is_active){

            $shipment->is_active = false;
            $email_subject = 'Your Shipment has been Deactivated';
            Session::flash('warning', 'Your Shipment has been deactivated');

            //session notification
            Session::flash('warning', $email_subject);
        }else{

            $shipment->is_active = true;
            $email_subject = 'Your Shipment has been Activated';
            Session::flash('warning', 'Your Shipment has been Activated');

            //session notification
            Session::flash('success', $email_subject);
        }

        $shipment->save();

        $data = [
            'name' => $shipment->user->name,
            'email' => $shipment->user->email,
            'tracking_id' => $shipment->tracking_id,
            'email_subject' => $email_subject,
            'is_active' => $shipment->is_active,
        ];

        Mail::send('emails.verify-shipment', $data, static function ($message) use ($data) {
            $message->from('info@swiftlogservices.com', 'Swift Logistics Services');
            $message->to($data['email'], $data['name']);
            $message->replyTo('Info@cargobaselogistics.com', 'Swift Logistics Services');
            $message->subject($data['email_subject']);
        });

        return redirect()->back();
    }

    public function trackShipment(Request $request){

        $tracking_id = $request->input('tracking_id');

        // Check Tracking Status
        $checkTrackingStatus = Shipment::where([
            ['tracking_id', '=', $tracking_id],
            ['is_active', '=', true]
        ])->first();

        $validateTrackingId = Shipment::where([
            ['tracking_id', '=', $tracking_id]
        ])->first();

        // Check tracking Status
        if(!$checkTrackingStatus){
            Session::flash('warning', 'Your Shipment is not active');
            return redirect()->back();
        }

        // Check tracking Id Validity
        if(!$validateTrackingId){
            Session::flash('warning', 'This tracking ID does not exist');
            return redirect()->back();
        }

        return redirect('shipment-history/'.$checkTrackingStatus->tracking_id);
    }

    public function shipmentHistory($tracking_id){

        $shipment = Shipment::where([
            ['tracking_id', '=', $tracking_id],
            ['is_active', '=', true]
        ])->get()->first();

        $lastCheckpoint = ShipmentHistory::where('shipment_id', $shipment->id)->orderBy('created_at', 'desc')->get()->first();

        $checkpoints = ShipmentHistory::where('shipment_id', $shipment->id)->orderBy('created_at', 'desc')->paginate();

        return view('shipment-history', compact('shipment', 'checkpoints', 'lastCheckpoint'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        //find Category and delete
        Shipment::findOrFail($id)->delete();

        //flash notification
        Session::flash('warning', 'Deleted');

        return redirect()->back();
    }
}
