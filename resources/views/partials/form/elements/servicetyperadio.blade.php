<div class="form-group col-md-12">
    {!! Form::label('serviceType', 'Service') !!}

    <br>

    @foreach($serviceTypes as $id => $serviceType)
        {!! Form::radio('serviceType', $id, ($serviceType == "Housing") ? true : false) !!} {{ $serviceType }}<br>
    @endforeach
</div>