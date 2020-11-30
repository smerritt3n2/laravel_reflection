@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="width: max-content;text-align: center;">
                <div class="card-header">{{ __('List of all Companies in Database') }}</div>

                <div class="card-body">
                    <!-- Admin is able to view all companies in database -->
                        <!--======================================= Company Field ==============================================-->
                        <table>
                            <thead>
                                <tr>
                                    <th class="tableSettings">Number ID:</th>
                                    <th class="tableSettings">Company Name:</th>
                                    <th class="tableSettings">Company Address:</th>
                                    <th class="tableSettings">Company Image:</th>
                                    <th class="tableSettings">Web Address:</th>
                                    <th class="tableSettings">Date Published:</th>
                                    <th class="tableSettings">Last Updated:</th>
                                </tr>
                            </thead>
                            @if($companyDB->isEmpty())
                            <div class="alert" style="color: #e3342f;">
                                <p>There is no data within the database</p>
                            </div>
                            @else
                            @foreach($companyDB as $key => $data)
                                <tr>
                                    <td class="tableContent">{{ $data->id }}</td>
                                    <td class="tableContent">{{ $data->name }}</td>
                                    <td class="tableContent">{{ $data->email }}</td>
                                    <td class="tableContent">{{ $data->image }}</td>
                                    <td class="tableContent">{{ $data->website }}</td>
                                    <td class="tableContent">{{ $data->created_at }}</td>
                                    <td class="tableContent">{{ $data->updated_at }}</td>
                                    <td style="padding:1em;"><a href="companyList/edit/{{ $data->id }}">Edit</a></td>
                                    <td style="padding:1em;"><a href="companyList/delete/{{ $data->id }}">Delete</a></td>
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
