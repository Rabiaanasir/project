<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:ital,wght@0,200;1,300&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    line-height: 1.7;
}
html{
    font-size: 82.5%;
}
a{
    text-decoration: none;
}
/*###### header styling #######*/

nav img{
    height: 11vh;
    width: 220px;
  }
  .navbar{
    padding: 0.1rem;
    background-color: #141a46;
    font-family: none;
  }
  .navbar .nav-items{
      float: right;
      margin-top: 1.5rem;
      margin-right: 100px 
  }
  .navbar .nav-item{
      display: inline-block;
      padding: 1rem;
      text-transform: uppercase;
      font-size: 1.1rem;
  }
  .navbar a:link,
  .navbar a:visited{
      color:#f4f4f4;
  }
  /* .navbar a{
      padding-bottom:0.3rem;
  } */
  .navbar a:hover{
      color: darkgoldenrod;
  }
  .navbar::after{
      content: '';
      display: block;
      clear: both;
  }
  ul li ul.dropdown li{
    display: block;
    padding: 5px 10px;
    margin: 5px 10px;
  } 
  ul li ul.dropdown{
    background-color: darkgoldenrod;
    padding: 5px 10px;
    position: absolute;
    z-index: 999; 
    display: none;
  }
  .dropdown a:hover{
    color:#141a46
  }
  ul li:hover ul.dropdown{
    display: block;
  }
  .lg-heading{
    font-size: 3.5rem;
  }
  .text-light{
    color:#f4f4f4;
  }
  .login {
    background: rgb(233, 199, 6);         
    /* padding: 1px 20px;          Retain original padding */
    display: inline-block;      /* Button-like appearance */
    border-radius: 30px;        /* Smooth, round corners */
    color: #000;                /* Black text */
    font-weight: bold;          /* Make the text bold */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    transition: all 0.3s ease;  /* Smooth transition for hover effects */
    margin-left: 40px;
    margin-bottom: 5px;
}

/* Specific styles for the link inside the .login class */
.nav-item.login a {
    color: #000;                /* Ensure black text color */
    text-decoration: none;      /* Remove underline */
    font-size: 16px;            /* Make the text a bit larger */
    transition: color 0.3s ease; /* Smooth text color transition */
}

/* Hover effect for the button */
.login:hover {
    background: rgb(233, 199, 6);           /* Slightly darker green on hover */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Larger shadow on hover */
    transform: scale(1.05);     /* Slightly enlarge the button */
}

/* Hover effect for the text color inside the link */
.nav-item.login a:login {
    color: #004d00;             /* Darker green text color on hover */
}

  /* Footer Styles */

footer {
    background-color: #141a46;
    color: #f4f4f4;
    padding:30px 90px 50px 90px;
    font-family: Arial, Helvetica, sans-serif;
  }
  .left-section{
    float: left;
    font-size: 16px;
  }
  .right-section{
    float: right;
  }  
  
  footer ul {
    list-style-type: none;
    padding: 0;
    margin: 0; 
  }
  
  footer ul li {
    display: inline;
    margin-right: 25px; /* Adjust spacing between list items as needed */
    letter-spacing: normal;
  }
  
  footer ul li a {
    color: #f4f4f4;
    text-decoration: none;
  }
  footer ul li a:hover{
    text-decoration: underline;
    color: darkgoldenrod;
  }
  footer ul li:last-child{
    margin-left: 3px;
  }
  footer .fab{
    color: #f4f4f4;
    margin-right: 8px;
  } 


  /*---------- FAQ styling-------- */
    
  .section-faq{
      max-width: 900px;
      margin: 20px auto;
      background: rgb(243, 186, 81);
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 40px 80px;
    }
    
    .section-faq h1 {
      text-align: center;
      color: navy;
      margin-bottom: 20px;
      font-size: 40px;
      font-weight: 530;
    }
    
    .faq-item {
      border-bottom: 1px solid #000;
      padding: 10px 0px;
    }
    
    .faq-question {
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
    }
    
    .faq-question h3 {
      margin: 0;
      font-size: 25px;
      color: navy;
      font-weight: 500;
    }
    
    .faq-toggle {
      font-size: 34px;
      color: navy;
      transition: transform 0.3s;
    }
    
    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
    }
    
    .faq-answer p {
      margin: 10px 0 0;
      font-size: 16px;
      color: #000;
      font-size: 20px;
    }
    
    /* Open state */
    .faq-item.open .faq-answer {
      max-height: 300px;
    }
    
    .faq-item.open .faq-toggle {
      transform: rotate(45deg);
    }
</style>