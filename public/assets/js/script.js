// Alert
const alertBtn = document.getElementById('alert-btn');
const btt = document.getElementsByClassName('btt');
const alertBox =  document.querySelector('.alert');

function alertTrigger(){
    alertBox.classList.remove('hide');
}

// Mobile Toggle
const mobile = document.querySelector('.fa-bars');
const closeMobileNav = document.querySelector('.close');
const mobileNav = document.querySelector('.mobile-nav');

// Listening for a click on the mobile toggle
mobile.onclick = function toggleMoblie(){
    if(mobileNav.style.display = 'none'){
        mobileNav.style.display = 'block';
    }
}

// Listening for a click on the mobile nav close button
closeMobileNav.onclick = function closeMoblie(){
    if(mobileNav.style.display != 'none'){
        mobileNav.style.display = 'none';
    }
}
