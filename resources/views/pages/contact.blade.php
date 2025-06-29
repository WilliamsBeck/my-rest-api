@extends('layouts.app-public')
@section('title', 'Contact Us')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Get in Touch with <span class="wilbake-contact">Wilbake</span></h2>
            <p class="text-muted">We’d love to hear from you — whether it’s feedback, questions, or sweet messages!</p>
        </div>

        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card shadow-sm p-4 border-0">
                    <h4 class="mb-4">Send Us a Message</h4>
                    <form id="contact-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name *</label>
                            <input type="text" class="form-control rounded-pill" id="name" name="name" placeholder="e.g. Williams" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email *</label>
                            <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="e.g. williams@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control rounded" id="message" name="message" rows="5" placeholder="What’s on your mind?" required></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary px-4 rounded-pill">Send Message</button>
                        </div>
                        <div id="contact-status" class="mt-3"></div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="bg-white shadow-sm rounded p-4">
                    <h5 class="mb-4">Our Offline Store</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                            Jl. Tanjung Duren Utara, Grogol, DKI Jakarta
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-telephone-fill text-primary me-2"></i>
                            (+62) 857-3764-6608
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-envelope-fill text-primary me-2"></i>
                            info@wilbake.com
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-clock-fill text-primary me-2"></i>
                            Mon - Sun: 10:00 - 21:00
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('pages/js/contact.js') }}"></script>
@endpush

