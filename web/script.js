var typed = new Typed(".multiple-text", {
    strings: ["Chef", "software engineer"],
    typespeed:100,
    backspeed:100,
    backDelay:1500,
    loop:true,
    
})
const signInBtnLink = document.querySelector('.signInBtn-link');

const wraapper = document.querySelector('.wraapper');
signInBtnLink.addEventListener('click', () => {
    wraapper.classList.toggle('active');
});
