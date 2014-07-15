@extends('_master_P3')

@section('title')
    P3 - Welcome 
@stop


@section('content')
    
   		<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, 
		a 1st-century BC Latin text by Cicero, with words altered, added, and removed such that it is nonsensical, improper Latin.</p>
		<div class="subhead">
			<a href='/ligenerator'>Lorem Ipsum Generator<img alt='goto' src='{{ asset('goto.png') }}'</a>
		</div>
<hr>	
    	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  
			justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, 
			fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p>
		<div class="subhead">
			{{ link_to("/rugenerator", "Random User Generator") }}<img alt='goto' src='{{ asset('goto.png') }}'>
		</div>
@stop