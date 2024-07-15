let IRM=document.querySelector('#SCANNER');
let hover_btn=document.querySelector('.hover-btn');
let Radiologie_numérique=document.querySelector('#Radiologie-numérique');
let echographie=document.querySelector('#ECHOGRAPHIE');
let mammographie=document.querySelector('#MAMMOGRAPHIE');
let Panoramique_Dentaire=document.querySelector('#Panoramique-Dentaire');
let BIOPSIE=document.querySelector('#BIOPSIE');
let irm=document.querySelector('#IRM');
let content=document.querySelector('#content');
let paragraph=document.querySelector('p');

IRM.addEventListener('click',()=>{
   content.innerHTML=document.getElementById('scanner').innerHTML;
  


});
  Radiologie_numérique.addEventListener('click',()=>{
    content.innerHTML=document.getElementById('Radiologie/numérique').innerHTML;
 
 
   });
   echographie.addEventListener('click',()=>{
      content.innerHTML=document.getElementById('Echographie').innerHTML;
   
   
     });

     mammographie.addEventListener('click',()=>{
      content.innerHTML=document.getElementById('Mammographie').innerHTML;
   
   
     });

     Panoramique_Dentaire.addEventListener('click',()=>{
      content.innerHTML=document.getElementById('Panoramique/Dentaire').innerHTML;
   
   
     });

     BIOPSIE.addEventListener('click',()=>{
      content.innerHTML=document.getElementById('biopsie').innerHTML;
   
   
     });
     irm.addEventListener('click',()=>{
      content.innerHTML=document.getElementById('irm').innerHTML;
   
   
     });


     
    
         document.addEventListener('DOMContentLoaded', function () {
           // Add a click event listener to the document body
           document.body.addEventListener('click', function (event) {
             // Check if the clicked element has the class "hover-btn"
             if (event.target.classList.contains('hover-btn')) {
               // Remove the "active" class from all paragraphs
               document.querySelectorAll('.hover-btn').forEach(function (paragraph) {
                 paragraph.classList.remove('active');
               });
     
               // Add the "active" class to the clicked paragraph
               event.target.classList.add('active');
             }
           });
         });
       
     






     

     
   
