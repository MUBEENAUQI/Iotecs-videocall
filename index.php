<html>
<head>
  <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <style>
    body {
      background: whitesmoke;
      display: flex;
      height: 100vh;
      margin: 0;
      align-items: center;
      justify-content: center;
      padding: 0 50px;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }
    video {
      max-width: calc(50% - 100px);
      margin: 50px 50px;
      box-sizing: border-box;
      border-radius: 2px;
      padding: 0;
      background: white;
    }
    .copy {
      position: fixed;
      top:2%;
     color:white;
    
      height:20%;
      width:100%
    }
    .copy2 {
      position: fixed;
      top:0;
     
      background-color:#282C35;
      height:12%;
      width:100%
    }
     #copy3 {
      position: fixed;
      top:2.5%;
     width: 50px;
       height: 50px;
      background-color:white;
     left:3%;
     border-radius: 50%;
    }
    
  </style>
</head>
<body>

  
  
  
    <div class="copy2" ></div>
   <div class="copy" ><center><h2>Iotecs for medical transporartion<h2/></center></div>
    <div id="copy3" ><a href="https://iotecs-for-emergency-transportation.web.app/" class="w3-btn w3-whitesmoke w3-xxlarge"><i class="fa fa-home"></i> </a></div>
  <video id="localVideo" autoplay muted></video>
  <video id="remoteVideo" autoplay></video>
  
  <script src="script.js"></script>
</body>
</html>