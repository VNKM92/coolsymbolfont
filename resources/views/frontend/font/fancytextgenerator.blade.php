@extends('frontend.layouts.master')
@section('title',  "Fancy Text Generator")
@section('description', "Fancy Text Generator is a creative tool that allows you to transform your ordinary text into stylish and decorative fonts. With a variety of font styles to choose from, you can easily generate unique and eye-catching text for social media posts, graphic designs, or any other creative project. Whether you want to add a touch of elegance or a playful vibe, this generator has got you covered. Fancy Text Generator - Live preview, search, filter fonts, lazy load 1000+ stylish text variations.")

<style>
  body.dark { background-color: #1a202c; color: white; }
  body.light { background-color: #f7fafc; color: #1a202c; }
</style>

{{-- @section('title', $data->metatitle ?? "")
@section('description', $data->metadiscription  ?? "") --}}

@section('content')


        <main class="flex-grow p-6 text-center">
			  <div class="max-w-5xl mx-auto">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-3xl font-bold">✨ Fancy Text Generator</h1>
                    <button id="toggleTheme" class="px-4 py-2 bg-teal-600 text-white rounded hover:bg-teal-700">Toggle Theme</button>
                </div>

                <textarea id="inputText" placeholder="Type your text here..." 
                    class="w-full p-3  rounded border border-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500 mb-2"></textarea>

                <div class="flex flex-wrap gap-2 mb-4">
                    <select id="fontFilter" class="p-2 rounded border border-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    <option value="all">All Fonts</option>
                    </select>
                    <input type="text" id="searchText" placeholder="Search styles..." 
                    class="p-2 rounded border border-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500 flex-1"/>
                    <button id="generateBtn" class="px-6 py-2 text-white bg-teal-600 rounded hover:bg-teal-700">Generate Styles</button>
                    <button id="downloadBtn" class="px-6 py-2 bg-teal-600  text-white rounded hover:bg-teal-700">Download TXT</button>
                </div>

                <div id="output" class="space-y-2 max-h-[60vh] overflow-y-auto"></div>
                </div>

                <script>
                // 20+ Unicode font maps with categories
                const fontMaps = [
                {name:"Script", map:{a:"𝒶",b:"𝒷",c:"𝒸",d:"𝒹",e:"𝑒",f:"𝒻",g:"𝑔",h:"𝒽",i:"𝒾",j:"𝒿",k:"𝓀",l:"𝓁",m:"𝓂",n:"𝓃",o:"𝑜",p:"𝓅",q:"𝓆",r:"𝓇",s:"𝓈",t:"𝓉",u:"𝓊",v:"𝓋",w:"𝓌",x:"𝓍",y:"𝓎",z:"𝓏"}, category:"Script"},
                {name:"Bold", map:{a:"𝗮",b:"𝗯",c:"𝗰",d:"𝗱",e:"𝗲",f:"𝗳",g:"𝗴",h:"𝗵",i:"𝗶",j:"𝗷",k:"𝗸",l:"𝗹",m:"𝗺",n:"𝗻",o:"𝗼",p:"𝗽",q:"𝗾",r:"𝗿",s:"𝘀",t:"𝘁",u:"𝘂",v:"𝘃",w:"𝘄",x:"𝘅",y:"𝘆",z:"𝘇"}, category:"Bold"},
                {name:"Bold Script", map:{a:"𝓪",b:"𝓫",c:"𝓬",d:"𝓭",e:"𝓮",f:"𝓯",g:"𝓰",h:"𝓱",i:"𝓲",j:"𝓳",k:"𝓴",l:"𝓵",m:"𝓶",n:"𝓷",o:"𝓸",p:"𝓹",q:"𝓺",r:"𝓻",s:"𝓼",t:"𝓽",u:"𝓾",v:"𝓿",w:"𝔀",x:"𝔁",y:"𝔂",z:"𝔃"}, category:"Script"},
                {name:"Fraktur", map:{a:"𝔞",b:"𝔟",c:"𝔠",d:"𝔡",e:"𝔢",f:"𝔣",g:"𝔤",h:"𝔥",i:"𝔦",j:"𝔧",k:"𝔨",l:"𝔩",m:"𝔪",n:"𝔫",o:"𝔬",p:"𝔭",q:"𝔮",r:"𝔯",s:"𝔰",t:"𝔱",u:"𝔲",v:"𝔳",w:"𝔴",x:"𝔵",y:"𝔶",z:"𝔷"}, category:"Fraktur"},
                {name:"Circled", map:{a:"ⓐ",b:"ⓑ",c:"ⓒ",d:"ⓓ",e:"ⓔ",f:"ⓕ",g:"ⓖ",h:"ⓗ",i:"ⓘ",j:"ⓙ",k:"ⓚ",l:"ⓛ",m:"ⓜ",n:"ⓝ",o:"ⓞ",p:"ⓟ",q:"ⓠ",r:"ⓡ",s:"ⓢ",t:"ⓣ",u:"ⓤ",v:"ⓥ",w:"ⓦ",x:"ⓧ",y:"ⓨ",z:"ⓩ"}, category:"Circled"},
                {name:"Squared", map:{a:"🄰",b:"🄱",c:"🄲",d:"🄳",e:"🄴",f:"🄵",g:"🄶",h:"🄷",i:"🄸",j:"🄹",k:"🄺",l:"🄻",m:"🄼",n:"🄽",o:"🄾",p:"🄿",q:"🅀",r:"🅁",s:"🅂",t:"🅃",u:"🅄",v:"🅅",w:"🅆",x:"🅇",y:"🅈",z:"🅉"}, category:"Squared"},
                {name:"Double-struck", map:{a:"𝕒",b:"𝕓",c:"𝕔",d:"𝕕",e:"𝕖",f:"𝕗",g:"𝕘",h:"𝕙",i:"𝕚",j:"𝕛",k:"𝕜",l:"𝕝",m:"𝕞",n:"𝕟",o:"𝕠",p:"𝕡",q:"𝕢",r:"𝕣",s:"𝕤",t:"𝕥",u:"𝕦",v:"𝕧",w:"𝕨",x:"𝕩",y:"𝕪",z:"𝕫"}, category:"Double-struck"},
                {name:"Mono", map:{a:"𝚊",b:"𝚋",c:"𝚌",d:"𝚍",e:"𝚎",f:"𝚏",g:"𝚐",h:"𝚑",i:"𝚒",j:"𝚓",k:"𝚔",l:"𝚕",m:"𝚖",n:"𝚗",o:"𝚘",p:"𝚙",q:"𝚚",r:"𝚛",s:"𝚜",t:"𝚝",u:"𝚞",v:"𝚟",w:"𝚠",x:"𝚡",y:"𝚢",z:"𝚣"}, category:"Mono"},
                {name:"Small caps", map:{a:"ᴀ",b:"ʙ",c:"ᴄ",d:"ᴅ",e:"ᴇ",f:"ꜰ",g:"ɢ",h:"ʜ",i:"ɪ",j:"ᴊ",k:"ᴋ",l:"ʟ",m:"ᴍ",n:"ɴ",o:"ᴏ",p:"ᴘ",q:"ǫ",r:"ʀ",s:"s",t:"ᴛ",u:"ᴜ",v:"ᴠ",w:"ᴡ",x:"x",y:"ʏ",z:"ᴢ"}, category:"Small Caps"},
                ];

                // Populate font filter dropdown
                const fontFilter = document.getElementById("fontFilter");
                const categories = Array.from(new Set(fontMaps.map(f=>f.category)));
                categories.forEach(c=>{
                const option = document.createElement("option");
                option.value = c;
                option.textContent = c;
                fontFilter.appendChild(option);
                });

                // Apply font map
                function applyFont(text,map){
                return text.split("").map(c=>map[c.toLowerCase()]||c).join("");
                }

                // Decorations
                function decorateText(text,i){
                const symbols=["★","✦","✧","✿","❀","☾","♛","⚡","🔥","💎"];
                const wraps=[t=>`★彡 ${t} 彡★`,t=>`✧༺ ${t} ༻✧`,t=>`꧁ ${t} ꧂`,t=>`『 ${t} 』`,t=>`░▒▓ ${t} ▓▒░`,t=>`♛ ${t} ♛`,t=>`➳ ${t} ➳`,t=>`☾ ${t} ☽`];
                if(i%3===0) return wraps[i%wraps.length](text);
                if(i%5===0) return text.split("").join(" ");
                if(i%7===0) return text.toUpperCase();
                if(i%11===0) return text.toLowerCase();
                return symbols[i%symbols.length]+" "+text+" "+symbols[i%symbols.length];
                }

                // Generate styles (lazy load)
                function generateStyles(text,category,start=0,count=50){
                let filtered = fontMaps;
                if(category && category!=="all") filtered = fontMaps.filter(f=>f.category===category);
                let results=[];
                for(let i=start;i<start+count;i++){
                    let base = filtered[i % filtered.length];
                    let styled = applyFont(text,base.map);
                    styled = decorateText(styled,i);
                    results.push(styled);
                }
                return results;
                }

                // Render output
                function renderOutput(styles,append=false){
                const container=document.getElementById("output");
                if(!append) container.innerHTML="";
                styles.forEach((s,i)=>{
                    const div=document.createElement("div");
                    div.className="bg-gray-300 dark:bg-gray-700 p-2 rounded flex justify-between items-center";
                    div.innerHTML=`<span>${s}</span>
                    <button class="ml-2 text-sm bg-teal-300 px-2 py-1 rounded hover:bg-teal-400">Copy</button>`;
                    div.querySelector("button").addEventListener("click",()=>navigator.clipboard.writeText(s));
                    container.appendChild(div);
                });
                }

                // State
                let currentText="",currentCategory="",currentStart=0,totalStyles=1000;

                // Generate first batch
                document.getElementById("generateBtn").addEventListener("click",()=>{
                currentText=document.getElementById("inputText").value.trim();
                if(!currentText) return;
                currentCategory=fontFilter.value;
                currentStart=0;
                const styles=generateStyles(currentText,currentCategory,currentStart,50);
                renderOutput(styles,false);
                });

                // Lazy load more on scroll
                document.getElementById("output").addEventListener("scroll",()=>{
                const container=document.getElementById("output");
                if(container.scrollTop + container.clientHeight >= container.scrollHeight-10){
                    currentStart+=50;
                    const styles=generateStyles(currentText,currentCategory,currentStart,50);
                    renderOutput(styles,true);
                }
                });

                // Search filter
                document.getElementById("searchText").addEventListener("input",()=>{
                const query=document.getElementById("searchText").value.toLowerCase();
                const allDivs=document.querySelectorAll("#output div");
                allDivs.forEach(d=>{
                    const text=d.children[0].textContent.toLowerCase();
                    d.style.display=text.includes(query)?"flex":"none";
                });
                });

                // Download TXT
                document.getElementById("downloadBtn").addEventListener("click",()=>{
                const container=document.getElementById("output");
                if(!container.children.length) return alert("Generate first!");
                let textArray=Array.from(container.children).map(c=>c.children[0].textContent);
                const blob=new Blob([textArray.join("\n")],{type:"text/plain"});
                const link=document.createElement("a");
                link.href=URL.createObjectURL(blob);
                link.download="fancy_text.txt";
                link.click();
                });

                // Theme toggle
                document.getElementById("toggleTheme").addEventListener("click",()=>{
                document.body.classList.toggle("dark");
                document.body.classList.toggle("light");
                });

                // Example: auto-generate "Hello World"
                document.getElementById("inputText").value="Hello World";
                document.getElementById("generateBtn").click();
                </script>
		</main>

@endsection