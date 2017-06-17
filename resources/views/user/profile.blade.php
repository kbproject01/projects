@extends('layouts.app')

@section('title')
	profile|page
@endsection

@section('content')

<div class='container'>
	<div class='row'>	
		<H1> user Profile </H1>
		
	</div>


	<div class='row'>
	<ul>
	
		<li> {{ $profile->email }}</li>
		<li> {{ $profile->UserProfile->first_name }}</li>
		<li> {{ $profile->UserProfile->last_name }}</li>
		<li> {{ $profile->UserProfile->last_name }}</li>	
	
	</ul>
	</div>
</div>
@endsection