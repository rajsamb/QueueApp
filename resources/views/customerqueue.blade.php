@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Customer
                </div>
                <div class="panel-body">
                    <div class="col-md-12">

                        @include('partials.alerts.form-error')
                        @include('partials.alerts.form-submission-msg')

                        <div class="form-group col-md-12">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#citizen" aria-controls="citizen" role="tab" data-toggle="tab">Citizen</a></li>
                                <li role="presentation"><a href="#organisation" aria-controls="organisation" role="tab" data-toggle="tab">Organisation</a></li>
                                <li role="presentation"><a href="#anonymous" aria-controls="anonymous" role="tab" data-toggle="tab">Anonymous</a></li>
                            </ul>
                        </div>
                        <div class="form-group col-md-12">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                @include('partials.form.citizen')

                                @include('partials.form.organisation')

                                @include('partials.form.anonymous')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Queue
                </div>
                <div class="panel-body">

                    <table class="table table-condensed table-striped table-responsive">
                        <thead>
                            <th>#</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Service</th>
                            <th>Waiting Since</th>
                        </thead>

                        <tbody>
                            @if (!$queues->isEmpty())
                                @foreach ($queues as $number => $queue)
                                    <tr>
                                        <td>{{ $number + 1 }}</td>
                                        <td>{{ $queue->customerTypes->name }}</td>
                                        <td>{{ (is_null($queue->customers)) ? "Ananymous" : $queue->customers->name }}</td>
                                        <td>{{ $queue->serviceTypes->name }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($queue->queued_at))->diffForHumans() }} on
                                            <span class="help-block">
                                                <small>
                                                    {{ \Carbon\Carbon::parse($queue->queued_at) }}
                                                </small>
                                            </span>
                                        </td>
                                    </tr>

                                @endforeach
                            @endif
                        </tbody>
                    </table>

                    <div class="pull-right">{!! $queues->render() !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

