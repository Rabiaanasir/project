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
        h1{
            color:navy;
            font-weight: 600;
            font-size: 50px;
        }
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
            transform: translateY(-5px);
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
