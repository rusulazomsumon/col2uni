@extends('frontend.layouts.master')

@section('content')
    <div class="container">
        <div class="row p-5">
            
                <div class="contact-info col-lg-6">
                    <h3>Contact Information</h3>
                    <p>Contact No: <a href="tel:+01755446632">01755446632</a></p>
                    <p>Email: <a href="mailto:contact@collegetouniversity.com">contact@collegetouniversity.com</a></p>
                    {{-- <p>Address: [Your Address Here]</p> --}}
                </div>
            
                <div class="contact-form col-lg-6 bg-success text-light p-3">
                    <h3>Contact Us</h3>

                    <form action="#" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Please enter your name.
                            </div>
                        </div>
                    
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                    
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message.
                            </div>
                        </div>
                    
                        <button type="submit" class="btn btn-primary" disabled>Submit</button>
                    </form>
                </div>
            

        </div>
    </div>
@endsection