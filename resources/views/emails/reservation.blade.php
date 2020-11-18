@component('mail::message')

#Thanks for the reservation.<br>
<strong>First Name</strong> {{$data['first-name'] }}<br>
<strong>Last Name</strong> {{$data['first-name'] }}<br>
<strong>Email</strong> {{$data['email'] }}<br>
<strong>Phone number</strong> {{$data['number'] }}<br>
<strong>Number of Guests</strong> {{$data['number'] }}<br>
<strong>Date</strong> {{$data['date'] }}<br>
<strong>Time</strong> {{$data['time'] }}<br>

@endcomponent