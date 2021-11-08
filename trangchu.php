<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
</head>
<style>
  @font-face {
  font-family: 'Marvin Visions Variable';
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/756881/MarvinVisionsTrial-Variable.ttf");
}

body {
  background-color: #1b1b1d;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

body:after {
    content: '';
    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/756881/texture.svg);
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 999;
    pointer-events: none;
    opacity: 0.2;
    filter: invert(1);
    background-size: cover;
}

small {
  font-family: Roboto, sans-serif;
  color: hsl(347, 7%, 29%);
  padding-top: 1rem;
}

#quote {
  --weight: 10;
  font-family: 'Marvin Visions Variable';
  font-size: 15vw;
  font-weight: 170;
  margin: 0;
  text-align: center;
}

#quote {
  font-variation-settings: 'wght' var(--weight);
  transition: font-variation-settings cubic-bezier(0.445, 0.05, 0.55, 0.95) 1.6s -0.2s;
   background: url(https://media.giphy.com/media/3o7buijTqhjxjbEqjK/giphy.gif);
  -webkit-background-clip: text;
  -webkit-text-fill-color: hsla(327, 27%, 59%, 0.4);
  background-size: cover;
  background-position: bottom;
}

#quote:hover{
  --weight: 300;
}

</style>
<body>
  <h2 id="quote">Long Vũ</h2>
  <small>hover me</small>
</body>

<script>
  split = new SplitText("#quote", {type:"chars"});
</script>
</html>