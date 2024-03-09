<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url('https://images.unsplash.com/photo-1484807352052-23338990c6c6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            color: #ededed;
			height: 100vh;
			z-index: -1;
			position: fixed;
        }

        .header {
            position: fixed;
            top: 0;
            right: 0;
            width: 10vw;
            height: 100vw;
            padding-top: 3%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            align-items: center;
            text-align: center;
            z-index: 1;
        }

        .logo {
            border-radius: 100%;
            overflow: hidden;
            display: flex;
            height: 200px;
            width: 200px;
            text-align: center;
        }

        .navbar a {
            font-size: 20px;
            display: block;
            color: #ededed;
            text-decoration: none;
            padding: 15%;
            font-weight: 1000;
            transition: .5s;
        }

        .navbar a:hover,
        .navbar a.active {
            color: #00abf0;
        }
		
		#about {
			 height: 100vh;
            display: flex;
            padding-left: 10%;
            align-items: center;
			display: none;
			
		}
			
			
			
			
        .home {
            height: 100vh;
            display: flex;
            padding-left: 10%;
            align-items: center;
			
        }

        .home-content h1 {
            font-size: 70px;
        }

        .home-content h3 {
            margin-top: .5px;
            font-size: 30px;
            color: #02b3fa;
        }

        .btn-box {
            margin-top: 20px;
        }

        .btn-box a {
            background-color: #00abf0;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-box a:hover {
            background-color: #0077b6;
        }

        .programming-languages-container {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .programming-languages-title {
            color: white;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .programming-languages-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .programming-languages-list li {
            color: #02b3fa;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .button-counter {
            color: white;
            font-size: 16px;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="logo">
            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
        </div>
		
        <nav id="navbar" class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#">Works</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section id ="home" class="home">
        <div class="home-content">
            <h1>Julian Sebastian Mistica</h1>
            <h3>Student at Asia Pacific College</h3>
            <p>This is my project for my WEBPROG Class 2023-2024 in my term 2 studying at Asia Pacific College.</p>
            <div class="btn-box">
                <a href="#" id="woooaah-btn">Wooooaah!</a>
                <span id="woooaah-count" class="button-counter">0</span>
                <a href="#" id="meeeehh-btn">Meeeeehh!</a>
                <span id="meeeehh-count" class="button-counter">0</span>
            </div>
			
			<div class="programming-languages-container">
				<h2 class="programming-languages-title">Programming Languages</h2>
				<ul class="programming-languages-list" id="programming-languages-list"></ul>
			</div>
        </div>
    </section>
	
	<section id ="about" class="home">
       <div class="home-content">
            <?php
            $urls = [
                "Facebook: <br/>https://www.facebook.com/juliansebastian.mistica/",
                "Github: <br/>https://github.com/JJmistica",
                "Discord: <br/>https://discord.com/channels/@me"
            ];
            $urlsString = "";
            foreach ($urls as $url) {
                $urlsString .= "<a href='$url'>$url</a><br>";
            }
            echo "<h3>WHOOOOOAAHH</h3>";
            echo "<p>Below are my socials. <br/> You may click on that hyperlink to redirect you to it.</p>";
            echo "<div>$urlsString</div>";
            ?>
        </div>
    </section>

    <script>
        var programmingLanguages = ["Python", "JavaScript", "C#"];
        var languagesList = document.getElementById("programming-languages-list");

        programmingLanguages.forEach(function(language) {
            var listItem = document.createElement("li");
            listItem.textContent = language;
            languagesList.appendChild(listItem);
        });

        var woooaaahBtn = document.getElementById("woooaah-btn");
        var meeeehhBtn = document.getElementById("meeeehh-btn");
        var woooaaahCount = document.getElementById("woooaah-count");
        var meeeehhCount = document.getElementById("meeeehh-count");

        var woooaaahClicks = 0;
        var meeeehhClicks = 0;

        woooaaahBtn.addEventListener("click", function() {
            woooaaahClicks++;
            woooaaahCount.textContent = woooaaahClicks;
        });

        meeeehhBtn.addEventListener("click", function() {
            meeeehhClicks++;
            meeeehhCount.textContent = meeeehhClicks;
        });
		
		document.querySelectorAll('.navbar a').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
			  document.querySelectorAll('.navbar a').forEach(link => {
                link.classList.remove('active');
            });
			this.classList.add('active');
            const targetId = this.getAttribute('href').substring(1);
            document.querySelectorAll('.home').forEach(content => {
                content.style.display = 'none'
				;
            });
            document.getElementById(targetId).style.display = 'flex';
        });
    });
		
		
		
    </script>

</body>

</html>
