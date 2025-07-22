
<div class="container-fluid">
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Students</h5>
                    <p class="fs-3 mb-0">{{ $totalStudents }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Courses</h5>
                    <p class="fs-3 mb-0">{{ $totalCourses }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-info h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Today's Registrations</h5>
                    <p class="fs-3 mb-0">{{ $todaysRegistrations }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-dark bg-warning h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">New Inquiries</h5>
                    <p class="fs-3 mb-0">{{ $newInquiries }}</p>
                </div>
            </div>
        </div>
    </div>
</div>



