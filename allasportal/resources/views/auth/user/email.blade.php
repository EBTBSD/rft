<h2>Email Modósítás // W.I.P.</h2>
        <form method="POST" action="">
            @csrf
            @method('PUT')
            <label for="salary">Régi email:</label>
            <input type="email" name="oldemail" placeholder="Régi email" value="{{$user->email}}" /><br>
            <label for="salary">Új email:</label>
            <input type="email" name="email" placeholder="Új email"  />
            <label for="salary">Új email újra:</label>
            <input type="email" name="comfemail" placeholder="Új email megerősítése" /><br>
            <label for="salary">Jelszó:</label>
            <input type="password" name="password" placeholder="Jelszó" />
            <button type="submit" >Modósítás</button>
        </form>
