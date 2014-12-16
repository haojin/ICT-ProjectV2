//***************************************************//
//Display and Modify function for each type of device//
//***************************************************//

//////--Display the relative component--//////
var singleDisplay;
function show(img , target) {
  var t = 0;
  var targets = ['d1','d2','d3','d4','d5'];
  for (i = 0; i < targets.length; i++) { 
    if(target!=targets[i]){
      var others= document.getElementById(targets[i]);
      others.style.background="url('')";
    }
  }
  singleDisplay = document.getElementById(target);
  singleDisplay.style.background = img+"no-repeat";
  singleDisplay.style.backgroundSize = "cover";
  //alert("Image: "+img+"Target: "+target);
  
}

//////--Zoom In & Zoom Outut--//////
var _defaultWidth = [214,134,218,50,147];
var _defaultHeight = [151,195,54,35,110];
function zoom(zoomType,target,deviceID){
  var t = $("#"+target);
  var _width =t.width();var _height =t.height();
  if(zoomType=='+'){
    if(L[deviceID]+_width>=505 || T[deviceID]+_height>430){
      ///--The image will be unable to zoomIn after the current width is equal or beyond 505 and height is limited on 430--///
      //alert('Max');
      return false;
    }
    else{
      _width*=1.07;
      _height*=1.07;
    }
  }
  else if(zoomType=='-'){
    if(_width<=_defaultWidth[deviceID]*0.9 || _height<=_defaultHeight[deviceID]*0.9){
      ///--The image can only zoomOut as 90% of the default size--///
      //alert('Min');
      return false;   
    }
    else{
      _width*=0.9;
      _height*=0.9;
    }
  }
  
  ///--Upgrade the current size to the displayed Device--///
  t.width(_width);
  t.height(_height);
  //alert("width is "+_w+" Height is "+_h);
}


//////--change the position of each component--//////
var L=[10,10,10,10,10];
var T=[10,10,10,10,10];
function move(target,moveState,i){
  var ta = document.getElementById(target);
  var t = $("#"+target);
  var _w =t.width();
  var _h =t.height();
  //move to left
  if(moveState=='l'){
    if(L[i]<=0){return false;}
    else{L[i]-=10;ta.style.left = L[i]+"px";}
  }
  //move to right
  else if(moveState=='r'){
    if(L[i]+_w>=510){return false;}
    else{L[i]+=10;ta.style.left = L[i]+"px";}
  }
  //move up
  else if(moveState=='u'){
    if(T[i]<=0){return false;}
    else{T[i]-=10;ta.style.top = T[i]+"px";}
  }
  //move down
  else if(moveState=='d'){
    if(T[i]+_h>=437){return false;   }
    else{T[i]+=10;ta.style.top = T[i]+"px";}
  }
  //error message
  else alert("Error [in move function]!!!");
  //alert("Width is: "+_w+" Height is: "+_h);
}


//////--change z order for the specific component--//////
function zIndexSetting(zOrder,target){
  var z = document.getElementById(zOrder);
  document.getElementById(target).style.zIndex=z.value;
  //alert("Z is: "+z.value+"The target is "+target);
}


//***************//
//Other Functions//
//***************//

//--For Images allocation--//
function allocate(target, url) {
  var locate = document.getElementById(target);
  locate.style.background = url+"no-repeat";
  locate.style.backgroundSize = "cover";
  //alert("Image: "+url+". Target: "+target);
}
function allocate1(img , target, i) {
  var T = [10,10,10,10,10];
  var L = [10,10,10,10,10];
  var pImg = document.getElementById(target);
  pImg.style.top = T[i]+"px";
  pImg.style.left = L[i]+"px";
  pImg.style.background = img+"no-repeat";
  pImg.style.backgroundSize = "cover";
  
}

//--The function below is for tabs--//
google.load('jquery','1.4.3');

google.setOnLoadCallback(
  function(){
    $('#con .subCon:not(:first)').hide();
    //$('#con div').hide().filter(':first').show();//the other way
    $('#tabs li').click(function(e){          
      var id = $(e.target).index();
      $('.active').removeClass('active');
      $(e.target).addClass('active');
      $('#con .subCon').hide().eq(id).show();
    });
    
  }
);


//--Function below is for testing only--//
function chkcontrol(j) {
  var total=0;
  for(var i=0; i < document.productsForm.monitor.length; i++){
    if(document.productsForm.monitor[i].checked){
      total =total +1;
    }
    if(total > 3){
      alert("Please Select only three");
      document.productsForm.monitor[j].checked = false ;
      return false;
    }
  }
}