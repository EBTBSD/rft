<h2>Név Módosítása</h2>
    <form method="POST" action="{{ route('auth.nameModify', $user->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder=" {{$user->name}}" value="{{$user->name}}" />
        <input type="password" name="password" placeholder="Jelszo" />
        <button type="submit">Módosítás</button>
    </form>
