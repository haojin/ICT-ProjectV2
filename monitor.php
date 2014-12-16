<?php
  echo"
    <div class='optionContent'>
    <strong>Products List:</strong>
    <div class='overFlow'>
     <input type=radio name=monitor value='18.5_Acer_G196HQL' onclick='monitorVal = this.value';> Acer G196HQL 18.5-inch <br/>
    
    <input type=radio name=monitor value='19_Asus_VE198T' onclick='monitorVal = this.value';> Asus VE198T 19-inch <br/>
    
    <input type=radio name=monitor value='19_LG_L1942SE' onclick='monitorVal = this.value';> LG L1942SE 19-inch <br/>
    
    <input type=radio name=monitor value='19_Phillips_19S4LCB' onclick='monitorVal = this.value';> Phillips 19S4LCB 19-inch<br/>
    
    <input type=radio name=monitor value='20_Acer_G206HQL' onclick='monitorVal = this.value';> Acer G206HQL 20-inch<br/>
    
    <input type=radio name=monitor value='20_Asus_VE208T' onclick='monitorVal = this.value';> Asus VE208T 20-inch<br/>
    
    <input type=radio name=monitor value='20_Samsung_S20D300HY' onclick='monitorVal = this.value';> Samsung S20D300HY 20-inch<br/>
    
    <input type=radio name=monitor value= '20_Viewsonic_VA-2046M' onclick='monitorVal = this.value';> Viewsonic VA-2046M 20-inch<br/>
    
    <input type=radio name=monitor value='21.5_Dell_S2240' onclick='monitorVal = this.value';> Dell S2240 21.5-inch<br/>
    
    <input type=radio name=monitor value='21.5_Samsung_S22D300HY' onclick='monitorVal = this.value';> Samsung S22D300HY 21.5-inch<br/>
    
    <input type=radio name=monitor value='21.5_Viewsonic_VX-2270' onclick='monitorVal = this.value';> Viewsonic VX-2270 21.5-inch<br/>
    
    <input type=radio name=monitor value='23_Dell_S2340' onclick='monitorVal = this.value';> Dell S2340 23-inch<br/>
    
    <input type=radio name=monitor value='24_Acer_S240HL' onclick='monitorVal = this.value';> Acer S240HL 24-inch<br/>
    
    <input type=radio name=monitor value=none onclick='monitorVal = this.value';> None<br/>
    </div>
    <div class='controlBox'>
    <input type='button' value='Show' style='float:right;margin-right:20px;' onclick=show('url(img/monitor/'+monitorVal+'/m2.png)','d1')><br/>
    <strong>Size:</strong><br />
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('+','d1',0);><img src='img/zin.png' /></a></span>
    <span><a title='Zoom In' id='zoomIn' onclick=javascript:zoom('-','d1',0);><img src='img/zout.png' /></a></span>
    <br />
    <strong>Position:</strong><br/>
    X : <!--input type='text'/-->
    <button onclick=move('d1','l',0)>Left</button> 
    <button onclick=move('d1','r',0)>Right</button><br />
    Y : <!--input type='text'/-->
    <button onclick=move('d1','u',0)>Up</button> 
    <button onclick=move('d1','d',0)>Down</button>
    <br /><br />
    <strong>Diractions:</strong>
    <input type='button' value='Left' onclick=javascript:allocate('d1','url(img/monitor/'+monitorVal+'/m1.png)')>
    <input type='button' value='Middle' onclick=javascript:allocate('d1','url(img/monitor/'+monitorVal+'/m2.png)')>
    <input type='button' value='Right' onclick=javascript:allocate('d1','url(img/monitor/'+monitorVal+'/m3.png)')>
    <br />
    </div>
    </div>
";
?>

