const hoodiepage=document.getElementById('hoodi');
const shirtpage=document.getElementById('shrt');
const hoodieselected=document.getElementById('l2');
const shirtselected=document.getElementById('l3');
const animate2=document.getElementById("bg_new2");
const animate=document.getElementById("bg_new");
const newpage=document.getElementById("new_page");
const bgpage=document.getElementById("bg-main");
const newimg1=document.getElementById("first");
const newimg2=document.getElementById("second");


first.addEventListener('mouseover',event=>{
    animate.style.width="90%";
    animate2.style.filter= `brightness(0.5)`;
})
first.addEventListener('mouseout',event=>{
    animate.style.width="50%";
    animate2.style.filter= `brightness(1)`;
    
})
second.addEventListener('mouseover',event=>{
    animate2.style.width="90%";
    animate.style.filter= `brightness(0.5)`;
})
second.addEventListener('mouseout',event=>{
    animate2.style.width="50%";
    animate.style.filter= `brightness(1)`;
    
})

y=2000;
m=setInterval(function() {
    animate.style.backgroundSize=(`${y+=5}px`);},200);
z=2000
x=setInterval(function() {
    animate2.style.backgroundSize=(`${z+=5}px`);},200);

    
    


hoodie.addEventListener('click',()=>{
    lhoodie.classList.toggle('out');
    hoodiepage.style.display='flex';   
    lshirt.classList.remove('out');
    shirtpage.style.display='none';
    lnew.classList.remove('out');
    newpage.style.display='none';
    bgpage.style.display='none';
})

shirt.addEventListener('click',()=>{
    lshirt.classList.toggle('out');
    shirtpage.style.display='flex';
    lhoodie.classList.remove('out');
    hoodiepage.style.display='none';
    lnew.classList.remove('out');
    newpage.style.display='none';
    bgpage.style.display='none';
})

nw.addEventListener('click',()=>{
    lnew.classList.toggle('out');
    newpage.style.display='flex';
    lhoodie.classList.remove('out');
    hoodiepage.style.display='none';
    lshirt.classList.remove('out');
    shirtpage.style.display='none';
    bgpage.style.display='none';
})

