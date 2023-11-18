@extends('layouts.app')
@section('content')
    <x-admin.alert />
    <div class="mb-5 row">
        <div class="col-12 text-center p-4 card shadow ">
            <h1 class="title1">About Onlintrader Software</h1>
            <p class="title1">Current Version: 5.0</p>
            {{-- <div>
                <button type="button" class="text-white btn btn-primary btn-sm disabled" disabled>
                check for update
                </button>
               
            </div> --}}
            <div class="mt-4">
                <a href="https://getonlinetrader.com/doc/help-desk" target="_blank" class="btn btn-primary"> Software
                    documentation</a>
            </div>
        </div>
    </div>
@endsection
