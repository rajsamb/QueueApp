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
    /**
     * Instance of Manage Customer Queue Repository
     *
     * @var App\Repositories\ManageCustomerQueue
     */
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


}
