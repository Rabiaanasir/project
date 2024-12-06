<style>
/* Header Styling */
header {
    height: 70vh;
    background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('/images/customer-gives-money-worker-successfully-installing-solar-panels_359031-33916.avif');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
}

.header-content {
    position: absolute;
    text-align: center;
    top: 87%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.header-content h2{
  color:#fff;
  font-size: 50px;
  font-family: 'playwrite netherland';
}

.container {
    max-width: 1700px;
    width: 90%;
    margin: 0 auto;
}

.showcase {
    background: #ddd;
    padding: 10rem 0 3rem 0;
    font-family: 'Montserrat', sans-serif;
}

.row {
    display: flex;
    flex-wrap: wrap;
    height: auto;
    background-color: #fff;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.329);
    font-size: 20px;
    margin-bottom: 3rem;
}
.row .text-box p{
    font-size: 17px;
}
.img-box, .text-box {
    width: 50%;
    padding: 3rem;
}

.img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.row1 .img-box, .row3 .img-box {
    order: 1;
    height: 400px;
}
.row1 .text-box, .row3 .text-box {
    order: 2;
}

.row2 .img-box, .row4 .img-box {
    order: 2;
}

.row2 .text-box, .row4 .text-box{
    order: 1;
}

.row5 {
    height: 100px;
    background-color: #263238;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem;
}

.row5 p {
    margin: 0 1rem;
    font-size: 16px;
    text-align: center;
}

#payButton {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
}

#payButton img {
    height: 80px;
    width: auto;
    vertical-align: middle;
}

.row5 p + p {
    margin-left: 1rem;
}

@media (max-width: 1200px) {
    header {
        height: 60vh;
    }
    .header-content h2 {
        font-size: 40px;
    }
    .showcase {
        padding: 8rem 0 2rem 0;
    }
    .row {
        font-size: 18px;
    }
    .img-box, .text-box {
        padding: 2rem;
    }
}

@media (max-width: 992px) {
    header {
        height: 50vh;
    }
    .header-content h2 {
        font-size: 36px;
    }
    .showcase {
        padding: 6rem 0 2rem 0;
    }
    .row {
        font-size: 16px;
    }
    .img-box, .text-box {
        padding: 1.5rem;
    }
    .row5 {
        flex-direction: column;
    }
    .row5 p {
        margin-bottom: 0.5rem;
        text-align: center;
    }
    #payButton img {
        height: 60px;
    }
}

@media (max-width: 768px) {
    .header-content h2 {
        font-size: 30px;
    }
    .row {
        flex-direction: column;
    }
    .img-box, .text-box {
        width: 100%;
        padding: 1rem;
    }
    .row1, .row2, .row3, .row4 {
        margin-bottom: 2rem;
    }
    .row5 {
        padding: 1rem;
        height: auto;
        text-align: center;
    }
    #payButton img {
        height: 50px;
    }
}

@media (max-width: 576px) {
    header {
        height: 40vh;
    }
    .header-content h2 {
        font-size: 26px;
    }
    .showcase {
        padding: 4rem 0 1rem 0;
    }
    .row {
        font-size: 14px;
    }
    .img-box, .text-box {
        padding: 0.5rem;
    }
    .row5 p {
        font-size: 14px;
    }
    #payButton img {
        height: 40px;
    }
}

</style>
