<?php
  echo"
    <div class='optionContent'>
    <strong>Products List:</strong>
    <div class='overFlow'>
     <input type=radio name=speaker value='Creative_SBS_A220' onclick='speakerVal = this.value';> Creative SBS A220 <br/>
    
    <input type=radio name=speaker value='Creative_SBS_A320' onclick='speakerVal = this.value';> Creative SBS A320 <br/>
    
    <input type=radio name=speaker value='Creative_SBS_A520' onclick='speakerVal = this.value';> Creative SBS A520 <br/>
    
    <input type=radio name=speaker value='Logitech_Z506' onclick='speakerVal = this.value';> Logitech Z506 <br/>
    
    <input type=radio name=speaker value='Logitech_Z523' onclick='speakerVal = this.value';> Logitech Z523 <br/>
    
    <input type=radio name=speaker value='Logitech_Z553' onclick='speakerVal = this.value';> Logitech Z553 <br/>

    
    </div>
    <div class='controlBox'>
    <input type='button' style='float:right;margin-right:20px;' value='Show' onclick=show('url(img/speaker/'+speakerVal+'/sp2.png)','d5')><br/>
    <strong>Size:</strong><br />
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('+','d5',4);><img src='img/zin.png' /></a></span>
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('-','d5',4);><img src='img/zout.png' /></a></span><br/>
    <strong>Position:</strong><br />
    X : <button onclick=move('d5','l',4)>Left</button> 
    <button onclick=move('d5','r',4)>Right</button><br />
    Y : <button onclick=move('d5','u',4)>Up</button> 
    <button onclick=move('d5','d',4)>Down</button>
    <br /><br />
    <strong>Diractions:</strong>
    <input type='button' value='Left' onclick=javascript:allocate('d5','url(img/speaker/'+speakerVal+'/sp1.png)')>
    <input type='button' value='Middle' onclick=javascript:allocate('d5','url(img/speaker/'+speakerVal+'/sp2.png)')>
    <input type='button' value='Right' onclick=javascript:allocate('d5','url(img/speaker/'+speakerVal+'/sp3.png)')>
    <br />
    </div>
</div>
";
?>