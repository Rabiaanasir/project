<style>
header{
    height: 80vh;
    background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('/images/archi pic.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.header-content h1{
    color: white;
}
.header-content {
    position: absolute;
    text-align: center;
    top: 77%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.commercial h1{
    color:navy;
    text-align: center;
    font-weight: 800;
    font-size: 27px;
}
.commercial p{
    justify-content: center;
    margin-left: 80px;
    width: 90%;
    font-size: 17px;
}

/* Image Section Styling */
.row{
    min-height: 85vh;
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
    padding: 10px;
    margin: 0 auto;
    width: 100%;
    box-sizing: border-box;
    font-size: 18px;
    line-height: 25px;
}
.img2{
    float: left;
    height: 400px;
    width: 600px;
    padding-right: 90px;
    margin-top: 20px;
}
.text2 p{
    padding-left: 90px;
    font-size: 18px;
    line-height: 25px;
}
.text2 h2{
    display: flex;
    justify-content: start;
    text-align: start;
    font-size: 25px;
    padding: 30px;
    line-height: 27px;
}
.img3{
    float: right;
    height: 330px;
    width: 500px;
    padding-left: 30px;
    margin-top: 50px;
}
.text3 h2{
    display: flex;
    justify-content: start;
    text-align: start;
    margin-left: 5px;
    padding: 35px;
    font-size: 25px;
    line-height: 28px;
}
.text3 p{
    padding-left: 30px;
    margin-left: 30px;
    padding: 0px;
    font-size: 18px;
    line-height: 25px;
}

/* Section Styling */
section{
    height:60vh;
}
.text-box{
    margin: 0 7rem;
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
    margin: 5rem 7rem;
    color: #fff;
    padding: 1rem 3rem;
}
hr {
    border: 1px solid rgb(7, 255, 255);
    width: 50%;
    margin: 10px 2px;
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
    background-color: darkcyan;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}
button:hover {
    background-color: #fff;
    color: #000;
}

/* Icon Styling */
.content{
    color: #000;
    text-align: center;
    font-weight: 800;
    font-size: 20px;
}
#container{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 400px;
    font-size: 15px;
}
#container div{
    height: 300px;
    width: 330px;
    margin: 60px;
    font-size: 16px;
}

/* Responsive Media Queries */
@media screen and (max-width: 1200px) {
    .img {
        width: 400px;
        height: 250px;
    }
    .img2, .img3 {
        width: 500px;
        height: 300px;
    }
    .text h2, .text2 h2, .text3 h2 {
        font-size: 22px;
        padding: 20px;
    }
    .text p, .text2 p, .text3 p {
        font-size: 16px;
    }
    .commercial p {
        font-size: 15px;
    }
    .box {
        margin: 3rem 5rem;
        padding: 1rem 2rem;
    }
    h2 {
        font-size: 30px;
    }
    button {
        font-size: 12px;
        padding: 10px 15px;
    }
}

@media screen and (max-width: 768px) {
    header {
        height: 60vh;
    }
    .img {
        width: 100%;
        height: auto;
    }
    .text h2 {
        font-size: 18px;
        padding: 15px;
    }
    .text p {
        font-size: 14px;
    }
    .commercial p {
        font-size: 14px;
        margin-left: 10px;
    }
    .img2, .img3 {
        width: 100%;
        height: auto;
    }
    .box {
        margin: 2rem;
        padding: 1rem;
    }
    h2 {
        font-size: 28px;
    }
    button {
        font-size: 12px;
        padding: 8px 12px;
    }
    #container div {
        width: 100%;
        height: auto;
        margin: 20px 0;
    }
}

@media screen and (max-width: 480px) {
    header {
        height: 50vh;
    }
    .header-content {
        top: 65%;
    }
    .img {
        width: 100%;
        height: auto;
        padding-left: 0;
    }
    .text h2 {
        font-size: 16px;
    }
    .text p {
        font-size: 12px;
    }
    .commercial p {
        font-size: 12px;
        margin-left: 0;
    }
    .box {
        margin: 1rem;
        padding: 1rem;
    }
    h2 {
        font-size: 24px;
    }
    button {
        font-size: 10px;
        padding: 5px 10px;
    }
}
</style>
