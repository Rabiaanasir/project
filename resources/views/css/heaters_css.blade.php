{{-- <style>
    header{
    height: 80vh;
    background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('/images/commercial-solar-water-heater-500x500.webp');
    background-repeat: no-repeat;
    background-size: 100% 90vh;
    background-position: center;
}

.header-content h2{
  color: green;
  position: absolute;
  top: 50%;
  left: 18%;
  transform: translate(-50%, -50%);
  font-size: 40px;
  font-weight: 545;
}
.header-content p{
  color: #141a46;
  font-size: 20px;
  font-weight: 600;
  position: absolute;
  /* text-align: center; */
  top: 58%;
  left: 18%;
  transform: translate(-50%, -50%);
}


/*******************Sections Styling****************/
.section1{
  height: 310vh;
  background-color: rgb(249, 251, 253);
}
.text-box, .text-box2 {
  margin:0 7rem;
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
section h2{
  padding: 20px 0;
}
.text-box p{
display: flex;
justify-content: center;
text-align: center;
}
p{
    font-weight: 500;
        margin-bottom: 20px;
        font-size: 20px;
}
section p{
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
.heater-img{
  height: 70vh;
  display: flex;
  justify-content: center;
  padding: 30px 0;
}
.text-box2 li{
    font-size:20px;
}

  /*-------------Image Section styling-------------*/

  .row{
    min-height: 100vh;
    /* width: 80%;  */
    margin: 5rem 0;
    padding-top: 5rem;
    background-color: aliceblue;
  }
  .row .imgwrapper{
    position: relative;
    width: 80%;
    left: 10%;
    top: 10%;
    padding-bottom: 100px;
  }
  .img1{
    float: right;
    height:300px;
    width: 500px;
    padding-left: 20px;
  }

  .text h2{
    display: flex;
    justify-content: start;
    text-align: start;
  }
  .text ul li{
      margin:auto;
      font-size: 20px;
  }
  .img2{
    float: left;
    height:400px;
    width: 650px;
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

  /*------Table Section------*/
  .key-diff {
    background-color: rgb(247, 243, 243);
    padding: 10px 70px;
    margin: 5rem 0;
  }
  table{
    position: relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-7%);
    font-size: 1.5rem;
    border-collapse: collapse;
    width: 900px;
    height: 200px;
    border: 1px solid #bdc3c7;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0);
    margin: 15px 0;
  }
  tr{
    transition: all .2s ease-in;
    cursor: pointer;
  }
  th,td{
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #f4f4f4;
  }
  #diff{
    background-color: darkcyan;
    color: #fff;
  }
tr:hover{
  background-color: #f4f4f4;
  transform: scale(1.02);
  box-shadow: 2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0);
}
@media only screen and (max-width:768px){
  table{
    width: 90%;
  }
}
</style>--}}

<style>
    /* General Reset for Mobile Responsiveness */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
   font-family: 'Montserrat', sans-serif;
}

/* Header Styling */
header {
    height: 70vh;
    background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('/images/commercial-solar-water-heater-500x500.webp') no-repeat center;
    background-size: cover;
    position: relative;
    color: white;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.header-content h2 {
    font-size: 2rem;
    color: green;
    position: absolute;
    top: 40%;
    left: 8%;
    margin-bottom: 10px;
    font-weight: 545;
}

.header-content p {
    font-size: 1rem;
    color: #141a46;
    position: absolute;
    top: 52%;
  left: 18%;
  transform: translate(-50%, -50%);
}


/* Section Styling */
.section1, .key-diff {
    padding: 2rem 5%;
    background-color: #f9fbfd;
}

/* Text Box Styling */
.text-box, .text-box2, .box {
    margin: 20px auto;
    max-width: 800px;
    color: #333;
}

h2 {
    font-size: 1.8rem;
    color: navy;
    margin: 20px 0;
    text-align: center;
}

p {
    font-size: 1rem;
    line-height: 1.5;
    color: #444;
    margin-bottom: 1rem;
}

.heater-img {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.heater-img img {
    width: 100%;
    max-width: 500px;
    height: auto;
}

/* Box Styling */
.box {
    background-color: navy;
    color: #fff;
    padding: 20px;
    text-align: center;
}
.box p{
    color:
}
.box button {
    margin-top: 10px;
    padding: 10px 20px;
    font-size: 1rem;
    background-color: darkcyan;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.box button:hover {
    background-color: #fff;
    color: #000;
}
button a{
color: #fff;
}

/* Responsive Table */
.key-diff table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

.key-diff table, .key-diff th, .key-diff td {
    border: 1px solid #bdc3c7;
}

.key-diff th, .key-diff td {
    padding: 10px;
    text-align: left;
}

#diff {
    background-color: darkcyan;
    color: #fff;
}

/* Image and Text Section */
.row .imgwrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
}

.imgwrapper img {
    width: 100%;
    max-width: 600px;
    height: auto;
}

.text, .text2 {
    max-width: 600px;
    margin-top: 10px;
    text-align: left;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    header {
        height: 50vh;
    }

    .header-content h2 {
        font-size: 1.5rem;
    }

    .section1, .key-diff, .box {
        padding: 1rem;
    }

    h2 {
        font-size: 1.4rem;
    }

    p {
        font-size: 0.9rem;
    }

    .box button {
        font-size: 0.9rem;
        padding: 8px 15px;
    }

    /* Adjust table for small screens */
    .key-diff table {
        font-size: 0.9rem;
    }

    .imgwrapper, .text, .text2 {
        padding: 10px;
    }
}

    </style> --}}

{{-- <style>
    /* General Reset */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Header Styling */
header {
    height: 80vh;
    background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('/images/commercial-solar-water-heater-500x500.webp') no-repeat center;
    background-size: cover;
    position: relative;
    color: white;
    text-align: left;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.header-content h2 {
    color: green;
    font-size: 40px;
    font-weight: 545;
    position: absolute;
    top: 50%;
    left: 18%;
    transform: translate(-50%, -50%);
}

.header-content p {
    color: #141a46;
    font-size: 20px;
    font-weight: 600;
    position: absolute;
    top: 58%;
    left: 18%;
    transform: translate(-50%, -50%);
}

/* Main Section Styling */
.section1 {
    padding: 2rem 7%;
    background-color: rgb(249, 251, 253);
}

.text-box, .text-box2 {
    margin: 0 auto;
    max-width: 1000px;
    color: #333;
}

/* Heading Styling */
h2 {
    font-size: 35px;
    font-weight: 525;
    color: navy;
    margin-top: 20px;
    text-align: center;
}

p {
    font-size: 20px;
    line-height: 1.6;
    color: #444;
    text-align: left;
    margin-bottom: 20px;
}

.box {
    background-color: navy;
    color: white;
    padding: 20px;
    margin: 3rem auto;
    max-width: 700px;
    text-align: center;
}

.box button {
    padding: 15px 20px;
    background-color: darkcyan;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

.box button:hover {
    background-color: white;
    color: black;
}

/* Image Styling in Text Section */
.heater-img img {
    width: 100%;
    max-width: 600px;
    height: auto;
    display: block;
    margin: 0 auto;
}

/* Row for Image and Text Alignment */
.row {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    background-color: aliceblue;
    padding: 40px 0;
    justify-content: center;
}

.imgwrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    max-width: 1000px;
    width: 100%;
    padding: 20px;
}

.img1, .img2 {
    width: 100%;
    max-width: 500px;
    height: auto;
}

.text, .text2 {
    max-width: 500px;
    padding: 20px;
}

/* Key Differences Table Styling */
.key-diff {
    background-color: rgb(247, 243, 243);
    padding: 20px;
    text-align: center;
}

.key-diff table {
    width: 100%;
    max-width: 900px;
    margin: 20px auto;
    border-collapse: collapse;
    font-size: 1rem;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0);
}

.key-diff th, .key-diff td {
    padding: 10px;
    text-align: left;
    border: 1px solid #bdc3c7;
}

#diff {
    background-color: darkcyan;
    color: white;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    header {
        height: 60vh;
    }

    .header-content h2 {
        font-size: 2rem;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .header-content p {
        font-size: 1rem;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .section1, .key-diff, .box {
        padding: 1rem;
    }

    h2 {
        font-size: 1.6rem;
    }

    p {
        font-size: 1rem;
    }

    .imgwrapper {
        flex-direction: column;
        padding: 10px;
    }

    .img1, .img2 {
        max-width: 100%;
        padding: 0;
    }
}

@media (max-width: 768px) {
    header {
        height: 50vh;
    }

    .header-content h2 {
        font-size: 1.5rem;
    }

    .header-content p {
        font-size: 0.9rem;
    }

    h2 {
        font-size: 1.4rem;
    }

    p {
        font-size: 0.9rem;
    }

    .key-diff table {
        font-size: 0.9rem;
    }

    .imgwrapper, .text, .text2 {
        padding: 10px;
    }

    .text, .text2, .heater-img img {
        max-width: 100%;
        text-align: center;
    }
}
</style> --}}
