@extends('public.main_layout')
@section('dynamic_content')
<?php
    $user = Auth::user();
?>
<h1>Adatok módosítása // W.I.P. //</h1>
<div class="">
    @include('auth.user.salary')
    <hr>
    @include('auth.user.name')
    <hr>
    @include('auth.user.email')
    <hr>
    @include('auth.user.password')
</div>
@endsection
