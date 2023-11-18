@extends('layouts.app')
@section('content')
    <x-admin.alert />
    <div class="row">
        <div class="col-md-12">
            <div class="p-3 card ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <h1 class="d-inline text-primary">{{ $user->name }}</h1><span></span>
                            <div class="d-inline">
                                <div class="float-right btn-group">
                                    <a class="btn btn-primary btn-sm" href="{{ route('manageusers') }}"> <i
                                            class="fa fa-arrow-left"></i> back</a> &nbsp;
                                    <button type="button" class="btn btn-secondary dropdown-toggle btn-sm"
                                        data-toggle="dropdown" data-display="static" aria-haspopup="true"
                                        aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-lg-right">
                                        <a class="dropdown-item" href="{{ route('loginactivity', $user->id) }}">Login
                                            Activity</a>
                                        @if ($user->status == null || $user->status == 'blocked')
                                            <a class="dropdown-item"
                                                href="{{ url('admin/dashboard/uunblock') }}/{{ $user->id }}">Unblock</a>
                                        @else
                                            <a class="dropdown-item"
                                                href="{{ url('admin/dashboard/uublock') }}/{{ $user->id }}">Block</a>
                                        @endif
                                        @if ($user->trade_mode == 'on')
                                            @if ($mod['investment'])
                                            <a class="dropdown-item"
                                                href="{{ url('admin/dashboard/usertrademode') }}/{{ $user->id }}/off">Turn
                                                off auto ROI
                                            </a>
                                            @endif
                                        @else
                                            @if ($mod['investment'])
                                            <a class="dropdown-item"
                                                href="{{ url('admin/dashboard/usertrademode') }}/{{ $user->id }}/on">Turn
                                                on auto ROI
                                            </a>
                                            @endif
                                        @endif
                                        @if ($user->email_verified_at)
                                        @else
                                            <a href="{{ url('admin/dashboard/email-verify') }}/{{ $user->id }}"
                                                class="dropdown-item">Verify Email</a>
                                        @endif
                                        <a href="#" data-toggle="modal" data-target="#topupModal"
                                            class="dropdown-item">Credit/Debit</a>
                                        <a href="#" data-toggle="modal" data-target="#resetpswdModal"
                                            class="dropdown-item">Reset Password</a>
                                        <a href="#" data-toggle="modal" data-target="#clearacctModal"
                                            class="dropdown-item">Clear Account</a>
                                        @if ($mod['investment'])
                                        <a href="#" data-toggle="modal" data-target="#TradingModal"
                                            class="dropdown-item">Add ROI History
                                        </a>
                                        @endif
                                        <a href="#" data-toggle="modal" data-target="#edituser"
                                            class="dropdown-item">Edit</a>
                                        <a href="{{ route('showusers', $user->id) }}" class="dropdown-item">Add
                                            Referral</a>
                                        <a href="#" data-toggle="modal" data-target="#sendmailtooneuserModal"
                                            class="dropdown-item">Send
                                            Email</a>
                                        <a href="#" data-toggle="modal" data-target="#switchuserModal"
                                            class="dropdown-item text-success">Login as {{ $user->name }}</a>
                                        <a href="#" data-toggle="modal" data-target="#deleteModal"
                                            class="dropdown-item text-danger">Delete {{ $user->name }}</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 mt-4 border rounded row ">
                        <div class="col-md-3">
                            <h5 class="font-weight-bold ">Account Balance</h5>
                            <p>{{ $settings->currency }}{{ number_format($user->account_bal, 2, '.', ',') }}
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="font-weight-bold ">Profit</h5>
                            <p>{{ $settings->currency }}{{ number_format($user->roi, 2, '.', ',') }} </p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="font-weight-bold ">Referral Bonus</h5>
                            <p>{{ $settings->currency }}{{ number_format($user->ref_bonus, 2, '.', ',') }}</p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="font-weight-bold ">Bonus</h5>
                            <p>{{ $settings->currency }}{{ number_format($user->bonus, 2, '.', ',') }}</p>
                        </div>
                        <div class="col-md-3">
                            <h5 class="font-weight-bold ">User Account Status</h5>
                            @if ($user->status == 'blocked')
                                <span class="badge badge-danger">Blocked</span>
                            @else
                                <span class="badge badge-success">Active</span>
                            @endif
                        </div>
                        @if ($mod['investment'])
                        <div class="col-md-3">
                            <h5 class="font-weight-bold ">Inv. Plans</h5>
                            <a class="btn btn-sm btn-primary d-inline" href="{{ route('user.plans', $user->id) }}">View
                                Plans</a>
                        </div>
                        @endif
                        <div class="col-md-3">
                            <h5 class="font-weight-bold ">KYC</h5>
                            @if ($user->account_verify == 'Verified')
                                <span class="badge badge-success">Verified</span>
                            @else
                                <span class="badge badge-danger">Not Verified</span>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <h5 class="font-weight-bold ">ROI Mode</h5>
                            @if ($mod['investment'])
                            @if ($user->trade_mode == 'off' || $user->trade_mode == null)
                                <span class="badge badge-danger">Off</span>
                            @else
                                <span class="badge badge-success">On</span>
                            @endif
                            @endif
                        </div>
                    </div>
                    <div class="mt-3 row ">
                        <div class="col-md-12">
                            <h5>USER INFORMATION</h5>
                        </div>
                    </div>
                    <div class="p-3 border row ">
                        <div class="col-md-4 border-right">
                            <h5>Fullname</h5>
                        </div>
                        <div class="col-md-8">
                            <h5>{{ $user->name }}</h5>
                        </div>
                    </div>
                    <div class="p-3 border row ">
                        <div class="col-md-4 border-right">
                            <h5>Email Address</h5>
                        </div>
                        <div class="col-md-8">
                            <h5>{{ $user->email }}</h5>
                        </div>
                    </div>
                    <div class="p-3 border row ">
                        <div class="col-md-4 border-right">
                            <h5>Mobile Number</h5>
                        </div>
                        <div class="col-md-8">
                            <h5>{{ $user->phone }}</h5>
                        </div>
                    </div>
                    <div class="p-3 border row ">
                        <div class="col-md-4 border-right">
                            <h5>Date of birth</h5>
                        </div>
                        <div class="col-md-8">
                            <h5>{{ $user->dob }}</h5>
                        </div>
                    </div>
                    <div class="p-3 border row ">
                        <div class="col-md-4 border-right">
                            <h5>Nationality</h5>
                        </div>
                        <div class="col-md-8">
                            <h5>{{ $user->country }}</h5>
                        </div>
                    </div>
                    <div class="p-3 border row ">
                        <div class="col-md-4 border-right">
                            <h5>Registered</h5>
                        </div>
                        <div class="col-md-8">
                            <h5>{{ \Carbon\Carbon::parse($user->created_at)->toDayDateTimeString() }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.Users.users_actions')
@endsection
