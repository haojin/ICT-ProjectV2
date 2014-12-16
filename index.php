<html lang="en">
<head>
  <meta charset="utf-8" />
  <title></title>
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script src="js/myjavascript.js"></script>
  <script>
    var caseVal = 'null';
    var monitorVal = 'null'; 
    var keyboardVal = 'null';
    var mouseVal = 'null';
    var speakerVal = 'null'; 
  </script>
  <link rel="stylesheet" href="css/myStyle.css" media="all" type="text/css">
</head>
<body>
  <div id="wrapper">
    <!--The products options box-->
    <section id="productsOption">
      <div id="box2">
        <div id="tabs">
          <ul>
            <li class="active" name="d1">Monitor</li>
            <li name="d2">Case</li>
            <li>Keybord</li>
            <li>Mouse</li>
            <li>Speaker</li>
          </ul>
        </div>
        <br>
        <!-- The products optional part-->
        <div id="con">
          <div class="subCon">
            <?php
              include 'monitor.php';  
            ?>
          </div>
          <div class="subCon">
            <?php
            include 'case.php';  
            ?>
          </div>
          <div class="subCon">
            <?php
            include 'keyboard.php';  
            ?>
          </div>
          <div class="subCon">
            <?php
            include 'mouse.php';  
            ?>
          </div>
          <div class="subCon">
            <?php
            include 'speaker.php';  
            ?>
          </div>
          <div style="margin-top:5px;padding:10px 0 0 10px;background:#efefef;border-radius:3px;width:338px;height:133px;">
            <strong>Z-Index:</strong><br />
            <input id="zOrder" type="text"><br/>
            <button onclick="zIndexSetting('zOrder','d1')">Set Monitor</button><br/>
            <button onclick="zIndexSetting('zOrder','d2')">Set Case</button><br/>
            <button onclick="zIndexSetting('zOrder','d3')">Set KeyBoard</button><br/>
            <img src="img/button1.png" style="float:right;margin-right:10px;" width="120px;" height="38px;" onclick = "showFunction();"/>
            <button onclick="zIndexSetting('zOrder','d4')">Set Mouse</button><br/>
            <button onclick="zIndexSetting('zOrder','d5')">Set Speaker</button>
          </div>
        </div>
      </div>
      <script>
        
 //--Use by the button which is in the background optional menu--//
        function showFunction(){
          var selectedVar = [monitorVal,caseVal,keyboardVal,mouseVal,speakerVal];
          var url1 = "url(img/monitor/"+selectedVar[0]+"/m2.png)";
          allocate1(url1,'d1',0);
          var url2 = "url(img/case/"+selectedVar[1]+"/c2.png)";
          allocate1(url2,'d2',1);
          var url3 = "url(img/keyboard/"+selectedVar[2]+"/kb2.png)";
          allocate1(url3,'d3',2);
          var url4 = "url(img/mouse/"+selectedVar[3]+"/ms2.png)";
          allocate1(url4,'d4',3);
          var url5 = "url(img/speaker/"+selectedVar[4]+"/sp2.png)";
          allocate1(url5,'d5',4);
        }
      </script>
    </section>
    
    <!--The products previewing window-->
    <section id="previewer">
      <div id="d1" class="device1" name="d1"></div>
      <div id="d2" class="device2" name="d2"></div>
      <div id="d3" class="device3" name="d3"></div>
      <div id="d4" class="device4" name="d4"></div>
      <div id="d5" class="device5" name="d5"></div>
    </section>
    
    <!--The background options box-->
    <section id="backgroundOption">
      <!--input style="background:img/button_bg.png;width:80px;height:194px;" type="button" value="ShowB" onclick = "myRadioFunc();"-->
      <div id="bg1">Background1</div>
      <div id="bg2">Background2</div>
      <div id="bg3">Background3</div>
    </section>
  </div>
</body>
</html>