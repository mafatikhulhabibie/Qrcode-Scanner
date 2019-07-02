<!DOCTYPE html>
  <head>
    <style>
      .preview-wrap {
    height: 200px !important;
    width: 226px !important;
    border-style: solid;
}
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <link rel="canonical" href="https://www.qrstuff.com/scan"/>
          <title>SVS Infotech</title>
              <base href="https://www.qrstuff.com/" />
    <script>
      var dataLayer = dataLayer || [];
      dataLayer.push({ 'existingClient': false });</script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5QFQNHF');</script>  
    <link rel="shortcut icon" href="favicon.ico" />
    
    
    <script>
      googleApiServerKey='AIzaSyDBVMxE5g-Y8R_EKdwXg7DOUjoyxB2D2eE';
      googleMapsApiVersion='3.32';
    </script>
    <script>qrstuffAppData=null;</script>
    <script>document.docReady=function(f) { if(document.readyState === 'complete') f(); else document.addEventListener('DOMContentLoaded', f); }</script>
    
      <script src="https://cdn.qrstuff.com/build/scripts/all-59b65c8594.min.js" defer></script>
    <!--<![endif]-->
    
 
 
 
 

<meta property="og:title" content="QR Stuff"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="https://www.qrstuff.com/images/opengraph.png"/>
<meta property="og:url" content="https://www.qrstuff.com/scan"/>
<meta property="og:site_name" content="QR Stuff"/>
<meta property="og:description" content="QR Stuff Free QR Code Creator - Color QR codes, 20+ data types, no sign-up required"/>
<meta property="fb:admins" content="1058772809"/>


  <meta name="viewport" content="width=700" id="meta-viewport">
  <script>document.docReady(function () {
    var setViewport=function() { document.getElementById('meta-viewport').setAttribute('content', 'width='+Math.max(screen.width,700)); }
    window.addEventListener("orientationchange",setViewport);
    window.addEventListener("resize", _.debounce(setViewport, 200));
    setViewport();
  })</script>

<style>.site-header, .constrain, .content-width { min-width: 700px; max-width: 950px; }</style>

  
  <script type="text/javascript" src="https://cdn.qrstuff.com/include/modules/custom/qrcodescan/instascan/custom/instascan.min.js"></script>
  
  <script src="https://cdn.qrstuff.com/build/scripts/scan-d83e092ab6.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  
</head>
<body id="#body">
  <div class="constrain constrain-scan top">

    <div class="qrcodescan">
      <h1>QR Scanner - Simply point the camera to the desired QR Code</h1>
      <div class="preview-wrap loading">
        <video playsinline></video>
      </div>
      <?php
        $res='<p class="result">Heloo</p>';
        echo $res;
        echo "<script>alert('$res');</script>";
      ?>
      

      
      <script class="result-template" type="x-tmpl-mustache">
        
          <div>
            <h2>Scan Result</h2>
            <div class="result-content
            {{#scan.displayMultiline}} multiline{{/scan.displayMultiline}}">
              {{#scan.isLink}}{{scan.linkIntro}} <?php echo $res='{{&scan.html}}';?>{{/scan.isLink}}
              {{^scan.isLink}}{{&scan.html}}{{/scan.isLink}}
            </div>
            <?php 
            if(strlen("$res")==0)
              {
                echo "Empty...";
              }
              else
              {
                $val=$res;
                $con=new mysqli("localhost","root","","project");
                $get="select * from register";
                $res=$con->query($get);
                if($res->num_rows>0)
                {
                  $row=$res->fetch_assoc();
                  $name=$row["NAME"];
                  echo "$name";
                  echo "<br><br> $val";
                }
              }
            ?>
            <form class="ng"><button class="scan-button button">Scan Another QR Code</button></form>
          </div>
        
      </script>
      

    </div>

    

  </div>
</body>
