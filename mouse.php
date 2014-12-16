<?php
  echo"
    <div class='optionContent'>
    <strong>Products List:</strong>
    <div class='overFlow'>
     <input type=radio name=mouse value='Microsoft_NB_Optical_Mouse_3000' onclick='mouseVal = this.value';> MS Optical 3000 <br/>
    
    <input type=radio name=mouse value='Razer_Abyssus_gaming_mouse' onclick='mouseVal = this.value';> Razer Abyssus Gaming <br/>
    
    <input type=radio name=mouse value='Razer_death_adder_2013' onclick='mouseVal = this.value';> Razer Death Adder 2013 <br/>
    
    <input type=radio name=mouse value='Razer_death_adder_refresh' onclick='mouseVal = this.value';> Razer Death Adder Refresh<br/>
    
    <input type=radio name=mouse value='Razer_imperator_gaming_mouse' onclick='mouseVal = this.value';> Razer Imperator Gaming <br/>
    
    <input type=radio name=mouse value='Razer_Orochi_2013_elite_mouse' onclick='mouseVal = this.value';> Razer Orochi 2013 Elite<br/>
  
  <input type=radio name=mouse value='Razer_taipan_Gaming_mouse' onclick='mouseVal = this.value';> Rzer Taipan Gaming <br/>
    
    </div>
    <div class='controlBox'>
    <input type='button' value='Show' style='float:right;margin-right:20px;' onclick=show('url(img/mouse/'+mouseVal+'/ms2.png)','d4')><br/>
    <strong>Size:</strong><br/>
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('+','d4',3);><img src='img/zin.png' /></a></span>
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('-','d4',3);><img src='img/zout.png' /></a></span><br/>
    <strong>Position:</strong><br />
    X : <button onclick=move('d4','l',3)>Left</button> 
    <button onclick=move('d4','r',3)>Right</button><br />
    Y : <button onclick=move('d4','u',3)>Up</button> 
    <button onclick=move('d4','d',3)>Down</button>
    <br /><br />
    <strong>Diractions:</strong>
    <input type='button' value='Left' onclick=javascript:allocate('d4','url(img/mouse/'+mouseVal+'/ms1.png)')>
    <input type='button' value='Middle' onclick=javascript:allocate('d4','url(img/mouse/'+mouseVal+'/ms2.png)')>
    <input type='button' value='Right' onclick=javascript:allocate('d4','url(img/mouse/'+mouseVal+'/ms3.png)')>
    <br />
    </div>
</div>
";
?>