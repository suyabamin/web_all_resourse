document.getElementById("submit").addEventListener("click",function(){

    let ct1=document.getElementById("ct1").value 
    ct1=parseFloat(ct1)

   let ct2=document.getElementById("ct2").value 
    ct2=parseFloat(ct2)
    let ct3=document.getElementById("ct3").value 
    ct3=parseFloat(ct3)

    let mid=document.getElementById("mid").value 
    mid=parseFloat(mid)

    let final=document.getElementById("final").value 
    final=parseFloat(final)


    
let minCT=Math.min(ct1,ct2,ct3);
let best2=(ct1+ct2+ct3-minCT)


let total=best2+mid+final;

let status="pass"
if(total<54){
status="fail"
}
    document.getElementById("show-output").innerHTML=`best 2 ct is =${best2}.<br>midterm marks=${mid}.<br>final marks=${final}.<br> total marks=${total}.<br>status=${status}`


})