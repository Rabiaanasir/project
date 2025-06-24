<style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #141a46;
            padding: 50px;
        }
        .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ffa500;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        margin-top: 20px;
        text-align: center;
    }

    .btn-primary:hover {
        background-color: #e69500;
    }

    .btn-secondary {
        background-color: #999;
    }

    .btn-secondary:hover {
        background-color: #777;
    }
        .profile-container {
            background: white;
            padding: 30px;
            margin: 0 auto;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
            font-weight: 800;
        }
        label {
            font-weight: 600;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #ffa500;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
        button:hover {
            background-color: #e69500;
        }
        .alert {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .profile-photo {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .profile-photo img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
.alerts {
    width: 90%;
    max-width: 600px;
    margin: 20px auto;
    font-family: 'Poppins', sans-serif;
}

.alert {
    padding: 15px 20px;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 14px;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    position: relative;
    animation: fadeIn 0.5s ease-in-out;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.alert ul {
    margin: 0;
    padding-left: 20px;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

    </style>
