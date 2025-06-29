@extends('layouts.app-public')
@section('title', 'My Profile')

@section('content')
<section class="py-5 bg-light min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow border-0 rounded-4 p-4 p-md-5 bg-white">
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/images/wilbake/pp.jpg') }}" alt="Profile Picture" class="rounded-circle mb-3" width="100" height="100">
                        <h3 style="color: #946038;" class="fw-bold mb-0 ">My Profile</h3>
                        <p class="text-muted small">Manage your account information</p>
                    </div>

                    <form id="profile-form">
                      
                        <div class="mb-3 ">
                            <label for="name" class="form-label fw-semibold">Full Name</label>
                            <input type="text" class="form-control rounded-3" id="name" name="name" placeholder="e.g. Williams" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold">Phone Number</label>
                            <input type="text" class="form-control rounded-3" id="phone" name="phone" placeholder="e.g. 085737646608">
                        </div>

                        <div class="mb-4">
                            <label for="address" class="form-label fw-semibold">Shipping Address</label>
                            <textarea class="form-control rounded-3" id="address" name="address" rows="3" placeholder="Enter your delivery address"></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary rounded-pill py-2">Save Changes</button>
                        </div>

                        <div id="profile-status" class="mt-3 text-center"></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    body {
        background-color: #fefefe;
    }

    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        color: #5a5a5a;
    }

    .form-control:focus {
        border-color: #ff7ea5;
        box-shadow: 0 0 0 0.15rem rgba(255, 126, 165, 0.25);
    }

    .btn-primary {
        background-color: #ff7ea5;
        border-color: #ff7ea5;
    }

    .btn-primary:hover {
        background-color: #ff5e91;
        border-color: #ff5e91;
    }
</style>
@endpush

@push('scripts')
<script src="{{ asset('pages/js/profile.js') }}"></script>
@endpush
