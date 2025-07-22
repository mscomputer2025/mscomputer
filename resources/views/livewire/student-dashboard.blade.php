<div class="container py-4">
    <h3 class="fw-bold mb-4">Welcome, {{ $student->student_name }}</h3>

    <div class="row">
        @foreach($enrollments as $enroll)
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">{{ $enroll->course->name }}</h5>
                    <p><strong>Duration:</strong> {{ $enroll->course->duration }}</p>
                    <p><strong>Total Fee:</strong> ₹{{ $enroll->total_fee }}</p>
                    <p><strong>Paid:</strong> ₹{{ $enroll->paid_fee }}</p>
                    <p><strong>Remaining:</strong> ₹{{ $enroll->total_fee - $enroll->paid_fee }}</p>

                    <div class="d-flex justify-content-between mt-3">
                        <a href="#" class="btn btn-outline-primary btn-sm">View Course</a>
                        <a href="#" class="btn btn-outline-success btn-sm">Pay Remaining</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Announcements -->
    <h4 class="mt-5 mb-3">📢 Latest Announcements</h4>
    @forelse($announcements as $notice)
        <div class="alert alert-info">
            <strong>{{ $notice->title }}</strong> <br>
            {{ $notice->message }}
        </div>
    @empty
        <p class="text-muted">No announcements at the moment.</p>
    @endforelse
</div>
