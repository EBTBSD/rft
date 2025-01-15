@extends('public.main_layout')
@section('dynamic_content')
    <?php if(!auth()->user()):{?>
        <div class="">
            <h2>Regisztráció</h2>
            <form method="POST" action="{{route('auth.registerStore')}}">
                @csrf
                <input type="text" name="name" placeholder="Név"/>
                <input type="email" name="email" placeholder="email"/>
                <input type="number" name="age" placeholder="Életkor"/>
                <select name="sex">
                    <option valie="Female">Nő</option>
                    <option valie="Male">Férfi</option>
                    <option valie="Other">Egyéb</option>
                </select>
                <input type="password" name="password" placeholder="Jelszó"/>
                <button type="submit">Regisztráció</button>
            </form>
        </div>
    <?php } endif ?>
@endsection
