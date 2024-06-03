const togglebtn=document.getElementById('toggle');
const pages=document.getElementById('pages');
const t=document.getElementById('bar');
const nw=document.getElementById('new');
const hoodie=document.getElementById('hoodie');
const shirt=document.getElementById('shirt');
const summer=document.getElementById('summer');
const login=document.getElementById('login');
const loginpage=document.getElementById('pop-up');
const bg=document.getElementById("bacground")
const cancelbtn=document.getElementById("cancel-btn");
const cartpage=document.getElementById("cart-page");
const cartcont=document.getElementById("cart-cont");
const cartbtn=document.getElementById("cart");
const prodarea=document.getElementById("hoodi");
const shrtarea=document.getElementById("shrt");


const lnew=document.getElementById('l1');
const lhoodie=document.getElementById('l2');
const lshirt=document.getElementById('l3');
const lsummer=document.getElementById('l4');
const logo=document.getElementById('logo');



togglebtn.addEventListener('click',()=>{
    console.log('av');
    pages.classList.toggle('active');
    togglebtn.classList.toggle('ac')
    t.classList.toggle('act');
})

nw.addEventListener('click',()=>{
    nw.classList.toggle('h');
})

nw.addEventListener('mouseover',()=>{
    lnew.classList.add("hov")
    console.log('av');

})
nw.addEventListener('mouseout',()=>{
    lnew.classList.remove("hov")
    console.log('avv');

})

hoodie.addEventListener('mouseover',()=>{
    lhoodie.classList.add("hov");
   
})
hoodie.addEventListener('mouseout',()=>{
    lhoodie.classList.remove("hov");
})

shirt.addEventListener('mouseover',()=>{
    lshirt.classList.add("hov")
})
shirt.addEventListener('mouseout',()=>{
    lshirt.classList.remove("hov")
})
summer.addEventListener('mouseover',()=>{
    lsummer.classList.add("hov")
})
summer.addEventListener('mouseout',()=>{
    lsummer.classList.remove("hov")
})
login.addEventListener('click',()=>{
    loginpage.style.display='flex';
})
cancelbtn.addEventListener('click',()=>{
    loginpage.style.display='none';
})
bg.addEventListener('click',()=>{
    loginpage.style.display='none';
})
cartbtn.addEventListener('click',()=>{
    if(cartcont.style.display===`flex`){
        cartcont.style.display=`none`;
        prodarea.style.alignItems=`center`;
        shrtarea.style.alignItems='center';
    }
    else{
        cartcont.style.display=`flex`;
        prodarea.style.alignItems=`baseline`;
        shrtarea.style.alignItems=`baseline`
    }
    
})


