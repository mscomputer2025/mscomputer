<section class="bg-white p-4 rounded shadow-sm mb-5" id="leave-reply">
    <h4 class="fw-bold mb-3">Leave a Reply</h4>
    <form method="POST" action="#">
        @csrf
        <div class="mb-3">
            <label class="form-label d-block">Your Rating</label>
            <div class="rating mb-2" id="starRating">
                @for ($i = 1; $i <= 5; $i++)
                    <i class="bi bi-star fs-4 text-warning star" data-value="{{ $i }}"></i>
                @endfor
            </div>
            <input type="hidden" name="rating" id="ratingInput" value="0">
            <small class="text-muted">Your email address will not be published. Required fields are marked *</small>
        </div>
        <div class="mb-3"><input type="text" class="form-control" name="author" placeholder="Enter Author*" required></div>
        <div class="mb-3"><input type="email" class="form-control" name="email" placeholder="Enter Author Email*" required></div>
        <div class="mb-3"><input type="url" class="form-control" name="website" placeholder="Enter Author Website"></div>
        <div class="mb-3"><input type="text" class="form-control" name="title" placeholder="Enter Title"></div>
        <div class="mb-3"><textarea class="form-control" name="review" rows="4" placeholder="Enter your review*" required></textarea></div>
        <button type="submit" class="btn btn-primary">Post Comment</button>
    </form>
</section>
