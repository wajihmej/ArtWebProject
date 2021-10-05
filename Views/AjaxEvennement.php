<?php

include  "../Controller/EvenementC.php";

$eventC= new EvenementC();

if(!isset($_POST['str'])){
    $liste=$eventC->getEvents();
}
else{
    $liste = $eventC->rechercherTicket($_POST['str']);
}

                foreach ($liste as $row) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event-three__single" >
                            <div class="event-three__image">
                                <img src="<?php echo "../Admin/".$row['image']; ?>"width="150" height="300" alt="Awesome Image"/>
                                <h3 class="event-three__title"><a href="event-details.html"><?php echo $row['nom']; ?></a></h3><!-- /.event-three__title -->
                                <a href="#" class="event-three__cat">Type</a>
                            </div><!-- /.event-three__image -->
                            <div class="event-three__content">
                                <p class="event-three__text"><?php echo $row['informations']; ?></p>
                                <ul class="event-three__list list-unstyled">
                                    <li>
                                        <span>Date debut</span>
                                        <p><i class="fa fa-clock-o"></i><?php echo $row['date_debut']; ?></p>
                                    </li>
                                    <li>
                                        <span>Date fin</span>
                                        <p><i class="fa fa-clock-o"></i><?php echo $row['date_fin']; ?></p>
                                    </li>
                                    <li>
                                        <span>Lieu</span>
                                        <p><i class="fa fa-location-arrow"></i><?php echo $row['lieu']; ?></p>
                                    </li>
                                </ul><!-- /.event-three__list -->
                                <a href="VoirEvenement.php?id=<?php echo $row['id']; ?>" class="thm-btn event-three__btn"><span
                                        class="main-text">Plus de detailles</span> <span
                                        class="hover-text">Plus de detailles</span></a>
                            </div><!-- /.event-three__content -->
                        </div><!-- /.event-three__single -->
                    </div>
                    <?php
                }

?>