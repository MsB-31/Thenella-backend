@component('mail::message')
# Booking Request Received ✝️

Dear **{{ $booking->name }}**,

Thank you for reaching out to THENELLA Ministries.
We have received your booking request for a **{{ $booking->event_type }}**.

We will review your request and contact you shortly at **{{ $booking->email }}**.

God bless you,
**THENELLA Ministries**
@endcomponent

{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
