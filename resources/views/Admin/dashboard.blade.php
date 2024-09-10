@extends('Admin.dashboard_css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css.dashboard_css') }}">
    <script src="https://kit.fontawesome.com/c9e3d92c29.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<section id="menu">
    <div class="logo">
        <img src="{{ asset('images/logo.jpeg') }}" alt="">
        <h2>Sun Source Solutions</h2>
    </div>

    <div class="items">
        <li><i class="fa-solid fa-table-columns"></i><a href="#">Dashboard</a></li>
        <li><i class="fab fa-uikit"></i><a href="#">UI Elements</a></li>
        <li><i class="fas fa-th-large"></i><a href="#">Tables</a></li>
        <li><i class="fas fa-edit"></i><a href="#">Forms</a></li>
        <li><i class="fab fa-cc-visa"></i><a href="#">Cards</a></li>
        <li><i class="fas fa-hamburger"></i><a href="#">Model</a></li>
        <li><i class="fas fa-chart-line"></i><a href="#">Blank</a></li>
            
    </div>
</section>
    
<section id="interface">
    <div class="navigation">
        <div class="n1">
            <div>
                <i id="menu-btn" class="fas fa-bars"></i>
            </div>
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
        </div>
        <div class="profile">
            <i  class="far fa-bell"></i>
            <img src="{{ asset('images/client.png') }}" alt="">
        </div>
    </div>

    <h3 class="i-name">Dashboard</h3>
    <div class="values">
        <div class="val-box">
            <i class="fas fa-users"></i>
            <div>
                <h3>8,267</h3>
                <span>New Users</span>
            </div>
        </div>
        <div class="val-box">
            <i class="fas fa-shopping-cart"></i>
            <div>
                <h3>200,521</h3>
                <span>Total Orders</span>
            </div>
        </div>
        <div class="val-box">
            <i class="fa-light fa-acorn"></i>
            <div>
                <h3>215,542</h3>
                <span>Products Sell</span>
            </div>
        </div>
        <div class="val-box">
            <i class="fas fa-dollar-sign"></i>
            <div>
                <h3>$677.89</h3>
                <span>This Month</span>
            </div>
        </div>
    </div>

    <div class="board">
        <table width="100%">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Title</td>
                    <td>Status</td>
                    <td>Role</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="people">
                        <img src="{{ asset('images/client2.jpg') }}" alt="">
                        <div class="people-de">
                            <h5>John Doe</h5>
                            <p>john@example.com</p>
                        </div>
                    </td>
                    <td class="people-des">
                        <h5>Software Engineer</h5>
                        <p>Web dev</p>
                    </td>
                    <td class="active">
                        <p>Active</p>
                    </td>
                    <td class="role">
                        <p>Owner</p>
                    </td>
                    <td class="edit"><a href="#">Edit</a></td>
                </tr>
                <tr>
                    <td class="people">
                        <img src="{{ asset('images/client2.jpg') }}" alt="">
                        <div class="people-de">
                            <h5>Oscar Rhys</h5>
                            <p>john@example.com</p>
                        </div>
                    </td>
                    <td class="people-des">
                        <h5>Software Engineer</h5>
                        <p>Web dev</p>
                    </td>
                    <td class="active">
                        <p>Active</p>
                    </td>
                    <td class="role">
                        <p>Owner</p>
                    </td>
                    <td class="edit"><a href="#">Edit</a></td>
                </tr>
                <tr>
                    <td class="people">
                        <img src="{{ asset('images/client2.jpg') }}" alt="">
                        <div class="people-de">
                            <h5>George Reece</h5>
                            <p>john@example.com</p>
                        </div>
                    </td>
                    <td class="people-des">
                        <h5>Software Engineer</h5>
                        <p>Web dev</p>
                    </td>
                    <td class="active">
                        <p>Active</p>
                    </td>
                    <td class="role">
                        <p>Owner</p>
                    </td>
                    <td class="edit"><a href="#">Edit</a></td>
                </tr>
                <tr>
                    <td class="people">
                        <img src="{{ asset('images/client2.jpg') }}" alt="">
                        <div class="people-de">
                            <h5>Thomas Joe</h5>
                            <p>john@example.com</p>
                        </div>
                    </td>
                    <td class="people-des">
                        <h5>Software Engineer</h5>
                        <p>Web dev</p>
                    </td>
                    <td class="active">
                        <p>Active</p>
                    </td>
                    <td class="role">
                        <p>Owner</p>
                    </td>
                    <td class="edit"><a href="#">Edit</a></td>
                </tr>
                <tr>
                    <td class="people">
                        <img src="{{ asset('images/client2.jpg') }}" alt="">
                        <div class="people-de">
                            <h5>Charlie Kylie</h5>
                            <p>john@example.com</p>
                        </div>
                    </td>
                    <td class="people-des">
                        <h5>Software Engineer</h5>
                        <p>Web dev</p>
                    </td>
                    <td class="active">
                        <p>Active</p>
                    </td>
                    <td class="role">
                        <p>Owner</p>
                    </td>
                    <td class="edit"><a href="#">Edit</a></td>
                </tr>
                <tr>
                    <td class="people">
                        <img src="{{ asset('images/client2.jpg') }}" alt="">
                        <div class="people-de">
                            <h5>John Doe</h5>
                            <p>john@example.com</p>
                        </div>
                    </td>
                    <td class="people-des">
                        <h5>Software Engineer</h5>
                        <p>Web dev</p>
                    </td>
                    <td class="active">
                        <p>Active</p>
                    </td>
                    <td class="role">
                        <p>Owner</p>
                    </td>
                    <td class="edit"><a href="#">Edit</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<script>
    // $('#menu-btn').click(function(){
    //     $('#menu').toggleClass("active");
    // })
    document.getElementById('menu-btn').addEventListener('click', function() {
    document.getElementById('menu').classList.toggle('active');
});
</script>
</body>
</html>