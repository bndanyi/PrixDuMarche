@extends('layouts.master')
@section('register')
<div class="span5">
    <div class="form">
        <form action='register' method='post'>
            <fieldset><legend>Create Your Merchant Account</legend>
                <div class="control-group">
                    {{Form::label('name','Name:*',array('class="control-label"'))}}
                    <div class="controls">
                        {{Form::text('name')}}
                    </div>
                </div>
                <div class="control-group">
                    {{Form::label('email','E-mail Address:*',array('class="control-label"'))}}
                    <div class="controls">
                        {{Form::email('email')}}
                    </div>
                </div>
                <div class="control-group">
                    {{Form::label('password','Password:*',array('class="control-label"'))}}
                    <div class="controls">
                        {{Form::password('password')}}
                    </div>
                </div>
                <div class="control-group">
                    {{Form::label('confirm_password','Confirm Password:*',array('class="control-label"'))}}
                    <div class="controls">
                        {{Form::password('password')}}
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        {{Form::submit('Sign Up',array('class="btn btn-primary"'))}}
                    </div>
                </div>
            </fieldset>
            {{Form::token()}}
        </form>
    </div>
</div>
@endsection