@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="box login">
            <h2 id="blue">Login</h2>
            <br>
            <form method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label class="label">Email</label>
                    <p class="control">
                        <input class="input" type="email" name="email" placeholder="staff@hrm.com" required>
                    </p>
                </div>
                <br>
                <div class="field">
                    <label class="label">Password</label>
                    <p class="control">
                        <input class="input" type="password" name="password" placeholder="password" required>
                    </p>
                </div>
                <br>
                <div class="field is-grouped">
                    <p class="control">
                        <input type="submit" class="button is-info" value="Submit">
                        <input type="reset" class="button is-link" value="Cancel">
                    </p>
                </div>
            </form>
        </div>
        <br>
    </div>
@endsection