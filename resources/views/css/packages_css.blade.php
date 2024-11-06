{{-- <style>
   header{
    height: 75vh;
    background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('images/energy-saving-concept-solar-panels-260nw-2243081559.webp');
    background-repeat: no-repeat;
    background-size: cover;
    background-position:center;
}
.header-content h2{
  color:#fff;
  font-size: 50px;
  font-family: 'playwrite netherland';
}
.header-content{
  position: absolute;
  text-align: center;
  top: 87%;
  left: 50%;
  transform: translate(-50%, -50%);
}
section .order a{
  /* background: #d7fada; */
  background: #4799f0;
  padding: 2px 10px;
  display: inline-block;
  border-radius: 40px;
  /* color: #2b2b2b; */
  font-size: 18px;
  color: #fff;
}
/* ----------Packages------*/

h1{
  font-size: 35px;
  display: flex;
  justify-content: center;
  text-align: center;
  color:#007bff ;
  margin-top: 40px;
}
h3{
  font-size: 30px;
  display: flex;
  justify-content: center;
  text-align: center;
  margin-bottom: 20px;
  font-weight: 600;
}
h4{
  font-size: 20px;
  display: flex;
  justify-content: center;
  text-align: center;
  margin: 0px 530px;
  background-color: #bdc3c7;
}
section{
  margin:20px 20px 40px 20px;
  border:8px solid black;
}

.package {
    height: 200px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* border: 1px solid #ddd; */
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 8px;
    /* background-color: rgb(247, 243, 243); */
}

.side-block {
    background-color: #007bff;
    color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    margin: 40px 90px 40px 90px;
    font-size: 30px;
}

.details {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-grow: 1;
}

.inverter, .panel, .batteries, .icon-price, .icon-saving {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    /* margin: 5px; */
}

.inverter img, .panel img, .icon-price i, .icon-saving i , .batteries img{
    width: 110px;
    height: 90px;
}
hr {
  border: 5px solid grey; /* Change the color and thickness */
  width: 70%; /* Change the width */
  margin: 0 280px; /* Center the line with margin */
}

  /*------Table Section------*/
  .key-diff {
    background-color: rgb(247, 243, 243);
    padding: 10px 50px;
    margin: 2rem 0;
  }
  table{
    position: relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-7%);
    font-size: 1.5rem;
    border-collapse: collapse;
    width: 1200px;
    height: 100px;
    border: 1px solid #bdc3c7;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2),-1px -1px 8px rgba(0,0,0,0);
    margin: 15px 0;
  }
  tr{
    transition: all .2s ease-in;
    cursor: pointer;
  }
  th,td{
    padding: 8px;
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

/*-----------financing option---------*/
.finance{
  background-color: #4799f0;
  color: #fff;
}
.text{
  display: flex;
  justify-content: center;
  text-align: center;
  /* margin: 20px 10px; */
  font-weight: 50;
  font-family: 'playwrite netherland'; ;
}
.text p{
  font-size: 20px;
}
.text p a{
  color: rgb(248, 164, 7);
}

</style> --}}
<style>
    /* Header */
header {
    height: 75vh;
    background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('images/energy-saving-concept-solar-panels-260nw-2243081559.webp') no-repeat center/cover;
}
.header-content {
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.header-content h2 {
    color: #fff;
    font-size: 2.5em;
    font-family: 'Playfair Display', serif;
}

/* Package Styling */
section {
    margin: 20px auto;
    padding: 20px;
    max-width: 1200px;
    border: 8px solid black;
}
h1 {
    font-size: 2em;
    color: #007bff;
    text-align: center;
    margin: 20px 0;
}

.package {
    display: flex;
    flex-wrap: wrap;
    background-color: #f7f7f7;
    border-radius: 8px;
    padding: 15px;
    margin: 20px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.side-block {
    background-color: #007bff;
    color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    font-size: 1.5em;
    margin-bottom: 20px;
    width: 100%;
    max-width: 300px;
}
.details {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    flex-grow: 1;
    justify-content: space-around;
    align-items: center;
}

.inverter, .panel, .batteries, .icon-price, .icon-saving {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    flex: 1 1 150px;
}
.inverter img, .panel img, .batteries img, .icon-price i, .icon-saving i {
    width: 100px;
    height: auto;
}
/* .batteries img{
    width: 30px;
} */
.icon-price, .icon-saving {
    font-size: 1.2em;
}
.order a {
    background: #4799f0;
    color: #fff;
    padding: 8px 16px;
    border-radius: 20px;
    text-decoration: none;
    transition: background-color 0.3s;
}
.order a:hover {
    background-color: #0056b3;
}

/* Financing Section */
.finance {
    background-color: #4799f0;
    color: #fff;
    text-align: center;
    padding: 20px;
    font-size: 1.2em;
}
.finance a {
    color: rgb(248, 164, 7);
    text-decoration: underline;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .header-content h2 {
        font-size: 1.8em;
    }
    .package {
        flex-direction: column;
        text-align: center;
    }
    .details {
        justify-content: center;
    }
    .side-block {
        width: 100%;
        max-width: none;
        font-size: 1.3em;
    }
    .order a {
        font-size: 1em;
    }
}

    </style>
