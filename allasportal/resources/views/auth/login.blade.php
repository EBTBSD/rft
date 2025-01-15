@extends('public.main_layout')
@section('dynamic_content')
    <?php if(!auth()->user()):{?>
    <div class="">
        <h2>Bejelentkezés</h2>
        <form method="POST" action="{{route('auth.loginStore')}}">
            @csrf
            <input type="email" name="email" placeholder="email"/>
            <input type="password" name="password" placeholder="Jelszó"/>
            <button type="submit">Bejelentkezés</button>
        </form>
    </div>
    <?php }
    else:{ ?>
        <form method="POST" action="{{route('auth.logout')}}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    <?php } endif ?>
@endsection
