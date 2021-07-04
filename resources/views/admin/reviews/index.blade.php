@extends('layouts.admin');


@section('title')
    Package's Reviews
@endsection


@section('content')


    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items baseline">
                <h4>Reviews</h4>
             

            </div>


            @foreach ($reviews as $review)
          
                <hr class="mt-3 mb-3">
                    <h4>Review From : {{$review->user->name}}</h4>
                    <p>{{$review->text}}</p>
                    <p>Rating : {{$review->rating}} stars</p>
                    @if($review->image != NULL)
                    <h4>Additional Image : </h4>
                    <img src="/storage/{{$review->image}}" alt="Review Image" style="object-fit: cover;width:200px">
                    @endif
                
            @endforeach
            <hr class="mt-3 mb-3">
        </div>
    </div>
@endsection
