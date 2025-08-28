    <style>
  header {
    height: 80vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/The-10KW-Solar-Inverter-Single-Phase-Paving-the-Way-for-a-Sustainable-Future.webp');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
  }

  .header-content {
    text-align: center;
    padding: 1rem;
  }

  .header-content h2 {
    color: #fff;
    font-size: 4vw; /* Responsive font size */
    letter-spacing: 2px;
    font-weight: 700;
    margin: 0;
    padding: 0 1rem;
  }

  /* Media Queries for Responsive Header */
  @media (max-width: 1024px) {
    header {
      height: 70vh;
    }
    .header-content h2 {
      font-size: 5vw;
    }
  }

  @media (max-width: 768px) {
    header {
      height: 60vh;
    }
    .header-content h2 {
      font-size: 6vw;
    }
  }

  @media (max-width: 480px) {
    header {
      height: 50vh;
      background-position: center;
    }
    .header-content h2 {
      font-size: 8vw;
      line-height: 1.2;
    }
  }
        /* Sections Styling */
        .section1 {
          height: 100vh;
          background-color: rgb(249, 251, 253);
          padding: 2rem 1rem;
        }

        .text-box {
          margin: 0 7rem;
        }

        .text-box h2 {
          font-size: 2rem;
          font-weight: 600;
          text-align: center;
          color: navy;
          margin-top: 20px;
        }

        .text-box p {
          font-weight: 500;
          margin-bottom: 20px;
          font-size: 1rem;
          text-align: center;
        }

        .box {
          background-color: navy;
          color: #fff;
          padding: 1rem 3rem;
          margin: 2rem auto;
          text-align: center;
        }

        .box h3 {
          font-size: 1.5rem;
          font-weight: 700;
        }

        .box p {
          margin-top: 1rem;
        }

        .box button {
          padding: 10px 15px;
          background-color: darkcyan;
          color: #fff;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          font-size: 14px;
          margin-top: 1rem;
        }
button a{
    color: #fff;
}
        .box button:hover {
          background-color: #fff;
          color: #000;
        }

        hr {
          border: 1px solid rgb(7, 255, 255);
          width: 50%;
          margin: 10px auto;
        }

        /* Image Section Styling */
        .row {
          background-color: aliceblue;
          padding: 2rem 0;
        }

        .imgwrapper {
          display: flex;
          flex-direction: row;
          align-items: flex-start;
          width: 80%;
          margin: 0 auto;
          padding: 2rem 0;
        }

        .img {
          flex: 1;
          max-width: 300px;
          margin-left: 1rem;
        }

        .img2 {
          flex: 1;
          max-width: 400px;
          margin-right: 1rem;
        }

        .text, .text2 {
          flex: 1;
          padding: 0 1rem;

        }

        .text h2, .text2 h2 {
          font-size: 1.5rem;
          font-weight: 700;
        }

        .text p, .text2 p {
          font-size: 1rem;
          color: #000;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
          .section1 {
            padding: 2rem 1rem;
          }

          .text-box {
            margin: 0 4rem;
          }

          .imgwrapper {
            flex-direction: column;
            align-items: center;
          }

          .img, .img2 {
            width: 80%;
            margin: 1rem 0;
          }
        }

        @media (max-width: 768px) {
          .header-content h2 {
            font-size: 6vw;
          }

          .text-box {
            margin: 0 2rem;
          }

          .text-box h2 {
            font-size: 1.5rem;
          }

          .box {
            padding: 1rem;
          }

          .box h3 {
            font-size: 1.2rem;
          }

          .row {
            padding: 1rem 0;
          }

          .section-faq h1 {
            font-size: 1.8rem;
          }

          .faq-item .faq-question {
            font-size: 1rem;
          }
        }

        @media (max-width: 480px) {
          .header-content h2 {
            font-size: 8vw;
          }

          .text-box {
            margin: 0 1rem;
          }

          .text-box p {
            font-size: 0.9rem;
          }

          .box h3 {
            font-size: 1.1rem;
          }

          .box p, .box button {
            font-size: 0.9rem;
          }

          .row {
            padding: 1rem;
          }

          .img, .img2 {
            width: 100%;
          }

          .faq-item .faq-question {
            font-size: 1rem;
          }

          .faq-answer {
            font-size: 0.9rem;
          }
        }
      </style>
