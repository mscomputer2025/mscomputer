@extends('master.master')
@section('title', 'Gallery')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Our Gallery</h2>

        <div class="row g-4">
            @forelse ($images as $index => $image)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="ratio ratio-1x1 rounded overflow-hidden">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal{{ $index }}">
                                <img src="{{ asset($image) }}" class="w-100 h-100 object-fit-cover" alt="Gallery Image">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Modal for full image popup -->
                <div class="modal fade" id="imageModal{{ $index }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $index }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-transparent border-0">
                            <div class="modal-body p-0">
                                <img src="{{ asset($image) }}" class="img-fluid rounded shadow" alt="Full Image">
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">No images found in the gallery.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
