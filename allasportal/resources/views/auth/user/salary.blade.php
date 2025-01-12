<h2>Felhasználó Adatai Modósítása</h2>
<form method="POST" action="{{ route('auth.salaryModify', $user->id) }}">
    @csrf
    @method('PUT')
    <label for="salary">Fizetés:</label>
    <input type="text" name="salary" placeholder="Fizetés" value="{{$user->salary}}" />

    <label for="salary">Nem:</label>
    <select name="sex">
        <option value="woman">Nő</option>
        <option value="man">Férfi</option>
        <option value="other">Egyéb</option>
    </select>
    <button type="submit">Modósítás</button>
</form>
