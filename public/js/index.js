let navContainer = document.querySelector('.navContainer');
let navMenu = document.querySelector('.navMenu');
let plus = document.querySelector('.plus');
let minus = document.querySelector('.minus');
let orderCallForm = document.querySelector('.orderCallForm');
let callMasterForm = document.querySelector('.callMasterForm');
let orderForm = document.querySelector('.orderForm');
let reviewForm = document.querySelector('.reviewForm');
let orderFormPrice = document.getElementById('orderFormPrice');

function navOpen () {
    navContainer.style.display = 'block';
};

function closeReview () {
    reviewForm.style.display = 'none';
};
function openSubMenu() {
    navMenu.style.display = 'block';
    minus.style.display = 'inline-block';
    plus.style.display = 'none';
};
function closeSubMenu () {
    navMenu.style.display = 'none';
    minus.style.display = 'none';
    plus.style.display = 'inline-block';
};
function orderCallBtn () {
    orderCallForm.style.display = 'flex';
};
function callMasterBtn () {
    callMasterForm.style.display = 'flex';
};
function orderFormBtn() {
    orderForm.style.display = 'flex';
};
function reviewBtn () {
    reviewForm.style.display = 'flex';
    
};
function closeNav () {
    orderForm.style.display = 'none';
   
    navContainer.style.display = 'none';
    navMenu.style.display = 'none';
    orderCallForm.style.display = 'none';
    callMasterForm.style.display = 'none';
   
    minus.style.display = 'none';
    plus.style.display = 'inline-block';
};
function orderFormPriceBtn () {
    orderFormPrice.style.display = 'flex';
};
function closeNavForm () {
    orderForm.style.display = 'none';
};
   
        
   
    
    // cancel.addEventListener('click', () => {
    //     navContainer.style.display = 'none';
    // });




