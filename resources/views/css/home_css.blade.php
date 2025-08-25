<style>
.section-padding{
    padding: 100px 0;
}

.carousel-item img{
  height: 500px;
}
.container{
    max-width: 1200px;
    width: 90%;
    margin: 0 auto;
}

.carousel-caption{
    bottom: 220px;
    z-index: 2;
}
.carousel-caption h5{
    font-size: 35px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 25px;
}
.carousel-caption p{
    width: 60%;
    margin: auto;
    font-size: 15px;
    line-height: 1.9;
}
.carousel-inner::before{
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,0.4);
    z-index: 1;
}
.w-100{
    height: 100vh;
}

/*-----Media Queries-----*/

@media only screen and (min-width:768px) and (max-width:991px){
    .carousel-caption{
        bottom: 370px;
    }
    .carousel-caption p{
        width: 100%;
    }
}
@media only screen and (max-width:767px){
    .navbar-nav{
        text-align: center;
    }
    .carousel-caption{
        bottom: 125px;
    }
    .carousel-caption h5{
        font-size: 17px;
    }
    .carousel-caption a{
        padding: 10px 15px;
    }
    .carousel-caption p{
        width: 100%;
        line-height: 1.6;
        font-size: 12px;
    }
}

.floating-buttons {
    position: fixed;
    top: 70%;
    right: 10px;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    z-index: 1000;
}

.floating-button {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    padding: 15px 30px;
    margin: 5px 0;
    text-align: center;
    text-decoration: none;
    border-radius: 20px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
    font-family: 'Arial', sans-serif;
    font-size: 16px;
}
.floating-button:hover {
    background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    transform: scale(1.05);
    color: #fdfdfd;
}
.floating-button i{
    font-size: 50px;
}

/* ----------About Section --------------*/

.about-section{
    width:100%;
    min-height: 70vh;
    background-color: #ddd;
}
.about-container{
    width: 80%;
    display: block;
    margin: auto;
    padding-top: 100px;
}
.content-section{
    float: left;
    width: 55%;
}
.img-section{
    float: right;
    width: 40%;
}
.img-section img{
    width: 100%;
    height: auto;
}
.content-section .title{
    color: #141a46;
    text-transform: uppercase;
    font-size: 28px;
}
.content-section .content h3{
    margin-top: 20px;
    color: #5d5d5d;
    font-size: 21px;
}
.content-section .content p{
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 1.5;
}
.button{
    margin-top: 30px;
}
.button a{
    background-color: #3d3d3d;
    padding: 12px 40px;
    text-decoration: none;
    color: #ffffff;
    font-size: 25px;
    letter-spacing: 1.5px;
}
.button a:hover{
    background-color: #a52a2a;
    color: #ffffff;
}
.content-section .social{
    margin: 40px 40px;
}
.content-section .social i{
    color: #141a46;
    font-size: 30px;
    padding: 0px 10px;
}
.content-section .social i:hover{
    color: #3d3d3d;
}
@media screen and (max-width:768px){
    .container{
        width: 80%;
        display: block;
        margin: auto;
        padding-top: 50px;
    }
    .content-section{
        float: none;
        width: 100%;
        display: block;
        margin: auto;
    }
    .img-section{
        float: none;
        width: 100%;
    }
    .img-section img{
        width: 100%;
        height: auto;
        display: block;
        margin: auto;
    }
    .content-section .title{
        text-align: center;
        font-size: 19px;
    }
    .content-section .content .button{
        text-align: center;
    }
    .content-section .content .button a{
        padding: 9px 30px;
    }
    .content-section .social{
        text-align: center;
    }
}

/* --------Servics section--------- */

.section-heading{
    font-size: 40px;
    text-align: center;
    margin-top: 50px;
}
.services-cards{
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}
.services-card{
    width: 350px;
    border: 1px solid #ddd;
    padding: 20px;
    margin: 20px;
    text-align: center;
    cursor: pointer;
    transition: 0.5s ease;
    background-color: #141a46;
    color: #ffffff;
}
.services-card:hover{
    transform: translateY(-20px);
}
.services-card h2{
    font-size: 24px;
    margin-bottom: 10px;
}
.services-card p{
    font-size: 15px;
    color: #ddd;
    line-height: 1.5;
}
@media screen and (max-width:768px){
    .services-cards{
        flex-direction: column;
        align-items: center;
    }
}
/*---------- Working -----------*/

.working{
    border: 12px solid #141a46;
    padding: 50px 90px;
    margin: 3rem 0;
}
.working h2{
    display: flex;
    justify-content: center;
    font-size: 40px;
    font-weight: 600;
    padding-bottom: 20px;
    color: navy;
}
.working p{
    font-size: 1.4rem;
    color: #5d5d5d;
}
.working img{
    position: relative;
    left: 20%;
    height: 400px;
    width: 700px;
}

/*---------- Counter-------- */
.counter-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #d8f4f8;
    padding: 20px 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    /* width: 80%; */
    max-width: 1600px;
    text-align: center;
    height: 25vh;
    margin-bottom: 35px;
}

.counter-item {
    margin: 0 20px;
}

.counter {
    font-size: 4rem;
    color: #00796b;
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

.counter-item p {
    font-size: 1.8rem;
    color: #555;
    margin: 0;
}

/* Animation for Counter */
@keyframes countup {
    from { opacity: 0; }
    to { opacity: 1; }
}

.counter {
    animation: countup 1s ease-in-out;
}

@media (max-width: 768px) {
    .counter-container {
        flex-direction: column;
        padding: 20px;
    }

    .counter-item {
        margin: 10px 0;
    }
}


/*-----contact us section--------*/
.contact{
    min-height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:#ddd;
}
.contact-section{
    background: url('/images/contact-sec.jpg') no-repeat left;
    background-size: 55%;
    /* background-color: #fdfdfd; */
    overflow: hidden;
    padding: 90px 0;
}
.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 50px;
}
.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 700;
    color: navy;
}
.text{
    font-size: 18px;
    color: #545454;
    text-align: justify;
    margin-bottom: 40px;
}
@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}
@media screen and (max-width:1000px){
    .contact-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}
@media screen and (max-width:600px){
    .contact-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}
.card-container{
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px;
    margin-top: 100px;
}
.card-container a:hover{
    background: #141a46;
    color: #fff;
}
.card{
    width: 450px;
    background-color: #f4f4f4;
    border-radius: 10px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    transition: transform 0.6s ease;
}
.card:hover{
    transform: translateY(-20px);
}
.card img{
    width: 100%;
    height: auto;
    object-fit: cover;
}
.card-content{
    padding: 20px;
}
.card-content h1{
    font-weight: bold;
    font-size: 26px;
    margin-bottom: 10px;
}
.card-content p{
    font-size: 19px;
    margin-bottom: 20px;
}
.card-button{
    display: inline-block;
    background-color: goldenrod;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    padding: 3px 8px;
    font-size: 19px;
}
/** Image Section Styling**/
.row{
    min-height: 60vh;
    margin: 3rem 0;
    background-color: rgb(245, 246, 247);
}
.row .imgwrapper{
    position: relative;
    width: 85%;
    left: 8%;
    top: 10%;
    padding-bottom: 135px;
}
.img{
    float: right;
    height: 300px;
    width: 370px;
    padding-left: 30px;
    margin-top: 30px;
}
.text h2{
    font-weight: bold;
    display: flex;
    justify-content: start;
    text-align: start;
    margin-left: 5px;
    padding: 20px;
    font-size: 30px;
    line-height: 25px;
}
.text p{

    margin-left: 30px;
    font-size: 21px;
    line-height: 25px;
}

.cards-button{
    display: inline-block;
    background-color: goldenrod;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    padding: 3px 8px;
    margin-left: 30px;
    font-size: 20px;
}

.container2 {
    max-width: 1500px;
    padding: 60px;
    font-family: 'Montserrat', sans-serif;
}
    /* .container2 {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    box-sizing: border-box;
} */
    /* .container2 {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    box-sizing: border-box;
} */

.container2 h2 {
    display: flex;
    justify-content: center;
    font-size: 40px;
    font-weight: 400;
    padding-bottom: 20px;
    color: navy;
}

h3 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

/* .feedback-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
} */
    /* .feedback-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Adjust columns dynamically *
    gap: 20px;
    width: 100%; 
    box-sizing: border-box;
    overflow: hidden; 
    padding: 0 10px; 
} */
.feedback-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Auto adjust columns */
    gap: 20px; /* Space between cards */
    width: 100%;
    box-sizing: border-box;
    padding: 0 10px;
    justify-items: center; /* Center cards inside each column */
}

.card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
    .feedback-card {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%; /* Take full width of the grid cell */
    box-sizing: border-box;
} 

.card-header {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
}

.badge {
    font-size: 12px;
    color: #fff;
    background-color: #007bff;
    padding: 5px 10px;
    border-radius: 12px;
    display: inline-block;
}

.card-body p {
    color: #555;
    font-size: 14px;
    margin: 8px 0;
    line-height: 1.6;
}

/* Responsive Styles */
@media only screen and (max-width: 1200px) {
    .container2 {
        padding: 40px;
    }

    .container2 h2 {
        font-size: 35px;
    }

    .feedback-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media only screen and (max-width: 768px) {
    .container2 {
        padding: 20px;
    }

    .container2 h2 {
        font-size: 30px;
    }

    .feedback-grid {
        grid-template-columns: 1fr;
    }

    .card {
        padding: 15px;
    }

    .card-header {
        font-size: 16px;
    }

    .card-body p {
        font-size: 12px;
    }
}

@media only screen and (max-width: 480px) {
    .container2 h2 {
        font-size: 24px;
    }

    .feedback-grid {
        grid-template-columns: 1fr;
    }

    .card {
        padding: 10px;
    }

    .card-header {
        font-size: 14px;
    }

    .card-body p {
        font-size: 10px;
    }
}



/* Floating Chatbot Button */
.chatbot-toggle {
  position: fixed;
  bottom: 20px;
  left: 20px;
  background: #f9a825;
  color: white;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  z-index: 1000;
}

/* Chatbot Box */
.chatbot {
  position: fixed;
  bottom: 90px; /* above button */
  left: 20px;
  width: 350px;
  height: 450px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  display: none; /* hidden by default */
  flex-direction: column;
  overflow: hidden;
  z-index: 1000;
}

.chat-header {
  background: #f9a825;
  color: white;
  padding: 10px;
  font-weight: bold;
}

.chat-box {
  flex: 1;
  padding: 10px;
  overflow-y: auto;
}

.message {
  margin: 8px 0;
  padding: 10px;
  border-radius: 8px;
  max-width: 80%;
}

.bot {
  background: #f1f1f1;
  align-self: flex-start;
}

.user {
  background: #f9a825;
  color: white;
  align-self: flex-end;
}

.chat-input {
  display: flex;
  border-top: 1px solid #ccc;
}

.chat-input input {
  flex: 1;
  padding: 10px;
  border: none;
  outline: none;
}

.chat-input button {
  background: #f9a825;
  color: white;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
}

</style>


