@extends('layouts.app')

@section('content')
<div class="container">
    @include('alert')
    <div class="main">
        <div class="containear">
		  <section class="background">
		    <div class="content-wrapper">
		      <p class="content-title">Full Page Parallax Effect</p>
		      <p class="content-subtitle">Scroll down and up to see the effect!</p>
		    </div>
		  </section>
		  <section class="background">
		    <div class="content-wrapper">
		      <p class="content-title">Cras lacinia non eros nec semper.</p>
		      <p class="content-subtitle">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras ut massa mattis nibh semper pretium.</p>
		    </div>
		  </section>
		  <section class="background">
		    <div class="content-wrapper">
		      <p class="content-title">Etiam consequat lectus.</p>
		      <p class="content-subtitle">Nullam tristique urna sed tellus ornare congue. Etiam vitae erat at nibh aliquam dapibus.</p>
		    </div>
		  </section>
		</div>
    </div>
</div>
@endsection
