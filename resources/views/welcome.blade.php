@extends('layouts.master')

@section('title')
Welcome!
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>Sign Up</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Your E-mail</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="frist_name">First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="text" name="password" id="password">
            </div>
        </form>
    </div>

    <div class="col-md-6">
        <h3>Sign In</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Your E-mail</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="text" name="password" id="password">
            </div>
        </form>
    </div>
</div>
@endsection