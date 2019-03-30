@extends('layouts.simple')

@section('content')
<div class="container">
    <div class="left"><b>Theatre address</b></div>
    <div class="dash"></div>
    <div class="right">Teatral'na Square, 1, Chernivtsi, 58000</div>
    <br><br>

    <div class="left"><b>Email</b></div>
    <div class="dash"></div>
    <div class="right">dramteatr@i.ua</div>
    <br><br>

    <div class="left"><b>Management</b></div>
    <div class="dash"></div>
    <div class="right">+38 037 252 26 49</div>

    <div class="left"><b>Administration</b></div>
    <div class="dash"></div>
    <div class="right">+38 037 255 17 14</div>

    <div class="left"><b>Cash register</b></div>
    <div class="dash"></div>
    <div class="right">+38 037 252 50 85</div>
    <br><br>

    <form action="/contact/store" method="post">
        @csrf
        <input type="email" name="email" placeholder="name@email.com" autocomplete="off">
        <textarea name="message" cols="30" rows="10" placeholder="Your message"></textarea>
        <input type="submit" value="Send">
    </form>
</div>
@endsection