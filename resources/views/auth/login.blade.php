<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css" />

    <style>
		* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		}

		body, html {
		height: 100%;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		overflow: hidden;
		}

		.background {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(-45deg, #ee7752, #e7bb41, #23a6d5, #23d5ab);
		background-size: 400% 400%;
		animation: gradientBG 10s ease infinite;
		z-index: -1;
		}

		@keyframes gradientBG {
		0% { background-position: 0% 50%; }
		50% { background-position: 100% 50%; }
		100% { background-position: 0% 50%; }
		}

		.login-container {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -60px);
		width: 300px;
		padding: 40px;
		background: rgba(255, 255, 255, 0.1);
		border-radius: 10px;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
		backdrop-filter: blur(10px);
		text-align: center;
		opacity: 0;
		transition: all 1s ease-out;
		}

		.login-container.show {
		transform: translate(-50%, -50%);
		opacity: 1;
		}

		.login-container h2 {
		color: white;
		margin-bottom: 30px;
		font-size: 24px;
		}

		.login-container input {
		width: calc(100% - 20px);
		padding: 10px;
		margin: 10px 0;
		border: none;
		border-radius: 5px;
		outline: none;
		}

		.login-container button {
		width: 100%;
		padding: 10px;
		border: none;
		border-radius: 5px;
		background-color: #fff;
		color: #23a6d5;
		font-weight: bold;
		cursor: pointer;
		transition: background 0.3s;
		}

		.login-container button:hover {
		background-color: #e7bb41;
		}

		#error-message {
		color: red;
		margin-top: 10px;
		min-height: 20px;
		}
	</style>
</head>


<body>
  <div class="background"></div>
  <div class="login-container" id="loginCard">
    <h2>Login</h2>
    <form id="loginForm2"  class="row g-4" method="POST" action="{{ route('login') }}">
		@csrf
      <input type="text" id="username" placeholder="email" name="email" value="{{ old('email') }}" required />
      <input type="password" id="password"  name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" required />
     <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i> {{ __('Login') }}</button>
      <p id="error-message"></p>
    </form>
	

	@error('email')
		<span class="invalid-feedback" role="alert" style="display: block;margin: 10px 0px 10px 0px;">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
	@error('password')
		<span class="invalid-feedback" role="alert" style="display: block;">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
  </div>

	<script>
			// Show login card with animation after DOM loads
		document.addEventListener("DOMContentLoaded", () => {
		const loginCard = document.getElementById("loginCard");
		setTimeout(() => {
			loginCard.classList.add("show");
		}, 200);
		});

		// Handle form submission
		document.getElementById("loginForm").addEventListener("submit", function (e) {
		e.preventDefault();

		const username = document.getElementById("username").value.trim();
		const password = document.getElementById("password").value.trim();
		const errorMessage = document.getElementById("error-message");

		// Simple validation
		if (username === "" || password === "") {
			errorMessage.textContent = "Both fields are required!";
			shakeLoginCard();
		} else {
			errorMessage.textContent = "";
			alert("Logged in successfully!");
			// You can redirect or process login here
		}
		});

		// Animation: Shake login card on error
		function shakeLoginCard() {
		const loginCard = document.getElementById("loginCard");
		loginCard.style.transition = 'transform 0.5s ease';
		loginCard.style.transform = 'translate(-50%, -50%) translateX(-10px)';
		
		setTimeout(() => {
			loginCard.style.transform = 'translate(-50%, -50%) translateX(10px)';
		}, 100);

		setTimeout(() => {
			loginCard.style.transform = 'translate(-50%, -50%) translateX(-10px)';
		}, 200);

		setTimeout(() => {
			loginCard.style.transform = 'translate(-50%, -50%) translateX(10px)';
		}, 300);

		setTimeout(() => {
			loginCard.style.transform = 'translate(-50%, -50%)';
		}, 400);
		}
	</script>
   
</body>
</html>
     
	