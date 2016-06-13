<?php

namespace App\Http\Controllers;

use App\ServiceTypes;
use App\CustomerQueue;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Repositories\ManageCustomerQueue;
use App\Http\Requests\AddCitizenToQueueRequest;
use App\Http\Requests\AddAnonymousToQueueRequest;
use App\Http\Requests\AddOrganisationToQueueRequest;

class CustomerQueueController extends Controller
{
    protected $manageCustomerQueue;

    public function __construct(ManageCustomerQueue $manageCustomerQueue)
    {
        $this->manageCustomerQueue = $manageCustomerQueue;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return ServiceTypes::whereId(2)->firstOrFail()->queue()->get();
        // return ServiceTypes::all();
        // return CustomerQueue::all();
        // dd('You are at index file');

        // dd(\Carbon\Carbon::now('Europe/London'));

        $queues = $this->manageCustomerQueue->getPaginated();
        return view('customerqueue', compact('queues'));
    }

    /**
     * Store a Citizen to a Queue
     *
     * @return \Illuminate\Http\Response
     */
    public function addCitizenToQueue(AddCitizenToQueueRequest $request)
    {
        $this->manageCustomerQueue->addCitizenToQueue($request);

        return Redirect::back();
    }

    /**
     * Store a Organisation to a Queue
     *
     * @return \Illuminate\Http\Response
     */
    public function addOrganisationToQueue(AddOrganisationToQueueRequest $request)
    {
        $this->manageCustomerQueue->addOrganisationToQueue($request);

        return Redirect::back();
    }

    /**
     * Store a Anonymous to a Queue
     *
     * @return \Illuminate\Http\Response
     */
    public function addAnonymousToQueue(AddAnonymousToQueueRequest $request)
    {
        $this->manageCustomerQueue->addAnonymousToQueue($request);

        return Redirect::back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
