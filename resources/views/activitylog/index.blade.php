@extends('layouts.app')
    @section('content')
        <div class="grid">
            <h1>Log</h1>
            {!! $logItems->render() !!}
            <table class="-datatable -compact">
                <thead>
                <tr>
                    <th>Time</th>
                    <th>Description</th>
                    <th>Properties</th>
                    <th>Subject</th>
                    <th>User</th>
                </tr>
                </thead>
                <tbody>
                @foreach($logItems as $logItem)
                   
                    <tr>
                        <td>{{ ($logItem->created_at) }}</td>
                        <td>{!! $logItem->description !!}</td>
                        <td>{!! $logItem->properties !!}</td>
                        <td>{!! $logItem->subject !!}</td>
                        <td>
                            @if($logItem->causer)
                                <a href="#">
                                    {{ $logItem->causer->email }}
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $logItems->render() !!}
        </div>
    @endsection
