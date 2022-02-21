var i=0,text1,text2,text3,j=0,x=0;
text1="The\n"
text3=" Bank\n";
text2="A Safe Place For Your Money to Grow";
function typing(){
    if (i<text1.length){
        document.getElementById("text1").innerHTML+=text1.charAt(i);
        i++;
        setTimeout(typing,200);
    }
    if(i==text1.length){
        typing3(); 
    }
}
function typing3(){
    if (j<text3.length){
        document.getElementById("text1").innerHTML+=text3.charAt(j);
        j++;
        setTimeout(typing3,200);
    }
    if(j==text3.length){
        typing2(); 
    }
}
function typing2(){
    if (x<text2.length){
        document.getElementById("text2").innerHTML+=text2.charAt(x);
        x++;
        setTimeout(typing2,100);
    }
}
typing(); 

 
