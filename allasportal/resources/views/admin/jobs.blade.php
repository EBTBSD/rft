@extends('public.main_layout')
@section('dynamic_content')
        <div class="main_jobs">
            <h2>Elérhető állások: <?php echo $records->count(); ?> db</h2>
            <?php foreach ($records as $jobs): {?>
                <div class="jobs_div">
                    <hr>
                    <form method="POST" action="{{route('admin.jobDelete', $jobs->id)}}">
                        @csrf
                        @method('DELETE')
                        <h3><?php echo $jobs->id .". ". $jobs->position ?></h3>
                        <h4><?php echo $jobs->company ?></h4>
                        <p class="jobs_desc"><?php echo $jobs->description ?></p>
                        <button class="jobs_btn" type="submit" onClick="return confirm('Biztosan törlöd?\n({{$jobs->position}} | {{$jobs->company}})')">Törlés</button>
                    </form>
                </div>
                <?php } endforeach ?>
        </div>
@endsection
