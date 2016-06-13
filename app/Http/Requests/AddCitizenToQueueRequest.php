<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddCitizenToQueueRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'serviceType' => 'required|integer|min:1|exists:service_types,id',
            'customerType' => 'required|integer|min:1|exists:customer_types,id',
            'title' => 'required|in:Mr,Miss,Ms,Mrs,Sir,Dr,Lady',
            'name' => 'required|min:3|max:30',
            'surname' => 'required|min:3|max:30',
        ];
    }

    /**
     * Customize the validation message.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'serviceType.integer' => 'Wow! that is clever but service type has to be integer',
            'customerType.integer' => 'Wow! that is clever but hidden customer type has to be integer',
            'customerType.exists' => 'Wow, Wow! That is even clever but the customer type does not exist!',
            'serviceType.exists' => 'Wow, Wow! That is even clever but the service type does not exist!'
        ];
    }
}
