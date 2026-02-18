<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title') - CoolSymbol</title>
    <meta name="description" content="@yield('description')">
    <meta content="@yield('keywords')" name='keywords'/>
    <meta content='coolsymbol.online!' name='Author'/>
    <meta content='general' name='rating'/>
    <meta name="google-site-verification" content="hYi4lMKzCMdP_VG_dUayfIriWPKlmtVV1__3HcydT3Y" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" type="image/x-icon" href="{{url('public/frontend/fav/coolsymbolonline.ico') }}">
    <meta content='all' name='robots'/>
    <meta content='index, follow' name='robots'/>

    <!-- jQuery CDN  this is use for font-counter-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!--adsense-->
    <meta name="google-adsense-account" content="ca-pub-8970206615812210">
    <!--adsense end-->
    <?php
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Content-Type: application/xml; charset=utf-8");
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EC0N0HK3X8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-EC0N0HK3X8');
    </script>
  
 	<style>
		body{
			background-color:#e9eed9;
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
		color: #e9eed9;
		font-weight: 500;
		}
		.mobile-nav-link:hover {
		background-color: #e5e7eb;
		}

		.symbol-card1 {
		background-color: #f3f4f6;
		font-size: 1.25rem;
		border-radius: 0.5rem;
		box-shadow: 0 2px 4px #486509;
		padding: 1rem;
		text-align: center;
		cursor: pointer;
		transition: background-color 0.2s ease;
		user-select: none;
		}

		.symbol-card1:hover {
		background-color: #e5e7eb;
		}
		
		
		.symbol-card {
                        background: #fff;
                        border: 1px solid #ccc;
                        border-radius: 8px;
                        padding: 10px 15px;
                        font-size: 20px;
                        text-align: center;
                        overflow: hidden;
                        cursor: pointer;
                        box-shadow: 0 2px 4px #486509;
                        /*box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);*/
                        transition: transform 0.2s, background-color 0.2s;
                        user-select: none;
                        }

			.symbol-card:hover {
			background-color: #b4f2dd;
			transform: scale(1.05);
			}  

		.container{
			margin-right:auto;
			margin-left:auto;
			display: inline;
			width: 95%;
		}
		
		
		.grid-container {
                 display: flex;
                 flex-wrap: wrap; 
                 gap: 10px; 
                 justify-content: center; 
                 
            }

	</style>
	
	<!---amp adsense start--->
	    <script async custom-element="amp-auto-ads"
                src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
        </script>
	<!--amp adsen end-->
	
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8970206615812210"
     crossorigin="anonymous">
	    
	</script>
</head>
<body class="flex flex-col min-h-screen">
    
    <amp-auto-ads type="adsense"
        data-ad-client="ca-pub-8970206615812210">
    </amp-auto-ads>

    <!-- Navbar shadow-md -->
    <!-- main navbar -->
    @include('frontend.common.header')
	@include('frontend.common.navbar')
  

  <!-- Main Content -->
   <section class="container">
		@yield('content')
	
	</section>

 @include('frontend.common.footer')
  <!-- Footer -->
  <script src="{{url('public/frontend/assets/js/home-script.js') }}"></script>
  <script>
      
       // Copy symbol on click
    document.querySelectorAll(".symbol-card").forEach(card => {
        card.addEventListener("click", () => {
            const text = card.textContent.trim();
            navigator.clipboard.writeText(text).then(() => {
                card.classList.add("bg-green-500");

               // alert("Copied: " + text);
                try {
                    document.execCommand('copy'); // Execute the copy command
                    Swal.fire({
                        title: 'Copyed!' ,
                       // icon: 'success',
                        text: ' '+ text,
                        color: "#3f4b29",
                        showConfirmButton: false,
                        draggable: true,
                        timer: 1500,
                        width: 200,
                        height:100,
                        position: "top-end mr:10%",
                        type: "success",
                       // background: "no-repeat top left #fff url(https://coolsymbol.online/public/frontend/assets/gif/bird-10648_128.gif)",
                        backdrop: `
                            //rgba(233, 238, 217)
                             //url("https://coolsymbol.online/public/frontend/assets/gif/bird-10648_128.gif")
                            top left
                            no-repeat
                        `
                    });
                } catch (err) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Failed to copy text. Please try again or copy manually.',
                    });
                } finally {
                    tempTextArea.remove(); // Remove the temporary textarea
                }
            });
        });
    });
  </script>
</body>
</html>
