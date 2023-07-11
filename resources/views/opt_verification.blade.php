@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-center text-light gap-3">
                    <h3 >Email Verification</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('verifyotp') }}" method="POST">
                        @csrf
                        <div class="form-group ">
                            <label for="">Enter OTP</label>
                            <input type="text" name="token" class="form-control mt-2" autocomplete="off" placeholder="Enter Token">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 container">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
