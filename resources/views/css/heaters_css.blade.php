<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
   font-family: 'Montserrat', sans-serif;
}

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

.section1, .key-diff {
    padding: 2rem 5%;
    background-color: #f9fbfd;
}

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

    </style>
