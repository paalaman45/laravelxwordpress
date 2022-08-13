@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="http://3.27.12.201/test/" method="post">
                        <input type="hidden" name="login" value="loggedin" />
                        <input type="submit" name="atp" value="ATP Page" class="btn btn-primary"/>
                    </form>
                    </br>
                    <hr>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
