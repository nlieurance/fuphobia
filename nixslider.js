//This script created by Nick, M@therf*cker!

//slider array selects and stores all range-slider inputs by ID
var slider=[];

//output array selects and stores all slider labels by ID
var output=[];
var ratings=['Always','Almost Always','Sometimes','Occasionally','Rarely','Never'];

//create function loops through range-slider/label elements and associates slider changes with innerHTML of slider labels
create = function(){
for(i=0;i<21;i++){
  slider[i] = document.getElementById('range-slider'+[i]);
  output[i] = document.getElementById('rating'+[i]);
//  output[i].innerHTML = slider[i].value;
  if (slider[i].value == 1){
    output[i].innerHTML = ratings[0];
  }else if (slider[i].value ==2) {
    output[i].innerHTML = ratings[1];
  }else if (slider[i].value ==3) {
    output[i].innerHTML = ratings[2];
  }else if (slider[i].value ==4) {
    output[i].innerHTML = ratings[3];
  }else if (slider[i].value ==5) {
    output[i].innerHTML = ratings[4];
  }else if (slider[i].value ==6) {
    output[i].innerHTML = ratings[5];
  }

} //end of for loop
} //end of function
