<?php


include "dbcon.php";


class singleview extends Connection{


private $my_id;


    public function single($id){
       
    $this->my_id=$id;
       
        $sql="SELECT * FROM users WHERE id='$this->my_id';";

        $send=$this->Connect()->query($sql);

        while($result=$send->fetch_assoc()){
            $result['id'];

            $result['b_name'];
            $result['upload'];
            $result['invest'];




echo'
<div class="tittle-line">
          <h5>'. $result['b_name'].'</h5>
          <div class="divider-1 small">
            <div class="divider-small"></div>
          </div>
        </div>
        <div>
          <div class="w-row">
            <div class="w-col w-col-6">
              <div>
                <div class="w-tabs" data-duration-in="300" data-duration-out="100">
                  <div class="w-tab-menu">
                    <!--<a class="w-tab-link w--current w-clearfix w-inline-block tab" data-w-tab="Tab 1">
                      <div class="li-ico tab-ico">
                        <div class="w-embed"><i class="fa fa-gift"></i>
                        </div>
                      </div>
                      <div class="tab-txt">Lightbox</div>
                    </a>
                    <a class="w-tab-link w-clearfix w-inline-block tab" data-w-tab="Tab 2">
                      <div class="li-ico tab-ico">
                        <div class="w-embed"><i class="fa fa-magic"></i>
                        </div>
                      </div>
                      <div class="tab-txt">Parallax</div>
                    </a>
                    <a class="w-tab-link w-clearfix w-inline-block tab" data-w-tab="Tab 3">
                      <div class="li-ico tab-ico">
                        <div class="w-embed"><i class="fa fa-life-ring"></i>
                        </div>
                      </div>
                      <div class="tab-txt">Top Support</div>
                    </a>-->
                  </div>
                  <div class="w-tab-content tab-content">
                    <div class="w-tab-pane w--tab-active w-clearfix" data-w-tab="Tab 1">
                      <div class="lightbox-tb" data-ix="show-lightbox-overlay">
                        <a class="w-lightbox w-inline-block lightbox" href="#">
                          <div class="light-overlay">
                            <div class="pico-wrp lico-wrp">
                              <div class="portfolio-ico" data-ix="zom-out-pico">
                                <div class="w-embed"><i class="fa fa-search"></i>
                                </div>
                              </div>
                            </div>
                          </div><img src="uploads/'. $result['upload'].'" width="400" alt="5506d0546429e1233057ff74_4.jpg">
                          <script type="application/json" class="w-json">
                            { "items": [{
                              "guid": "5506d0546429e1233057ff74",
                              "url": "images/4.jpg",
                              "fileName": "5506d0546429e1233057ff74_4.jpg",
                              "origFileName": "4.jpg",
                              "width": 800,
                              "height": 1062,
                              "size": 120822,
                              "type": "image"
                            }] }
                          </script>
                        </a>
                      </div>
                      <div class="tab-tx-wrapper">
                        <h5 style="font-size:26px; letter-spacing:3px;" class="portfolio-tittle blog-tittle">'. $result['b_name'].'</h5>
                        <p style="font-size:20px;">'. $result['nature'].'</p>
                          <br><br>
                           <p style="font-size:20px;"> '. $result['rc_bn'].'</p>
                          <br><br>
                           <p style="font-size:20px;">'. $result['invest'].'</p>
                          <br><br>
                           <p style="font-size:20px;">'. $result['email'].'</p>
                          
                      </div>
                    </div>
                    <div class="w-tab-pane" data-w-tab="Tab 2">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                      </div>
                      <ul class="w-list-unstyled ul">
                        <li class="w-clearfix li-list">
                          <div class="li-ico li-blue">
                            <div class="w-embed"><i class="fa fa-check"></i>
                            </div>
                          </div>
                          <p>Proin sapien ipsum porta.</p>
                        </li>
                        <li class="w-clearfix li-list">
                          <div class="li-ico li-blue">
                            <div class="w-embed"><i class="fa fa-check"></i>
                            </div>
                          </div>
                          <p>Praesent nonummy mi in odio. Phasellus consectetuer vestibulum elit.</p>
                        </li>
                        <li class="w-clearfix li-list">
                          <div class="li-ico li-blue">
                            <div class="w-embed"><i class="fa fa-check"></i>
                            </div>
                          </div>
                          <p>Praesent egestas neque eu enim. Ut tincidunt tincidunt erat.</p>
                        </li>
                        <li class="w-clearfix li-list">
                          <div class="li-ico li-blue">
                            <div class="w-embed"><i class="fa fa-check"></i>
                            </div>
                          </div>
                          <p>Nulla facilisi. Phasellus tempus. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor.</p>
                          
                        </li>
                      </ul>
                    </div>
                    <div class="w-tab-pane" data-w-tab="Tab 3">
                      <div class="w-row">
                        <div class="w-col w-col-6">
                          <div class="tab-tx-wrapper">
                            <h5 class="portfolio-tittle blog-tittle">Column 1</h5>
                            <p>In hac habitasse platea dictumst. Maecenas egestas arcu quis ligula mattis placerat.
                              <br>
                              <br>Quisque rutrum. Fusce vulputate eleifend sapien. Aenean posuere, tortor sed cursus feugiat.</p>
                          </div>
                        </div>
                        <div class="w-col w-col-6">
                          <div class="tab-tx-wrapper">
                            <h5 class="portfolio-tittle blog-tittle">Column 2</h5>
                            <p>In hac habitasse platea dictumst. Maecenas egestas arcu quis ligula mattis placerat.
                              <br>
                              <br>Quisque rutrum. Fusce vulputate eleifend sapien. Aenean posuere, tortor sed cursus feugiat.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-col w-col-6 res-space">
            <br><br>
                           <p style="font-size:20px;">'. $result['social_f'].'</p>
                          <br>
                          <br> <p style="font-size:20px;">'. $result['social_i'].'</p>
              <p style="font-size:20px;">'. $result['social_t'].'</p>
                <br>
                <br><p style="font-size:20px;"> '. $result['p_name'].'</p>
               <br>
                <br><p style="font-size:20px;">'. $result['phonenumber'].'</p>
              <br>
                <br><p style="font-size:20px;">'. $result['email'].'</p>
                <br>
                <br>
              <div class="space">
                <a class="w-clearfix w-inline-block button" href="#" data-ix="open-modal-v1">
                  <div class="btn-ico">
                    <div class="w-embed"><i class="fa fa-arrows-alt"></i>
                    </div>
                  </div>
                  <div class="btn-txt">leave a reply</div>
                </a>
              </div>
            </div>
          </div>
        </div>




';

        }
    
    }
}



?>