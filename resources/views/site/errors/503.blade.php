





@extends('site.includes.base')
@section('title')
    503
@endsection

@section('content')

<div class="error-area">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="error-item">
				<h1>503</h1>
				<h2>Sorry! You Page Not Found</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quae a sit voluptas vero hic
					quos quidem sequi? Quo voluptates numquam eaque aliquid accusamus iste blanditiis sapiente
					perferendis incidunt doloribus!</p>
				<a class="common-btn" href="{{ route('home') }}">{{__("Allez à l'accueil")}}</a>
			</div>
		</div>
	</div>
</div>

@endsection
