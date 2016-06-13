@if (notify()->ready())
    <div class="alert alert-{{ notify()->type() }}">
        @if(notify()->option('icon'))
            <i class="fa fa-{{ notify()->option('icon') }}"></i>&nbsp;
        @endif
        {{ notify()->message() }}
    </div>
@endif