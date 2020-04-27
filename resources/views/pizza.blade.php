@extends ('layouts.app')

@section('content')
	<div class="row">
	@foreach($pizza as $pizz)
	<div class="card mb-3 col-3 ml-4 mr-4">
	  <img src="data:image/png;base64,{{ chunk_split(base64_encode($pizz->image)) }}" class="pizPic">
	  <div class="card-body">
	    <h5 class="card-title">{{$pizz->name}}</h5>
	    <p class="card-text">{{$pizz->description}}</p>
	    <button class="btn bucket">В Корзину</button>
	  </div>
	</div> 
	@endforeach 
</div>
@endsection