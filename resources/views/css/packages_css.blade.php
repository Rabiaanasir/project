<style>
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
