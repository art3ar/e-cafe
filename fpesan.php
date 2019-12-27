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
<div class="container-fluid" >
        <form name="pemesanan" action="" method="post">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 ">
                <table class="table" id="tablelogin">
                    <tr>
                        <td>Nama</td> 
                        <td> : </td>
                        <td> <input type="text" name="customername" placeholder="Atas Nama"> </td>
                    </tr>
                    <tr>
                        <td>No Meja </td> 
                        <td> : </td>
                        <td> <input type="text" name="tablenumber" placeholder="Nomor Meja Anda"> </td>
                    </tr>
                </table>
                </div>     
        
                <!--MENU HERE-->
       <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="thumbnail1">
                    <img id="image" src="c1.png" alt="....." class="img-responsive img-thumbnail" >
                            <div class="caption">
                                <h3>Americano</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga, iste culpa excepturi dolore impedit sapiente a amet sed, tenetur nisi esse rerum saepe consequuntur exercitationem voluptatem in id nihil.</p>
                                <input class="btn btn-success" type="button" name="add_americano" value="Americano Rp.25k" onClick="addAmericano();" />
                                <span class="success"><?php if (isset($message)) {
											echo $message;
                                        } ?></span>
                            </div>
                     </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="thumbnail2">
                    <img id="image" src="coooo.jpg" alt="....." class="img-responsive img-thumbnail" >
                            <div class="caption ">
                                <h3>Espresso</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga, iste culpa excepturi dolore impedit sapiente a amet sed, tenetur nisi esse rerum saepe consequuntur exercitationem voluptatem in id nihil.</p>
                                <input class="btn btn-success" type="button" name="add_espresso" value="Espresso Rp.30k" onClick="addEspresso();" />
                                <span class="success"><?php if (isset($message)) {
											echo $message;
                                        } ?></span>
                            </div>
                     </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="thumbnail3">
                        <img id="image" src="cooooo.jpg" alt="....." class="img-responsive img-thumbnail" > 
                            <div class="caption">
                                <h3>Cappucino</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fuga, iste culpa excepturi dolore impedit sapiente a amet sed, tenetur nisi esse rerum saepe consequuntur exercitationem voluptatem in id nihil.</p>
                                <input class="btn btn-success" type="button" name="add_cappucino" value="Cappucino Rp.25k" onClick="addCappucino();" />
                                <span class="success"><?php if (isset($message)) {
											echo $message;
                                        } ?></span>    
                            </div>
                     </div>
                </div>             
            </div>
        </div>
        
        <!--price here-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <table class="table table-bordered" id="table">
                        <tr>
                            <th>Menu</th>
                            <th>Harga</th>
                            <th>Select</th>
                        </tr>
                    <div class="product-item">
                    <!-- ITEMS HERE -->
                    </table>
                    </div>

                <div class ="borderless col-lg-4 col-md-4 col-sm-4" >
                    <input class="btn btn-md btn-danger" type="button" name="del_item" value="Delete" onClick="deleteRow();" />
                    <input class="btn btn-md btn-info" type="submit" name="save" value="Pesan" />
                </div>
            </div>
        </div>
    </div>
</div>           
    </form>

        
</body>

<SCRIPT>
        function addAmericano() {
			$("<div>").load("menu/americano.php", function() {
				$("#table").append($(this).html());
			});
		}

        function addEspresso() {
			$("<div>").load("menu/espresso.php", function() {
				$("#table").append($(this).html());
			});
		}
        function addCappucino() {
			$("<div>").load("menu/cappucino.php", function() {
				$("#table").append($(this).html());
			});
		}

        function deleteRow() {
			$('tr.product-item').each(function(index, item) {
				jQuery(':checkbox', this).each(function() {
					if ($(this).is(':checked')) {
						$(item).remove();
					}
				});
			});
		}

</SCRIPT>
</html>

<?php
if (!empty($_POST["save"])) {
	$conn = mysqli_connect("localhost", "root", "", "ecafe");
    $itemCount = count($_POST["item_name"]);
    $date = date("Y-m-d H:i:s");
	$itemValues = 0;
	$query = "INSERT INTO testing (customer,tablenumber,itemname,itemprice,datetime) VALUES ";
	$queryValue = "";
	for ($i = 0; $i < $itemCount; $i++) {
		if (!empty($_POST["item_name"][$i]) || !empty($_POST["item_price"][$i]) || !empty($_POST["customername"][$i]) || !empty($_POST["tablenumber"][$i])) {
			$itemValues++;
			if ($queryValue != "") {
				$queryValue .= ",";
			}
			$queryValue .= "('" . $_POST["customername"]. "','" . $_POST["tablenumber"]. "', '" . $_POST["item_name"][$i] . "','" . $_POST["item_price"][$i] . "','".$date."')";
		}
	}
	$sql = $query . $queryValue;
	if ($itemValues != 0) {
		$result = mysqli_query($conn, $sql);
		if (!empty($result)) $message = "Added Successfully.";
	}
}
?>