<style>
header{
    height: 80vh;
    background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('/images/build.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.header-content h1{
    color: white;

}
.header-content h2{
    color: white;

}
.header-content {
    position: absolute;
    text-align: center;
    top: 77%;
    left: 50%;
    transform: translate(-50%, -50%);
}
/**blog**/
/* .blog-heading{
    margin-left: 620px;
    justify-content: center;
    font-size: 20px;
}
.blog-heading h1{
    font-weight: 500;
    color: rgb(216, 62, 6);
}
h3{
    font-size: 45px;
  color: #000;
  font-weight: 550;
  margin-left: 2px;
}

/** Image Section Styling**
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
.text h1{
    display: flex;
    justify-content: start;
    text-align: start;
    padding: 20px;
    font-size: 25px;
    line-height: 28px;
}
.text p{
    padding-left: 30px;
    margin-left: 30px;
    padding: 0px;
    font-size: 28px;
    line-height: 95px;
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
.text2 h1{
    display: flex;
    justify-content: start;
    text-align: start;
    font-size: 25px;
    padding: 20px;
    line-height: 27px;
}
.img3{
    float: right;
    height: 330px;
    width: 500px;
    padding-left: 30px;
    margin-top: 50px;
}
.text3 h1{
    display: flex;
    justify-content: start;
    text-align: start;
    margin-left: 5px;
    padding: 20px;
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
.img4{
    float: left;
    height: 400px;
    width: 600px;
    padding-right: 90px;
    margin-top: 20px;
}
.text4 h1{
    display: flex;
    justify-content: start;
    text-align: start;
    margin-left: 5px;
    padding: 20px;
    font-size: 25px;
    line-height: 28px;
}
.text4 p{
    padding-left: 30px;
    margin-left: 30px;
    padding: 0px;
    font-size: 18px;
    line-height: 25px;
}
.videos h1{
    font-size: 30px;
   margin-left: 50px;
   color: rgb(4, 4, 149);
}
.videos{
   margin-left: 230px;
}*/
        h1{
            color:navy;
            font-weight: 600;
            font-size: 50px;
        }
        /* Main Blog Layout Styling */
        .blog-post {
            display: flex;
            flex-direction: row;
            gap: 20px;
            margin-bottom: 40px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            transition: transform 0.2s ease-in-out;
            font-family: 'Montserrat', sans-serif;
        }

        .blog-post:hover {
            transform: translateY(-5px); /* Slight lift on hover */
        }

        .blog-image {
            flex: 1;
            max-width: 300px;
            height: auto;
            overflow: hidden;
            border-radius: 8px;
        }

        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .blog-content {
            flex: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .blog-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .blog-description {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .blog-post {
                flex-direction: column;
                text-align: center;
            }

            .blog-image {
                max-width: 100%;
                margin: 0 auto 15px;
            }
        }
</style>
