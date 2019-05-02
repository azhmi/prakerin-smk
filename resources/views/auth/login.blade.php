@extends('layout.users')

@section('content')
<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
            <h3>PLEASE LOGIN TO APP</h3>
            <p>This is the best app ever!</p>
        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                          
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                        </div>
                        <button class="btn btn-success btn-block loginbtn" type="submit">Login</button>
                   
                    </form>
                    </div>
            </div>
        </div>
        <div class="text-center login-footer">
            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
        </div>
    </div>   
</div>
@endsection
