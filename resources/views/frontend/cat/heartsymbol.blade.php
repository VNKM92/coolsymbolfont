@extends('frontend.layouts.master')
@section('title','Dashboard')
@section('content')


        <main class="flex-grow p-6 text-center">
			<h1 class="text-3xl font-bold mb-6">Heart Symbols Copy And Paste</h1>
			<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
			<!-- <div class="symbol-card">☆✧✰</di    v> -->
			<!-- <span class="symbol-card bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">☆✧✰</span> -->
			<!-- <div class="symbol-card">☆✧✰</div> -->

			<div class="symbol-card" onclick="copyToClipboard('♥', event)" title="Black Heart">♥</div>
			<div class="symbol-card" onclick="copyToClipboard('♡', event)" title="White Heart Suit">♡</div>
			<div class="symbol-card" onclick="copyToClipboard('❤', event)" title="Heavy Black Heart">❤</div>
			<div class="symbol-card" onclick="copyToClipboard('❥', event)" title="Rotated Heavy Black Heart Bullet">❥</div>
			<div class="symbol-card" onclick="copyToClipboard('❣', event)" title="Heavy Heart Exclamation Mark Ornament">❣</div>
			<div class="symbol-card" onclick="copyToClipboard('❦', event)" title="Floral Heart">❦</div>
			<div class="symbol-card" onclick="copyToClipboard('❧', event)" title="Rotated Floral Heart Bullet">❧</div>
			<div class="symbol-card" onclick="copyToClipboard('დ', event)" title="Georgian Letter Don">დ</div>
			<div class="symbol-card" onclick="copyToClipboard('ღ', event)" title="Georgian Letter Ghan">ღ</div>
			<div class="symbol-card" onclick="copyToClipboard('۵', event)" title="Extended Arabic-Indic Digit Five">۵</div>
			<div class="symbol-card" onclick="copyToClipboard('ლ', event)" title="Georgian Letter Las">ლ</div>
			<div class="symbol-card" onclick="copyToClipboard('ও', event)" title="Bengali Letter O">ও</div>
			<div class="symbol-card" onclick="copyToClipboard('🤍', event)" title="white heart">🤍</div>
			<div class="symbol-card" onclick="copyToClipboard('🤎', event)" title="brown heart">🤎</div>
			<div class="symbol-card" onclick="copyToClipboard('🩶', event)" title="grey heart">🩶</div>
			<div class="symbol-card" onclick="copyToClipboard('❤️️', event)" title="red Heart Emoji">❤️️</div>
			<div class="symbol-card" onclick="copyToClipboard('🧡️', event)" title="orenge Heart Emoji">🧡️</div>
			<div class="symbol-card" onclick="copyToClipboard('🩷', event)" title="pink heart">🩷</div>
			<div class="symbol-card" onclick="copyToClipboard('💙', event)" title="Blue Heart Emoji">💙</div>
			<div class="symbol-card" onclick="copyToClipboard('💚', event)" title="Green Heart Emoji">💚</div>
			<div class="symbol-card" onclick="copyToClipboard('💛', event)" title="Yellow Heart Emoji">💛</div>
			<div class="symbol-card" onclick="copyToClipboard('💜', event)" title="Purple Heart Emoji">💜</div>
			<div class="symbol-card" onclick="copyToClipboard('🖤', event)" title="Black Heart Emoji">🖤</div>
			<div class="symbol-card" onclick="copyToClipboard('💗', event)" title="Growing Heart Emoji">💗</div>
			<div class="symbol-card" onclick="copyToClipboard('💓', event)" title="Beating Heart Emoji">💓</div>
			<div class="symbol-card" onclick="copyToClipboard('🩵', event)" title="light blue heart">🩵</div>
			<div class="symbol-card" onclick="copyToClipboard('💔', event)" title="Broken Heart Emoji">💔</div>
			<div class="symbol-card" onclick="copyToClipboard('💟', event)" title="Heart Decoration Emoji">💟</div>
			<div class="symbol-card" onclick="copyToClipboard('💕', event)" title="Two Hearts Emoji">💕</div>
			<div class="symbol-card" onclick="copyToClipboard('💖', event)" title="Sparkling Heart Emoji">💖</div>
			<div class="symbol-card" onclick="copyToClipboard('❣️', event)" title="Heart Exclamation Emoji">❣️</div>
			<div class="symbol-card" onclick="copyToClipboard('💘', event)" title="Heart With Arrow Emoji">💘</div>
			<div class="symbol-card" onclick="copyToClipboard('💝', event)" title="Heart With Ribbon Emoji">💝</div>
			<div class="symbol-card" onclick="copyToClipboard('💞', event)" title="Revolving Hearts Emoji">💞</div>
			<div class="symbol-card" onclick="copyToClipboard('💌', event)" title="love letter">💌</div>
			<div class="symbol-card" onclick="copyToClipboard('❤&zwj;🔥', event)" title="heart on fire">❤&zwj;🔥</div>
			<div class="symbol-card" onclick="copyToClipboard('❤&zwj;🩹', event)" title="mending heart">❤&zwj;🩹</div>
			<div class="symbol-card" onclick="copyToClipboard('👫', event)" title="men and women holding hands">👫</div>
			<div class="symbol-card" onclick="copyToClipboard('💑', event)" title="couple and heart">💑</div>
			<div class="symbol-card" onclick="copyToClipboard('💏', event)" title="kiss">💏</div>
			<div class="symbol-card" onclick="copyToClipboard('💋', event)" title="kiss mark">💋</div>
			<div class="symbol-card" onclick="copyToClipboard('😍', event)" title="Smiley face and heart-shaped eyes">😍</div>
			<div class="symbol-card" onclick="copyToClipboard('😘', event)" title="kissing face">😘</div>
			<div class="symbol-card" onclick="copyToClipboard('😻', event)" title="Smiling cat face and heart-shaped eyes">😻</div>
			<div class="symbol-card" onclick="copyToClipboard('🏩', event)" title="Hotel for couples">🏩</div>
			<div class="symbol-card" onclick="copyToClipboard('💒', event)" title="marriage">💒</div>



								
			
			</div>
		</main>

@endsection