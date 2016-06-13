<div role="tabpanel" class="tab-pane" id="organisation">
    {!!
        Form::open([
            'action' => '\App\Http\Controllers\CustomerQueueController@addOrganisationToQueue',
            'method' => 'post',
            'id' => 'AddOrganisationForm'
        ])
    !!}

    {!! csrf_field() !!}
    {!! Form::hidden('customerType', $customerTypes['Organisation']) !!}

    @include('partials.form.elements.servicetyperadio')

    <div class="form-group col-md-12">
        {!! Form::label('organisationName', 'Organisation Name:') !!}
        {!! Form::text('organisationName', '', ['class' => 'form-control full-width']) !!}
    </div>

    @include('partials.form.elements.submit')

    {!! Form::close() !!}
</div>