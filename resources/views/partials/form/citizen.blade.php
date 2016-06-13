<div role="tabpanel" class="tab-pane active" id="citizen">
    {!!
        Form::open([
            'action' => '\App\Http\Controllers\CustomerQueueController@addCitizenToQueue',
            'method' => 'post',
            'id' => 'AddCitizenForm'
        ])
    !!}

        {!! csrf_field() !!}

        {!! Form::hidden('customerType', $customerTypes['Citizen']) !!}

        @include('partials.form.elements.servicetyperadio')

        <br>

        <div class="form-group col-md-12">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', '', ['class' => 'form-control full-width']) !!}
        </div>

        <div class="form-group col-md-12">
            {!! Form::label('name', 'First Name:') !!}
            {!! Form::text('name', '', ['class' => 'form-control full-width']) !!}
        </div>

        <div class="form-group col-md-12">
            {!! Form::label('surname', 'Last Name:') !!}
            {!! Form::text('surname', '', ['class' => 'form-control full-width']) !!}
        </div>

        @include('partials.form.elements.submit')

    {!! Form::close() !!}
</div>