<?php
    $user = Auth::user();
?>
@extends('public.main_layout')
@section('dynamic_content')
    <div class="main_jobs">
        <h2>Új pozició feltöltése</h2>
        <form method="POST" action="{{route('jobs.newjob')}}">
            @csrf
            <label for="company">Cég neve</label><br>
            <input class="newjob_input" type="text" name="company" placeholder="Cég neve"/><br>
            <label for="position">Pozició </label><br>
            <input class="newjob_input" type="text" name="position" placeholder="Pozició neve"/><br>
            <label for="salary">Fizetés </label><br>
            <input class="newjob_input" type="text" name="salary" placeholder="Fizetés"/><br>
            <label for="description">Munkaköri leírás </label><br>
            <textarea class="newjob_textarea" name="description" placeholder="Munkaleírás" rows="4" cols="50" ></textarea><br>
            <input class="" type="text" name="publisher" value="<?php $user->name ?>" hidden/><br>
            <button class="newjob_btn" type="submit">Feltöltés</button>
        </form>
    </div>
@endsection
