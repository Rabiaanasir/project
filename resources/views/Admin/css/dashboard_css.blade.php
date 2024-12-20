
    {{-- <link rel="stylesheet" href="{{ asset('css/admin-panel.css') }}"> --}}
    {{-- @include('Admin.css.dashboard_css') --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> --}}

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:ital,wght@0,200;1,300&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
    }
    body{
        width: 100%;
       background: #e5e7eb;
       position: relative;
       display: flex;
    }
    /* #menu{
        /* background-color: #141a46; *
        background: #111827;
        width: 300px;
        height: auto;
        position: fixed;
        top: 0;
        left: 0;
    } */
    #menu {
    background: #111827;
    width: 300px;
    height: 100vh; /* Set the sidebar to take the full viewport height */
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto; /* Enables vertical scrolling */
}

/* Optional: Customize the scrollbar (for webkit browsers like Chrome, Edge, Safari) */
#menu::-webkit-scrollbar {
    width: 8px;
}

#menu::-webkit-scrollbar-thumb {
    background-color: #4b5563; /* Customize scrollbar color */
    border-radius: 4px;
}

#menu::-webkit-scrollbar-track {
    background-color: #1f2937; /* Customize scrollbar track color */
}

    #menu .logo{
        display: flex;
        align-items: center;
        /* background-color: #fff; */
        /* padding: 30px 0 0 30px; */
    }
    #menu .logo img{
        width: 290px;
        /* margin-right: 15px; */
    }
    #menu .items{
        margin-top: 40px;
    }
    #menu .items li{
        list-style: none;
        padding: 15px 0;
        transition: 0.3s ease;
        border-left: 4px solid #fff;
    }
    #menu .items li:hover{
        background: #253047;
        cursor: pointer;
    }
    #menu .items li i{
        color: rgb(134,141,151);
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        font-size: 14px;
        margin: 0 10px 0 25px;
    }
    #menu .items li:hover i,
    #menu .items li:hover a{
        color: #f3f4f6;
    }
    #menu .items li a{
        text-decoration: none;
        color: rgb(134,141,151);
        font-weight: 300px;
        transition: 0.3s ease;
    }
a{
    color: rgb(134,141,151);
    text-decoration: none;
}
a:hover{
    color: #e5e7eb;
    text-decoration: none;
}
    #interface{
        width: calc(100% - 300px);
        margin-left: 300px;
        position: relative;
    }
    #interface .navigation{
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fff;
        padding: 15px 30px;
        border-bottom: 3px solid #594ef7;
        /* position: fixed; */
        /* width: calc(100% - 300px); */
        width: auto;
    }
    #interface .navigation .search{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 10px 14px;
        border: 1px solid #d7dbe6;
        border-radius: 4px;
    }
    #interface .navigation .search i{
        margin-right: 14px;
    }
    #interface .navigation .search input{
        border: none;
        outline: none;
        font-size: 14px;
    }
    #interface .navigation .profile{
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    #interface .navigation .profile i{
        margin-right: 20px;
        font-size: 19px;
        font-weight: 400;
    }
    #interface .navigation .profile img{
        width: 30px;
        height: 30px;
        object-fit: cover;
        border-radius: 50%;
    }
    .n1{
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    #menu-btn{
        display: none;
        color: #2b2b2b;
        font-size: 20px;
        cursor: pointer;
        margin-right: 20px;
    }
    .i-name{
        color:#444a53;
        padding: 30px 30px 0 30px;
        font-size: 24px;
        font-weight: 700;
        margin-top: 20px;
    }
    .values{
        padding: 30px 30px 0 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }
    .values .val-box{
        background: #fff;
        width: 235px;
        padding: 16px 20px;
        border-radius: 5px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .values .val-box i{
        font-size: 25px;
        width: 60px;
        height: 60ox;
        line-height: 60px;
        border-radius: 50%;
        text-align: center;
        color:#fff;
        margin-right: 15px;
    }
    .values .val-box:nth-child(1) i{
        background: #7874ec;
    }
    .values .val-box:nth-child(2) i{
        background: #5c8af0;
    }
    .values .val-box:nth-child(3) i{
        background: #e4fd99;
    }
    .values .val-box:nth-child(4) i{
        background: #74daec;
    }
    .values .val-box h3{
        font-size: 18px;
        font-weight: 800;
    }
    .values .val-box span{
        font-size: 15px;
        color: #828997;
    }
    .board {
            /* margin-top: 30px; */
            padding: 20px; /* Padding inside the board container */
            background-color: #ffffff;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
            margin: 30px;
        }
    @media (max-width:769px){
        #menu{
            width: 270px;
            position: fixed;
            left: -270px;
            transition: 0.3s ease;
        }
        #menu.active{
            left: 0px;
        }
        #menu-btn{
            display: initial;
        }
        #interface{
            width: 100%;
            margin-left: 0px;
            display: inline-block;
            transition: 0.3s ease;
        }
        #menu.active~#interface{
            width: calc(100% - 270px);
            margin-left: 270px;
            transition: 0.3s ease;
        }
        #interface .navigation{
            width: 100%;
        }
        .values{
            padding: 30px 30px 0 30px;
            justify-content: flex-start;
        }
        .values .val-box{
            padding: 16px 20px;
            margin: 10px 20px 10px 0;
        }

    }
    @media (max-width:477px) {
        #interface .navigation{
            padding: 15px;
        }
        #interface .navigation .search input{
            width: 150px;
        }
        .i-name{
            padding: 30px 15px 0 15px;
        }
        .values{
            padding: 15px 15px 0 15px;
        }
        .values .val-box{
            width: 100%;
            margin: 8px 0;
        }
    }
    </style>

