@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if(strpos($_SERVER['REQUEST_URI'], 'employeeList') !== false) <!-- Checks that if URL displays employeeList then reveal the edit form for employee -->
                <div class="card-header">{{ __('Employee Edit Form') }}</div>

                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <!-- Admin is able to Modify data within Company or Employee Database -->
                    <form method="POST" action="employee/edit/<?php echo $data[0]->id; ?>">
                        @csrf
                        <!--=================================== First Name Field ===============================================-->
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="first_name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="<?php echo $data[0]->first_name; ?>" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--====================================================================================================-->
                        <!--======================================== Last Name Field ===========================================-->
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="last_name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="<?php echo $data[0]->last_name; ?>" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--====================================================================================================-->
                        <!--======================================== Company Field =============================================-->
                        <div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                            <input id="company" type="company" class="form-control @error('company') is-invalid @enderror" name="company" value="<?php echo $data[0]->company; ?>" required autocomplete="company" autofocus>

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--====================================================================================================-->
                        <!--======================================== Email Field ===============================================-->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="<?php echo $data[0]->email; ?>" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--====================================================================================================-->
                        <!--======================================== Phone Field ===============================================-->
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="<?php echo $data[0]->phone_number; ?>" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--====================================================================================================-->
                        <!--========================================== Submit Field ============================================-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Data') }}
                                </button>
                            </div>
                        </div>
                        <!--====================================================================================================-->
                    </form>
                    <!--==================================================================-->
                </div>
                @elseif(strpos($_SERVER['REQUEST_URI'], 'companyList') !== false) <!-- Checks that if URL displays companyList then reveal the edit form for company -->
                <div class="card-header">{{ __('Company Edit Form') }}</div>

                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <!-- Admin is able to Modify data within Company or Employee Database -->
                    <form method="POST" action="company/edit/<?php echo $data[0]->id; ?>">
                        @csrf
                        <!--======================================== Name Field ================================================-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name of Company') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="<?php echo $data[0]->name; ?>" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--====================================================================================================-->
                        <!--======================================== Email Field ===============================================-->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="<?php echo $data[0]->email; ?>" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--====================================================================================================-->
                        <!--======================================== Logo Field ================================================-->
                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" name="image" value="<?php echo $data[0]->image; ?>">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--====================================================================================================-->
                        <!--======================================== Website Field =============================================-->
                        <div class="form-group row">
                            <label for="website" class="col-md-4 col-form-label text-md-right">{{ __('Website URL') }}</label>

                            <div class="col-md-6">
                                <input id="website" type="website" class="form-control @error('website') is-invalid @enderror" name="website" value="<?php echo $data[0]->website; ?>" required autocomplete="website" autofocus>

                                @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--====================================================================================================-->
                        <!--========================================== Submit Field ============================================-->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Data') }}
                                </button>
                            </div>
                        </div>
                        <!--====================================================================================================-->
                    </form>
                    <!--==================================================================-->
                </div>
                @else
                    abort(404);
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
