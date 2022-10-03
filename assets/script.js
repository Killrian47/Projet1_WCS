let toggle = document.querySelector('.toggles')
let body = document.querySelector('body')

toggle.addEventListener('click', function() {
    body.classList.toggle('dark-thema')
});
let questionBlock0=document.querySelector('.question-block0');
let questionBlock1=document.querySelector('.question-block1'); 
let questionBlock2=document.querySelector('.question-block2'); 
let questionBlock3=document.querySelector('.question-block3'); 
let questionBlock4=document.querySelector('.question-block4');
let button0=document.querySelector('.button0');
let button1=document.querySelector('.button1');
let button2=document.querySelector('.button2');
let button3=document.querySelector('.button3');
let button4=document.querySelector('.button4');
let answerText0=document.querySelector('.answer0');
let answerText1=document.querySelector('.answer1');
let answerText2=document.querySelector('.answer2');
let answerText3=document.querySelector('.answer3');
let answerText4=document.querySelector('.answer4');

let experienceButton=document.querySelector('.experience-button');
let experienceDetails=document.querySelectorAll('.experience-details');
experienceButton.addEventListener("click", function(event){
    experienceButton.classList.toggle('fa-plus');
    experienceButton.classList.toggle('fa-minus');
    for (let i=0;i < experienceDetails.length;i++){
        experienceDetails[i].classList.toggle('showDetails');
    }
    
})

questionBlock0.addEventListener("click",function(event){
    event.preventDefault();
    answerText0.classList.toggle('answerShow');
    answerText1.classList.remove('answerShow');
    answerText2.classList.remove('answerShow');
    answerText3.classList.remove('answerShow');
    answerText4.classList.remove('answerShow');
    button0.classList.toggle('fa-plus');
    button1.classList.add('fa-plus');
    button2.classList.add('fa-plus');
    button3.classList.add('fa-plus');
    button4.classList.add('fa-plus');

});

questionBlock1.addEventListener("click",function(event){
    event.preventDefault();
    answerText1.classList.toggle('answerShow');
    answerText0.classList.remove('answerShow');
    answerText2.classList.remove('answerShow');
    answerText3.classList.remove('answerShow');
    answerText4.classList.remove('answerShow');
    button1.classList.toggle('fa-plus');
    button0.classList.add('fa-plus');
    button2.classList.add('fa-plus');
    button3.classList.add('fa-plus');
    button4.classList.add('fa-plus');

});

questionBlock2.addEventListener("click",function(event){
    event.preventDefault();
    answerText2.classList.toggle('answerShow');
    answerText0.classList.remove('answerShow');
    answerText1.classList.remove('answerShow');
    answerText3.classList.remove('answerShow');
    answerText4.classList.remove('answerShow');
    button2.classList.toggle('fa-plus');
    button1.classList.add('fa-plus');
    button0.classList.add('fa-plus');
    button3.classList.add('fa-plus');
    button4.classList.add('fa-plus');

});
questionBlock3.addEventListener("click",function(event){
    event.preventDefault();
    answerText3.classList.toggle('answerShow');
    answerText0.classList.remove('answerShow');
    answerText1.classList.remove('answerShow');
    answerText2.classList.remove('answerShow');
    answerText4.classList.remove('answerShow');
    button3.classList.toggle('fa-plus');
    button1.classList.add('fa-plus');
    button2.classList.add('fa-plus');
    button0.classList.add('fa-plus');
    button4.classList.add('fa-plus');

});
questionBlock4.addEventListener("click",function(event){
    event.preventDefault();
    answerText4.classList.toggle('answerShow');
    answerText0.classList.remove('answerShow');
    answerText1.classList.remove('answerShow');
    answerText2.classList.remove('answerShow');
    answerText3.classList.remove('answerShow');
    button4.classList.toggle('fa-plus');
    button1.classList.add('fa-plus');
    button2.classList.add('fa-plus');
    button3.classList.add('fa-plus');
    button0.classList.add('fa-plus');

});