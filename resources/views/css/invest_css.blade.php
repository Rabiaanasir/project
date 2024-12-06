<style>
header{
        height: 400px;
        background:url('/images/Start Investing for the First Time 1200x600.jpg') no-repeat center/cover;
      }
.font{
        font-family: 'Montserrat', sans-serif;
      }
#hero {
    color: #333;
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background: #f4f4f4;
}

.hero-content h2 {
    font-size: 2.5rem;
    color: navy;
}

.hero-content p {
    font-size: 1.2rem;
    margin: 20px 0;
}

.cta-button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1rem;
}

.cta-button:hover {
    background-color: #f8b400;
}

/* About Section */
#about {
    padding: 50px 0;
    text-align: center;
}

#about h2 {
    font-size: 3rem;
    color: navy;
    margin-bottom: 20px;
}

#about p {
    font-size: 1.4rem;
    line-height: 1.8;
}

/* Benefits Section */
.benefits-section {
    background-color: #f4f4f4;
    padding: 50px 0;
    text-align: center;
}
.benefits {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
.benefit-card {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 30%;
    margin-bottom: 20px;
    text-align: center;
}

.benefit-card h3 {
    font-size: 1.6rem;
    margin-bottom: 10px;
   color: navy;
}
.benefit-card p {
    font-size: 1.2rem;
    color: #666;
}

/* Form Section */
.form-section {
    padding: 50px 0;
    background-color: #f8f8f8;
}
.form-section h2{
    font-size: 3rem;
    color: navy;
    display: flex;
    justify-content: center;
}
.form-section p{
    font-size: 1.3rem;
    display: flex;
    justify-content: center;
}
.investment-form {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto;
    text-align: left;
}
.investment-form label {
    font-size: 1.1rem;
    margin: 10px 0 5px;
    display: block;
}

.investment-form input,
.investment-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.submit-button {
    background-color: #f8b400;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    font-size: 1rem;
}

.submit-button:hover {
    background-color: #333;
}


/* Responsive Design */
@media (max-width: 768px) {
    .benefits {
        flex-direction: column;
    }

    .benefit-card {
        width: 100%;
    }

    .hero-content h2 {
        font-size: 2rem;
    }
}

    </style>
