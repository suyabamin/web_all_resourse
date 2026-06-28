let sum=0;
 let arr=[]
 let count=0;

document.getElementById("submit").addEventListener("click",function(){
    let clory=document.getElementById("element-fild").value 
    clory=parseFloat(clory)

   sum=sum+clory
    arr.push(clory)
    count++;
    
    


    //print 
    document.getElementById("show-output").innerHTML=`your calury is ${sum}.<br>
     count is=${count}.<br>inputed values ar ${arr}`

  
     if(count==10 && sum<=1500){
        document.getElementById("show-output").innerHTML=`Be cautious of frequent snacking!.<br>`
     }
     else if(sum>=0 && sum <=800){
        document.getElementById("show-output").innerHTML=`Good progress, keep it balanced!.<br>`
     }else if(sum>=801&& sum<=1600){
        document.getElementById("show-output").innerHTML=`“Good progress, keep it balanced!”!.<br>`
     }else if(sum>=1601&& sum<=1999){
        document.getElementById("show-output").innerHTML=`“Almost at your limit!”!.<br>`
     }else if(sum>=2000){
        document.getElementById("show-output").innerHTML=`“Goal reached! Stay mindful!!.<br>`
     }   
    
})