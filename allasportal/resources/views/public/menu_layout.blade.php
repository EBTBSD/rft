<table class="table_link">
    <tr class="tr_link">
        <td><a class="dropbtn" href="/">Főoldal</a></td>
        <td><a class="dropbtn" href="/jobs">Munkák</a></td>
        <?php if(auth()->user()): { ?>
            <?php if(auth()->user()->permission == "admin"):{ ?>
                <td><div class="dropdown">
                    <button onclick="adminDrop()" class="dropbtn">Admin</button>
                    <div id="adminDropdown" class="dropdown-content">
                      <a href="/admin/users">Felhasználók</a>
                      <a href="/admin/jobs">Munkák</a>
                    </div>
                </div></td>

            <?php } elseif(auth()->user()->permission == "munkaado"): { ?>
                <td><div class="dropdown">
                    <button onclick="hrDrop()" class="dropbtn">Poziciók</button>
                       <div id="hrDropdown" class="dropdown-content">
                             <a href="/jobs/newjob">Új pozició feltöltése</a>
                            <a href="/jobs/jobs">Póziciók kezelése</a>
                    </div>
                </div></td>
            <?php } endif ?>
            <td><div class="dropdown">
                <button onclick="userDrop()" class="dropbtn">Fiók</button>
                   <div id="userDropdown" class="dropdown-content">
                        <a href="/auth/profile">Fiók kezelés</a>
                        <?php if(auth()->user()->permission == "munkavallalo"): { ?>
                        <a href="/form/regisztracio">Jelentkezett poziciók</a>
                        <?php } endif ?>
                        <a href="/auth/logout">Kijelentkezés</a>
                </div>
            </div></td>
        <?php } else:{ ?>
                <td><a class="dropbtn" href="/auth/login">Bejelentkezés</a></td>
                <td><a class="dropbtn" href="/auth/register">Regisztráció</a></td>
        <?php }endif ?>
    </tr>
<table>
