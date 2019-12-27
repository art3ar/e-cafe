<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>

    

    .jumbotron{
        margin:0;
        padding:0;
    }

    .title{
        background-color: rgb(125,116,77,0.7);
    }

    .logoku{
        width:240px;
    }

    .slide1{
    background-image: url('co.jpg');
    height: 250px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    }
    .slide2{
    background-image: url('coffe1.jpg');
    height: 250px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    }
    .slide3{
    background-image: url('coo.jpg');
    height: 250px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    }

    form{
        margin:10px;
    }

    .thumbnail1{ 
        
        margin:10px;
        padding: 10px;
        width: 480px;
    }

    .thumbnail2{ 
     
        margin:10px;
        padding: 10px;
        width: 480px;
    }

    .thumbnail3{ 
        
        margin:10px;
        padding: 10px;
        width: 480px;
    }

    .caption{
        width: 280px;
    }

    #image{
    height: 250px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    }

    #tablelist{
        margin: 20px;
    }

    #btntb{
        margin: 10px;
    }
</style>

<head>
    <div class="container-fluid title">
        <div class="row">
            <div class="col-4">
                <img class="logoku" src="your-logo.png" alt="">
            </div>
        </div>
    </div>
   
    <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mycarousel" data-slide-to="1"></li>
                <li data-target="#mycarousel" data-slide-to="2"></li>
        </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide1"></div>
                </div>
                <div class="carousel-item">
                    <div class="slide2"></div>
                </div>
                <div class="carousel-item">
                    <div class="slide3"></div>
                </div>
            </div>
       
        <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>    
</head>

<body>
    <br>
<div class="container-fluid" >
    <div class="row">
        <div class="col text-center">
        <button class="btn btn-info" onclick="window.location.href = './viewpesanan.php';">View Pesanan</button>
        <br> <br>
        <button class="btn btn-success" onclick="window.location.href = './fpesan.php';">Halaman Pemesanan</button>
        </div>
    </div>
</div>    
</body>

</html>
