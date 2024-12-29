@extends('public.main_layout')
@section('dynamic_content')
<?php
    $user = Auth::user();
    use Carbon\Carbon;
?>
        <div class="main_jobs">
            <h2>Elérhető állások: <?php echo $records->count(); ?> db</h2>
            <?php foreach ($records as $jobs): {?>
                <div class="jobs_div">
                    <hr>
                    <h3><?php echo $jobs->id .". ". $jobs->position ?></h3>
                    <h4><?php echo $jobs->company ?></h4>
                    <p class="jobs_desc"><?php echo $jobs->description ?></p>
                    {{-- <?php if(auth()->user()):{?>
                        <button class="jobs_btn" type="submit">Jelentkezés</button>
                    <?php } else:{ ?>
                        <a class="jobs_btn" href="/auth/login">Bejelentkezés</a>
                   <?php } endif ?> --}}
                        <button class="jobs_btn"
                            data-id="{{ $jobs->id }}"
                            data-company="{{ $jobs->company }}"
                            data-position="{{ $jobs->position }}"
                            data-salary="{{ $jobs->salary }}"
                            data-description="{{ $jobs->description }}"
                            data-created="{{ $jobs->created_at }}">
                                Jelentkezem
                        </button>

                </div>
                <?php } endforeach ?>
        </div>

        <div id="applyModal" class="modal-overlay">
            <div class="modal">
                <div class="modal-header">
                    <span class="close-btn">&times;</span>
                    <h2>Jelentkezés</h2>
                </div>
                <div class="modal-body">
                    <form action="{{route('job.applyStore')}}" method="POST" id="applyForm">
                        @csrf
                        <div class="form-group">
                            <input name="job_id" id="job_id" value="" hidden>
                            <h3 id="job_pos" name="job_pos" class=""></h3>
                            <h4 id="job_name" name="job_name" class=""></h4>
                            <label for="name">Név: </label>
                            <input type="text" value="{{$user->name}}" name="name" readonly><br>
                            <label for="sex">Nem: </label>
                            <input type="text" value="{{$user->sex}}" name="sex" readonly><br>
                            <label for="email">Email: </label>
                            <input type="text" value="{{$user->email}}" name="email" readonly><br>
                            <label for="birthplace">Születési hely: </label>
                            <input type="text" name="birthplace"><br>
                            <label for="name">Születési idő: </label>
                            <?php
                                $bd = Carbon::today()->subYears(($user->age-1))->toDateString();
                            ?>
                            <input type="date" name="birthdate" max="{{ $bd }}"><br>
                            <button type="submit" class="jobs_btn">Jelentkezem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- @yield('application_form') --}}
@endsection
