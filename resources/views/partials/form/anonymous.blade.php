<div role="tabpanel" class="tab-pane" id="anonymous">
    {!!
        Form::open([
            'action' => '\App\Http\Controllers\CustomerQueueController@addAnonymousToQueue',
            'method' => 'post',
            'id' => 'AddAnonymous'
        ])
    !!}

        {!! csrf_field() !!}

        {!! Form::hidden('customerType', $customerTypes['Anonymous']) !!}

        @include('partials.form.elements.servicetyperadio')

        @include('partials.form.elements.submit')

    {!! Form::close() !!}
</div>