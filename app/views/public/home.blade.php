@extends('layouts.master')
@section('content')
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="nav-collapse collapse">
                <a class="brand pull-left" href="/">Prixdumarche</a>
                <ul class="nav">
                    <li>
                        <a class="text-info" title="Create a merchant account"href="register">Sign Up</a>
                    </li>
                </ul>
                <form class="navbar-form pull-right">
                    <input class="span2" type="text" placeholder="Email" name="email">
                    <input class="span2" type="password" placeholder="Password" name="password">
                    <button type="submit" class="btn">Sign in</button>
                </form>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div>

</div>
@endsection
