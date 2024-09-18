<style>
    .calculator-container {
      background-color: #fff;
      padding: 40px;
      /* max-width: 850px; */
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      /* font-family: 'Montserrat', sans-serif; */
    }

    h3 {
      text-align: center;
      font-size: 2.2rem;
      color: navy;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
      font-family: 'Montserrat', sans-serif;
      font-size: 20px;
    }

    th, td {
      padding: 15px;
      text-align: left;
    }

    th {
      /* background-color: goldenrod; */
      color: white;
      font-weight: 600;
      color: #333;
    }

    td {
      font-size: 1.5rem;
      border-bottom: 1px solid #ddd;
    }

    .quantity-container {
      display: flex;
      align-items: center;
      justify-content: left;
    }

    .quantity-btn {
      background-color: goldenrod;
      color: white;
      border: none;
      padding: 8px 18px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
    }

    .quantity-btn:disabled {
      background-color: #ccc;
      cursor: not-allowed;
    }

    .quantity-input {
      width: 90px;
      height: 40px;
      text-align: center;
      border: 1px solid #ddd;
      margin: 0 5px;
      border-radius: 4px;
      font-size: 1rem;
    }

    .total-row td {
      font-weight: bold;
      font-size: 1.2rem;
      color: #28a745;
      /* text-align: c; */
    }

    /* Updated smaller submit button */
    .submit-container {
  text-align: center; /* Centers the submit button horizontally */
  margin-top: 20px;   /* Adds some space above the submit button */
}

.submit-btn {
  display: inline-block;
  background-color: goldenrod; /* Green background */
  color: white;              /* White text color */
  padding: 12px 24px;        /* Padding for the button */
  font-size: 16px;           /* Font size */
  font-weight: bold;         /* Bold text */
  text-align: center;        /* Center text inside the button */
  text-decoration: none;     /* Remove underline from the link */
  border-radius: 5px;        /* Rounded corners */
  transition: background-color 0.3s ease; /* Smooth transition for hover effect */
}

.submit-btn:hover {
  background-color: rgb(243, 194, 69);
  color: #fff;
}

.submit-btn:active {
  background-color: #1e7e34; /* Even darker green when clicked */
  transform: scale(0.98);    /* Slightly shrink the button when clicked */
}

button {
  border: none;               /* Remove default button border */
  background: none;           /* No background for the button */
  padding: 0;                 /* Remove padding to fit the link */
}


    @media (max-width: 768px) {
      th, td {
        padding: 12px;
      }

      h1 {
        font-size: 1.8rem;
      }

      .quantity-btn {
        padding: 6px 10px;
        font-size: 14px;
      }

      .quantity-input {
        width: 40px;
        height: 35px;
      }

      .total-row td {
        font-size: 1.1rem;
      }

      .submit-btn {
        font-size: 0.9rem;
        padding: 8px 16px;
      }
    }
  </style>