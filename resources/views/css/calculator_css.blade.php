<style>
    body{
    background:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url('/images/bg.jpg');

}
p{
    font-size: 1.3rem;
    margin-bottom: 0.3rem;
    font-family: 'playwrite netherland';
}
.cal-container h2,p{
    display: flex;
    justify-content: center;
    text-align: center;
    color: #000;
}
h2{
    animation: animate 5s linear infinite;
    font-size: 30px;
}
@keyframes animate{
    0%,18%,20%,50.1%,60%,65.1%,80%,90.1%,92%
    {
        color:#03bcf4;
        text-shadow:none;
    }
    80.1%,20.1%,30%,50%,60.1%,65%,85.1%,90%,92.1%,100%
    {
        color: #fff;
        text-shadow: 0 0 10px #03bcf4,
        0 0 10px #03bcf4,
        0 0 10px #03bcf4,
        0 0 10px #03bcf4;
    }
}
section{
    margin:0px 190px 70px 190px;
    background-color: #f3f0f0;
    padding-bottom: 5px;
    display: flex;
    justify-content: center;
}
section p{
    color: #000;
}
.cal-container{
    max-width: 1200px;
    margin: 30px auto;
}
form {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 15px 40px;
    padding:0px 50px 10px 100px;
}
label {
    font-size: 16px;
    grid-column: span 4;
}
input{
    width: 50%;
    padding: 10px 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    background-color: white;
}
button {
    background-color:black;
    border-radius:50px;
    color: #fff;
    position: relative;
    left: 160%;
    margin-top: 20px;
    padding: 10px 25px;
    display: flex;
    justify-content: center;
  }
button:hover {
    background-color:#fff;
    color: #000;
  }

 #result {
    border-radius:50px;
    position: relative;
    margin-top: 20px;
    padding: 10px auto;
    font-size: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
}
#choice {
    gap: 10px;
}
.text a{
    color:#03bcf4;
    text-decoration: none;
    font-size: 20px;
    margin-bottom: 20px;
}
    </style>
