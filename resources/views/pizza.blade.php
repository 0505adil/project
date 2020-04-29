@extends ('layouts.app')

@section('content')
	<div class="row">
	@foreach($pizza as $pizz)
	<div class="card mb-3 col-3 ml-4 mr-4">
	  <img src="data:image/png;base64,{{ chunk_split(base64_encode($pizz->image)) }}" class="pizPic">
	  <div class="card-body">
	    <h5 class="card-title">{{$pizz->name}}</h5>
	    <p class="card-text">{{$pizz->description}}</p>
	    <form method="GET" action="/pizza/get">
	    <input type="hidden" name="pizzaName" value="{{$pizz->name}}">
	    <div class="foo">
		<label for="size">Размер пиццы:</label>
		<select name="size" class="custom-select">
			@foreach($pizza_type as $val)
  				<option>{{$val->size}}</option>
  			@endforeach 
  		</select>
  		<button type="submit" name="submit" class="btn bucket">В Корзину</button>
  		</div>
	    </form>
	  </div>
	</div> 
	@endforeach 
	</div>

	<script>
	    var msg = '{{Session::get('alert')}}';
	    var exist = '{{Session::has('alert')}}';
	    if(exist){
	      alert(msg);
	    }
  	</script>
  	
@endsection

