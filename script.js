let toggle = document.querySelector('.toggle')
let body = document.querySelector('body')

toggle.addEventListener('click', function() {
    body.classList.toggle('dark-thema')
});
let questionBlock0=document.querySelector('.question-block0');
let questionBlock1=document.querySelector('.question-block1'); 
let questionBlock2=document.querySelector('.question-block2'); 
let answerText0=document.querySelector('.answer0');
let answerText1=document.querySelector('.answer1');
let answerText2=document.querySelector('.answer2');

questionBlock0.addEventListener("click",function(event){
    event.preventDefault();
    answerText0.classList.toggle('answerShow');
    answerText1.classList.remove('answerShow');
    answerText2.classList.remove('answerShow');
    
});

questionBlock1.addEventListener("click",function(event){
    event.preventDefault();
    answerText1.classList.toggle('answerShow');
    answerText0.classList.remove('answerShow');
    answerText2.classList.remove('answerShow');
});

questionBlock2.addEventListener("click",function(event){
    event.preventDefault();
    answerText2.classList.toggle('answerShow');
    answerText0.classList.remove('answerShow');
    answerText1.classList.remove('answerShow');
});
