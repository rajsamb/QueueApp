@if ($errors->any())
    <ul class="alert alert-danger list-unstyled">
        @foreach ($errors->all() as $key => $error)
            <li>{!! $error !!}</li>
        @endforeach
    </ul>
@endif