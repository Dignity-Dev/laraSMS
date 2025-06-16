@extends('layouts.app')
@section('title', 'Contact Us')
@section('header')
<h1>Contact Us</h1>
@endsection
@section('content')
<p>We would love to hear from you! If you have any questions, comments, or feedback, please feel free to reach out to us using the form below.</p>
<form action="/contact" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
    </div>
    <div>
        <button type="submit">Send Message</button>
    </div>
</form>
@endsection
