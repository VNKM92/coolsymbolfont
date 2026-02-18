@extends('frontend.layouts.master')
@section('title', 'Blog')
@section('description', 'Coolsymbol blog')

@section('content')
<style>
    
    h2 {
        color: #f3f3f3;
    }
</style>

    <main class="flex-grow text-center">  
        <section class="max-w-7xl mx-auto py-2">
            <h2 class="block antialiased mb-3 tracking-normal font-sans font-semibold !text-gray-900 !text-2xl !leading-snug lg:!text-3xl">
             Latest Blog Posts
            </h2>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($data as $item)
 
            @php
            
                //dd($item);
                $longString= $item->description;
                $wordsArray = explode(' ', $longString);
                $firstFiveWordsArray = array_slice($wordsArray, 0, 10);
                $firstFiveWords = implode(' ', $firstFiveWordsArray);
            
                $imag ="";
                if(!empty($item->image)){
                
                    $imag = url('public/backend/movie/blog').'/'.$item->image ;
                }else {
                    $imag = "https://coolsymbol.online/public/frontend/assets/blog/blognew-post.png" ;
                }
                                                        
            @endphp
          <!-- Card 1 -->
              <div class="fade-up group bg-white rounded-3xl overflow-hidden shadow-lg transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl">
                <div class="overflow-hidden">
                  <img src="{{$imag}}" alt="{{$item->title}}"
                       class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-6">
                    <a href="{{ url('blog').'/'. $item->slug}}"> 
                      <h3 class="text-xl font-bold text-[#14121A] mb-3">
                        {{ substr($item->title,0 ,43) ?? "Data not found"}}
                        <!--How to Choose the Influencer for Your Brand-->
                      </h3>
                      <div class="flex justify-end">
                        <button class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-white text-xl flex items-center justify-center shadow-lg transition-transform duration-500 hover:rotate-45 hover:scale-110">
                          ↗
                        </button>
                      </div>
                      </a>
                </div>
            </div>
    
            @endforeach
           
        </div>
        </section>
    </main>

@endsection