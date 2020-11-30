@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="width: max-content;text-align: center;">
                <div class="card-header">{{ __('List of all Employees in Database') }}</div>

                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <!-- Admin is able to view all employees in database -->
                        <!--======================================= Company Field ==============================================-->
                        <table>
                            <thead>
                                <tr>
                                    <th class="tableSettings">Number ID:</th>
                                    <th class="tableSettings">First Name:</th>
                                    <th class="tableSettings">Last Name:</th>
                                    <th class="tableSettings">Work For:</th>
                                    <th class="tableSettings">Phone Number:</th>
                                    <th class="tableSettings">Date Published:</th>
                                    <th class="tableSettings">Last Updated:</th>
                                </tr>
                            </thead>
                            @if($employeeDB->isEmpty())
                            <div class="alert" style="color: #e3342f;">
                                <p>There is no data within the database</p>
                            </div>
                            @else
                            @foreach($employeeDB as $key => $data)
                                <tr>
                                    <td class="tableContent">{{ $data->id }}</td>
                                    <td class="tableContent">{{ $data->first_name }}</td>
                                    <td class="tableContent">{{ $data->last_name }}</td>
                                    <td class="tableContent">{{ $data->company }}</td>
                                    <td class="tableContent">{{ $data->phone_number }}</td>
                                    <td class="tableContent">{{ $data->created_at }}</td>
                                    <td class="tableContent">{{ $data->updated_at }}</td>
                                    <td style="padding:1em;"><a href="employeeList/edit/{{ $data->id }}">Edit</a></td>
                                    <td style="padding:1em;"><a href="employeeList/delete/{{ $data->id }}">Delete</a></td>
                                </tr>
                            @endforeach
                            @endif
                        </table>
                        <!--====================================================================================================-->
                </div>
            </div>
        </div>
    </div>
</div>
<link href="{{ asset('css/customeStyle.css') }}" rel="stylesheet" />
@endsection
