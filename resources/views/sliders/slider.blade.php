
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  
   <div class="carousel-inner">
         @php $i = 1; @endphp
         @foreach ($slider   as $slideritem )
         
      
      <div class="carousel-item {{ $i == '1' ? 'active ':'' }}">
         @php $i++; @endphp
         <img src="{{asset('uploads/banner/'.$slideritem->image)}}" class="d-block w-100" alt="slider image">
      
         <div class="carousel-caption d-none d-md-block">
            <h5>{{$slideritem->title}}</h5>
            <p>{{$slideritem->description}}</p>
         </div>
       </div>
   
         @endforeach

  </div> 
  
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
    </button>

</div>
