<style>
    header{
    height: 80vh;
    background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('/images/net 1.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.header-content h1{
    color: white;
    font-size: 50px;
    font-family: 'playwrite netherland';
}
.header-content {
    position: absolute;
    text-align: center;
    top: 87%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.net h1{
    margin: 25px;
    color:navy;
    text-align: center;
    font-weight: 900;
    font-size: 40px;
}
.net p{
    justify-content: center;
    margin-left: 80px;
    width :90%;
    font-size: 17px;
}
/****sections stylings*****/
/* section{
    height:40vh;
} */
.text-box{
    margin: 0 7 rem;
}
h2{
        font-size: 35px;
        font-weight: 525;
        display: flex;
        justify-content: center;
        text-align: center;
        color: navy;
        margin-top: 20px;
    }
p{
    color: black;
    font-weight: 500;
    margin-bottom: 20px;
}
.box{
        box-sizing: border-box;
        background-color: navy;
        margin:5rem 7rem;
        color: #fff;
        padding: 1rem 3rem;
    }
    hr {
        border: 1px solid rgb(7, 255, 255); /* Change the color and thickness */
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
/** Image Section Styling**/
.row{
    min-height: 70vh;
    margin: 5rem 0;
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
    height: 330px;
    width: 500px;
    padding-left: 30px;
    margin-top: 50px;
}
.text h2{
    display: flex;
    justify-content: start;
    text-align: start;
    margin-left: 5px;
    padding: 35px;
    font-size: 25px;
    line-height: 28px;
}
.text p{
    padding-left: 30px;
    margin-left: 30px;
    padding: 0px;
    font-size: 18px;
    line-height: 25px;
}

.net1 h1{
    margin: 15px 5px;
    color:navy;
    text-align: center;
    font-weight: 700;
    font-size: 27px;
}
.net1 p{
    justify-content: center;
    margin-left: 80px;
    width :90%;
    font-size: 17px;
}
.net1 img{
    margin-left: 140px;
}
/***icon styling****/
.content{
    height: 70vh;
    color: navy;
    text-align: center;
    font-weight: 800;
    font-size: 20px;
    background-color: rgb(245, 246, 247);
}
.content h1{
   margin-top: 20px;
   padding-top: 20px;
}
#container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 400px;
    font-size: 15px;
    color: navy;
    background-color: rgb(245, 246, 247);
    margin-bottom: 130px;
}
#container div{
     height: 300px;
     width: 330px;
     margin: 60px;
     font-size: 16px;

}
/* Responsive Design */
@media (max-width: 768px) {
    header {
        height: 50vh;
    }

    .header-content h1 {
        font-size: 2rem;
    }

    .net h1 {
        font-size: 2rem;
    }

    .net p {
        font-size: 1rem;
    }

    .box {
        width: 95%;
    }
}

@media (max-width: 480px) {
    .header-content h1 {
        font-size: 1.5rem;
    }

    .net h1 {
        font-size: 1.5rem;
    }

    .net p {
        font-size: 0.9rem;
    }

    .img {
        max-width: 100%;
    }
}
    </style>
