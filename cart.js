//global for all buttons
const btn=document.getElementsByClassName("button"); //first hoodie in hoodie page
let totalprice=0;
const total=document.getElementById("total");
const qt_hoodie=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
 

//hoodie 1
const item1=document.createElement('img');
const span1=document.createElement('span');
const label1=document.createElement('label');
const description1=document.createElement('h1');
const qty1=document.createElement('input');
qty1.disabled=true;
span1.classList.add("qtylabel");
qty1.type='number';
const close1=document.createElement('img');
close1.src="/img/x.png";
close1.classList.add('close');
const price1=document.createElement('h2');
price1.textContent='677 LE';
price1.classList.add('price');
span1.appendChild(item1);
span1.appendChild(close1);
label1.appendChild(description1);
label1.appendChild(price1); 

close1.addEventListener('click',event=>{
    totalprice-=parseInt(price1.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[0]==1){
    span1.outerHTML='';
    qt_hoodie[0]--;
    }
    else{
        qt_hoodie[0]--;
        qty1.value=qt_hoodie[0];
    } 
})
 
btn[0].addEventListener('click',(event)=>{
    item1.src="/img/hoodie-1.png";
    description1.textContent="Black Hoodie";
    totalprice+=parseInt(price1.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[0]==0){
        span1.appendChild(label1);
        span1.classList.add('itm');      
        qt_hoodie[0]++;
        qty1.value=qt_hoodie[0];
        label1.appendChild(qty1);
        cartpage.appendChild(span1);      
}
else{
    
     qt_hoodie[0]++;
     qty1.value=qt_hoodie[0];
     console.log(qty1.value);
}
})



//hoodie2
const item2=document.createElement('img');
const span2=document.createElement('span');
const label2=document.createElement('label');
const description2=document.createElement('h1');
const qty2=document.createElement('input');
qty2.disabled=true;
span2.classList.add("qtylabel2");
qty2.type='number';
const close2=document.createElement('img');
close2.src="/img/x.png";
close2.classList.add('close');
const price2=document.createElement('h2');
price2.textContent='677 LE';
price2.classList.add('price');
span2.appendChild(item2);
span2.appendChild(close2);
label2.appendChild(description2);
label2.appendChild(price2);
close2.addEventListener('click',event=>{
    totalprice-=parseInt(price2.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[1]==1){
    span2.outerHTML='';
    qt_hoodie[1]--;
    }
    else{
        qt_hoodie[1]--;
        qty2.value=qt_hoodie[1];
    } 
})
btn[1].addEventListener('click',(event)=>{  
    item2.src="/img/hoodie-2.png";
    description2.textContent="Dark Green Hoodie";
    totalprice+=parseInt(price2.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[1]==0){
        span2.appendChild(label2);
        span2.classList.add('itm');      
        qt_hoodie[1]++;
        qty2.value=qt_hoodie[1];
        label2.appendChild(qty2);
        cartpage.appendChild(span2);      
}
else{
    
     qt_hoodie[1]++;
     qty2.value=qt_hoodie[1];
     console.log(qty2.value);
}
})

//hoodie 3

const item3=document.createElement('img');
const span3=document.createElement('span');
const label3=document.createElement('label');
const description3=document.createElement('h1');
const qty3=document.createElement('input');
qty3.disabled=true;
span3.classList.add("qtylabel3");
qty3.type='number';
const close3=document.createElement('img');
close3.src="/img/x.png";
close3.classList.add('close');
const price3=document.createElement('h2');
price3.textContent='677 LE';
price3.classList.add('price');
span3.appendChild(item3);
span3.appendChild(close3);
label3.appendChild(description3);
label3.appendChild(price3);
close3.addEventListener('click',event=>{
    totalprice-=parseInt(price3.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[2]==1){
    span3.outerHTML='';
    qt_hoodie[2]--;
    }
    else{
        qt_hoodie[2]--;
        qty3.value=qt_hoodie[2];
    } 
})
btn[2].addEventListener('click',(event)=>{  
    item3.src="/img/hoodie-3.png";
    description3.textContent="White Hoodie";
    totalprice+=parseInt(price3.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[2]==0){
        span3.appendChild(label3);
        span3.classList.add('itm');      
        qt_hoodie[2]++;
        qty3.value=qt_hoodie[2];
        label3.appendChild(qty3);
        cartpage.appendChild(span3);      
}
else{
    
     qt_hoodie[2]++;
     qty3.value=qt_hoodie[2];
     console.log(qty3.value);
}
})

//hoodie 4

const item4=document.createElement('img');
const span4=document.createElement('span');
const label4=document.createElement('label');
const description4=document.createElement('h1');
const qty4=document.createElement('input');
qty4.disabled=true;
span4.classList.add("qtylabel4");
qty4.type='number';
const close4=document.createElement('img');
close4.src="/img/x.png";
close4.classList.add('close');
const price4=document.createElement('h2');
price4.textContent='677 LE';
price4.classList.add('price');
span4.appendChild(item4);
span4.appendChild(close4);
label4.appendChild(description4);
label4.appendChild(price4);
close4.addEventListener('click',event=>{
    totalprice-=parseInt(price4.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[3]==1){
    span4.outerHTML='';
    qt_hoodie[3]--;
    }
    else{
        qt_hoodie[3]--;
        qty4.value=qt_hoodie[3];
    } 
})
btn[3].addEventListener('click',(event)=>{  
    item4.src="/img/hoodie-4.png";
    description4.textContent="Red Hoodie";
    totalprice+=parseInt(price4.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[3]==0){
        span4.appendChild(label4);
        span4.classList.add('itm');      
        qt_hoodie[3]++;
        qty4.value=qt_hoodie[3];
        label4.appendChild(qty4);
        cartpage.appendChild(span4);      
}
else{
    
     qt_hoodie[3]++;
     qty4.value=qt_hoodie[3];
     console.log(qty4.value);
}
})

//hoodie 5

const item5=document.createElement('img');
const span5=document.createElement('span');
const label5=document.createElement('label');
const description5=document.createElement('h1');
const qty5=document.createElement('input');
qty5.disabled=true;
span5.classList.add("qtylabel5");
qty5.type='number';
const close5=document.createElement('img');
close5.src="/img/x.png";
close5.classList.add('close');
const price5=document.createElement('h2');
price5.textContent='677 LE';
price5.classList.add('price');
span5.appendChild(item5);
span5.appendChild(close5);
label5.appendChild(description5);
label5.appendChild(price5);
close5.addEventListener('click',event=>{
    totalprice-=parseInt(price5.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[4]==1){
    span5.outerHTML='';
    qt_hoodie[4]--;
    }
    else{
        qt_hoodie[4]--;
        qty5.value=qt_hoodie[4];
    } 
})
btn[4].addEventListener('click',(event)=>{  
    item5.src="/img/hoodie-5.png";
    description5.textContent="Red Hoodie (White logo)";
    totalprice+=parseInt(price5.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[4]==0){
        span5.appendChild(label5);
        span5.classList.add('itm');      
        qt_hoodie[4]++;
        qty5.value=qt_hoodie[4];
        label5.appendChild(qty5);
        cartpage.appendChild(span5);      
}
else{
    
     qt_hoodie[4]++;
     qty5.value=qt_hoodie[4];
     console.log(qty5.value);
}
})

//hoodie 6

const item6=document.createElement('img');
const span6=document.createElement('span');
const label6=document.createElement('label');
const description6=document.createElement('h1');
const qty6=document.createElement('input');
qty6.disabled=true;
span6.classList.add("qtylabel6");
qty6.type='number';
const close6=document.createElement('img');
close6.src="/img/x.png";
close6.classList.add('close');
const price6=document.createElement('h2');
price6.textContent='677 LE';
price6.classList.add('price');
span6.appendChild(item6);
span6.appendChild(close6);
label6.appendChild(description6);
label6.appendChild(price6);
close6.addEventListener('click',event=>{
    totalprice-=parseInt(price6.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[5]==1){
    span6.outerHTML='';
    qt_hoodie[5]--;
    }
    else{
        qt_hoodie[5]--;
        qty6.value=qt_hoodie[5];
    } 
})
btn[5].addEventListener('click',(event)=>{  
    item6.src="/img/hoodie-6.png";
    description6.textContent="Green Hoodie";
    totalprice+=parseInt(price6.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[5]==0){
        span6.appendChild(label6);
        span6.classList.add('itm');      
        qt_hoodie[5]++;
        qty6.value=qt_hoodie[5];
        label6.appendChild(qty6);
        cartpage.appendChild(span6);      
}
else{
    
     qt_hoodie[5]++;
     qty6.value=qt_hoodie[5];
     console.log(qty6.value);
}
})

//hoodie 7

const item7=document.createElement('img');
const span7=document.createElement('span');
const label7=document.createElement('label');
const description7=document.createElement('h1');
const qty7=document.createElement('input');
qty7.disabled=true;
span7.classList.add("qtylabel7");
qty7.type='number';
const close7=document.createElement('img');
close7.src="/img/x.png";
close7.classList.add('close');
const price7=document.createElement('h2');
price7.textContent='677 LE';
price7.classList.add('price');
span7.appendChild(item7);
span7.appendChild(close7);
label7.appendChild(description7);
label7.appendChild(price7);
close7.addEventListener('click',event=>{
    totalprice-=parseInt(price7.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[6]==1){
    span7.outerHTML='';
    qt_hoodie[6]--;
    }
    else{
        qt_hoodie[6]--;
        qty7.value=qt_hoodie[6];
    } 
})
btn[6].addEventListener('click',(event)=>{  
    item7.src="/img/hoodie-7.png";
    description7.textContent="Yellow Hoodie";
    totalprice+=parseInt(price7.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[6]==0){
        span7.appendChild(label7);
        span7.classList.add('itm');      
        qt_hoodie[6]++;
        qty7.value=qt_hoodie[6];
        label7.appendChild(qty7);
        cartpage.appendChild(span7);      
}
else{
    
     qt_hoodie[6]++;
     qty7.value=qt_hoodie[6];
     console.log(qty7.value);
}
})

//hoodie 8

const item8=document.createElement('img');
const span8=document.createElement('span');
const label8=document.createElement('label');
const description8=document.createElement('h1');
const qty8=document.createElement('input');
qty8.disabled=true;
span8.classList.add("qtylabel8");
qty8.type='number';
const close8=document.createElement('img');
close8.src="/img/x.png";
close8.classList.add('close');
const price8=document.createElement('h2');
price8.textContent='677 LE';
price8.classList.add('price');
span8.appendChild(item8);
span8.appendChild(close8);
label8.appendChild(description8);
label8.appendChild(price8);
close8.addEventListener('click',event=>{
    totalprice-=parseInt(price8.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[7]==1){
    span8.outerHTML='';
    qt_hoodie[7]--;
    }
    else{
        qt_hoodie[7]--;
        qty8.value=qt_hoodie[7];
    } 
})
btn[7].addEventListener('click',(event)=>{  
    item8.src="/img/hoodie-8.png";
    description8.textContent="Blue Hoodie";
    totalprice+=parseInt(price8.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[7]==0){
        span8.appendChild(label8);
        span8.classList.add('itm');      
        qt_hoodie[7]++;
        qty8.value=qt_hoodie[7];
        label8.appendChild(qty8);
        cartpage.appendChild(span8);      
}
else{
    
     qt_hoodie[7]++;
     qty8.value=qt_hoodie[7];
     console.log(qty8.value);
}
})

//T-shirt 1

const item9=document.createElement('img');
const span9=document.createElement('span');
const label9=document.createElement('label');
const description9=document.createElement('h1');
const qty9=document.createElement('input');
qty9.disabled=true;
span9.classList.add("qtylabel9");
qty9.type='number';
const close9=document.createElement('img');
close9.src="/img/x.png";
close9.classList.add('close');
const price9=document.createElement('h2');
price9.textContent='300 LE';
price9.classList.add('price');
span9.appendChild(item9);
span9.appendChild(close9);
label9.appendChild(description9);
label9.appendChild(price9);
close9.addEventListener('click',event=>{
    totalprice-=parseInt(price9.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[8]==1){
    span9.outerHTML='';
    qt_hoodie[8]--;
    }
    else{
        qt_hoodie[8]--;
        qty9.value=qt_hoodie[8];
    } 
})
btn[8].addEventListener('click',(event)=>{  
    item9.src="/img/shirt-1.png";
    description9.textContent="Blue T-shirt";
    totalprice+=parseInt(price9.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[8]==0){
        span9.appendChild(label9);
        span9.classList.add('itm');      
        qt_hoodie[8]++;
        qty9.value=qt_hoodie[8];
        label9.appendChild(qty9);
        cartpage.appendChild(span9);      
}
else{
    
     qt_hoodie[8]++;
     qty9.value=qt_hoodie[8];
     console.log(qty9.value);
}
})

//T-shirt 2

const item10=document.createElement('img');
const span10=document.createElement('span');
const label10=document.createElement('label');
const description10=document.createElement('h1');
const qty10=document.createElement('input');
qty10.disabled=true;
span10.classList.add("qtylabel10");
qty10.type='number';
const close10=document.createElement('img');
close10.src="/img/x.png";
close10.classList.add('close');
const price10=document.createElement('h2');
price10.textContent='300 LE';
price10.classList.add('price');
span10.appendChild(item10);
span10.appendChild(close10);
label10.appendChild(description10);
label10.appendChild(price10);
close10.addEventListener('click',event=>{
    totalprice-=parseInt(price10.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[9]==1){
    span10.outerHTML='';
    qt_hoodie[9]--;
    }
    else{
        qt_hoodie[9]--;
        qty10.value=qt_hoodie[9];
    } 
})
btn[9].addEventListener('click',(event)=>{  
    item10.src="/img/shirt-2.png";
    description10.textContent="Black T-shirt";
    totalprice+=parseInt(price10.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[9]==0){
        span10.appendChild(label10);
        span10.classList.add('itm');      
        qt_hoodie[9]++;
        qty10.value=qt_hoodie[9];
        label10.appendChild(qty10);
        cartpage.appendChild(span10);      
}
else{ 
     qt_hoodie[9]++;
     qty10.value=qt_hoodie[9];
     console.log(qty10.value);
}
})

//T-shirt 3

const item11=document.createElement('img');
const span11=document.createElement('span');
const label11=document.createElement('label');
const description11=document.createElement('h1');
const qty11=document.createElement('input');
qty11.disabled=true;
span11.classList.add("qtylabel11");
qty11.type='number';
const close11=document.createElement('img');
close11.src="/img/x.png";
close11.classList.add('close');
const price11=document.createElement('h2');
price11.textContent='300 LE';
price11.classList.add('price');
span11.appendChild(item11);
span11.appendChild(close11);
label11.appendChild(description11);
label11.appendChild(price11);
close11.addEventListener('click',event=>{
    totalprice-=parseInt(price11.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[10]==1){
    span11.outerHTML='';
    qt_hoodie[10]--;
    }
    else{
        qt_hoodie[10]--;
        qty11.value=qt_hoodie[10];
    } 
})
btn[10].addEventListener('click',(event)=>{  
    item11.src="/img/shirt-3.png";
    description11.textContent="White T-shirt";
    totalprice+=parseInt(price11.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[10]==0){
        span11.appendChild(label11);
        span11.classList.add('itm');      
        qt_hoodie[10]++;
        qty11.value=qt_hoodie[10];
        label11.appendChild(qty11);
        cartpage.appendChild(span11);      
}
else{ 
     qt_hoodie[10]++;
     qty11.value=qt_hoodie[10];
     console.log(qty11.value);
}
})

//T-shirt 4

const item12=document.createElement('img');
const span12=document.createElement('span');
const label12=document.createElement('label');
const description12=document.createElement('h1');
const qty12=document.createElement('input');
qty12.disabled=true;
span12.classList.add("qtylabel12");
qty12.type='number';
const close12=document.createElement('img');
close12.src="/img/x.png";
close12.classList.add('close');
const price12=document.createElement('h2');
price12.textContent='300 LE';
price12.classList.add('price');
span12.appendChild(item12);
span12.appendChild(close12);
label12.appendChild(description12);
label12.appendChild(price12);
close12.addEventListener('click',event=>{
    totalprice-=parseInt(price12.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[11]==1){
    span12.outerHTML='';
    qt_hoodie[11]--;
    }
    else{
        qt_hoodie[11]--;
        qty12.value=qt_hoodie[11];
    } 
})
btn[11].addEventListener('click',(event)=>{  
    item12.src="/img/shirt-4.png";
    description12.textContent="Orange T-shirt";
    totalprice+=parseInt(price12.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[11]==0){
        span12.appendChild(label12);
        span12.classList.add('itm');      
        qt_hoodie[11]++;
        qty12.value=qt_hoodie[11];
        label12.appendChild(qty12);
        cartpage.appendChild(span12);      
}
else{ 
     qt_hoodie[11]++;
     qty12.value=qt_hoodie[11];
     console.log(qty12.value);
}
})

//T-shirt 5

const item13=document.createElement('img');
const span13=document.createElement('span');
const label13=document.createElement('label');
const description13=document.createElement('h1');
const qty13=document.createElement('input');
qty13.disabled=true;
span13.classList.add("qtylabel13");
qty13.type='number';
const close13=document.createElement('img');
close13.src="/img/x.png";
close13.classList.add('close');
const price13=document.createElement('h2');
price13.textContent='300 LE';
price13.classList.add('price');
span13.appendChild(item13);
span13.appendChild(close13);
label13.appendChild(description13);
label13.appendChild(price13);
close13.addEventListener('click',event=>{
    totalprice-=parseInt(price13.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[12]==1){
    span13.outerHTML='';
    qt_hoodie[12]--;
    }
    else{
        qt_hoodie[12]--;
        qty13.value=qt_hoodie[12];
    } 
})
btn[12].addEventListener('click',(event)=>{  
    item13.src="/img/shirt-5.png";
    description13.textContent="Black T-shirt (Small logo)";
    totalprice+=parseInt(price13.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[12]==0){
        span13.appendChild(label13);
        span13.classList.add('itm');      
        qt_hoodie[12]++;
        qty13.value=qt_hoodie[12];
        label13.appendChild(qty13);
        cartpage.appendChild(span13);      
}
else{ 
     qt_hoodie[12]++;
     qty13.value=qt_hoodie[12];
     console.log(qty13.value);
}
})

//T-shirt 6

const item14=document.createElement('img');
const span14=document.createElement('span');
const label14=document.createElement('label');
const description14=document.createElement('h1');
const qty14=document.createElement('input');
qty14.disabled=true;
span14.classList.add("qtylabel14");
qty14.type='number';
const close14=document.createElement('img');
close14.src="/img/x.png";
close14.classList.add('close');
const price14=document.createElement('h2');
price14.textContent='300 LE';
price14.classList.add('price');
span14.appendChild(item14);
span14.appendChild(close14);
label14.appendChild(description14);
label14.appendChild(price14);
close14.addEventListener('click',event=>{
    totalprice-=parseInt(price14.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[13]==1){
    span14.outerHTML='';
    qt_hoodie[13]--;
    }
    else{
        qt_hoodie[13]--;
        qty14.value=qt_hoodie[13];
    } 
})
btn[13].addEventListener('click',(event)=>{  
    item14.src="/img/shirt-6.png";
    description14.textContent="Yellow T-shirt";
    totalprice+=parseInt(price14.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[13]==0){
        span14.appendChild(label14);
        span14.classList.add('itm');      
        qt_hoodie[13]++;
        qty14.value=qt_hoodie[13];
        label14.appendChild(qty14);
        cartpage.appendChild(span14);      
}
else{ 
     qt_hoodie[13]++;
     qty14.value=qt_hoodie[13];
     console.log(qty14.value);
}
})

//T-shirt 7

const item15=document.createElement('img');
const span15=document.createElement('span');
const label15=document.createElement('label');
const description15=document.createElement('h1');
const qty15=document.createElement('input');
qty15.disabled=true;
span15.classList.add("qtylabel15");
qty15.type='number';
const close15=document.createElement('img');
close15.src="/img/x.png";
close15.classList.add('close');
const price15=document.createElement('h2');
price15.textContent='300 LE';
price15.classList.add('price');
span15.appendChild(item15);
span15.appendChild(close15);
label15.appendChild(description15);
label15.appendChild(price15);
close15.addEventListener('click',event=>{
    totalprice-=parseInt(price15.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[14]==1){
    span15.outerHTML='';
    qt_hoodie[14]--;
    }
    else{
        qt_hoodie[14]--;
        qty15.value=qt_hoodie[14];
    } 
})
btn[14].addEventListener('click',(event)=>{  
    item15.src="/img/shirt-7.png";
    description15.textContent="White T-shirt";
    totalprice+=parseInt(price15.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[14]==0){
        span15.appendChild(label15);
        span15.classList.add('itm');      
        qt_hoodie[14]++;
        qty15.value=qt_hoodie[14];
        label15.appendChild(qty15);
        cartpage.appendChild(span15);      
}
else{ 
     qt_hoodie[14]++;
     qty15.value=qt_hoodie[14];
     console.log(qty15.value);
}
})

//T-shirt 8

const item16=document.createElement('img');
const span16=document.createElement('span');
const label16=document.createElement('label');
const description16=document.createElement('h1');
const qty16=document.createElement('input');
qty16.disabled=true;
span16.classList.add("qtylabel16");
qty16.type='number';
const close16=document.createElement('img');
close16.src="/img/x.png";
close16.classList.add('close');
const price16=document.createElement('h2');
price16.textContent='300 LE';
price16.classList.add('price');
span16.appendChild(item16);
span16.appendChild(close16);
label16.appendChild(description16);
label16.appendChild(price16);
close16.addEventListener('click',event=>{
    totalprice-=parseInt(price16.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[15]==1){
    span16.outerHTML='';
    qt_hoodie[15]--;
    }
    else{
        qt_hoodie[15]--;
        qty16.value=qt_hoodie[15];
    } 
})
btn[15].addEventListener('click',(event)=>{  
    item16.src="/img/shirt-8.png";
    description16.textContent="Red T-shirt";
    totalprice+=parseInt(price16.textContent);
    total.textContent="Total Price: "+totalprice;
    if(qt_hoodie[15]==0){
        span16.appendChild(label16);
        span16.classList.add('itm');      
        qt_hoodie[15]++;
        qty16.value=qt_hoodie[15];
        label16.appendChild(qty16);
        cartpage.appendChild(span16);      
}
else{ 
     qt_hoodie[15]++;
     qty16.value=qt_hoodie[15];
     console.log(qty16.value);
}
})