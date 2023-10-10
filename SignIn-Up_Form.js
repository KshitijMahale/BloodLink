// for Sign In button
document.querySelector(".signIn-btn").addEventListener("click",function(){
    document.querySelector(".signIn_Form_section").classList.add("activeSignIn");
});
document.querySelector(".signIn_Form_section .close-btn").addEventListener("click",function(){
    document.querySelector(".signIn_Form_section").classList.remove("activeSignIn");
});

// for join us as donor button
document.querySelector(".signUp-btn").addEventListener("click",function(){
    document.querySelector(".signUp_Form_section").classList.add("activeSignUp");
});
document.querySelector(".signUp_Form_section .close-btn").addEventListener("click",function(){
    document.querySelector(".signUp_Form_section").classList.remove("activeSignUp");
});

// for Sign Up button
document.querySelector("#signUp-btn").addEventListener("click",function(){
    // document.querySelector(".signUp_Form_section").classList.add("activeSignUp");
    document.querySelector(".signUp_Form_section").classList.add("activeSignUp-bottom_button");
});
document.querySelector(".signUp_Form_section .close-btn").addEventListener("click",function(){
    document.querySelector(".signUp_Form_section").classList.remove("activeSignUp-bottom_button");
});

// for info cards 1&3
document.querySelector("#info-card-1").addEventListener("click", function(){
    window.location.href='./findDonor.html';
})
document.querySelector("#info-card-3").addEventListener("click", function(){
    window.location.href='./findDonor.html';
})
// for info cards 2
document.querySelector("#info-card-2").addEventListener("click",function(){
    document.querySelector(".signUp_Form_section").classList.add("activeSignUp-bottom_button");
});
document.querySelector(".signUp_Form_section .close-btn").addEventListener("click",function(){
    document.querySelector(".signUp_Form_section").classList.remove("activeSignUp-bottom_button");
});