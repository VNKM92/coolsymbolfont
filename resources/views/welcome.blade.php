<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Responsive Page with Navbar & Footer</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
  <!-- <link rel="stylesheet" href="{{url('public/frontend/assets/css/styletailwind.css')}}" /> -->

 	<style>

		body{
			background-color:gray;
		}
		.nav-link {
		color:rgb(248, 248, 249);
		padding: 0.5rem 1rem;
		font-weight: 500;
		transition: color 0.3s;
		}
		.nav-link:hover {
			color:rgb(61, 197, 129);
		}

		.mobile-nav-link {
		display: block;
		padding: 0.75rem 1rem;
		border-radius: 0.375rem;
		color: #374151;
		font-weight: 500;
		}
		.mobile-nav-link:hover {
		background-color: #e5e7eb;
		}

		.symbol-card {
		background-color: #f3f4f6;
		font-size: 1.25rem;
		border-radius: 0.5rem;
		box-shadow: 0 2px 4px rgb(153 27 27);
		padding: 1rem;
		text-align: center;
		cursor: pointer;
		transition: background-color 0.2s ease;
		user-select: none;
		}

		.symbol-card:hover {
		background-color: #e5e7eb;
		}


		.container{
			margin-right:auto;
			margin-left:auto;
			display: inline;
			width: 80%;
		}

	</style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

  <!-- Navbar shadow-md -->
  <nav class="bg-red-800 h-32 ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      	<div class="flex justify-between h-32">	
			<h4 class="items-center justify-center  font-bold text-red-800 hidden me-auto md:flex"> .</h4>
			<div class="items-center justify-center  font-bold text-white hidden me-auto md:flex">
				<!-- <h4> MySiteHe</h4> -->
				<img class="h-16 max-w-full " src="{{url('public/frontend/assets/logo/logo-bg-white.png')}}" alt="image description">
			</div>
			<div class="flex">
			<div class="flex-shrink-0 flex items-center text-xl font-bold text-red-800">
				.
			</div>
			<!-- <div class="hidden sm:flex sm:ml-6 sm:space-x-8 items-center   ">
				<a href="#" class="nav-link">Home</a>
				<a href="#" class="nav-link">About Us</a>
				<a href="#" class="nav-link">Disclaimer</a>
				<a href="#" class="nav-link">Contact</a>
			</div> -->
			</div>
			<div class="flex items-center sm:hidden">
			<button id="menu-toggle" class="p-2 text-gray-600 hover:text-white hover:bg-gray-600 rounded">
				<svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					d="M4 6h16M4 12h16M4 18h16"/>
				</svg>
			</button>
			</div>
      	</div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="sm:hidden hidden px-2 pt-2 pb-3 space-y-1">
      <a href="#" class="mobile-nav-link">Home</a>
      <a href="#" class="mobile-nav-link">About Us</a>
      <a href="#" class="mobile-nav-link">Disclaimer</a>
      <a href="#" class="mobile-nav-link">Contact</a>
    </div>
  </nav>


  <nav class="bg-blue-700 ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex-shrink-0 flex items-center text-xl font-bold text-white">
            MySite
          </div>
          <div class="hidden sm:flex sm:ml-6 sm:space-x-8 items-center">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">About Us</a>
            <a href="#" class="nav-link">Disclaimer</a>
            <a href="#" class="nav-link">Contact</a>
          </div>
        </div>
        <div class="flex items-center sm:hidden">
          <button id="menu-toggle" class="p-2 text-gray-600 hover:text-white hover:bg-gray-600 rounded">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="sm:hidden hidden px-2 pt-2 pb-3 space-y-1">
      <a href="#" class="mobile-nav-link">Home</a>
      <a href="#" class="mobile-nav-link">About Us</a>
      <a href="#" class="mobile-nav-link">Disclaimer</a>
      <a href="#" class="mobile-nav-link">Contact</a>
    </div>
  </nav>

  <!-- Main Content -->
   <section class="container">
	<!-- <span class="symbol-card bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">☆✧✰</span>


	<span class="symbol-card bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">≽^•⩊•^≼</span> -->
	
		<main class="flex-grow p-6 text-center">
			<h1 class="text-3xl font-bold mb-6">Cool Symbols Copy And Paste</h1>
			<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
			<div class="symbol-card">☆✧✰</div>
			<span class="symbol-card bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">☆✧✰</span>
			<div class="symbol-card">☆✧✰</div>
			<div class="symbol-card">⇝ ➤ ➩</div>
			<div class="symbol-card">♡♥❥</div>
			<div class="symbol-card">⚝⚚⚡</div>
			<div class="symbol-card">ʕ•ᴥ•ʔ</div>
			<div class="symbol-card">☾✦✩</div>
			<div class="symbol-card">💫🌸🌀</div>
			<div class="symbol-card">✎﹏⋆</div>
			<div class="symbol-card">⟆✲⧫</div>
			<div class="symbol-card">🎧🍓🦋</div>
			<div class="symbol-card">➳</div>
			<div class="symbol-card">☐</div>
			<div class="symbol-card">➥</div>
			<div class="symbol-card">★⋆｡°✩</div>
			<div class="symbol-card">♡</div>
			<div class="symbol-card">🍓</div>
			<div class="symbol-card">☀</div>
			<div class="symbol-card">✨</div>
			<div class="symbol-card">✿</div>
			<div class="symbol-card">𖠌</div>
			<div class="symbol-card">⭑</div>
			<div class="symbol-card">⊂(◉‿◉)つ</div>
			<div class="symbol-card">⤷ text ⤶</div>
			<div class="symbol-card">≽^•⩊•^≼</div>
			<div class="symbol-card">⋆｡°✩</div>
			<div class="symbol-card">✧･ﾟ: *✧･ﾟ:*</div>
			<div class="symbol-card">♥️💫</div>
			<div class="symbol-card">𓃠</div>
			<div class="symbol-card">🌙</div>
			<div class="symbol-card">🎧</div>
			<div class="symbol-card">✔️</div>
			<div class="symbol-card">𓆣  </div>
			<div class="symbol-card">⭐</div>
			<div class="symbol-card">🌞</div>
			<div class="symbol-card">🌝</div>
			<div class="symbol-card">🎵</div>
			<div class="symbol-card">❌</div>
			<div class="symbol-card">♈</div>
			<div class="symbol-card">①</div>
			<div class="symbol-card">⇨</div>
			<div class="symbol-card">⇧  </div>
			<div class="symbol-card">⇩  </div>
			<div class="symbol-card">✿</div>
			<div class="symbol-card">♀♂</div>
			<div class="symbol-card">Ꝏ</div>
			<div class="symbol-card">💉</div>
			<div class="symbol-card">$</div>
			<div class="symbol-card">♔</div>
			<div class="symbol-card">🌧</div>
			<div class="symbol-card">﹛</div>
			<div class="symbol-card">✟</div>
			<div class="symbol-card">©</div>
			<div class="symbol-card">℃</div>
			<div class="symbol-card">♤  </div>
			<div class="symbol-card">⚄</div>
			<div class="symbol-card">🚄</div>
			<div class="symbol-card">✍</div>
			<div class="symbol-card">🥇  </div>
			<div class="symbol-card">🔑    </div>
			<div class="symbol-card">⚠️</div>
			<div class="symbol-card">✎</div>
			<div class="symbol-card">⚔️</div>
			<div class="symbol-card">Ⅺ  </div>
			<div class="symbol-card">α  </div>
			<div class="symbol-card">☛   </div>
			<div class="symbol-card">🥰  </div>
			<div class="symbol-card">¼</div>
			<div class="symbol-card">𝝅  </div>
			<div class="symbol-card">></div>
			<div class="symbol-card">║</div>
			<div class="symbol-card">◐</div>
			<div class="symbol-card">⟁</div>
			<div class="symbol-card">⊡</div>
			<div class="symbol-card">▇</div>
			<div class="symbol-card">┕</div>
			<div class="symbol-card">»</div>
			<div class="symbol-card">㊊</div>
			<div class="symbol-card">お</div>
			<div class="symbol-card">ㅄ</div>
			<div class="symbol-card">✌</div>
			<div class="symbol-card">ⓐ   Text</div>
			<div class="symbol-card">𝓐  </div>
			<div class="symbol-card">Ɐ    </div>
			<div class="symbol-card">𝕯    </div>
			<div class="symbol-card">🏡</div>
			<div class="symbol-card">👑</div>
			<div class="symbol-card">💎</div>
			<div class="symbol-card">❝  </div>
			<div class="symbol-card">₿</div>



			<!-- new -->
								<!-- <div class="symbol-card" >: ̗̀➛</div>
								<div class="symbol-card" >ׂׂૢ</div>
								<div class="symbol-card" >╰┈➤</div>
								<div class="symbol-card" >ੈ✩‧₊˚</div>
								<div class="symbol-card" >✧.*</div>
								<div class="symbol-card" >⋆·˚ ༘ *</div>
								<div class="symbol-card" >ˏˋ°•*⁀➷</div>
								<div class="symbol-card" >·˚ ༘</div>
								<div class="symbol-card" >⋆.ೃ࿔*:･</div>
								<div class="symbol-card" >˚₊· ͟͟͞͞➳❥</div>
								<div class="symbol-card" >✎</div>
								<div class="symbol-card" >- ,,</div>
								<div class="symbol-card" >-‘๑’-</div>
								<div class="symbol-card" >・❥・</div>
								<div class="symbol-card" >▶︎ •၊၊||၊|။||||။&zwnj;&zwnj;&zwnj;&zwnj;&zwnj;၊|• 0:10</div>
								<div class="symbol-card" >★</div>
								<div class="symbol-card" >🎀🪞🩰🦢🕯️</div>
								<div class="symbol-card" >୧ ‧₊˚ 🍵 ⋅</div>
								<div class="symbol-card" >𖤓</div>
								<div class="symbol-card" >⤑</div>
								<div class="symbol-card" >🀥</div>						
								<div class="symbol-card" >☽｡⋆</div>
								<div class="symbol-card" >&lrm;‧₊˚✧[text]✧˚₊‧</div>
								<div class="symbol-card" >♡︎</div>
								<div class="symbol-card" >*ੈ♡⸝⸝🪐༘⋆</div>
								<div class="symbol-card" >🐈&zwj;⬛</div>
								<div class="symbol-card" >✧˖°ʚ🍓ɞ♡</div>
								<div class="symbol-card" >♡₊˚ 🦢・₊✧</div>
								<div class="symbol-card" >·:*¨༺ ♱✮♱ ༻¨*:·</div>
								<div class="symbol-card" >ฅ^._.^ฅ</div>
								<div class="symbol-card" >‧₊˚ ⋅* ‧₊</div>
								<div class="symbol-card" >◡̈</div>
								<div class="symbol-card" >✩₊˚.⋆☾⋆⁺₊✧</div>
								<div class="symbol-card" >☪</div>
								<div class="symbol-card" >✰ ✰ ✰</div>
								<div class="symbol-card" >𐦍༘⋆</div>
								<div class="symbol-card" >໒꒱🌱⠈⠂⠄ ‹𝟹 🚞〃 ˝</div>
								<div class="symbol-card" >✰</div>
								<div class="symbol-card" >⋆⁺₊⋆ ☀︎ ⋆⁺₊⋆</div>
								<div class="symbol-card" >`✦ˑ ִֶ 𓂃⊹</div>
								<div class="symbol-card" >˚ʚ♡ɞ˚</div>
								<div class="symbol-card" >BLɅϽKPIИK</div>
								<div class="symbol-card" >./づ~ 🍓</div>
								<div class="symbol-card" >`✦ ˑ ִֶ 𓂃⊹</div>
								<div class="symbol-card" >☁︎</div>
								<div class="symbol-card" >₊˚ෆ</div>
								<div class="symbol-card" >༊*·˚</div>
								<div class="symbol-card" >*ೃ༄</div>
								<div class="symbol-card" >.ೃ࿐</div>
								<div class="symbol-card" >*ੈ✩‧₊˚</div>
								<div class="symbol-card" >┊͙ ˘͈ᵕ˘͈</div>
								<div class="symbol-card" >⍣ ೋ</div>
								<div class="symbol-card" >‗ ❍</div>
								<div class="symbol-card" >¡! ❞</div>
								<div class="symbol-card" >˚୨୧⋆｡˚ ⋆</div>
								<div class="symbol-card" >✧･ﾟ: *✧･ﾟ:*</div>
								<div class="symbol-card" >*</div>
								<div class="symbol-card" >୨⎯ text ⎯୧</div>
								<div class="symbol-card" >︶꒦꒷♡꒷꒦︶</div>
								<div class="symbol-card" >⇢ ˗ˏˋ text ࿐ྂ</div>
								<div class="symbol-card" >≡;- ꒰ °text ꒱</div>
								<div class="symbol-card" >. . . . . ╰──╮</div>
								<div class="symbol-card" >╭──╯ . . . . .</div>
								<div class="symbol-card" >↳ ❝ [] ¡! ❞</div>
								<div class="symbol-card" >⋆˚࿔ 𝐧𝐚𝐦𝐞 𝜗𝜚˚⋆</div>
								<div class="symbol-card" >────୨ৎ────</div>
								<div class="symbol-card" >｡𖦹°‧</div>
								<div class="symbol-card" >✮⋆˙</div>
								<div class="symbol-card" >≽^• ˕ • ྀི≼</div>
								<div class="symbol-card" >⊹ ࣪ ˖</div>
								<div class="symbol-card" >۶ৎ</div>
								<div class="symbol-card" >ᯓ★</div>
								<div class="symbol-card" >⋆˚࿔</div>
								<div class="symbol-card" >°❀⋆.ೃ࿔*:･</div>
								<div class="symbol-card" >⋆.˚✮🎧✮˚.⋆</div>
								<div class="symbol-card" >.ᐟ</div>
								<div class="symbol-card" >⋆｡‧˚ʚ🍓ɞ˚‧｡⋆</div>
								<div class="symbol-card" >𓇼 ⋆.˚ 𓆉 𓆝 𓆡⋆.˚ 𓇼</div>
								<div class="symbol-card" >ᶻ 𝗓 𐰁</div>
								<div class="symbol-card" >&gt;ᴗ&lt;</div>
								<div class="symbol-card" >*</div>
								<div class="symbol-card" >⋆˙⟡</div>
								<div class="symbol-card" >ᝰ.ᐟ</div>
								<div class="symbol-card" >⋅˚₊‧ ୨୧ ‧₊˚ ⋅</div>
								<div class="symbol-card" >⋆. 𐙚 ̊</div>
								<div class="symbol-card" >★</div>
								<div class="symbol-card" >── .✦</div>
								<div class="symbol-card" >❤︎</div>
								<div class="symbol-card" >⋆⭒˚.⋆🪐 ⋆⭒˚.⋆</div>
								<div class="symbol-card" >𖹭</div>
								<div class="symbol-card" >˚.🎀༘⋆</div>
								<div class="symbol-card" >ᥫ᭡</div>
								<div class="symbol-card" >࣪ ִֶָ☾.</div>
								<div class="symbol-card" >⁺‧₊˚ ཐི⋆♱⋆ཋྀ ˚₊‧⁺</div>
								<div class="symbol-card" >⋆𐙚₊˚⊹♡</div>
								<div class="symbol-card" >ִֶָ𓂃 ࣪˖ ִֶָ🐇་༘࿐</div>
								<div class="symbol-card" >╰┈➤</div>
								<div class="symbol-card" >꩜</div>
								<div class="symbol-card" >𝐒𝐭✰𝐫𝐠𝐢𝐫𝐥</div>
								<div class="symbol-card" >🧸ྀི</div>
								<div class="symbol-card" >🪼⋆.ೃ࿔*:･</div>
								<div class="symbol-card" >𝜗𝜚</div>
								<div class="symbol-card" >ִ ࣪𖤐</div>
								<div class="symbol-card" >ˎˊ˗</div>
								<div class="symbol-card" >ㅤㅤㅤㅤㅤㅤㅤ</div>
								<div class="symbol-card" >૮꒰ ˶• ༝ •˶꒱ა ♡</div>
								<div class="symbol-card" >⋆.˚</div>
								<div class="symbol-card" >˙ . ꒷ 🍰 . 𖦹˙—</div>
								<div class="symbol-card" >「 ✦ 𝐍𝐚𝐦𝐞 ✦ 」</div>
								<div class="symbol-card" >⊹₊⟡⋆</div>
								<div class="symbol-card" >‧₊ ᵎᵎ 🍒 ⋅ ˚✮</div>
								<div class="symbol-card" >𖦹</div>
								<div class="symbol-card" >. ݁₊ ⊹ . ݁˖ . ݁</div>
								<div class="symbol-card" >ﮩ٨ـﮩﮩ٨ـ♡ﮩ٨ـﮩﮩ٨ـ</div>
								<div class="symbol-card" >🫧𓇼𓏲*ੈ✩‧₊˚🎐</div>
								<div class="symbol-card" >⌗</div>
								<div class="symbol-card" >⋆｡ﾟ☁︎｡⋆｡ ﾟ☾ ﾟ｡⋆</div>
								<div class="symbol-card" >✿</div>
								<div class="symbol-card" >(˶˃ ᵕ ˂˶)</div>
								<div class="symbol-card" >──── ୨୧ ────</div>
								<div class="symbol-card" >☆</div>
								<div class="symbol-card" >⋆౨ৎ˚⟡˖ ࣪</div>
								<div class="symbol-card" >𝄞</div>
								<div class="symbol-card" >˙✧˖°📷 ༘ ⋆｡˚</div>
								<div class="symbol-card" >꒷꒦︶꒷꒦︶ ๋ ࣭ ⭑꒷꒦</div>
								<div class="symbol-card" >⋆˚𝜗𝜚˚⋆</div>
								<div class="symbol-card" >⭑.ᐟ</div>
								<div class="symbol-card" >‹𝟹</div>
								<div class="symbol-card" >ּ ֶָ֢.</div>
								<div class="symbol-card" >‧₊˚🖇️✩ ₊˚🎧⊹♡</div>
								<div class="symbol-card" >⋆✴︎˚｡⋆</div>
								<div class="symbol-card" >✦</div>
								<div class="symbol-card" >.☘︎ ݁˖</div>
								<div class="symbol-card" >°❀⋆.ೃ࿔*:･°❀⋆.ೃ࿔*:･</div>
								<div class="symbol-card" >˚⋆𐙚｡ 𖦹.ᡣ𐭩˚</div>
								<div class="symbol-card" >✮</div>
								<div class="symbol-card" >⋆ 𐙚 ̊.</div>
								<div class="symbol-card" >🃜🃚🃖🃁🂭🂺</div>
								<div class="symbol-card" >જ⁀➴</div>
								<div class="symbol-card" >୭ ˚. ᵎᵎ</div>
								<div class="symbol-card" >𝓯𝓻𝓮𝓪𝓴𝔂</div>
								<div class="symbol-card" >⚡︎</div>
								<div class="symbol-card" >𓍯𓂃</div>
								<div class="symbol-card" >𝓘 𝓯𝓮𝓮𝓵 𝓼𝓸 𝓼𝓲𝓰𝓶𝓪</div>
								<div class="symbol-card" >ꨄ︎</div>
								<div class="symbol-card" >𖹭.ᐟ</div>
								<div class="symbol-card" >.𖥔 ݁ ˖</div>
								<div class="symbol-card" >ʚɞ</div>
								<div class="symbol-card" >⋆</div>
								<div class="symbol-card" >✩₊˚.⋆☾⋆⁺₊✧</div>
								<div class="symbol-card" >˗ˏˋ ★ ˎˊ˗</div>
								<div class="symbol-card" >𐔌   .  ⋮ name  .ᐟ  ֹ   ₊ ꒱</div>
								<div class="symbol-card" >𝄃𝄃𝄂𝄂𝄀𝄁𝄃𝄂𝄂𝄃</div>
								<div class="symbol-card" >₊⊹</div>
								<div class="symbol-card" >❀</div>
								<div class="symbol-card" >𝗜 𝗺 𝗷𝘂𝘀𝘁 𝗮 𝗴𝗶𝗿𝗹 🎀ྀི</div>
								<div class="symbol-card" >ᶠᶸᶜᵏᵧₒᵤ!</div>
								<div class="symbol-card" >⤷</div>
								<div class="symbol-card" >𝖂𝖍𝖆𝖙 𝖙𝖍𝖊 𝖘𝖎𝖌𝖒𝖆</div>
								<div class="symbol-card" >˖°𓇼🌊⋆🐚🫧</div>
								<div class="symbol-card" >ㅤ♡</div>
								<div class="symbol-card" >˚ ༘ ೀ⋆｡˚</div>
								<div class="symbol-card" >₊˚⊹ ᰔ</div>
								<div class="symbol-card" >✩°𓏲⋆🌿. ⋆⸜ 🍵✮˚</div>
								<div class="symbol-card" >✮ ⋆ ˚｡𖦹 ⋆｡°✩</div>
								<div class="symbol-card" >ᯓ</div>
								<div class="symbol-card" >⋆.˚🦋༘⋆</div>
								<div class="symbol-card" >꒰ᐢ. .ᐢ꒱</div>
								<div class="symbol-card" >⸜(｡˃ ᵕ ˂ )⸝♡</div>
								<div class="symbol-card" >🎧ྀི♪⋆.✮</div>
								<div class="symbol-card" >༝༚༝༚</div>
								<div class="symbol-card" >˚⊱🪷⊰˚</div>
								<div class="symbol-card" >▄︻デ══━一💥</div>
								<div class="symbol-card" >૮₍´˶• . • ⑅ ₎ა</div>
								<div class="symbol-card" >୧ ‧₊˚ 🍮 ⋅ ☆</div>
								<div class="symbol-card" >ㅤ♡ྀི ₊</div>
								<div class="symbol-card" >˖ ֹ੭୧ 𝗺𝗶𝗻𝗲 ⊹ ࣪ ⑅</div>
								<div class="symbol-card" >🎧ྀི</div>
								<div class="symbol-card" >( ˶ˆᗜˆ˵ )</div>
								<div class="symbol-card" >𓏵</div>
								<div class="symbol-card" >˚ ༘ 🦕𖦹⋆｡˚</div>
								<div class="symbol-card" >⚝</div>
								<div class="symbol-card" >⊹ ࣪ ﹏𓊝﹏𓂁﹏⊹ ࣪ ˖</div>
								<div class="symbol-card" >ᶻ 𝗓 𐰁 .ᐟ</div>
								<div class="symbol-card" >☁︎</div>
								<div class="symbol-card" >⸝⸝</div>
								<div class="symbol-card" >-ˋˏ✄┈┈┈┈</div>
								<div class="symbol-card" >ྀི</div>
								<div class="symbol-card" >➤</div>
								<div class="symbol-card" >✶⋆.˚</div>
								<div class="symbol-card" >𝟏𝟏:𝟏𝟏</div>
								<div class="symbol-card" >𓍼</div>
								<div class="symbol-card" >─── ⋆⋅☆⋅⋆ ──</div>
								<div class="symbol-card" >ก็็็็็็็็็็็็็็็็็็็</div>
								<div class="symbol-card" >﹌﹌﹌</div>
								<div class="symbol-card" >✧˚ · .</div>
								<div class="symbol-card" >˚ · .</div>
								<div class="symbol-card" >༉‧₊˚.</div>
								<div class="symbol-card" >'*•.¸♡ ♡¸.•*'</div>
								<div class="symbol-card" >彡</div>
								<div class="symbol-card" >▓</div>
								<div class="symbol-card" >ღ</div>
								<div class="symbol-card" >ꕥ</div>
								<div class="symbol-card" >‿‿‿‿</div>
								<div class="symbol-card" >*</div>
								<div class="symbol-card" >•·.·''·.·•</div>
								<div class="symbol-card" >·˚ ༘₊· ͟͟͞͞꒰➳</div>
								<div class="symbol-card" >*</div>
								<div class="symbol-card" >ೄྀ࿐ ˊˎ-</div>
								<div class="symbol-card" >シ</div>
								<div class="symbol-card" >- ͙۪۪̥˚┊❛ ❜┊˚͙۪۪̥◌</div>
								<div class="symbol-card" >˗ˏˋ ´ˎ˗</div>
								<div class="symbol-card" >☄. *. ⋆</div>
								<div class="symbol-card" >˚ ༘♡ ⋆｡˚</div>
								<div class="symbol-card" >ೃ⁀➷</div>
								<div class="symbol-card" >+*:ꔫ:*﹤</div>
								<div class="symbol-card" >﹥*:ꔫ:*+ﾟ</div>
								<div class="symbol-card" >⋆ ˚｡⋆୨୧˚</div>
								<div class="symbol-card" >₊ ⊹ ᶻz !! Text !! ␥</div>
								<div class="symbol-card" >ʚ♡ɞ</div>
								<div class="symbol-card" >˚ · .˚ ༘🦋⋆｡˚</div>
								<div class="symbol-card" >૮꒰ ˶• ༝ •˶꒱ა ♡</div>
								<div class="symbol-card" >𓆝 𓆟 𓆞 𓆝 𓆟</div>
								<div class="symbol-card" >૮ ˶︶^︶˶ ა🧸🐇<3</div>
								<div class="symbol-card" >-ˋˏ ༻❁༺ ˎˊ-</div>
								<div class="symbol-card" >·:*¨༺ ♱✮♱ ༻¨*:·</div>
								<div class="symbol-card" >˚꒦꒷🌱꒷．Text˚﹆</div>
								<div class="symbol-card" >・┆✦ʚ♡ɞ✦ ┆・</div>
								<div class="symbol-card" >୧ ‧₊˚ 🍵 ⋅</div>
								<div class="symbol-card" >-ˏˋ⋆ ᴡ ᴇ ʟ ᴄ ᴏ ᴍ ᴇ ⋆ˊˎ-</div>
								<div class="symbol-card" >⋆·˚ ༘ *🔭</div>
								<div class="symbol-card" >🤍𓆩♡𓆪☁️</div>
								<div class="symbol-card" >☁️ . . . ⇢ ˗ˏˋ basics ࿐ྂ</div>
								<div class="symbol-card" >★🎸🎧⋆｡ °⋆</div>
								<div class="symbol-card" >૮꒰ ˶• ༝ •˶꒱ა ♡</div>
								<div class="symbol-card" >🪬🫧🫶🏻🤍</div>
								<div class="symbol-card" >୧ ‧₊˚ 🍂 ⋅</div>
								<div class="symbol-card" >⁺˚⋆｡°✩₊✩°｡⋆˚⁺</div>
								<div class="symbol-card" >ʚɞ</div>
								<div class="symbol-card" >✧˖°</div>
								<div class="symbol-card" >༯</div>
								<div class="symbol-card" >୭🧷✧˚. ᵎᵎ 🎀</div>
								<div class="symbol-card" >⋆ ˚｡⋆୨୧˚</div>
								<div class="symbol-card" >🌷🧺*:･</div>
								<div class="symbol-card" >☾</div>
								<div class="symbol-card" >🤍ㅤ ᵕ̈♡︎</div>
								<div class="symbol-card" >୧ ׅ𖥔 ۫ texto ⋄ 𓍯</div>
								<div class="symbol-card" >𓇼 🌊 🐚</div>

								<div class="symbol-card" >⌗</div>
								<div class="symbol-card" >◖◗</div>
								<div class="symbol-card" >ʬʬ</div>
								<div class="symbol-card" >ᐢ..ᐢ</div>
								<div class="symbol-card" >ᵔᴗᵔ</div>
								<div class="symbol-card" >ᐢᗜᐢ</div>
								<div class="symbol-card" >*</div>
								<div class="symbol-card" >୧⋆｡🕯. -ʚɞ</div>
								<div class="symbol-card" >𓆩♱🤍₊˙ 🧸 ♡♱𓆪</div>
								<div class="symbol-card" >˚⋆°˖ ～ 🍂࿔ ฅ</div>
								<div class="symbol-card" >𓌉◯𓇋</div>
								<div class="symbol-card" >˙ ͜ʟ˙</div>
								<div class="symbol-card" >･ ͜ʖ ･</div>


								<div class="symbol-card" >⋆. 𐙚 ˚</div>
								<div class="symbol-card" >꩜ .ᐟ</div>
								<div class="symbol-card" >₍^. .^₎⟆</div>
								<div class="symbol-card" >୨ৎ</div>
								<div class="symbol-card" >♡</div>
								<div class="symbol-card" >𐔌  .  name  !  ୧</div>
								<div class="symbol-card" >ּ ֶָ֢.๑ˎˊ˗</div>
								<div class="symbol-card" >𓆝 𓆟 𓆞 𓆝 𓆟</div>
								<div class="symbol-card" >┆ ⤿ 💌 ⌗</div>
								<div class="symbol-card" >♱</div>
								<div class="symbol-card" >⪩. .⪨</div>
								<div class="symbol-card" >⋅˚₊‧ ଳ ‧₊˚ ⋅</div>
								<div class="symbol-card" >⌞ ⌝</div>
								<div class="symbol-card" >^᪲᪲᪲</div>
								<div class="symbol-card" >🫧⋆｡˚</div>    
								<div class="symbol-card" >⋆. 𐙚˚</div>    
								<div class="symbol-card" >🦦ྀི</div>
								<div class="symbol-card" >/ᐠ > ˕ <マ</div>
								<div class="symbol-card" >؛ ଓ</div>
								<div class="symbol-card" >♡⸝⸝</div>   
								<div class="symbol-card" >゛</div>
								<div class="symbol-card" >૮₍˃̵֊ ˂̵ ₎ა</div>
								<div class="symbol-card" >ᯓ★୭˚. ᵎᵎ</div>
								<div class="symbol-card" >⛇☃︎</div>
								<div class="symbol-card" >၄၃</div>
								<div class="symbol-card" >𐙚⋆°.</div>
								<div class="symbol-card" >⩇⩇:⩇⩇</div>
								<div class="symbol-card" >☕︎</div>
								<div class="symbol-card" >ֹ  ⑅᜔  ׄ ݊ ݂ name  ۪ ֹ ᮫</div>
								<div class="symbol-card" >₊˚⊹⋆</div>
								<div class="symbol-card" >⸝⸝⸝</div>
								<div class="symbol-card" >ᥫ᭡.</div>
								<div class="symbol-card" >౨ৎ</div>
								<div class="symbol-card" >⋆. 𐙚 ̊ </div>
								<div class="symbol-card" >𖦹°‧</div>
								<div class="symbol-card" >‹𝟹 </div>
								<div class="symbol-card" >ᯓᡣ𐭩</div>
								<div class="symbol-card" >ᶻ 𝘇 𐰁</div>
								<div class="symbol-card" >𐔌 . nama ! ୧</div>
								<div class="symbol-card" >ᡣ𐭩</div> 
								<div class="symbol-card" >𐙚</div>
								<div class="symbol-card" >💗᪲᪲᪲</div>
								<div class="symbol-card" >𓄧</div>
								<div class="symbol-card" >ᯓ ✈︎</div>
								<div class="symbol-card" >⋆｡°·☁︎</div>
								<div class="symbol-card" >ෆ</div>
								<div class="symbol-card" >✿˖˚ ༘𐙚</div>
								<div class="symbol-card" >𑁍ࠬܓ</div>
								<div class="symbol-card" >🎐𓍼ֶָ֢⊹ ࣪ ˖</div>
								<div class="symbol-card" >ৎ୭</div>
								<div class="symbol-card" >𖡼.𖤣𖥧𖡼.𖤣𖥧</div>
								<div class="symbol-card" >𐂯</div>
								<div class="symbol-card" >♡ྀི</div>
								<div class="symbol-card" >︵</div>
								<div class="symbol-card" >❀</div>
								<div class="symbol-card" >₍ᐢ.  ̫.ᐢ₎</div>
								<div class="symbol-card" >໒꒰ྀིᵔ ᵕ ᵔ ꒱ྀི১</div>
								<div class="symbol-card" >(๑ > ᴗ < ๑)</div>
								<div class="symbol-card" >₍⸍⸌̣ʷ̣̫⸍̣⸌₎</div>
								<div class="symbol-card" >𓈒</div>
								<div class="symbol-card" >᭪</div>
								<div class="symbol-card" >☔︎︎</div>
								<div class="symbol-card" >ㆍ</div>
								<div class="symbol-card" >𓎟</div>
								<div class="symbol-card" >𝓙ᥫ᭡</div>
								<div class="symbol-card" >₍ᐢᐢ₎</div>
								<div class="symbol-card" >࣪𓏲ᥫ᭡ ₊ ⊹ ˑ ִ ֶ 𓂃</div>
								<div class="symbol-card" >˙✧˖°📷 ༘ ⋆°</div>
								<div class="symbol-card" >𓆝 ⋆｡𖦹°‧🫧</div>
								<div class="symbol-card" >.𖥔 ҁ ˖</div>
								<div class="symbol-card" >𓆝 ⋆.</div>
								<div class="symbol-card" >(˶‾᷄ ⁻̫ ‾᷅˵)</div>
								<div class="symbol-card" >𖦹 ׂ 𓈒 🥞 ／ ⋆ 1</div>
								<div class="symbol-card" >‎𖦹</div>
								<div class="symbol-card" >˚₊· ͟͟͞͞➳❥</div>
								<div class="symbol-card" >𓆩ꨄ︎𓆪</div>
								<div class="symbol-card" >❀࿐</div>
								<div class="symbol-card" >♡ˎˊ˗</div>
								<div class="symbol-card" >𖢥  ฅ(•˕ •マ⟆</div>
								<div class="symbol-card" >☆⋆｡𖦹°‧★🛸</div>
								<div class="symbol-card" >ᶠᶸᶜᵏме𓀐𓂸</div>
								<div class="symbol-card" >૮₍˶ᵔ ᵕ ᵔ˶ ₎ა</div>
								<div class="symbol-card" >♡ ̆̈</div>
								<div class="symbol-card" >↳</div>
								<div class="symbol-card" >(·•᷄ࡇ•᷅ )</div>
								<div class="symbol-card" >꒰ᐢ⸝⸝⸝⸝⸝ᐢ꒱⸒⸒</div>
								<div class="symbol-card" >₍^⸝⸝> · <⸝⸝ ^₎</div>
								<div class="symbol-card" >🦋⃝</div>
								<div class="symbol-card" >✧˚ ༘ ⋆｡♡˚🏠︎</div>
								<div class="symbol-card" >🐋</div>
								<div class="symbol-card" >𐔌</div>
								<div class="symbol-card" >(つ╥﹏╥)つ</div>
								<div class="symbol-card" >⊹₊⋆</div>
								<div class="symbol-card" >⚘.</div>
								<div class="symbol-card" >ᕙ(  •̀ ᗜ •́  )ᕗ</div>
								<div class="symbol-card" >╰┈➤.</div>
								<div class="symbol-card" >𝓕</div>
								<div class="symbol-card" >∘</div>
								<div class="symbol-card" >📸</div>
								<div class="symbol-card" >⋆｡𖦹 ˚ 𓇼 ˚｡⋆</div>
								<div class="symbol-card" >𓆩❤︎𓆪</div>
								<div class="symbol-card" >(ෆ˙ᵕ˙ෆ)♡</div>
								<div class="symbol-card" >( ｡ •̀ ᴖ •́ ｡)</div>
								<div class="symbol-card" >𐦍</div>
								<div class="symbol-card" >℘</div>
								<div class="symbol-card" >✧˚ ⋆｡˚</div>
								<div class="symbol-card" >*ੈ𑁍༘⋆</div>
								<div class="symbol-card" >( ˶ˆ꒳ˆ˵ )</div>
								<div class="symbol-card" >𝒿</div>
								<div class="symbol-card" >🀥</div>
								<div class="symbol-card" >(っ˕ -｡)ᶻ 𝗓 𐰁</div>
								<div class="symbol-card" >𓊆  𓊇  𓊈  𓊉  𓉘  𓉝  𓈖</div>
								<div class="symbol-card" >𓍢ִ໋🌷͙֒✧˚ ༘ ⋆｡˚♡</div>
								<div class="symbol-card" >📜🪶𓍢ִ໋🀦✎ᝰ.</div>
								<div class="symbol-card" >📀</div>
								<div class="symbol-card" >🩰˚˖𓍢 🦢✧˚.🎀</div>
								<div class="symbol-card" >૮₍˶ •. • ⑅₎ა♡</div>
								<div class="symbol-card" >⁴⁴⁴</div>
								<div class="symbol-card" >🎀 ྀིྀི</div>
								<div class="symbol-card" >𐚁</div>
								<div class="symbol-card" >𝒥</div>
								<div class="symbol-card" >˖°📷 ༘</div>
								<div class="symbol-card" >𖦹ׂ ₊˚⊹⋆</div>
								<div class="symbol-card" >∿</div>
								<div class="symbol-card" >♱</div>
								<div class="symbol-card" >✩°｡🧸𓏲⋆.🧺𖦹 ₊˚</div>
								<div class="symbol-card" >⛐</div>
								<div class="symbol-card" >૮₍´ ꒳`₎ა</div>
								<div class="symbol-card" >𝕏</div>
								<div class="symbol-card" >「 ✦ Мама ✦ 」</div>
								<div class="symbol-card" >𝒿‹𝟹</div>
								<div class="symbol-card" >𓃠</div>
								<div class="symbol-card" >‼</div>
								<div class="symbol-card" >ʚ ɞ</div>
								<div class="symbol-card" >૮₍˶Ó﹏Ò ⑅₎ა</div>
								<div class="symbol-card" >≽^•༚• ྀི≼</div>
								<div class="symbol-card" >𓏲 ๋࣭ ࣪ ˖</div>
								<div class="symbol-card" >───</div>
								<div class="symbol-card" >⌕</div>
								<div class="symbol-card" >♡‧₊˚</div>
								<div class="symbol-card" >૮꒰˶ᵔ ᗜ ᵔ˶꒱ა</div>
								<div class="symbol-card" >🔣</div>
								<div class="symbol-card" >໒꒱ིྀ༝⁺</div>
								<div class="symbol-card" >𓉸</div>
								<div class="symbol-card" >₍ᐢ.  ̫.ᐢ₎。🍯🧸🥎🧶</div>
								<div class="symbol-card" >♡</div>
								<div class="symbol-card" >₍ ᐢ. .ᐢ ₎</div>
								<div class="symbol-card" >🔗</div>
								<div class="symbol-card" >(˶ˆᗜˆ˵)</div>
								<div class="symbol-card" >ପ꒰ ˶• ༝ •˶꒱ଓ 🌸🤍</div>
								<div class="symbol-card" >૮꒰ ˶ ༝ •˶꒱ა ♡</div>
								<div class="symbol-card" >❀</div>
								<div class="symbol-card" >-ˋˏ ༻❁✿❀༺ ˎˊ-</div>
								<div class="symbol-card" >( ˘ ³˘)</div>
								<div class="symbol-card" >⌗</div>
								<div class="symbol-card" >👾</div>
								<div class="symbol-card" >.𖥔 ݁ ˖⋆ ˚❆</div>
								<div class="symbol-card" >(˵ ¬ᴗ¬˵)</div>
								<div class="symbol-card" >( ˊᵕˋ )♡.°⑅</div>
								<div class="symbol-card" >˖°📷༘</div>
								<div class="symbol-card" >𖦹 y 𓈒 🥞 ／ ⋆ ۪</div>
								<div class="symbol-card" >( ˵ •̀ ᴗ •́˵)</div>
								<div class="symbol-card" >𓅸</div>
								<div class="symbol-card" >(｡•́︿•̀｡)</div>
								<div class="symbol-card" >˙𐙚⋆˙𖠋𖠋𖠋⋆˚ᡣ𐭩</div>
								<div class="symbol-card" >₍ᐢ. ̫ .ᐢ₎</div>
								<div class="symbol-card" >(｡&gt;﹏&lt;)</div>
								<div class="symbol-card" >♂️</div>
								<div class="symbol-card" >(𓌻‸𓌻) ᴜɢʜ.</div>
								<div class="symbol-card" >༝༚</div>
								<div class="symbol-card" >₍ ˃ ⤙ ˂ ₎ა</div>
								<div class="symbol-card" >•𐃷•</div>
								<div class="symbol-card" >✎ᝰ.ᐟ⋆⑅˚₊</div>
								<div class="symbol-card" >₍˄·͈༝·͈˄*₎◞ ̑̑</div>
								<div class="symbol-card" >🥺</div>
								<div class="symbol-card" >📎</div>
								<div class="symbol-card" >(ᵕ•_•)</div>
								<div class="symbol-card" >(ง︡'-'︠)ง</div>
								<div class="symbol-card" >(❀´ ˘ `❀)</div>
								<div class="symbol-card" >💢</div>
								<div class="symbol-card" >. ♬ ݁˖</div>
								<div class="symbol-card" >⋆｡ﾟ🌊｡</div>
								<div class="symbol-card" >‧₊°🖇️✩₊°🎧⊹♡</div>
								<div class="symbol-card" >✩°｡⋆⸜(˙꒳&ZeroWidthSpace;˙ )</div>
								<div class="symbol-card" >(ˊᵒ̴̶̷̤ ꇴ ᵒ̴̶̷̤ˋ)</div>
								<div class="symbol-card" >❄︎</div>
								<div class="symbol-card" >𝒞</div>
								<div class="symbol-card" >──★˙🍓̟!!</div>
								<div class="symbol-card" >ଳ</div>
								<div class="symbol-card" >𐙚 ˚ ⋆｡˚ ᡣ𐭩</div>
								<div class="symbol-card" >♡(ﾐ ᵕ̣̣̣̣̣̣ ﻌ ᵕ̣̣̣̣̣̣ ﾐ)ﾉ</div>
								<div class="symbol-card" >♡ᰔ૮₍ ˃ ⤙ ˂ ₎ა</div>
								<div class="symbol-card" >⊹ ࣪ ˖ ꫂ&nbsp;ၴႅၴ ₊ ⊹</div>
								<div class="symbol-card" >꒰ᐢ. .ᐢ꒱₊˚⊹</div>
								<div class="symbol-card" >𐔌 . ⋮ nama .ᐟ ֹ ₊ ꒱</div>
								<div class="symbol-card" >(づ&gt; v &lt;)づ♡</div>
								<div class="symbol-card" >〃</div>
								<div class="symbol-card" >ฅ ฅ</div>
								<div class="symbol-card" >ꛕͲ</div>
								<div class="symbol-card" >☼</div>
								<div class="symbol-card" >☤</div>
								<div class="symbol-card" >🖤⃝🦋</div>
								<div class="symbol-card" >꒰ᐢ.   ̫ .ᐢ꒱</div>
								<div class="symbol-card" >( • ᴖ • ｡)</div>
								<div class="symbol-card" >🌊☆⋆｡🪼𖦹°‧★🐚</div>
								<div class="symbol-card" >📷</div>
								<div class="symbol-card" >( ๑ ˃̵ᴗ˂̵) ♡</div>
								<div class="symbol-card" >૮₍ ˵ • ꤮ ก ˵ ₎ა</div>
								<div class="symbol-card" >™</div>
								<div class="symbol-card" >⋆.˚🦢⋆</div>
								<div class="symbol-card" >𐔌 . nome ! ୧</div>
								<div class="symbol-card" >♕</div>
								<div class="symbol-card" >⋆ 𐙚 ˚.</div>
								<div class="symbol-card" >📍</div>
								<div class="symbol-card" >𓍢ִ໋🌷͙֒ᰔᩚ</div>
								<div class="symbol-card" >⋆ ˚｡⋆୨ ʚɞ ୧⋆ ˚｡⋆</div>
								<div class="symbol-card" >♒︎</div>
								<div class="symbol-card" >✧₊⁺</div>
								<div class="symbol-card" >₍^⸝⸝&gt; ·̫ &lt;⸝⸝ ^₎</div>
								<div class="symbol-card" >༘⋆♡⸝⸝💌⊹。°˖➴</div>
								<div class="symbol-card" >(⊙ _ ⊙ )</div>
								<div class="symbol-card" >: ̗̀➛</div>
								<div class="symbol-card" >༯</div>
								<div class="symbol-card" >₍^.  ̫.^₎</div>
								<div class="symbol-card" >𓏏</div>
								<div class="symbol-card" >←</div>
								<div class="symbol-card" >ᨐฅ</div>
								<div class="symbol-card" >“ ”</div>
								<div class="symbol-card" >𝔾𝕆𝕆𝔻 𝔹𝕆𝕐</div>
								<div class="symbol-card" >🕸</div>
								<div class="symbol-card" >⊹</div>
								<div class="symbol-card" >𝐀</div>
								<div class="symbol-card" >ﮩـﮩﮩ٨ـ🫀ﮩ٨ـﮩﮩ٨ـ</div>
								<div class="symbol-card" >𝔀</div>
								<div class="symbol-card" >(≖_≖ )</div>
								<div class="symbol-card" >.𖥔 ݁ ˖╭ ┆text ╰⊹ ࣪</div>
								<div class="symbol-card" >ㅤ ᵕ̈</div>


								<div class="symbol-card" >⋆ ༺Ƹ★ (ꐦ ◣‸◢) ★ Ʒ༻ ⋆</div>
								<div class="symbol-card" >ﾟ･:,｡★＼(^-^)♪ありがと♪( ^-^)/★,｡･:･ﾟ</div>
								<div class="symbol-card" >;´♡ਊ ♡`;</div>
								<div class="symbol-card" >⋇⊶⊰❣⊱⊷⋇ ⋇⊶⊰❣⊱⊷⋇</div>
								<div class="symbol-card" >৻৲₰⁰ Ī love ÿøu ⁰₰৻৲</div>
								<div class="symbol-card" > 🎼ılılıll|̲̅̅●̲̅̅|̲̅̅=̲̅̅|̲̅̅●̲̅̅| llılılı🎼</div>
								<div class="symbol-card" >☆⋆｡𖦹°‧★</div>
								<div class="symbol-card" >☪︎ ִ ࣪𖤐 𐦍 ☾𖤓</div>
								<div class="symbol-card" >✩°｡⋆⸜ 🎧✮</div>
								<div class="symbol-card" >✮ ⋆ ˚｡𖦹 ⋆｡°✩</div>
								<div class="symbol-card" >⋆｡‧˚ʚ🍓ɞ˚‧｡⋆</div>
								<div class="symbol-card" >‧₊˚🖇️✩ ₊˚🎧⊹ ♡</div>
								<div class="symbol-card" >✮⋆˙</div>
								<div class="symbol-card" >𓍢ִ໋🌷͙֒</div>
								<div class="symbol-card" >ᶻ 𝗓 𐰁</div>
								<div class="symbol-card" >𖦹</div>
								<div class="symbol-card" >˙ᵕ˙</div>
								<div class="symbol-card" >𓆝 𓆟 𓆞 𓆝</div>
								<div class="symbol-card" >˚ ༘ ೀ⋆｡˚</div>
								<div class="symbol-card" >⋆｡ﾟ☁︎｡⋆｡ ﾟ☾ ﾟ｡⋆</div>
								<div class="symbol-card" >˗ˏˋ ꒰ ♡ ꒱ ˎˊ˗</div>
								<div class="symbol-card" >‹𝟹</div>
								<div class="symbol-card" >‧₊˚🖇️✩ ₊˚🎧⊹♡</div>
								<div class="symbol-card" >꩜</div>
								<div class="symbol-card" >‧₊˚ ☁️⋅♡𓂃 ࣪ ִֶָ☾.</div>
								<div class="symbol-card" >🫧𓇼𓏲*ੈ✩‧₊˚🎐</div>
								<div class="symbol-card" >‧˚꒰🐾꒱༘⋆</div>
								<div class="symbol-card" >˙✧˖°📷 ༘ ⋆｡˚</div>
								<div class="symbol-card" >☠︎︎༒︎✞︎🕸𖤐</div>
								<div class="symbol-card" >✧˚ ༘ ⋆｡♡˚</div>
								<div class="symbol-card" >๋࣭ ⭑</div>
								<div class="symbol-card" >🎸⋆⭒˚｡⋆</div>
								<div class="symbol-card" >ֶָ֢</div>
								<div class="symbol-card" >⋆ ˚｡⋆୨♡୧⋆ ˚｡⋆</div>
								<div class="symbol-card" >⋆｡ ﾟ☁︎｡ ⋆｡ ﾟ☾ ﾟ｡ ⋆</div>
								<div class="symbol-card" >𔓘</div>
								<div class="symbol-card" >✩ ♬ ₊.🎧⋆☾⋆⁺₊✧</div>
								<div class="symbol-card" >⩇⩇:⩇⩇</div>
								<div class="symbol-card" >⋆˚✿˖°</div>
								<div class="symbol-card" >𖦹ׂ 𓈒 🐇 ／ ⋆ ۪</div>
								<div class="symbol-card" >૮₍´˶• . • ⑅ ₎ა</div>
								<div class="symbol-card" >ʚɞ˚ ༘♡ ⋆｡˚</div>
								<div class="symbol-card" >୧ ‧₊˚ 🎐 ⋅</div>
								<div class="symbol-card" >ೀ⋆｡🌷</div>
								<div class="symbol-card" >ᯤ</div>
								<div class="symbol-card" >♡</div>
								<div class="symbol-card" >___ ★₊˚﹟🪐 '</div>
								<div class="symbol-card" >໒꒰ྀིっ˕ -｡꒱ྀི১</div>
								<div class="symbol-card" >𔘓</div>
								<div class="symbol-card" >𓆉</div>
								<div class="symbol-card" >⋆ ˚｡ ⋆୨♡୧⋆ ˚｡ ⋆</div>
								<div class="symbol-card" >𓆩♡𓆪</div>
								<div class="symbol-card" >ﮩ٨ـﮩﮩ٨ـ♡ﮩ٨ـﮩﮩ٨ـ</div>
								<div class="symbol-card" >.° ༘🎧⋆🖇₊˚ෆ</div>
								<div class="symbol-card" >「 ✦ 𝐍𝐚𝐦𝐞 ✦ 」</div>
								<div class="symbol-card" >𓍢ִ໋🌷͙֒₊˚*ੈ♡⸝⸝🪐༘⋆</div>
								<div class="symbol-card" >ִ ࣪𖤐</div>
								<div class="symbol-card" >₊⊹</div>
								<div class="symbol-card" >-`♡´-</div>
								<div class="symbol-card" >𓍯 ִֶָ</div>
								<div class="symbol-card" >𓀐𓂸</div>
								<div class="symbol-card" >ִ ࣪𖤐◞ ꙳ ๋࣭ ⭑ `</div>
								<div class="symbol-card" >🦋⃟</div>
								<div class="symbol-card" >୧ ‧₊˚ 🍮 ⋅ ☆</div>
								<div class="symbol-card" >☾⋆｡𖦹 °✩</div>
								<div class="symbol-card" >⚝</div>
								<div class="symbol-card" >જ⁀➴</div>
								<div class="symbol-card" >₊˚ʚ ᗢ₊˚✧ ﾟ.</div>
								<div class="symbol-card" >₊˚⊹♡</div>
								<div class="symbol-card" >༘⋆</div>
								<div class="symbol-card" >🦋⃤♡⃤🌈⃤</div>
								<div class="symbol-card" >♡₊˚ 🦢・₊ ♪ ✧</div>
								<div class="symbol-card" >.𖥔 ݁ ˖</div>
								<div class="symbol-card" >✩°｡🦦</div>
								<div class="symbol-card" >___ ★₊˚﹟🪐'</div>
								<div class="symbol-card" >☆.𓋼𓍊 𓆏 𓍊𓋼𓍊.☆</div>
								<div class="symbol-card" >・┆✦ʚ♡ɞ✦ ┆・</div>
								<div class="symbol-card" >☆ ★ ✮ ★ ☆</div>
								<div class="symbol-card" >⋆♱✮♱⋆</div>
								<div class="symbol-card" >𖡼𖤣𖥧𖡼𓋼𖤣𖥧𓋼𓍊</div>
								<div class="symbol-card" >୭ 🧷 ✧ ˚. ᵎᵎ 🎀</div>
								<div class="symbol-card" >✮</div>
								<div class="symbol-card" >˙ ✩°˖🫐 ⋆｡˚꩜</div>
								<div class="symbol-card" >✩♬ ₊˚.🎧⋆☾⋆⁺₊✧</div>
								<div class="symbol-card" >୧⍤⃝💐</div>
								<div class="symbol-card" >໒꒰ྀི´ ˘ ` ꒱ྀིა</div>
								<div class="symbol-card" >୧ ‧₊˚ 🍓 ⋅ ☆</div>
								<div class="symbol-card" >˗ˏˋ ★ ˎˊ˗</div>
								<div class="symbol-card" >ᰔᩚ</div>
								<div class="symbol-card" >🪼</div>
								<div class="symbol-card" >𓆩⚝𓆪</div>
								<div class="symbol-card" >ᥫ᭡</div>
								<div class="symbol-card" >`✦ ˑ ִֶ 𓂃⊹✩°｡⋆⸜ 🎧✮</div>
								<div class="symbol-card" >☾☼</div>
								<div class="symbol-card" >𐙚</div>
								<div class="symbol-card" >⊹ ࣪ ˖</div>
								<div class="symbol-card" >⋆｡°✩</div>
								<div class="symbol-card" >˚˖𓍢ִ໋🌷͙֒✧˚.🎀༘⋆</div>
								<div class="symbol-card" >˚₊‧꒰ა ☆ ໒꒱ ‧₊˚</div>
								<div class="symbol-card" >⋆⭒˚｡⋆</div>
								<div class="symbol-card" >&lrm;‧₊˚✧[texto]✧˚₊‧</div>
								<div class="symbol-card" >ㅤᵕ̈</div>
								<div class="symbol-card" >✧˖°🌷📎⋆ ˚｡⋆୨୧˚</div>
								<div class="symbol-card" >𓍯</div>
								<div class="symbol-card" >🍙♡ ‹𝟹㊗🎧</div>
								<div class="symbol-card" >☾𖤓</div>
								<div class="symbol-card" >₊ ⊹</div>
								<div class="symbol-card" >•|☆✨🌕☆•|</div>
								<div class="symbol-card" >૮ ˶ᵔ ᵕ ᵔ˶ ა</div>
								<div class="symbol-card" >🪷</div>
								<div class="symbol-card" >⛧</div>
								<div class="symbol-card" >𝄞</div>
								<div class="symbol-card" >༘⋆🌷🫧💭₊˚ෆ</div>
								<div class="symbol-card" >˚ ༘ ೀ⋆｡ ˚</div>
								<div class="symbol-card" >♫₊˚.🎧 ✩｡</div>
								<div class="symbol-card" >⊹.˚🪞🕯️♡</div>
								<div class="symbol-card" >𖡎</div>
								<div class="symbol-card" >ﮩـﮩﮩ٨ـ🫀ﮩ٨ـﮩﮩ٨ـ</div>
								<div class="symbol-card" >/ᐠ - ˕ -マ</div>
								<div class="symbol-card" >⛧°。 ⋆༺♱༻⋆。 °⛧</div>
								<div class="symbol-card" >˚˖𓍢ִִ໋🌊🦈˚˖𓍢ִ✧˚.</div>
								<div class="symbol-card" >✩°｡ ⋆⸜ 🎧✮</div>
								<div class="symbol-card" >≽ܫ≼</div>
								<div class="symbol-card" >𓍢ִ໋🌷͙֒✧˚ ༘ ⋆｡˚♡</div>
								<div class="symbol-card" >ֶָ֢</div>
								<div class="symbol-card" >★</div>
								<div class="symbol-card" >༝༚༝༚</div>
								<div class="symbol-card" >⋆｡𖦹°⭒˚｡⋆</div>
								<div class="symbol-card" >✩ ♬ ₊˚.🎧⋆☾⋆⁺₊✧</div>
								<div class="symbol-card" >˚. ✦.˳·˖✶ ⋆.✧̣̇˚.</div>
								<div class="symbol-card" >⭒</div>
								<div class="symbol-card" >𓆇🕸️𓆸</div>
								<div class="symbol-card" >𝓴𝓲𝓼𝓼 𝓶𝒆</div>
								<div class="symbol-card" >ᶠᶸᶜᵏᵧₒᵤ!</div>
								<div class="symbol-card" >༘˚⋆𐙚｡⋆𖦹.✧˚</div>
								<div class="symbol-card" >˚˖𓍢ִ໋🌷͙֒✧˚.🎀༘⋆</div>
								<div class="symbol-card" >‧₊˚🖇️✩ ₊˚🎧⊹♡</div>
								<div class="symbol-card" >๋࣭ ⭑⚝</div>
								<div class="symbol-card" >♡</div>
								<div class="symbol-card" >✮⋆˙</div>
								<div class="symbol-card" >ᯓ★</div>
								<div class="symbol-card" >‧₊˚ ☁️⋅♡𓂃 ࣪ ִֶָ☾.</div>
								<div class="symbol-card" >ᡣ𐭩</div>
								<div class="symbol-card" >𐙚</div>
								<div class="symbol-card" >𓍢ִ໋🌷͙֒ ᰔᩚ</div>
								<div class="symbol-card" >🫧𓇼𓏲*ੈ✩‧₊˚🎐</div>
								<div class="symbol-card" >°❀⋆.ೃ࿔*:･</div>
								<div class="symbol-card" >✩♬ ₊˚.🎧⋆☾⋆⁺₊✧</div>
								<div class="symbol-card" >🎀🪞🩰🦢🕯️</div>
								<div class="symbol-card" >˚୨୧⋆｡</div>
								<div class="symbol-card" >✮ ⋆ ˚｡𖦹 ⋆｡°✩</div>
								<div class="symbol-card" >🧸ྀི</div>
								<div class="symbol-card" >▶︎ •၊၊||၊|။||||| 0:10</div>
								<div class="symbol-card" >ᝰ.ᐟ</div>
								<div class="symbol-card" >˙✧˖°📷 ༘ ⋆｡˚</div>
								<div class="symbol-card" >⋆˚✿˖°</div>
								<div class="symbol-card" >ᥫ᭡</div>
								<div class="symbol-card" >𓍢ִ໋🌷͙֒✧˚ ༘ ⋆｡˚♡</div>
								<div class="symbol-card" >✩₊˚.⋆☾⋆⁺₊✧</div>
								<div class="symbol-card" >*♡⸝⸝🪐༘⋆</div>
								<div class="symbol-card" >₊˚⊹♡</div>
								<div class="symbol-card" >˚˖𓍢ִ໋🌷͙֒✧˚.🎀༘⋆</div>
								<div class="symbol-card" >𓇼🐚☾☼🦪</div>
								<div class="symbol-card" >𖹭</div>
								<div class="symbol-card" >˚˖𓍢ִ໋🦢˚</div>
								<div class="symbol-card" >୧⍤⃝💐</div>
								<div class="symbol-card" >𓆝 𓆟 𓆞 𓆝 𓆟</div>
								<div class="symbol-card" >𐙚</div>
								<div class="symbol-card" >˚ ༘ ೀ⋆｡˚</div>
								<div class="symbol-card" >🪞🕊️🤍✨</div>
								<div class="symbol-card" >「 ✦ 𝐍𝐚𝐦𝐞 ✦ 」</div>
								<div class="symbol-card" >ֶָ֢</div>
								<div class="symbol-card" >✧˚ ʚɞ˚ ༘✿ ♡ ⋆｡˚</div>
								<div class="symbol-card" >⋆｡‧˚ʚ🍓ɞ˚‧｡⋆</div>
								<div class="symbol-card" >✩♬₊˚.🎧⋆☾⋆⁺₊✧</div>
								<div class="symbol-card" >⋆౨ৎ˚⟡˖ ࣪</div>
								<div class="symbol-card" >♡ ̆̈</div>
								<div class="symbol-card" >ﮩ٨ـﮩﮩ٨ـ♡ﮩ٨ـﮩﮩ٨ـ</div>
								<div class="symbol-card" >─── ⋆⋅☆⋅⋆ ──</div>
								<div class="symbol-card" >🐻‍❄️ྀིྀི</div>
								<div class="symbol-card" >&lt;𝟑</div>
								<div class="symbol-card" >༘⋆🌷🫧💭₊˚ෆ</div>
								<div class="symbol-card" >⸜(｡˃ ᵕ ˂ )⸝♡</div>
								<div class="symbol-card" >𓍯𓂃𓏧♡</div>
								<div class="symbol-card" >🎀🫶🏻💌💓</div>
								<div class="symbol-card" >🪼⋆.ೃ࿔*:･</div>
								<div class="symbol-card" >˃̵ᴗ˂̵</div>
								<div class="symbol-card" >🎐🫧🦋🧿💠🌀</div>
								<div class="symbol-card" >𓍢ִ໋🌷͙֒</div>
								<div class="symbol-card" >⋆ ˚｡⋆୨♡୧⋆ ˚｡⋆</div>
								<div class="symbol-card" >⋆⭒˚｡⋆</div>
								<div class="symbol-card" >𓇢𓆸</div>
								<div class="symbol-card" >ᰔᩚ</div>
								<div class="symbol-card" >.° ༘🎧⋆🖇₊˚ෆ</div>
								<div class="symbol-card" >🪷🫧🪞</div>
								<div class="symbol-card" >✰</div>
								<div class="symbol-card" >☆ ★ ✮ ★ ☆</div>
								<div class="symbol-card" >⋆˚🐾˖°</div>
								<div class="symbol-card" >☪︎ ִ ࣪𖤐 𐦍 ☾𖤓</div>
								<div class="symbol-card" >•ﻌ•</div>
								<div class="symbol-card" >•ᴗ•</div>
								<div class="symbol-card" >١٥٧٤♡</div>
								<div class="symbol-card" >˚‧｡⋆🌻⋆｡‧˚</div>
								<div class="symbol-card" >ʚɞ</div>
								<div class="symbol-card" >𔓘</div>
								<div class="symbol-card" >⋆⭒˚.⋆</div>
								<div class="symbol-card" >ֶָ֢</div>
								<div class="symbol-card" >ᶻ 𝗓 𐰁</div>
								<div class="symbol-card" >ִ ࣪𖤐</div>
								<div class="symbol-card" >𓍯𓂃</div>
								<div class="symbol-card" >-`♡´-</div>
								<div class="symbol-card" >⊹ ࣪ ˖</div>
								<div class="symbol-card" >ㅤᵕ̈</div>
								<div class="symbol-card" >★🎸🎧⋆｡ °⋆</div> -->
								
			
			</div>
		</main>
	</section>

	<!-- subfooter -->
		<footer class="bg-blue-700 px-6 py-10">
			<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-white">

			<!-- Grid Conditions -->
			<div class="flex flex-col items-center md:items-start text-center md:text-left">
				<h2 class="text-2xl text-yellow-500 font-semibold mb-4">Grid Conditions</h2>
				<img src="e8fc1553-2cec-436f-90cb-5095c2f45f9f.png" alt="Light Bulb" class="w-32 h-auto">
				<p>Description is any type of communication that aims to make vivid a place, object, person, group, or other physical entity. It is one of four rhetorical modes, along with exposition, argumentation, and narration.</p>
			</div>

			<!-- Contact Info -->
			<div class="flex flex-col items-center md:items-start text-center md:text-left">
				<p class="text-yellow-500 text-xl font-medium mb-2">512-936-7500</p>
				<ul class="space-y-2 text-white font-semibold">
				<li><a href="#" class="hover:text-yellow-400">Compact with Texans</a></li>
				<li><a href="#" class="hover:text-yellow-400">Site Policies</a></li>
				<li><a href="#" class="hover:text-yellow-400">Accessibility</a></li>
				<li><a href="#" class="hover:text-yellow-400">Website Disclaimer</a></li>
				</ul>
				<div class="flex space-x-4 mt-4">
				<a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-facebook-f">📘</i></a>
				<a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-twitter">🐦</i></a>
				<a href="#" class="text-white hover:text-yellow-500"><i class="fab fa-linkedin-in">💼</i></a>
				</div>
			</div>

			<!-- Related Links -->
			<div class="text-center md:text-left">
				<h2 class="text-yellow-500 text-2xl font-semibold mb-4">RELATED LINKS</h2>
				<ul class="space-y-2 text-white">
				<li><a href="#" class="hover:text-yellow-400">Public Utility Commission (PUCT)</a></li>
				<li><a href="#" class="hover:text-yellow-400">Electric Reliability Council of Texas (ERCOT)</a></li>
				<li><a href="#" class="hover:text-yellow-400">Texas Commission on Environmental Quality (TCEQ)</a></li>
				<li><a href="#" class="hover:text-yellow-400">Faucet Facts (DUO)</a></li>
				<li><a href="#" class="hover:text-yellow-400">Texas.Gov</a></li>
				<li><a href="#" class="hover:text-yellow-400">Texas Legislature Online</a></li>
				<li><a href="#" class="hover:text-yellow-400">Texas Veterans</a></li>
				<li><a href="#" class="hover:text-yellow-400">TRAIL Archives Search</a></li>
				<li><a href="#" class="hover:text-yellow-400">Where the Money Goes</a></li>
				</ul>
			</div>
			</div>
		</footer>

	<!-- subfooter -->
  <!-- Footer -->
  <footer class="bg-red-800 border-t shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4 text-center text-white text-sm">
      &copy; 2025 MySite. All rights reserved. | <a href="#" class="text-blue-500 hover:underline">Privacy Policy</a>
    </div>
  </footer>

  <!-- C:\xampp\htdocs\maindata\public\frontend\assets\js\home-script.js -->
  <script src="{{url('public/frontend/assets/js/home-script.js') }}"></script>

    
</body>
</html>
