@component('mail::message')
# Introduction

Your OTP is {{$OTP}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
