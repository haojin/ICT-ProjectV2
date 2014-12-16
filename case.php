<?php
  echo"
<div class='optionContent'>
    <strong>Products List:</strong>
    <div class='overFlow'>
    <input type=radio name=case value='Corsair_Graphite_Series_600T_Mesh_White_Special' onclick='caseVal = this.value';> Corsair Graphite Series 600T Mesh White Special<br/>
    
    <input type=radio name=case value='Corsair_Graphite_Series_760T' onclick='caseVal = this.value';> Corsair Graphite Series 760T<br/>
    
    <input type=radio name=case value='Corsair_Vengeance_C70' onclick='caseVal = this.value';> Corsair Vengeance C70<br/>
    
    <input type=radio name=case value=none onclick='caseVal = this.value';> None<br/>
    </div>
    <div class='controlBox'>
    <input type='button' value='Show' style='float:right;margin-right:20px;' onclick=show('url(img/case/'+caseVal+'/c2.png)','d2')><br/>
    <strong>Size:</strong><br />
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('+','d2',1);><img src='img/zin.png' /></a></span>
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('-','d2',1);><img src='img/zout.png' /></a></span><br/>
    <strong>Position:</strong><br />
    X : <button onclick=move('d2','l',1)>Left</button> 
    <button onclick=move('d2','r',1)>Right</button><br />
    Y : <button onclick=move('d2','u',1)>Up</button> 
    <button onclick=move('d2','d',1)>Down</button>
    <br /><br />
    <strong>Diractions:</strong>
    <input type='button' value='Left' onclick=javascript:allocate('d2','url(img/case/'+caseVal+'/c1.png)')>
    <input type='button' value='Middle' onclick=javascript:allocate('d2','url(img/case/'+caseVal+'/c2.png)')>
    <input type='button' value='Right' onclick=javascript:allocate('d2','url(img/case/'+caseVal+'/c3.png)')>
    <br />
    </div>
</div>
    
";
?>