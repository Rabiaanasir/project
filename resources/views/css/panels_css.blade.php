{{-- <style>

   /*###### header styling #######*/

   /* header{
     height: 80vh;
     background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('/images/panels.jpg');
     background-repeat: no-repeat;
     background-size: cover;
   }

   .header-content h2{
     color: fff;
     font-size: 45px;
     letter-spacing:3px;
     font-weight: 600;
   }
   .header-content{
     position: absolute;
     text-align: center;
     top: 80%;
     left: 50%;
     transform: translate(-50%, -50%);
   } */
   header {
     height: 80vh;
     background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('/images/panels.jpg');
     background-repeat: no-repeat;
     background-size: cover;
     background-position: center;
     display: flex;
     align-items: center;
     justify-content: center;
   }

   /* Header Content Styling */
   .header-content h2 {
     color: #fff;
     font-size: 3vw; /* Responsive font size */
     letter-spacing: 2px;
     font-weight: 600;
     text-align: center;
     margin: 0;
   }

   /* Responsive Adjustments */
   /* For tablets and smaller desktops */
   @media (max-width: 1024px) {
     header {
       height: 60vh; /* Reduce height for smaller screens */
     }

     .header-content h2 {
       font-size: 5vw; /* Adjust font size */
     }
   }

   /* For mobile devices */
   @media (max-width: 768px) {
     header {
       height: 50vh;
       background-size: cover;
       background-position: center;
     }

     .header-content h2 {
       font-size: 6vw; /* Further adjust font size for mobile */
       letter-spacing: 1px;
     }
   }

   /* For very small mobile screens */
   @media (max-width: 480px) {
     header {
       height: 40vh;
     }

     .header-content h2 {
       font-size: 8vw;
       letter-spacing: 1px;
       padding: 0 10px; /* Add some padding to avoid overflow */
     }
   }
   /*******************Sections Styling****************/
   .section1{
       height: 80vh;
       background-color: rgb(249, 251, 253);
   }
   .text-box{
       margin:0 7rem;
   }
   h2{
       font-weight: 525;
       font-size: 30px;
       display: flex;
       justify-content: center;
       text-align: center;
       color: navy;
       margin-top: 40px;
   }
   .text-box p{
     display: flex;
     justify-content: center;
     text-align: center;
   }
   p{
       font-weight: 300;
       margin-bottom: 20px;
       font-size: 20px;
   }
   .box{
       box-sizing: border-box;
       background-color: navy;
       margin:5rem 7rem;
       color: #fff;
       padding: 1rem 3rem;
   }
   hr {
       border: 1px solid rgb(8, 255, 255); /* Change the color and thickness */
       width: 50%; /* Change the width */
       margin: 10px 2px; /* Center the line with margin */
   }
   h3{
       font-weight: 700;
       font-size: 25px;
       margin-top: 20px;
   }
   .box p{
       margin-top: 1rem;
       color: #fff;
   }
   button {
        padding: 15px 20px;
        background-color:darkcyan;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
      }
   button:hover {
       background-color:#fff;
       color: #000;
     }

   /*-------------Image Section styling-------------*/

   .row{
       height: auto;
       /* width: 80%;  */
       margin: 5rem 0;
       padding-top: 3rem;
       background-color: aliceblue;
     }
     .row .imgwrapper{
       position: relative;
       width: 80%;
       left: 5%;
       top: 10%;
       padding-bottom: 105px;
     }
     .img{
       float: right;
       height:300px;
       width: 500px;
       padding-left: 60px;
     }

     .text h2{
       display: flex;
       justify-content: start;
       text-align: start;
     }
     .img2{
       float: left;
       height:400px;
       width: 600px;
       padding-right: 90px;
     }
     .text2 p{
       padding-left:120px;
       font-size: 20px;
     }
     .text2 h2{
       display: flex;
       justify-content: start;
       text-align: start;
     }

       </style> --}}

       <style>

        /*###### header styling #######*/

        header {
          height: 80vh;
          background: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url('/images/panels.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }

        .header-content h2 {
          color: #fff;
          font-size: 45px;
          letter-spacing: 3px;
          font-weight: 600;
        }

        .header-content {
          position: absolute;
          text-align: center;
          top: 80%;
          left: 50%;
          transform: translate(-50%, -50%);
        }

        /* Section styling */

        .section1 {
            height: 80vh;
            background-color: rgb(249, 251, 253);
        }

        .text-box {
            margin: 0 7rem;
        }

        h2 {
            font-weight: 525;
            font-size: 30px;
            display: flex;
            justify-content: center;
            text-align: center;
            color: navy;
            margin-top: 40px;
        }

        .text-box p {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        p {
            font-weight: 300;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .box {
            box-sizing: border-box;
            background-color: navy;
            margin: 5rem 7rem;
            color: #fff;
            padding: 1rem 3rem;
        }

        hr {
            border: 1px solid rgb(8, 255, 255);
            width: 50%;
            margin: 10px 2px;
        }

        h3 {
            font-weight: 700;
            font-size: 25px;
            margin-top: 20px;
        }

        .box p {
            margin-top: 1rem;
            color: #fff;
        }

        button {
            padding: 15px 20px;
            background-color: darkcyan;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        button a{
            color: #fff;
        }
        button:hover {
            background-color: #fff;
            color: #000;
        }

        /* Image Section Styling */

        .row {
            height: auto;
            margin: 5rem 0;
            padding-top: 3rem;
            background-color: aliceblue;
        }

        .row .imgwrapper {
            position: relative;
            width: 80%;
            left: 5%;
            top: 10%;
            padding-bottom: 105px;
        }

        .img {
            float: right;
            height: 300px;
            width: 500px;
            padding-left: 60px;
        }

        .text h2 {
            display: flex;
            justify-content: start;
            text-align: start;
        }

        .img2 {
            float: left;
            height: 400px;
            width: 600px;
            padding-right: 90px;
        }

        .text2 p {
            padding-left: 120px;
            font-size: 20px;
        }

        .text2 h2 {
            display: flex;
            justify-content: start;
            text-align: start;
        }

        /* Responsive styling */

        /* Tablets (landscape) */
        @media (max-width: 1024px) {
            .header-content h2 {
                font-size: 35px;
            }
            .text-box {
                margin: 0 3rem;
            }
            .box {
                margin: 3rem 5rem;
                padding: 1rem 2rem;
            }
            .img, .img2 {
                width: 90%;
                height: auto;
                float: none;
                margin: 0 auto;
                display: block;
            }
            .text2 p, .text p {
                padding: 0;
                text-align: center;
            }
        }

        /* Mobile (portrait) */
        @media (max-width: 768px) {
            header {
                height: 60vh;
                background-position: center;
            }
            .header-content h2 {
                font-size: 28px;
            }
            .section1 {
                height: auto;
                padding: 20px;
            }
            .text-box {
                margin: 0 1rem;
            }
            h2 {
                font-size: 24px;
            }
            p {
                font-size: 18px;
            }
            .box {
                margin: 2rem 1rem;
                padding: 1rem;
            }
            .imgwrapper {
                width: 100%;
                padding-bottom: 50px;
            }
            .img, .img2 {
                width: 100%;
                height: auto;
                padding: 0;
            }
            .text2 p, .text p {
                padding: 0;
                text-align: center;
                font-size: 16px;
            }
        }

        /* Small Mobile */
        @media (max-width: 480px) {
            .header-content h2 {
                font-size: 22px;
            }
            h2 {
                font-size: 20px;
                margin-top: 20px;
            }
            p {
                font-size: 16px;
            }
            .box {
                margin: 1rem;
                padding: 0.5rem;
            }
            button {
                padding: 10px 15px;
                font-size: 12px;
            }
            .img, .img2 {
                width: 100%;
                height: auto;
            }
        }

     </style>
