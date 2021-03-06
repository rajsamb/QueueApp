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
     *
     * @return Collection
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
     * @return void
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
     * @return void
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

    /**
     * Add Ananymous Customer to the Queue.
     *
     * @return void
     */
    public function addAnonymousToQueue($request)
    {
        $this->customerQueue->customer_types_id = $request->input('customerType');
        $this->customerQueue->service_types_id = $request->input('serviceType');
        $this->customerQueue->queued_at = Carbon::now('Europe/London');

        $this->customerQueue->save();
    }
}
