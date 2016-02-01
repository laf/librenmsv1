@extends('layouts.app')

@section('content')


        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Hostname</th>
                    <th>OS</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Hostname</th>
                    <th>OS</th>
                    <th>Status</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($devices as $device)
                <tr>
                    <td>{{ $device->hostname }}</td>
                    <td>{{ $device->os }}</td>
                    <td>{{ $device->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


@endsection
