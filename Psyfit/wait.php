
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
    <style>
    * {
    	margin: 0;
    	padding: 0;
    	box-sizing: border-box;
    }

    body {
    	height: 100vh;
    	overflow: hidden;
    	display: flex;
      flex-direction: column;
    	align-items: center;
    	justify-content: center;
    	background-color: #2b1331;
    	background-image: linear-gradient(315deg, #2b1331 0%, #b9abcf 74%);
    }
    .noselect {
      -webkit-touch-callout: none;
        -webkit-user-select: none;
         -khtml-user-select: none;
           -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
    		-webkit-tap-highlight-color: transparent;
    }

    .noselect {
    	width: 150px;
    	height: 150px;
    	cursor: pointer;
    	border: none;
    	font-family: 'Comfortaa', cursive;
    	color: rgba(255,255,255,0.5);
    	font-size: 20px;
    	border-radius: 4px;
    	box-shadow: inset 0px 3px 5px rgba(255,255,255,0.5), 0px 0px 10px rgba(0,0,0,0.15);
    	background: rgb(2,0,36);
    background: linear-gradient(45deg, rgba(2,0,36,0) 5%, rgba(255,255,255,.5) 6%, rgba(255,255,255,0) 9%, rgba(255,255,255,.5) 10%, rgba(255,255,255,0) 17%, rgba(255,255,255,.5) 19%, rgba(255,255,255,0) 21%);
    	background-size: 150%;
    	background-position: right;
    	transition: 1s;
    }

    .noselect:hover {
    	background-position: left;
    	color: white;
    	box-shadow: inset 0px 3px 5px rgba(255,255,255,1), 0px 0px 10px rgba(0,0,0,0.25);
    }

    .noselect:focus {
    	outline: none;
    }
    </style>
  </head>
  <body>
    <p style="font-family: 'Comfortaa', cursive; font-size:40px; color:rgba(255,255,255,0.5);">All users are occupied</p>
    <form class="" action="home.php">
<input type="submit" name="button1" value="Home Page" class="noselect"></input>
    </form>

  </body>
</html>
