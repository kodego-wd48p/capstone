@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title">Recuiter</h5>
                            <p class="card-text">I'm a recuiter.</p>
                            <a href="/register/1" class="btn btn-primary">Register</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title">Applicant</h5>
                            <p class="card-text">I'm an applicant</p>
                            <a href="/register/2" class="btn btn-primary">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
@endsection