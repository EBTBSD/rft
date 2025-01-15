@extends('public.main_layout')
@section('dynamic_content')
        <div class="main_jobs">
            <h2>Összes felhasználó: <?php echo $records->count(); ?> db</h2>
            <?php foreach ($records as $users): {?>
                <div class="jobs_div">
                    <hr>
                    <form method="POST" action="{{route('admin.usersModify', $users->id)}}">
                        @csrf
                        {{--
                        'name',
                        'age',
                        'sex',
                        'email',
                        'salary',
                        'permission',
                        'created_at',
                        'updated_at',
                        --}}

                        @method('PUT')
                        <h3> <?php echo $users->id .". ". $users->name ?></h3>
                        <input type="text" name="name" value="{{$users->name}}" required>
                        <input type="number" name="age" value="{{$users->age }}" required><br>
                        <select name="sex" id="sex">
                            <option value="Female" {{isset($users) && $users->sex == 'Female' ? 'selected' : ''}}>Nő</option>
                            <option value="Male" {{isset($users) && $users->sex == 'Male' ? 'selected' : ''}}>Férfi</option>
                            <option value="Other" {{isset($users) && $users->sex == 'Other' ? 'selected' : ''}}>Egyéb</option>
                        </select><br>
                        <input type="text" name="email" value="{{$users->email}}" required>
                        <input type="number" name="salary" value="{{$users->salary}}" required><br>
                        <select name="permission" id="permission">
                            <option value="munkavallalo" {{isset($users   ) && $users->permission == 'munkavallalo' ? 'selected' : ''}}>Munkavállaló</option>
                            <option value="munkaado" {{isset($users) && $users->permission == 'munkaado' ? 'selected' : ''}}>Munkaadó</option>
                            <option value="admin" {{isset($users) && $users->permission == 'admin' ? 'selected' : ''}}>Admin    </option>
                        </select>
                        <?php echo $users->created_at ."<br>". $users->updated_at ?>
                        <button class="jobs_btn" type="submit" onClick="return confirm('Biztosan modositod??\n({{$users->name}})')">Modosítás</button>
                    </form>
                </div>
                <?php } endforeach ?>
        </div>
@endsection
