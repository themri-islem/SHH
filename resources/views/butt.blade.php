<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html, body {
  height: 50%;
}

.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  min-width: 90px;
  min-height: 40px;
  font-family: 'Nunito', sans-serif;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 20PX;
  color: #f3f3f8;
  background: orange;
background: linear-gradient(90deg, orange, orange 100%);
  border: none;
  border-radius: 1000px;
  box-shadow: 12px 12px 24px orange;
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 6px;
  margin-right: 40px;
  }

button::before {
content: '';
  border-radius: 500px;
  min-width: calc(100px + 12px);
  min-height: calc(50px + 12px);
  border: 6px solid #fffefe;
  box-shadow: 0 0 60px rgba(240, 244, 243, 0.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.button:hover, .button:focus {
  color: rgb(239, 239, 237);
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}

button::after {
  content: '';
  width: 15px; height: 15px;
  border-radius: 100%;
  border: 6px solid orange;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 1.5s infinite;
}

button:hover::after, button:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 120px;
    height: 120px;
    opacity: 0;
  }
}
    </style>
</head>
<body>
    <div class="wrap">
        <button class="button">Log In</button>
      </div>
</body>
</html>