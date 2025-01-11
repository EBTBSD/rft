<h2>Jelszó Modósítás // W.I.P.</h2>
        <form method="POST" action="">
            @csrf
            @method('PUT')
            <label for="salary">Régi jelszó:</label>
            <input type="password" name="oldpass" placeholder="Régi jelszó" /><br>
            <label for="salary">Új jelszó:</label>
            <input type="password" name="password" placeholder="Új jelszó" />
            <label for="salary">Új jelszó újra:</label>
            <input type="password" name="comfpass" placeholder="Új jelszó megerősítése" />
            <button type="submit" >Modósítás</button>
        </form>
