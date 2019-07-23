<?php
include "dbcon.php";

class toppitch extends Connection{

//private $id;

public function pitch(){

   //$this->id=$i;

    $sql="SELECT * FROM users ORDER BY id DESC LIMIT 5;";

    $send=$this->Connect()->query($sql);

    while($result=$send->fetch_assoc()){

        $result['id'];
            $result['b_name'];
            $result['nature'];
            $result['upload'];

       echo'
        
        <div class="w-clearfix grid" id="Grid">
        <article class="mix mix-3 ceo developer" data-ix="show-portfolio-overlay">
          <div class="tm-margin" data-ix="show-social-team">
            <div class="team-img-wrapper"><img src="uploads/'.$result['upload'].'" alt="team2.jpg">
              <div class="overlay-team" data-ix="move-social-team">
                <a class="w-inline-block soc-team" href="#">
                  <div class="w-embed"><i class="fa fa-facebook"></i>
                  </div>
                </a>
                <a class="w-inline-block soc-team" href="#">
                  <div class="w-embed"><i class="fa fa-twitter"></i>
                  </div>
                </a>
                <a class="w-inline-block soc-team" href="#">
                  <div class="w-embed"><i class="fa fa-linkedin"></i>
                  </div>
                </a>
                <a class="w-inline-block soc-team" href="#">
                  <div class="w-embed"><i class="fa fa-rss"></i>
                  </div>
                </a>
              </div>
            </div>



            <div class="space hero-center-div">

           
              <h5><span class="blue">'.$result['b_name'].'</span></h5>
              <div class="sub-tittle-team">'. $result['nature'].'</div>
              <div class="space">
                    <a href="view-pitch.php?id='.$result['id'].'"><button class="w-button button" type="submit">Pitch</button></a>
                  </div>
            </div>
        
          </div>
        </article>
        ';


    }


}

}



?>