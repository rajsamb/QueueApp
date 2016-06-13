<?php

namespace App\Repositories;

use App\Customers;
use Carbon\Carbon;
use App\CustomerQueue;

class ManageCustomerQueue
{
    protected $customerQueue;
    protected $customers;

    public function __construct(CustomerQueue $customerQueue, Customers $customers)
    {
        $this->customerQueue = $customerQueue;
        $this->customers = $customers;
    }

    /**
     * Get the customer queue and paginate.
     */
    public function getPaginated($howMany = 5)
    {
        return $this->customerQueue
                    ->with('customers', 'serviceTypes', 'customerTypes')
                    ->paginate($howMany);
    }

    /**
     * Add The Citizen the to Queue.
     *
     * ToDo: Inplement a transaction to rollback if
     * saving organisation to the customer table
     * fails
     */
    public function addCitizenToQueue($request)
    {
        $this->customer = $this->customers->firstOrCreate(
            [
                'title' => $request->input('title'),
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
            ]
        );

        $this->customerQueue->customers_id = $this->customer->id;
        $this->customerQueue->customer_types_id = $request->input('customerType');
        $this->customerQueue->service_types_id = $request->input('serviceType');
        $this->customerQueue->queued_at = Carbon::now('Europe/London');

        $this->customerQueue->save();
    }

    /**
     * Add The Organisation the to Queue.
     *
     * ToDo: Inplement a transaction to rollback if
     * saving organisation to the customer table
     * fails
     */
    public function addOrganisationToQueue($request)
    {

        $this->customer = $this->customers->firstOrCreate(['name' => $request->input('organisationName')]);

        $this->customerQueue->customers_id = $this->customer->id;
        $this->customerQueue->customer_types_id = $request->input('customerType');
        $this->customerQueue->service_types_id = $request->input('serviceType');
        $this->customerQueue->queued_at = Carbon::now('Europe/London');

        $this->customerQueue->save();
    }

    public function addAnonymousToQueue($request)
    {
        $this->customerQueue->customer_types_id = $request->input('customerType');
        $this->customerQueue->service_types_id = $request->input('serviceType');
        $this->customerQueue->queued_at = Carbon::now('Europe/London');

        $this->customerQueue->save();

        $this->customers->name = $request->input('organisationName');
        $this->customers->save();
    }
}