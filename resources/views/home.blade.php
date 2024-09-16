@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpCpzAlmrfzPB_q16Dbvq0IihxEcGEKTZFLA&s">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex">
                <h1 class="pe-5">freeCodeGram</h1>
                <button id="follow-button"class="px-3">follow</button>
            </div>
            <div id="user-info" class="d-flex">
                <p class="pe-3"><strong>153</strong> posts</p>
                <p class="pe-3"><strong>23k</strong> followers</p>
                <p class="pe-3"><strong>212</strong> following</p>
            </div>  
            <h2 id="company-name">freeCodeGram.org</h2>
            <p id="bio" class="mb-1">We're a global community of millions of people learning to code (an instagram clone) together. We're an open source, donor-supported nonprofit.</p>
            <a id="company-link" href="freecodegram.org">www.freeCodeGram.org</a>

        </div>
    </div>
   <div id="carousel" class="col-4 pt-5">
    <img src="/images/image1.jpg" >
    <img src="/images/image2.jpg" >
    <img src="/images/image3.jpg" >
   </div>
</div>
@endsection
