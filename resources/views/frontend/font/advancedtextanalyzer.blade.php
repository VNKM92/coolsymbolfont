@extends('frontend.layouts.master')
@section('title',  "Advanced Text Analyzer")
@section('description', $data->metadiscription  ?? "Advanced Text Analyzer is a powerful tool that provides in-depth analysis of your text. It offers insights into word count, character count, sentence structure, readability, and more. Whether you're a writer, student, or professional, this analyzer helps you understand and improve your writing effectively.")


{{-- @section('title', $data->metatitle ?? "")
@section('description', $data->metadiscription  ?? "") --}}

@section('content')


        <main class="flex-grow p-6 text-center">
			 
				 <div class="bg-white p-8 rounded-xl shadow-lg w-full  mx-auto" style="max-width: 800px;">
                    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Advanced Text Analyzer</h1>

                    <textarea id="textInput" 
                            class="w-full h-48 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Type or paste your text here..."></textarea>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6 text-gray-700">
                        <div class="p-3 bg-gray-50 rounded-lg text-center">
                            <span class="block font-semibold text-lg" id="wordCount">0</span>
                            <span class="text-sm">Words</span>
                        </div>
                        <div class="p-3 bg-gray-50 rounded-lg text-center">
                            <span class="block font-semibold text-lg" id="charCount">0</span>
                            <span class="text-sm">Characters</span>
                        </div>
                        <div class="p-3 bg-gray-50 rounded-lg text-center">
                            <span class="block font-semibold text-lg" id="sentenceCount">0</span>
                            <span class="text-sm">Sentences</span>
                        </div>
                        <div class="p-3 bg-gray-50 rounded-lg text-center">
                            <span class="block font-semibold text-lg" id="readingTime">0</span>
                            <span class="text-sm">Reading Time (min)</span>
                        </div>
                        <div class="p-3 bg-gray-50 rounded-lg text-center">
                            <span class="block font-semibold text-lg" id="speakingTime">0</span>
                            <span class="text-sm">Speaking Time (min)</span>
                        </div>
                    </div>

                    <button id="clearBtn" 
                            class="mt-6 w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                        Clear Text
                    </button>
                </div>

                <script>
                    $(document).ready(function(){
                        function updateCounts() {
                            let text = $('#textInput').val();

                            // Character count
                            let charCount = text.length;

                            // Word count
                            let words = text.trim().split(/\s+/).filter(word => word.length > 0);
                            let wordCount = words.length;

                            // Sentence count (basic split by punctuation)
                            let sentences = text.split(/[.!?]+/).filter(s => s.trim().length > 0);
                            let sentenceCount = sentences.length;

                            // Reading time (average 200 words per minute)
                            let readingTime = wordCount === 0 ? 0 : Math.ceil(wordCount / 200);

                            // Speaking time (average 130 words per minute)
                            let speakingTime = wordCount === 0 ? 0 : Math.ceil(wordCount / 130);

                            $('#charCount').text(charCount);
                            $('#wordCount').text(wordCount);
                            $('#sentenceCount').text(sentenceCount);
                            $('#readingTime').text(readingTime);
                            $('#speakingTime').text(speakingTime);
                        }

                        $('#textInput').on('input', updateCounts);

                        $('#clearBtn').on('click', function(){
                            $('#textInput').val('');
                            updateCounts();
                        });

                        // Initialize counts
                        updateCounts();
                    });
                </script>
		</main>

@endsection