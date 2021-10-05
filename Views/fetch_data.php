<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM tableaux
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 WHERE prix BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="product-one__single">
                            <div class="product-one__image">
                                <img src="'.$row['image'].'"  width="150" height="300" alt="Awesome Image" />
                            </div><!-- /.product-one__image -->
                            <div class="product-one__content">
                                <div class="product-one__content-left">
                                    <h3 class="product-one__title">
                                        <a href="Produit.php?id='.$row['id'].'&type=tableaux">'.$row['nom'].'</a>
                                    </h3><!-- /.product-one__title -->
                                    <p class="product-one__text">'.$row['prix'].' TND</p><!-- /.product-one__text -->
                                    <p class="product-one__stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(24 Reviews)</span>
                                    </p><!-- /.product-one__stars -->
                                </div><!-- /.product-one__content-left -->
                                <div class="product-one__content-right">
                                    <a href="AjouterPanier.php?id='. $row['id'].'&prix='.$row['prix'].'&type=tableaux" data-toggle="tooltip" data-placement="top" title="Ajouter Panier" class="product-one__cart-btn"><i class="egypt-icon-supermarket"></i></a>
                                </div><!-- /.product-one__content-right -->
                            </div><!-- /.product-one__content -->
                        </div><!-- /.product-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
					
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>