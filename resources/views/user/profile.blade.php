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
		<li> {{ $profile->userProfile->first_name }}</li>
		<li> {{ $profile->userProfile->last_name }}</li>
		<li> {{ $profile->userProfile->gender }}</li>	
	
	</ul>
	</div>
</div>
@endsection