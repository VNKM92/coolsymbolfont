@extends('frontend.layouts.master')
@section('title', $data->metatitle ?? "")
@section('description', $data->metadiscription  ?? "")
@section('keywords', $data->focuskeyword  ?? "")


@section('content')
        <style>
            
            .tag-card {
                    background: #e9eed9;
                    border: 1px solid #570606;
                    border-radius: 8px;
                    padding: 10px 15px;
                    font-size: 20px;
                    text-align: center;
                    overflow: hidden;
                    cursor: pointer;
                    box-shadow: 0 2px 4px #570606;
                    
                    
                    /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); */
                    transition: transform 0.2s, background-color 0.2s;
                    user-select: none;
                }
        </style>

        <main class="flex-grow p-6 text-center">
			<h1 class="text-3xl font-bold mb-6"> {!! $data->subheading  ?? "CoolSymbol" !!}</h1>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
			</div>
		</main>
		
		<div class="grid-container mb-4">
		    
		      {!! $data->discription ?? "" !!}
		</div>
		
		
		<div class="grid-container mb-4">
		    
		      {!! $data->content ?? "" !!}
		</div>
		
		<div class="grid-container mb-4">
		    
		    @foreach($item as $data)
		    
		    @php
               
		    @endphp
		    
		     <a href="{{url('/').'/'.$data->slug}}" target="_blank"><div class=" tag-card"> {!! substr($data->title, 0, -7) ?? "" !!}  </div></a> 
		   
		   <!--<a href="{{url('/').'$data->$slug'}}" target="blank">  </a>-->
		    @endforeach
		     
		</div>

@endsection