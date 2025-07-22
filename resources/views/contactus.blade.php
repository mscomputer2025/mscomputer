@extends('master.master')

@section('title', 'Contact Us')

@section('content')
{{-- Banner Image Header --}}
<div class="w-100">
    <img src="{{ asset('images/contact_banner.png') }}" alt="Contact Us Banner" class="img-fluid  w-100 " style="height: 350px;">
</div>


{{-- Contact Form Section --}}
<div class="container py-5">
    <div class="row justify-content-center mx-3">
        <div class="col-lg-10">
            <div class="rounded shadow  p-4 p-md-5">
                <h2 class="fw-bold text-center mb-4">Contact Us Form</h2>
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="phone" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="e.g. 9876543210">
                        </div>
                        <div class="col-md-6">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="course" class="form-label">Course Interested In</label>
                        <select class="form-select" id="student_course" name="student_course" required>
                            <option selected disabled value="">Select a Course</option>
                            <option value="Tally with GST">Tally with GST</option>
                            <option value="MS-office">MS-office</option>
                            <option value="DCA(Diploma in Computer Application)">DCA(Diploma in Computer Application)</option>
                            <option value="Basic Computer">Basic Computer</option>
                            <option value="PGDCA(Post Graduate Diploma in Computer Application)">PGDCA(Post Graduate Diploma in Computer Application)</option>
                            <option value="DTP(Desktop Publishing)">DTP(Desktop Publishing)</option>
                            <option value="Sopken English">Spoken English</option>
                            <option value="Web Development & Designing">Web Development & Designing</option>
                            <option value="ADIT(Advanced Diploma Information Technology)">ADIT(Advanced Diploma Information Technology)</option>
                            <!-- Add more as needed -->
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Any Specific Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Write here..."></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-4 w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container py-5 ">
    <h2 class="fw-bold text-center mb-5">Our Branches</h2>
    <div class="row justify-content-center g-4 mx-3">

        <div class="col-md-6 text-center">
            <img src="{{ asset('images/ankleshwer_branch.png') }}" alt="Ankleshwar Branch"
                class="img-fluid rounded-3 shadow">
            <h4 class="fw-semibold mt-3">Ankleshwar Branch</h4>
        </div>

        <div class="col-md-6 text-center">
            <img src="{{ asset('images/bharuch_branch.png') }}" alt="Bharuch Branch"
                class="img-fluid rounded-3 shadow">
            <h4 class="fw-semibold mt-3">Bharuch Branch</h4>
        </div>
    </div>
</div>

@endsection