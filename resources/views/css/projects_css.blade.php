<style>
    header{
        height: 75vh;
        background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('/images/proj8.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .header-content h1{
    color: white;
    font-size: 47px;
    font-weight: 600;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.9),
    4px 4px 4px rgba(0, 0, 0, 0.9);
}

.header-content {
    position: absolute;
    text-align: center;
    top: 77%;
    left: 50%;
    transform: translate(-50%, -50%);
}
    .project-card {
        font-family: 'Montserrat', sans-serif;
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .project-card:hover {
        transform: scale(1.05);
    }

    .project-card img {
        transition: opacity 0.3s ease, filter 0.3s ease, transform 0.3s ease;
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .project-card:hover img {
        opacity: 0.6;
        filter: blur(2px);
    }

    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        font-size: 1.8rem;
        font-weight: bold;
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .project-card:hover .project-overlay {
        opacity: 1;
    }

    .btn {
        border-radius: 25px;
    }

    .container {
        max-width: 1200px;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: navy;
    }

    .row {
        row-gap: 30px;
    }
</style>
