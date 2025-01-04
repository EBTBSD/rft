@section('application_form')
<div id="applyModal" class="modal-overlay">
    <div class="modal">
        <div class="modal-header">
            <span class="close-btn">&times;</span>
            <h2>Jelentkezés</h2>
        </div>
        <div class="modal-body">
            <form action="{{ route('job.apply') }}" method="POST" id="applyForm">
                @csrf
                <input type="hidden" name="job_id" id="job_id" value="">
                <div class="form-group">
                    <label for="name">Név</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Motivációs levél</label>
                    <textarea class="form-control" id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn">Jelentkezem</button>
            </form>
        </div>
    </div>
</div>
@endsection
