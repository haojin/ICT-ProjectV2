<?php
  echo"
<div class='optionContent'>
    <strong>Products List:</strong>
    <div class='overFlow'>
     <input type=radio name=kb value='Logitech_K270_Wireless_Key_Board' onclick='keyboardVal = this.value';> Logitech K270 Wireless Key Board<br/>
    
    <input type=radio name=kb value='Microsoft_Comfort_Curve_Keyboard_2000' onclick='keyboardVal = this.value';> Microsoft Comfort Curve Keyboard 2000<br/>
    
    <input type=radio name=kb value='Microsoft_Wired_600_Keyboard' onclick='keyboardVal = this.value';> Microsoft Wired 600 Keyboard<br/>
    
    <input type=radio name=kb value='Razer_Arctosa_Gaming_Keyboard' onclick='keyboardVal = this.value';> Razer Arctosa Gaming Keyboard<br/>
    
    <input type=radio name=kb value='Razer_Black_Widow_gaming_Keyboard' onclick='keyboardVal = this.value';> Razer Black Widow gaming Keyboard<br/>
    
    <input type=radio name=kb value='Razer_Black_widow_Ultimate_ME3' onclick='keyboardVal = this.value';> Razer Black widow Ultimate ME3<br/>
    
    <input type=radio name=kb value='Razer_LycosalMirror_keyboard' onclick='keyboardVal = this.value';> Razer LycosalMirror keyboard<br/>
    
    <input type=radio name=kb value=none onclick='keyboardVal = this.value';> None<br/>
    </div>
    <div class='controlBox'>
    <input type='button' value='Show' style='float:right;margin-right:20px;' onclick=show('url(img/keyboard/'+keyboardVal+'/kb2.png)','d3')><br/>
    <strong>Size:</strong><br />
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('+','d3',2);><img src='img/zin.png' /></a></span>
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('-','d3',2);><img src='img/zout.png' /></a></span><br/>
    <strong>Position:</strong><br />
    X : <button onclick=move('d3','l',2)>Left</button> 
    <button onclick=move('d3','r',2)>Right</button><br />
    Y : <button onclick=move('d3','u',2)>Up</button> 
    <button onclick=move('d3','d',2)>Down</button>
    <br /><br />
    <strong>Diractions:</strong>
    <input type='button' value='Left' onclick=javascript:allocate('d3','url(img/keyboard/'+keyboardVal+'/kb1.png)')>
    <input type='button' value='Middle' onclick=javascript:allocate('d3','url(img/keyboard/'+keyboardVal+'/kb2.png)')>
    <input type='button' value='Right' onclick=javascript:allocate('d3','url(img/keyboard/'+keyboardVal+'/kb3.png)')>
    <br />
    </div>
</div>
";
?>