<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
    
      rel="stylesheet"
      type="text/css"
    />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>/* ----- POPPINS FONT Link ----- */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

/* ----- VARIABLES ----- */
:root{
    --body-color: rgb(250, 250, 250);
    --color-white: rgb(255, 255, 255);

    --text-color-second: rgb(68, 68, 68);
    --text-color-third: rgb(30, 159, 171);

    --first-color: rgb(110, 87, 224);
    --first-color-hover: rgb(40, 91, 212);

    --second-color: rgb(110, 87, 224);
    --third-color: rgb(192, 166, 49);
    --first-shadow-color: rgba(0, 0, 0, 0.1);

}

/* ----- BASE ----- */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* ----- SMOOTH SCROLL ----- */
html{
    scroll-behavior: smooth;
}

/* ----- CHANGE THE SCROLL BAR DESIGN ----- */
::-webkit-scrollbar{
    width: 10px;
    border-radius: 25px;
}
::-webkit-scrollbar-track{
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb{
    background: #ccc;
    border-radius: 30px;
}
::-webkit-scrollbar-thumb:hover{
    background: #bbb;
}


/* ---##-- REUSABLE CSS --##--- */

/* ----- GLOBAL BUTTON DESIGN ----- */
.btn{
    font-weight: 500;
    padding: 12px 20px;
    background: #efefef;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s;
}
.btn>i{
    margin-left: 10px;
}
.btn:hover{
    background: var(--second-color);
    color: var(--color-white);
}

/* ----- GLOBAL ICONS DESIGN ----- */
i{
    font-size: 16px;
}

/* ------- BASE -------- */
body{
    background: var(--body-color);
}
.container{
    width: 100%;
    position: relative;
    overflow-x: hidden; /* not mandatory */
}

/* ----- NAVIGATION BAR ----- */
nav{
    position: fixed;
    display: flex;
    justify-content: space-between;
    width: 100%;
    height: 90px;
    line-height: 90px;
    background: var(--body-color);
    padding-inline: 9vw;
    transition: .3s;
    z-index: 100;
}
.nav-logo{
   position: relative;
}
.nav-name{
    font-size: 30px;
    font-weight: 600;
    color: var(--text-color-third);
}
.nav-logo span{
    position: absolute;
    top: -15px;
    right: -20px;
    font-size: 5em;
    color: var(--text-color-second);
}
.nav-menu, .nav_menu_list{
    display: flex;
}
.nav-menu .nav_list{
    list-style: none;
    position: relative;
}
.nav-link{
    text-decoration: none;
    color: var(--text-color-second);
    font-weight: 500;
    padding-inline: 15px;
    margin-inline: 20px;
}
.nav-menu-btn{
    display: none;
}
.nav-menu-btn i{
    font-size: 28px;
    cursor: pointer;
}
.active-link{
    position: relative;
    color: var(--first-color);
    transition: .3;
}
.active-link::after{
    content: '';
    position: absolute;
    left: 50%;
    bottom: -15px;
    transform: translate(-50%, -50%);
    width: 5px;
    height: 5px;
    background: var(--first-color);
    border-radius: 50%;
}


/* ----- WRAPPER DESIGN ----- */
.wrapper{
    padding-inline: 10vw;
}

/* ----- FEATURED BOX ----- */
.featured-box{
    position: relative;
    display: flex;
    height: 100vh;
    min-height: 700px;
}

/* ----- FEATURED TEXT BOX ----- */
.featured-text{
    position: relative;
    display: flex;
    justify-content: center;
    align-content: center;
    min-height: 80vh;
    flex-direction: column;
    width: 50%;
    padding-left: 20px;
}
.featured-text-card span{
    background: var(--third-color);
    color: var(--color-white);
    padding: 3px 8px;
    font-size: 12px;
    border-radius: 5px;
}
.featured-name{
    font-size: 50px;
    font-weight: 600;
    color: var(--text-color-second);
    margin-block: 20px;
}
.typedText{
    text-transform: capitalize;
    color: var(--text-color-third);
}
.featured-text-info{
    font-size: 15px;
    margin-bottom: 30px;
    color: var(--text-color-second);
}
.featured-text-btn{
    display: flex;
    gap: 20px;
}
.featured-text-btn>.blue-btn{
    background: var(--first-color);
    color: var(--color-white);
}
.featured-text-btn>.blue-btn:hover{
    background: var(--first-color-hover);
}
.social_icons{
    display: flex;
    margin-top: 5em;
    gap: 30px;
}
.icon{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
    cursor: pointer;
}
.icon:hover{
    color: var(--first-color);
}

/* ----- FEATURED IMAGE BOX ----- */
.featured-image{
    display: flex;
    justify-content: right;
    align-content: center;
    min-height: 80vh;
    width: 50%;
}
.image{
    margin: auto 0;
    width: 380px;
    height: 380px;
    animation: imgFloat 7s ease-in-out infinite;
}
.image img{
    width: 380px;
    height: 380px;
    object-fit: contain;
}
@keyframes imgFloat {
    50%{
        transform: translateY(10px);
    }
}
.scroll-btn{
   position: absolute;
   bottom: 0;
   left: 50%;
   translate: -50%;
   display: flex;
   justify-content: center;
   align-items: center;
   width: 150px;
   height: 50px;
   gap: 5px;
   text-decoration: none;
   color: var(--text-color-second);
   background: var(--color-white);
   border-radius: 30px;
   box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.25);
}
.scroll-btn i{
    font-size: 20px;
}

/* ----- MAIN BOX ----- */
.section{
    padding-block: 5em;
}
.row{
    display: flex;
    justify-content: space-between;
    width: 100%;
    gap: 50px;
}
.col{
    display: flex;
    width: 50%;
}

/* -- ## --- RESUABLE CSS -- ## -- */
.top-header{
    text-align: center;
    margin-bottom: 5em;
}
.top-header h1{
    font-weight: 600;
    color: var(--text-color-second);
    margin-bottom: 10px;
}
.top-header span{
    color: #999;
}
h3{
    font-size: 20px;
    font-weight: 600;
    color: var(--text-color-second);
    margin-bottom: 15px;
}

/* ----- ABOUT INFO ----- */
.about-info{
    position: relative;
    display: flex;
    align-items: center;
    flex-direction: column;
    padding-block: 30px 70px;
    padding-inline: 20px;
    width: 100%;
    background: var(--color-white);
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    border-radius: 20px;
}
.about-info h3{
    color: var(--text-color-third);
}
.about-info p{
    text-align: center;
    font-size: 15px;
    color: #777;
}
.about-btn button{
    position: absolute;
    right: 20px;
    bottom: 20px;
    background: var(--first-color);
    color: var(--color-white);
    border-radius: 30px;
}
.about-btn button:hover{
    background: var(--first-color-hover);
}

/* ----- ABOUT / SKILLS BOX ----- */
.skills-box{
    margin: 10px;
}
.skills-header{
    margin-bottom: 30px;
}
.skills-list{
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
}
.skills-list span{
    font-size: 14px;
    background: var(--first-color);
    color: var(--color-white);
    padding: 2px 10px;
    border-radius: 5px;
}

/* ----- PROJECTS BOX ----- */
.project-container{
    display: flex;
    width: 100%;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
}
.project-box{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 30%;
    height: 250px;
    background: var(--color-white);
    border-radius: 20px;
    box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    overflow: hidden;
}
.project-box>i{
    font-size: 50px;
    color: #00B5E7;
    margin-bottom: 25px;
}
.project-box label{
    font-size: 15px;
    color: #777;
}
.project-box::after, .contact-info::after{
    content: "";
    position: absolute;
    bottom: -100%;
    background: var(--text-color-third);
    width: 100%;
    height: 100%;
    transition: .4s;
    z-index: 1;
}
.project-box:hover.project-box::after,
.contact-info:hover.contact-info::after{
    bottom: 0;
}
.project-box:hover.project-box i,
.project-box:hover.project-box>h3,
.project-box:hover.project-box>label{
    color: var(--color-white);
    z-index: 2;
}

/* ----- CONTACT BOX ----- */
.contact-info{
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px 30px;
    width: 100%;
    height: 315px;
    background: var(--text-color-third);
    border-radius: 10px;
    box-shadow: 1px 8px 10px 2px var(--first-shadow-color);
    overflow: hidden;
}
.contact-info>h2{
    color: var(--color-white);
    margin-bottom: 20px;
}
.contact-info>p{
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--color-white);
    margin-block: 5px;
}
.contact-info p>i{
    font-size: 18px;
}
.contact-info::after{
    background: var(--color-white);
}
.contact-info:hover.contact-info h2,
.contact-info:hover.contact-info p,
.contact-info:hover.contact-info i{
    color: #777;
    z-index: 2;
}

/* ----- CONTACT FORM ----- */
.form-control{
    display: flex;
    flex-direction: column;
    gap: 10px;
    width: 100%;
}
.form-inputs{
    display: flex;
    gap: 10px;
    width: 100%;
}
.input-field{
    width: 50%;
    height: 55px;
    background: transparent;
    border: 2px solid #AAA;
    border-radius: 10px;
    padding-inline: 20px;
    outline: none;
}
textarea{
    width: 100%;
    height: 250px;
    background: transparent;
    border: 2px solid #AAA;
    border-radius: 10px;
    padding: 15px 20px;
    outline: none;
    resize: none;
}
.form-button>.btn{
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--second-color);
    color: var(--color-white);
}
.form-button>.btn:hover{
    background: #00B5E7;
}
.form-button i{
    font-size: 18px;
    rotate: -45deg;
}

/* ----- FOOTER BOX ----- */
footer{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    row-gap: 30px;
    background: #003228;
    padding-block: 40px 60px;
}
.top-footer p{
    font-size: 25px;
    font-weight: 600;
    color: #DDE0E4;
}
.middle-footer .footer-menu{
    display: flex;
}
.footer_menu_list{
    list-style: none;
}
.footer_menu_list a{
    text-decoration: none;
    color: #DDE0E4;
    font-weight: 500;
    margin-inline: 20px;
}
.footer-social-icons{
    display: flex;
    gap: 30px; 
    color: #DDE0E4;  
   
    
}
.bottom-footer{
    font-size: 14px;
    margin-top: 10px;
    color: #DDE0E4; 
}


/* ----- MEDIA QUERY == 1024px / RESPONSIVE ----- */
@media only screen and (max-width: 1024px){
    .featured-text{
        padding: 0;
    }
    .image, .image img{
        width: 320px;
        height: 320px;
    }
}

/* ----- MEDIA QUERY == 900px / RESPONSIVE ----- */
@media only screen and (max-width: 900px) {
    .nav-button{
        display: none;
    }
    .nav-menu.responsive{
        left: 0;
    }
    .nav-menu{
        position: fixed;
        top: 80px;
        left: -100%;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(20px);
        width: 100%;
        min-height: 450px;
        height: 90vh;
        transition: .3s;
    }
    .nav_menu_list{
        flex-direction: column;
    }
    .nav-menu-btn{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .featured-box{
        flex-direction: column;
        justify-content: center;
        height: 100vh;
    }
    .featured-text{
        width: 100%;
        order: 2;
        justify-content: center;
        align-content: flex-start;
        min-height: 60vh;
    }
    .social_icons{
        margin-top: 2em;
    }
    .featured-image{
        order: 1;
        justify-content: center;
        min-height: 150px;
        width: 100%;
        margin-top: 65px;
    }
    .image, .image img{
        width: 150px;
        height: 150px;
    }
    .row{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 50px;
    }
    .col{
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .about-info, .contact-info{
        width: 100%;
    }
    .project-container{
        justify-content: center;
    }
    .project-box{
        width: 80%;
    }

}

/* ----- MEDIA QUERY == 540px / RESPONSIVE ----- */

@media only screen and (max-width: 540px){
    .featured-name{
        font-size: 40px;
    }
    .project-box{
        width: 100%;
    }
    .form-inputs{
        flex-direction: column;
    }
    .input-field{
        width: 100%;
    }
}

.loader {
  border-top-color: #ef4444;
  -webkit-animation: spinner 1.5s linear infinite;
  animation: spinner 1.5s linear infinite;
}

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spinner {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
        </style>
</head>
