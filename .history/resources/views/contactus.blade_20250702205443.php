@extends('master.master')

@section('title', 'Contact Us')

@section('content')

    <div class="container py-5 bg-light">
        <div class="row align-items-center mx-3">
            <!-- Left Side: Image -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="contact-banner position-relative">
                    <img src="{{ asset('images/contact.png') }}" alt="MS Computer Institute"
                        class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover" style="max-height: 500px;">
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-6">
                <h2 class="fw-bold text-center mb-4">Inquiry / Contact Us Form</h2>

                <form class="bg-white p-4 rounded shadow-sm">
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
                        <select class="form-select" id="course">
                            <option selected disabled>Select a course</option>
                            <option>Basic Computer Course</option>
                            <option>Financial Accounting</option>
                            <option>DTP</option>
                            <option>Microsoft Office</option>
                            <option>Web Development</option>
                            <option>Graphic Design</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Any Specific Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Write here..."></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container py-5 bg-light">
        <h2 class="fw-bold text-center mb-5">Our Branches</h2>
        <div class="row justify-content-center g-4 mx-3">
            <!-- Ankleshwar Branch -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/ankleshwer_branch.png') }}" alt="Ankleshwar Branch"
                    class="img-fluid rounded-3 shadow">
                <h4 class="fw-semibold mt-3">Ankleshwar Branch</h4>
            </div>

            <!-- Bharuch Branch -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/bharuch_branch.png') }}" alt="Bharuch Branch" class="img-fluid rounded-3 shadow">
                <h4 class="fw-semibold mt-3">Bharuch Branch</h4>
            </div>
        </div>
    </div>

@endsection