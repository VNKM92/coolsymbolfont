@extends('frontend.layouts.master')
@section('title', $data->metatitle ?? "")
@section('description', $data->metadiscription  ?? "")

@section('content')


        <main class="flex-grow p-6 text-center">
			 
				<h1 class="text-3xl font-bold mb-6">{{ $data->title}}</h1>

				<div class="flex-grow p-6 text-left">
					{!! $data->discription !!}
				</div>
		</main>

@endsection