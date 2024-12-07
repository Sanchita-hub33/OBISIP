const signUpbutton = document.getElementById('signUp-btn');
const signInbutton = document.getElementById('signIn-btn');
const signUpForm = document.getElementById('signUp');
const signInForm = document.getElementById('signIn');
const inputSignUp = document.getElementById('up-btn-input');

inputSignUp.addEventListener('click',function(){
    alert("Registration Successfull!");
})
signUpbutton.addEventListener('click' , function(){
    signUpForm.style.display = "block";    
    signInForm.style.display = "none";
})
signInbutton.addEventListener('click' , function(){
    signInForm.style.display = "block";
    signUpForm.style.display = "none";
})