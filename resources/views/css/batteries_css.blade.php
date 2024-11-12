{{-- <style>
    header{
    height: 70vh;
    background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('/images/Storage-battery.png');
    background-repeat: no-repeat;
    /* background-size: cover; */
    background-position: center;
}

.header-content h2{
  color: black;
  font-size: 40px;
  letter-spacing:1px;
  font-weight: 500;
}
.header-content p{
  font-weight: 600;
  font-size: 25px;
  color: maroon;
}
.header-content{
  position: absolute;
  text-align: center;
  top: 77%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/*******************Sections Styling****************/
.section1{
    height: 125vh;
    background-color: rgb(249, 251, 253);
    /* background-color: gainsboro; */
}
.text-box{
    margin:0 7rem;
}
h2{
        font-size: 30px;
        font-weight: 525;
        display: flex;
        justify-content: center;
        text-align: center;
        color: navy;
        margin-top: 20px;
    }
.text-box p{
  display: flex;
  justify-content: center;
  text-align: center;
}
p{
    color: black;
    font-weight: 500;
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

/*-------------Image Section styling-------------*/

.row{
  min-height: 70vh;
  margin: 3rem 0;
  padding-top: 5rem;
  background-color: aliceblue;
}
.row .imgwrapper{
  position: relative;
  width: 80%;
  left: 10%;
  top: 10%;
  padding-bottom: 80px;
}
.img{
  float: right;
  height:300px;
  width: 550px;
  padding-left: 100px;
}

.text h2{
  display: flex;
  justify-content: start;
  text-align: start;
}
.text h3{
    font-size: 23px;
    color: navy;
}
.text ul li{
    margin:auto;
    font-size: 20px;
}
.img2{
  float: left;
  height:300px;
  width: 530px;
  padding-right: 90px;
}
.text2 p{
  padding-left:90px;
}
.text2 h2{
  display: flex;
  justify-content: start;
  text-align: start;
}
.text2 ul li{
  margin-left: 590px;
  font-size: 20px;
}

/*-------------Feature Section Styling--------*/
.container {
  width: 90%;
  margin: 0 auto;
}

.features {
  padding: 5rem 0;
}

.features h2 {
  padding-bottom: 30px;
}
h4{
    font-size: 25px;
  color: #000;
  font-weight: 550;
}
.box-wrapper {
  display: flex;
  flex-wrap: wrap;
  gap: 20px; /* Space between boxes */
}

.benefits {
  width: calc(25% - 20px); /* Adjust width to account for gap */
  padding: 2rem;
  text-align: center;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.322);
  background-color: #d6dbdd;
}

.box-1, .box-3 {
  background-color: #d6dbdd;
  color: #000;
}

.box-2, .box-4 {
  background-color: aliceblue;
  color: #000;
}
</style> --}}


<style>
    header {
        height: 70vh;
        background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('/images/Storage-battery.png');
        background-repeat: no-repeat;
        /* background-size: cover; */
        background-position: center;
    }

    .header-content h2 {
        font-size: 3vw;
        letter-spacing: 1px;
        font-weight: 500;
    }

    .header-content p {
        font-weight: 600;
        font-size: 2vw;
        color: #d6dbdd;
    }

    .header-content {
        position: absolute;
        text-align: center;
        top: 77%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /******************* Sections Styling ****************/
    .section1 {
        height: 125vh;
        background-color: rgb(249, 251, 253);
    }

    .text-box {
        margin: 0 7rem;
    }

    h2 {
        font-size: 2rem;
        font-weight: 525;
        display: flex;
        justify-content: center;
        text-align: center;
        color: navy;
        margin-top: 20px;
    }

    .text-box p {
        display: flex;
        justify-content: center;
        text-align: center;
        color: black;
        font-weight: 500;
        margin-bottom: 20px;
        font-size: 1rem;
    }

    .box {
        box-sizing: border-box;
        background-color: navy;
        margin: 5rem 7rem;
        color: #fff;
        padding: 1rem 3rem;
    }

    hr {
        border: 1px solid rgb(7, 255, 255);
        width: 50%;
        margin: 10px auto;
    }

    h3 {
        font-weight: 700;
        font-size: 1.5rem;
        margin-top: 20px;
    }

    .box p {
        margin-top: 1rem;
        color: #fff;
    }

    button {
        padding: 10px 15px;
        background-color: darkcyan;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.9rem;
    }
button a{
    color: #d6dbdd;
}
    button:hover {
        background-color: #fff;
        color: #000;
    }

    /*------------- Image Section Styling -------------*/

    .row {
        min-height: 70vh;
        margin: 3rem 0;
        padding-top: 5rem;
        background-color: aliceblue;
    }

    .row .imgwrapper {
        display: flex;
        width: 80%;
        margin: 0 auto;
        padding-bottom: 80px;
    }

    .img, .img2 {
        flex: 1;
        height: 300px;
        margin: 0 1rem;
    }

    .text, .text2 {
        flex: 1;
        padding: 0 1rem;
    }

    .text h2, .text2 h2 {
        display: flex;
        justify-content: start;
        text-align: start;
    }

    .text h3, .text2 h3 {
        font-size: 1.2rem;
        color: navy;
    }

    .text ul li, .text2 ul li {
        font-size: 1rem;
    }

    /*------------- Feature Section Styling -------------*/
    .container {
        width: 90%;
        margin: 0 auto;
    }

    .features {
        padding: 5rem 0;
    }

    .features h2 {
        padding-bottom: 30px;
        font-size: 1.8rem;
    }

    h4 {
        font-size: 1.5rem;
        color: #000;
        font-weight: 550;
    }

    .box-wrapper {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .benefits {
        flex: 1;
        padding: 2rem;
        text-align: center;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        background-color: #d6dbdd;
    }

    .box-1, .box-3 {
        background-color: #d6dbdd;
        color: #000;
    }

    .box-2, .box-4 {
        background-color: aliceblue;
        color: #000;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        header {
            height: 60vh;
        }

        .header-content h2 {
            font-size: 4vw;
        }

        .header-content p {
            font-size: 3vw;
        }

        .section1 {
            height: auto;
        }

        .text-box {
            margin: 0 4rem;
        }

        .imgwrapper {
            flex-direction: column;
            align-items: center;
        }

        .img, .img2 {
            width: 100%;
            margin: 1rem 0;
        }

        .text h3, .text2 h3 {
            font-size: 1.1rem;
        }

        .features h2 {
            font-size: 1.6rem;
        }

        .box-wrapper .benefits {
            width: 45%;
            margin: 0 auto;
        }
    }

    @media (max-width: 768px) {
        header {
            height: 50vh;
        }

        .header-content h2 {
            font-size: 6vw;
        }

        .header-content p {
            font-size: 4vw;
        }

        .text-box {
            margin: 0 2rem;
        }

        h2 {
            font-size: 1.5rem;
        }

        .text-box p {
            font-size: 0.9rem;
        }

        h3 {
            font-size: 1rem;
        }

        .box {
            margin: 3rem 1rem;
            padding: 1rem;
        }

        button {
            font-size: 0.8rem;
        }

        .row {
            padding: 1rem;
        }

        .img, .img2 {
            width: 100%;
        }

        .features h2 {
            font-size: 1.4rem;
        }

        .box-wrapper .benefits {
            width: 100%;
            margin: 1rem 0;
        }
    }

    @media (max-width: 480px) {
        header {
            height: 40vh;
        }

        .header-content h2 {
            font-size: 8vw;
        }

        .header-content p {
            font-size: 5vw;
        }

        .text-box {
            margin: 0 1rem;
        }

        .box {
            margin: 2rem 0.5rem;
            padding: 1rem;
        }

        .imgwrapper {
            width: 100%;
        }

        h2 {
            font-size: 1.2rem;
        }

        h3 {
            font-size: 0.9rem;
        }

        .text-box p, button {
            font-size: 0.8rem;
        }

        .features h2 {
            font-size: 1.2rem;
        }

        .box-wrapper .benefits {
            width: 100%;
            margin: 1rem 0;
        }
    }
</style>
