<?php include('header.php');?>

<!-- <img src="home-banner.png" width="100%"> -->
<style type="text/css">
     body, p, h1, h2, h3, h4, h5, h6, span, a {
       /* font-family: 'Catamaran', sans-serif !important;*/
     }
      *{ margin: 0;}
      #pics img{display: none;  background-size: cover;
      object-position: top center;}
      #menu_vennela {
    position:fixed;
    top:0px;
    width:100%; 
    height:70px; 
    background-color:#fff;
    padding-top: 10px;
    color: #FFFFFF;
    z-index:9999;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
}
/*.row{
  margin-left: 0px !important;
  margin-right: 0px !important;
}*/
      .white{
        color: #fff !important;
      }
      .home-banner {
         background-image:url("mallika-spine-banner_witoutspine.jpg");
         background-repeat: no-repeat;
         background-size: cover;
      /*height: 100vh;*/
         object-position: top center;
      }
      /*.indexHomeImg{
          background-image: url("docbackground.jpg");
          min-height: 100%;
          position: relative;
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
      }*/
      .service_tab li{  
         margin-bottom: 50px;

      }
      .mainCarousel{
        padding-top: 49px;
      }
      .testimonial_section:before {
         background: #f9f9f9;
      }
      .testimonial_section .testimonial_slider .testi_content .inner .postText.reverse_shape:after{
         transform: rotate(66deg);
         left: 420px;
      }
      .testimonial_section .testimonial_slider .testi_content .inner .postText.reverse_shape{
         background:#43b9f6;
      }
      .testimonial_section {
         background: none !important;
         height: 650px !important;
      }
      .no-padding{
         padding: 0px !important;
      }
      .whiteBG{
         color: #fff;
      }
      .marg20-top{
         margin-top: 20px;
      }
      .media.active .media-middle h5 {
          color: #43b9f6 !important;
      }
      .media.active ul li{
        font-size: 16px !important;
      }
      body{
    background-image: url("home-background1.jpg") !important;
    min-height: 100%;
    position: relative;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    overflow-x: hidden;
}
.whyMallikaText{
  line-height: 27px !important;
    font-size: 16px !important;
    font-weight: normal !important;
}
p{
  font-size: 16px;
}
.serviceImg img{
  padding-bottom: 20px;
}
.mBtn{
  background: #2e9bdc;
  color: #fff;
  border-radius: 5px;
  position: absolute;
  top:  30%;
  left: 50%;
  z-index: 9999;
  }
  .mBtn:hover{
    color: #fff;
  }
  .pad10{
  padding: 10px !important;
}
.awards-dialog{
  width: 80% !important;
  padding-top: 1% !important; 
}
.awards-dialog .modal-content{
  height: 87vh;
  min-height: 87vh;
}
.carousel-indicators li{
  background: #2e9bdc;
}
   </style>
<script src="https://code.jquery.com/jquery-latest.js"></script>
         <div class="mainCarousel clearfix" style=" ">
            <div class="col-md-12 no-padding clearfix" style="">
                 <div id="myCarousel" class="carousel slide clearfix" data-ride="carousel">
                <ol class="carousel-indicators clearfix">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                  <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner clearfix">
                   <div class="item active">
                    <img src="homebanner1.jpg" alt="New york" style="width:100%;">
                  </div>
                  <div class="item ">
                    <img src="awardsBabber.jpg" alt="Los Angeles" style="width:100%;">
                  </div>
                  <div class="item">
                    <img src="homebanner2.jpg" alt="Los Angeles" style="width:100%;">
                  </div>
                  <div class="item" >
                    <a href="#myModalawards" title="Click Here" data-toggle="modal">
                      <img src="awardCertificates.jpg"  alt="Chicago" style="width:100%;">
                      <a class="btn mBtn" href="awards">Click here</a>
                    </a>
                  </div>
                
                  <div class="item">
                    <img src="homebanner4.jpg" alt="New york" style="width:100%;">
                  </div>

                 

                  
                </div>
                
              </div>
            </div>
         </div>

<!-- <h1>This pen is
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "nerdy.", "simple.", "pure JS.", "pretty.", "fun!" ]'></span>
</h1> -->

<div class="modal fade" id="myModalawards" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog awards-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background: #2e9bdc;">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h4 class="modal-title" style="color: #fff;"> Awards</h4>
        </div>
        <div class="modal-body">
           <div class="col-sm-12" style="background:#f9f9f9; margin-bottom: 30px;">
      <div class="col-md-12 no-padding">
     
    <div class="tz-gallery">
      <div class="col-md-12 no-padding">
        <div class="">
            <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="gallery/aw1.jpg">
                    <img src="gallery/aw1.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="gallery/aw2.jpg">
                    <img src="gallery/aw2.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="gallery/aw4.jpg">
                    <img src="gallery/aw4.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="gallery/aw5.jpg">
                    <img src="gallery/aw5.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/1.jpg">
                    <img src="images/certi/1.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/2.jpg">
                    <img src="images/certi/2.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/3.jpg">
                    <img src="images/certi/3.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/4.jpg">
                    <img src="images/certi/4.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/5.jpg">
                    <img src="images/certi/5.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/6.jpg">
                    <img src="images/certi/6.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/7.jpg">
                    <img src="images/certi/7.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/8.jpg">
                    <img src="images/certi/8.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/9.jpg">
                    <img src="images/certi/9.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
             <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="images/certi/10.jpg">
                    <img src="images/certi/10.jpg" alt="Park" style="height:207px;">
                </a>
            </div>

            <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="gallery/aw8.jpg">
                    <img src="gallery/aw8.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="gallery/aw10.jpg">
                    <img src="gallery/aw10.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="gallery/aw12.jpg">
                    <img src="gallery/aw12.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="gallery/aw15.jpg">
                    <img src="gallery/aw15.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-3 col-md-3 no-padding pad10">
                <a class="lightbox" href="gallery/aw5.jpg">
                    <img src="gallery/aw5.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
        </div>
      </div>
    </div>

   </div>
</div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


<div class='sd-full-width indexHomeImg clearfix' >
   <div class="vc_row wpb_row vc_row-fluid" style="border-style: none;">
      <div class="container-fluid" style="padding: 0;">
         <div class="sd-centered-wrapper">
            <div class="wpb_column vc_column_container vc_col-sm-12">
               <div class="">
                  <div class="wpb_wrapper">
                     <div class="service_tab" style="background-color: rgba(64, 77, 95, 0.8); margin: 0;"> 
                         <div class="titleRow" style="padding: 10px; margin-bottom: 0px;">
                          <div class="container">
                              <h2 class="" style="color: #43b9f6;">Bringing <img src="images/Spine-with-B.png" style="padding-bottom: 10px;" />ack smiles since years</h2>
                              <div class="marg20-top">
                                 <p style="color:#fff; font-size:16px; line-height:27px; text-transform:none;text-align: justify;">Mallika Spine Center commenced its operations with a principled stance of making the best care available for every patient so as to immediately evict them from their pain. In addition, we endeavor to educate and inform each patient about the importance of preventative health measures. 

The track record that we achieved over these years speaks itself about our dedication and commitment to our patients, their families, and the community at large. Our in-house facilities are sophisticated, clean, and modern endowed with the latest technology. Our medical staff and office personnel are professional to the core as we are on par in our specialty with renowned global medical/health facilities.
You will notice yourself of the difference right away when you first step into our World Class Spine Facility. </p>
                                  <p><a href="aboutlanding" style="color: #43b9f6;">Read More...</a></p>
                              </div>
                         </div> 
                         </div> 
                      </div>
                     <div class=" service_tab servicespad" >
                        <div class="titleRow">
                           <h2>SERVICES</h2>
                        </div>
                        <div class="">
                           <!-- Nav tabs -->
                           <ul class="nav nav-tabs nav-justified" role="tablist" id="service_tab">
                              <style>
                                 .service_tab #service_tab li a span.services46 {
                                 background-image: url(DEGENERATIVE-SPINE-2.png);
                                 }
                                 .service_tab #service_tab li a span.services46.active{
                                 background-image: url(DEGENERATIVE-SPINE-2-ˍwhite.png);
                                 }
                              </style>
                              <li id="serviceid46" role="presentation" class="active">
                                 <a href="#46" aria-controls="46" role="tab" data-toggle="tab">
                                 <span class="services46 active"></span>Degenerative Spine</a>
                              </li>
                              <style>
                                 .service_tab #service_tab li a span.services38 {
                                 background-image: url(SPINALINFECTIONS.png);
                                 }
                                 .service_tab #service_tab li a span.services38.active{
                                 background-image: url(SPINALINFECTIONS-W.png);
                                 }
                              </style>
                              <li id="serviceid38" role="presentation" class="">
                                 <a href="#38" aria-controls="38" role="tab" data-toggle="tab">
                                 <span class="services38 "></span>Spinal Infections</a>
                              </li>
                              <style>
                                 .service_tab #service_tab li a span.services44 {
                                 background-image: url(SPINALDEFORMITY.png);
                                 }
                                 .service_tab #service_tab li a span.services44.active{
                                 background-image: url(SPINALDEFORMITY-W.png);
                                 }
                              </style>
                              <li id="serviceid44" role="presentation" class="">
                                 <a href="#44" aria-controls="44" role="tab" data-toggle="tab">
                                 <span class="services44 "></span>Spinal Deformity</a>
                              </li>
                              <style>
                                 .service_tab #service_tab li a span.services42 {
                                 background-image: url(CRANIO.png);
                                 }
                                 .service_tab #service_tab li a span.services42.active{
                                 background-image: url(CRANIO-W.png);
                                 }
                              </style>
                              <li id="serviceid42" role="presentation" class="">
                                 <a href="#42" aria-controls="42" role="tab" data-toggle="tab">
                                 <span class="services42 "></span>Cranio-Vertebral Pathologies</a>
                              </li>
                              <style>
                                 .service_tab #service_tab li a span.services40 {
                                 background-image: url(SKELETAL.png);
                                 }
                                 .service_tab #service_tab li a span.services40.active{
                                 background-image: url(SKELETAL-W.png);
                                 }
                              </style>
                              <li id="serviceid40" role="presentation" class="">
                                 <a href="#40" aria-controls="40" role="tab" data-toggle="tab">
                                 <span class="services40 "></span>Skeletal Fluorosis</a>
                              </li>
                              <style>
                                 .service_tab #service_tab li a span.services36 {
                                 background-image: url(SPINALTUMOURS.png);
                                 }
                                 .service_tab #service_tab li a span.services36.active{
                                 background-image: url(SPINALTUMOURS-W.png);
                                 }
                              </style>
                              <li id="serviceid36" role="presentation" class="">
                                 <a href="#36" aria-controls="36" role="tab" data-toggle="tab">
                                 <span class="services36 "></span>Spinal Tumours</a>
                              </li>
                           </ul>
                           <div class="tab-content serviceImg">
                              <div role="tabpanel" class="tab-pane active" id="46">
                                 <div class="col-sm-6">
                                    <div class=" m0">
                                       <img width="555" height="363" src="Degenerative-spine.jpg" class="img-responsive wp-post-image" alt="dental" srcset="Degenerative-spine.jpg" sizes="(max-width: 555px) 100vw, 555px" />                                                                              
                                       <!-- <div class="ts">Trusted Services</div> -->
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class=" m0">
                                       <h3>Degenerative Spine</h3>
                                       <p style="text-align: justify;">The spine is a complex structure comprised of muscles, vertebrae, cartilage, discs and ligaments, all of which naturally deteriorate as we age. In fact, the joints of the spine are more susceptible to deterioration than any other region of the body. Degenerative spinal conditions, particularly those involving the shock-absorbing discs, shouldn’t be taken lightly. Our discs act as protective cushions and prevent our vertebrae from grinding together. Any disruption can compress and aggravate nerves, cause pain and discomfort and even limit mobility.</p>
                                       <a href="DEGENERATIVE" class="view_all" style="border-radius: 5px;">Read More</a>
                                    </div>
                                 </div>
                              </div>
                              <div role="tabpanel" class="tab-pane " id="38">
                                 <div class="col-sm-6">
                                    <div class=" m0">
                                       <img width="555" height="363" src="spinal-infections.jpg" class="img-responsive wp-post-image" alt="dna" srcset="spinal-infections.jpg" sizes="(max-width: 555px) 100vw, 555px" />                                                                              
                                       <!-- <div class="ts">Trusted Services</div> -->
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="m0">
                                       <h3>Spinal Infections </h3>
                                       <p>A spinal infection rarely affects the nerves in the spine. However, the infection may move into the spinal canal and cause an epidural abscess, which can place pressure on the neural elements. If this happens in the cervical or thoracic spine, it can result in paraplegia or quadriplegia. If it happens in the lumbar spine it can result in cauda equina syndrome (a syndrome that leads to bowel and bladder incontinence, saddle anesthesia, and possible lower extremity weakness).</p>
                                       <a href="spinalInfections" class="view_all" style="border-radius: 5px;">Read More</a>
                                    </div>
                                 </div>
                              </div>
                              <div role="tabpanel" class="tab-pane " id="44">
                                 <div class="col-sm-6">
                                    <div class="m0">
                                       <img width="555" height="363" src="SPINAL-DEFORMITY.jpg" class="img-responsive wp-post-image" alt="ear" srcset="SPINAL-DEFORMITY.jpg" sizes="(max-width: 555px) 100vw, 555px" />                                                                              
                                       <!-- <div class="ts">Trusted Services</div> -->
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="m0">
                                       <h3>Spinal Deformity </h3>
                                       <p>The spine is made up of over 25 small bones called vertebrae that support the upper body. The cervical spine (C-spine) is the upper portion, comprised of seven vertebrae. It supports the neck and head. The thoracic spine (T-spine) is comprised of 12 vertebrae, which connect to the rib cage and support the torso. The lumbar spine (L-spine) has five large vertebrae that support most of the body’s mass and weight. The sacrum is the base of the spine, and in most people, is comprised of 2-4 partially fused bones terminating in the coccyx (commonly known as the tailbone) within the pelvis.</p>
                                       <a href="spinalDeformity" class="view_all" style="border-radius: 5px;">Read More</a>
                                    </div>
                                 </div>
                              </div>
                              <div role="tabpanel" class="tab-pane " id="42">
                                 <div class="col-sm-6">
                                    <div class="m0">
                                       <img width="555" height="363" src="CRANIO-VERTEBRAL-PATHOLOGIES.jpg" class="img-responsive wp-post-image" alt="emergency" srcset="CRANIO-VERTEBRAL-PATHOLOGIES.jpg" sizes="(max-width: 555px) 100vw, 555px" />                                                                              
                                       <!-- <div class="ts">Trusted Services</div> -->
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="m0">
                                       <h3>Cranio-Vertebral Pathologies </h3>
                                       <p>This dedicated volume in the series Advances and Technical Standards in Neurosurgery (ATSN) provides a comprehensive approach to diseases of the craniovertebral junction (CVJ) and their management based on the multidisciplinary cooperation of neurosurgeons, anatomists, neuroradiologists, and neuroanesthesiologists. The contributing authors represent the most renowned clinical and surgical experts from Europe and beyond.</p>
                                       <a href="carnioVertebral" class="view_all" style="border-radius: 5px;">Read More</a>
                                    </div>
                                 </div>
                              </div>
                              <div role="tabpanel" class="tab-pane " id="40">
                                 <div class="col-sm-6">
                                    <div class="m0">
                                       <img width="555" height="363" src="SKELETAL-FLUOROSIS2.jpg" class="img-responsive wp-post-image" alt="general" srcset="SKELETAL-FLUOROSIS2.jpg" sizes="(max-width: 555px) 100vw, 555px" />                                                                              
                                       <!-- <div class="ts">Trusted Services</div> -->
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="m0">
                                       <h3>Skeletal Fluorosis </h3>
                                       <p>Symptoms are mainly promoted in the bone structure. Due to a high fluoride concentration in the body, the bone is hardened and thus less elastic, resulting in an increased frequency of fractures. Other symptoms include thickening of the bone structure and accumulation of bone tissue, which both contribute to impaired joint mobility. Ligaments and cartilage can become ossified.</p>
                                       <a href="skeletalFluorosis" class="view_all" style="border-radius: 5px;">Read More</a>
                                    </div>
                                 </div>
                              </div>
                              <div role="tabpanel" class="tab-pane " id="36">
                                 <div class="col-sm-6">
                                    <div class="m0">
                                       <img width="555" height="363" src="SPINAL-TUMOURS.jpg" class="img-responsive wp-post-image" alt="tab" srcset="SPINAL-TUMOURS.jpg" sizes="(max-width: 555px) 100vw, 555px" />                                                                              
                                       <!-- <div class="ts">Trusted Services</div> -->
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="m0">
                                       <h3>Spinal Tumours </h3>
                                       <p>A spinal tumor is an abnormal mass of tissue within or surrounding the spinal cord and/or spinal column. These cells grow and multiply uncontrollably, seemingly unchecked by the mechanisms that control normal cells. Spinal tumors can be benign (non-cancerous) or malignant (cancerous). Primary tumors originate in the spine or spinal cord, and metastatic or secondary tumors result from cancer spreading from another site to the spine.</p>
                                       <a href="spinalTumours" class="view_all" style="border-radius: 5px;">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
  <!--  <div class="vc_row wpb_row vc_row-fluid vc_custom_1480445106165 vc_row-has-fill" style="border-style: none;">
      <div class="container">
         <div class="sd-centered-wrapper">
            <div class="wpb_column vc_column_container vc_col-sm-12">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <div class="row contentRowPad">
                        <div class="m0 titleRow">
                           <h5>From Our Blog</h5>
                           <h2>Recent Post</h2>
                        </div>
                        <div class="recent_post_home recent_post_home3">
                           <div class="col-sm-12 col-md-6">
                              <div class="media border_bottom">
                                 <div class="media-left">
                                    <a href="we-are-having-department-added-to-us-3/index.html"><img width="185" height="137" src="wp-content/uploads/2015/10/12-new-185x137.jpg" class="attachment-medical-pro-post-thumb size-medical-pro-post-thumb wp-post-image" alt="12-new" /></a>
                                 </div>
                                 <div class="media-body">
                                    <a href="we-are-having-department-added-to-us-3/index.html">
                                       <h4>WE ARE HAVING DEPARTMENT TO US</h4>
                                    </a>
                                    <div class="row m0 meta">By : <a href="author/admin/index.html" title="Posts by admin" rel="author">admin</a> &nbsp; on : <a href="#">October 1, 2015</a></div>
                                    <p>Suspendisse sed viverra ex. Fusce et lacus a ex rutrum tristique pelle... </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 col-md-6">
                              <div class="media border_bottom">
                                 <div class="media-left">
                                    <a href="we-are-having-department-added-to-us-2/index.html"><img width="185" height="137" src="wp-content/uploads/2015/10/21_new-185x137.jpg" class="attachment-medical-pro-post-thumb size-medical-pro-post-thumb wp-post-image" alt="21_new" /></a>
                                 </div>
                                 <div class="media-body">
                                    <a href="we-are-having-department-added-to-us-2/index.html">
                                       <h4>WE ARE HAVING DEPARTMENT TO US</h4>
                                    </a>
                                    <div class="row m0 meta">By : <a href="author/admin/index.html" title="Posts by admin" rel="author">admin</a> &nbsp; on : <a href="#">October 1, 2015</a></div>
                                    <p>Suspendisse sed viverra ex. Fusce et lacus a ex rutrum tristique pelle... </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 col-md-6">
                              <div class="media border_bottom">
                                 <div class="media-left">
                                    <a href="we-are-having-department-added-to-us/index.html"><img width="185" height="137" src="wp-content/uploads/2015/10/31-new-185x137.jpg" class="attachment-medical-pro-post-thumb size-medical-pro-post-thumb wp-post-image" alt="31-new" /></a>
                                 </div>
                                 <div class="media-body">
                                    <a href="we-are-having-department-added-to-us/index.html">
                                       <h4>WE ARE HAVING DEPARTMENT TO US</h4>
                                    </a>
                                    <div class="row m0 meta">By : <a href="author/admin/index.html" title="Posts by admin" rel="author">admin</a> &nbsp; on : <a href="#">October 1, 2015</a></div>
                                    <p>Suspendisse sed viverra ex. Fusce et lacus a ex rutrum tristique pelle... </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 col-md-6">
                              <div class="media border_bottom">
                                 <div class="media-left">
                                    <a href="i-am-video-post-type/index.html"><img width="185" height="137" src="wp-content/uploads/2015/09/13-630x3001-185x137.jpg" class="attachment-medical-pro-post-thumb size-medical-pro-post-thumb wp-post-image" alt="13-630x300" /></a>
                                 </div>
                                 <div class="media-body">
                                    <a href="i-am-video-post-type/index.html">
                                       <h4>I am video post type</h4>
                                    </a>
                                    <div class="row m0 meta">By : <a href="author/admin/index.html" title="Posts by admin" rel="author">admin</a> &nbsp; on : <a href="#">September 1, 2015</a></div>
                                    <p>Suspendisse sed viverra ex. Fusce et lacus a ex rutrum tristique pelle... </p>
                                 </div>
                              </div>
                           </div>
                           <a href="blog-version-1/index.html" class="view_all">view all posts</a>                
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
  <!--  <div class="vc_row wpb_row vc_row-fluid vc_custom_1476009443843 vc_row-has-fill" style="border-style: none;">
      <div class="container">
         <div class="sd-centered-wrapper">
            <div class="wpb_column vc_column_container vc_col-sm-12">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <div class="about_medicalpro_row">
                        <div class="">
                           <div class="row titleRow title-white">
                              <h5>GENERAL INFORMATION</h5>
                              <h2>OUR DEPARTMENTS</h2>
                           </div>
                           <div class="">
                              <ul class="nav nav-tabs department_tab" role="tablist">
                                 <li role="presentation" class="active"><a href="#21" aria-controls="21" role="tab" data-toggle="tab">dental care</a></li>
                                 <li role="presentation" class=""><a href="#19" aria-controls="19" role="tab" data-toggle="tab">nurology</a></li>
                                 <li role="presentation" class=""><a href="#17" aria-controls="17" role="tab" data-toggle="tab">cardiac clinic</a></li>
                                 <li role="presentation" class=""><a href="#15" aria-controls="15" role="tab" data-toggle="tab">cancer care</a></li>
                                 <li role="presentation" class=""><a href="#13" aria-controls="13" role="tab" data-toggle="tab">rehabilitation center</a></li>
                                 <li role="presentation" class=""><a href="#11" aria-controls="11" role="tab" data-toggle="tab">general health care</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane active" id="21">
                                    <div class="row m0 about_medicalpro">
                                       <div class="row m0 inner">
                                          <div class="col-sm-12 col-md-6 img">
                                             <div class="row">
                                                <img width="569" height="459" src="wp-content/uploads/2015/09/about-5.jpg" class="img-responsive wp-post-image" alt="about-5" srcset="http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-5.jpg 569w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-5-300x242.jpg 300w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-5-42x34.jpg 42w" sizes="(max-width: 569px) 100vw, 569px" />                                    
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-6 content">
                                             <div class="row">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                                <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus....</p>
                                                <a href="department/dental-care/index.html" class="view_all">read more</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane " id="19">
                                    <div class="row m0 about_medicalpro">
                                       <div class="row m0 inner">
                                          <div class="col-sm-12 col-md-6 img">
                                             <div class="row">
                                                <img width="569" height="459" src="wp-content/uploads/2015/09/about2.png" class="img-responsive wp-post-image" alt="about2" srcset="http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about2.png 569w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about2-300x242.png 300w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about2-42x34.png 42w" sizes="(max-width: 569px) 100vw, 569px" />                                    
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-6 content">
                                             <div class="row">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                                <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus....</p>
                                                <a href="department/nurology/index.html" class="view_all">read more</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane " id="17">
                                    <div class="row m0 about_medicalpro">
                                       <div class="row m0 inner">
                                          <div class="col-sm-12 col-md-6 img">
                                             <div class="row">
                                                <img width="569" height="459" src="wp-content/uploads/2015/09/about-4.jpg" class="img-responsive wp-post-image" alt="about-4" srcset="http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-4.jpg 569w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-4-300x242.jpg 300w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-4-42x34.jpg 42w" sizes="(max-width: 569px) 100vw, 569px" />                                    
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-6 content">
                                             <div class="row">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                                <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus....</p>
                                                <a href="department/cardiac-clinic/index.html" class="view_all">read more</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane " id="15">
                                    <div class="row m0 about_medicalpro">
                                       <div class="row m0 inner">
                                          <div class="col-sm-12 col-md-6 img">
                                             <div class="row">
                                                <img width="569" height="459" src="wp-content/uploads/2015/09/about-5.jpg" class="img-responsive wp-post-image" alt="about-5" srcset="http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-5.jpg 569w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-5-300x242.jpg 300w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-5-42x34.jpg 42w" sizes="(max-width: 569px) 100vw, 569px" />                                    
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-6 content">
                                             <div class="row">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                                <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus....</p>
                                                <a href="department/cancer-care/index.html" class="view_all">read more</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane " id="13">
                                    <div class="row m0 about_medicalpro">
                                       <div class="row m0 inner">
                                          <div class="col-sm-12 col-md-6 img">
                                             <div class="row">
                                                <img width="569" height="459" src="wp-content/uploads/2015/09/about-3.jpg" class="img-responsive wp-post-image" alt="about-3" srcset="http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-3.jpg 569w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-3-300x242.jpg 300w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about-3-42x34.jpg 42w" sizes="(max-width: 569px) 100vw, 569px" />                                    
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-6 content">
                                             <div class="row">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                                <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus....</p>
                                                <a href="department/rehabilitation-center/index.html" class="view_all">read more</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div role="tabpanel" class="tab-pane " id="11">
                                    <div class="row m0 about_medicalpro">
                                       <div class="row m0 inner">
                                          <div class="col-sm-12 col-md-6 img">
                                             <div class="row">
                                                <img width="569" height="459" src="wp-content/uploads/2015/09/about2.png" class="img-responsive wp-post-image" alt="about2" srcset="http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about2.png 569w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about2-300x242.png 300w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/about2-42x34.png 42w" sizes="(max-width: 569px) 100vw, 569px" />                                    
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-6 content">
                                             <div class="row">
                                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                                <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus....</p>
                                                <a href="department/general-health-care/index.html" class="view_all">read more</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
 
  <div class="vc_row wpb_row vc_row-fluid" style="border-style: none; background-color: rgba(64, 77, 95, 0.8);">
      <div class="container">
         <div class="sd-centered-wrapper">
            <div class="wpb_column vc_column_container vc_col-sm-12">
               <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                     <div class="team_section bgf">
                        <div class="col-sm-4 col-md-3 no-padding">
                           <div class="row titleRow text-left">
                              <!-- <h5>our doctors</h5> -->
                           </div>
                           <div class="row team_menu">
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist">
                                  <li role="presentation" class="active media ">
                                    <a href="#26" aria-controls="26" role="tab" data-toggle="tab">
                                       <div class="media-left" id="radius_thumb"><img width="35" height="35" src="images/50x50/about.png" class="attachment-medical-pro-thumb-small size-medical-pro-thumb-small wp-post-image" alt="doc3"  /></div>
                                       <div class="media-body media-middle">
                                          <h5 class="white">ABOUT</h5> 
                                          <!-- <div class="row designation">doctor</div> -->
                                      </div>
                                    </a>
                                 </li> 
                                 <li role="presentation" class=" media">
                                    <a href="#25" aria-controls="25" role="tab" data-toggle="tab">
                                       <div class="media-left" id="radius_thumb"><img width="35" height="35" src="images/50x50/achievement.png" class="attachment-medical-pro-thumb-small size-medical-pro-thumb-small wp-post-image" alt="doc2"/></div>
                                       <div class="media-body media-middle">
                                          <h5 style="color: #fff;">ACHIEVEMENTS</h5>
                                          <!-- <div class="row designation">cardiac clinic</div> -->
                                       </div>
                                    </a>
                                 </li>
                                 <li role="presentation" class=" media">
                                    <a href="#22" aria-controls="22" role="tab" data-toggle="tab">
                                       <div class="media-left" id="radius_thumb"><img width="35" height="35" src="images/50x50/academic-roles.png" class="attachment-medical-pro-thumb-small size-medical-pro-thumb-small wp-post-image" alt="1-2" /></div>
                                       <div class="media-body media-middle">
                                          <h5 style="color: #fff;">ACADEMIC ROLES</h5>
                                          <!-- <div class="row designation">cancer care</div> -->
                                       </div>
                                    </a>
                                 </li>
                                 <li role="presentation" class=" media">
                                    <a href="#28" aria-controls="28" role="tab" data-toggle="tab">
                                       <div class="media-left" id="radius_thumb"><img width="35" height="35" src="images/50x50/Presentation.png" class="attachment-medical-pro-thumb-small size-medical-pro-thumb-small wp-post-image" alt="doc4-1" /></div>
                                       <div class="media-body media-middle">
                                          <h5 style="color: #fff;">PRESENTATIONS</h5>
                                          <!-- <div class="row designation">nurology, rehabilitation center</div> -->
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                              <!-- <a href="doctors/index.html" class="view_all">view all doctors</a>                     -->
                           </div>
                        </div>
                        <div class="col-sm-8 col-md-9 team_descss">
                           <div class="row">
                              <div class="tab-content">
                                 <div role="tabpanel" class="tab-pane media active" id="26">
                                    <div class="media-left media-bottom no-padding">
                                       <a href="aboutDoctor" ><img width="495" height="601" src="images/doctor-with-coat_1.png" class="img-responsive wp-post-image" alt="doc3" height="601px"  />                                    </a>
                                    </div>
                                    <div class="media-body  no-padding">
                                       <div class="row titleRow drData text-left">
                                          <h2 class="white">DR.j.NARESH BABU</h2>
                                          <h5 class="white" style="font-style: normal;">MS(Ortho).,FNB(Spine Surgery)</h5>
                                       </div>
                                       <p class="white">Director and Chief Spine Surgeon.</p>
                                       <ul class="social_list">
                                          <li><a href="https://www.facebook.com/MallikaSpineCentre/" target="_blank"><i class="fa fa-facebook" ></i></a></li>
                                          <li><a href="https://twitter.com/CentreSpine" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Doctor about-->
                                 <div role="tabpanel" class="tab-pane media " id="25">
                                  <ul style="color: #fff;">
                                    <li>Dr. J. Naresb Babu is the first National Board accredited Spine surgeon of the State of Andhra Pradesh, India. National board of examinations, New Delhi started the post-doctoral fellowships in some selected specialties including Spine surgery in 2001. The selection of the candidates is by all India competitive examination and interview open to orthopaedic and neurosurgeons. The successful candidate has to do a residency programme for a period of two years which gives eligibility to sit for the exit exam. By successfully completing the exam in first attempt scoring highest marks in 2005, became the first NBE qualified spine surgeon of Andhra Pradesh and second in India.</li><br>
                                   
                                    <li>Niloufer Chinoy Award 2010 by International Society for Fluoride Research (ISFR). The International Society for Fluoride Research was founded in 1966, at a meeting in Detroit of the American Society for Fluoride Research, to promote the sharing of scientific information on all aspects of inorganic and organic fluorides. This is done by the publication of a quarterly journal Fluoride and the hosting of international conferences. The best scientific paper presented at the conference will be awarded by this prestigious award and 1000 Euros cash prize. Topic: Pathogenesis of Ossification of Ligamentum Flavum in Endemic Skeletal Fluorosis. -A Histopathological study focusing on ligament to bone transformation.</li><br>
                                    <li>ISSLS Sofamor Danek Best Paper Award - Bergen, Norway, June 2006.</li><br>
                                    <li>“Euro Spine Open Paper Award-2008” by European Spine society.</li><br>
                                    
                                  </ul>
                                  
                                   <!--  <div class="media-left media-bottom">
                                       <a href="doctor/dr-becca-adkins/index.html" ><img width="495" height="601" src="wp-content/uploads/2015/09/doc2.png" class="img-responsive wp-post-image" alt="doc2" height="601px" srcset="http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/doc2.png 495w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/doc2-247x300.png 247w" sizes="(max-width: 495px) 100vw, 495px" />                                 </a>
                                    </div>
                                    <div class="media-body">
                                       <div class="row titleRow text-left">
                                          <h2>Dr. Becca Adkins</h2>
                                          <h5>cardiac clinic</h5>
                                       </div>
                                       <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Aliq uam po rttitor, nunc et fringilla.</p>
                                       <ul class="social_list">
                                          <li><a href="http://beccaadkins/"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="http://beccaadkins/"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="http://beccaadkins/"><i class="fa fa-google-plus"></i></a></li>
                                       </ul>
                                    </div> -->
                                  

                                 </div>
                                 <!-- Doctor about-->
                                 <div role="tabpanel" class="tab-pane media " id="22">
                                    <!-- <div class="media-left media-bottom">
                                       <a href="doctor/johnathan-doe/index.html" ><img width="495" height="601" src="wp-content/uploads/2015/09/1-2.png" class="img-responsive wp-post-image" alt="1-2" height="601px" srcset="http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/1-2.png 495w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/1-2-247x300.png 247w" sizes="(max-width: 495px) 100vw, 495px" />                                   </a>
                                    </div>
                                    <div class="media-body">
                                       <div class="row titleRow text-left">
                                          <h2>Dr. Samual Joseph</h2>
                                          <h5>cancer care</h5>
                                       </div>
                                       <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Aliq uam po rttitor, nunc et fringilla.</p>
                                       <ul class="social_list">
                                          <li><a href="http://johnathan/"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="http://johnathan/"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="http://johnathan/"><i class="fa fa-google-plus"></i></a></li>
                                       </ul>
                                    </div> -->

                                      <ul style="color: #fff;">
                                      <li>Organizing secretary Decision making and techniques in Spine Surgery-Lumbar Spine I, Organized by Guntur Bone Club, IMA Hall, Guntur, March 15th 2008.</li><br>
                                      <li>Organizing secretary Decision making and techniques in Spine Surgery-Lumbar Spine II, Organized by Mediciti Hospital, Hyderabad.</li><br>
                                      <li>Organizing secretary “Spine Clinix-I” Understanding Spondylolisthesis.</li><br>
<li> Organizing secretary “Spine Clinix-II” Injection techniques in spine surgery..</li><br>
<li>Organizing Committee member for the “13th Asia pacific Orthopaedic Association Operative Spine Course”, 8th -11th March 2007, Ganga Hospital, Coimbatore, India.
</li><br>
<li> Organizing Committee Member for the ‘Combined Instructional Course on Spinal Surgery’, a joint meeting of the Association of Spine Surgeons of India and the Spine Society of Europe, August 2003, Ganga Hospital, Coimbatore</li><br>
<li>Organizing Committee Member for the ‘First Trauma Conference of the Asia-Pacific Orthopaedic Association’, April 2003, Ganga Hospital, Coimbatore</li><br>
<li>Organizing Committee Member for ‘Instructional Course on Spine-2’ (Spinal Deformities), Dec. 2002, Ganga Hospital, Coimbatore</li>
                                    </ul>

                                 </div>
                                 <!-- Doctor about-->
                                 <div role="tabpanel" class="tab-pane media " id="28">
                                    <!-- <div class="media-left media-bottom">
                                       <a href="doctor/dr-sandra-rusell/index.html" ><img width="495" height="601" src="wp-content/uploads/2015/09/doc4-1.png" class="img-responsive wp-post-image" alt="doc4-1" height="601px" srcset="http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/doc4-1.png 495w, http://medicalpro.themedesigner.in/wp-content/uploads/2015/09/doc4-1-247x300.png 247w" sizes="(max-width: 495px) 100vw, 495px" />                                    </a>
                                    </div>
                                    <div class="media-body">
                                       <div class="row titleRow text-left">
                                          <h2>Dr. Sandra Rusell</h2>
                                          <h5>nurology, rehabilitation center</h5>
                                       </div>
                                       <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Aliq uam po rttitor, nunc et fringilla.</p>
                                       <ul class="social_list">
                                          <li><a href="http://sandrarusell/"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="http://sandrarusell/"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="http://sandrarusell/"><i class="fa fa-google-plus"></i></a></li>
                                       </ul>
                                    </div> -->

                                      <ul style="color: #fff;">
                                      <li>A Study of Diffusion in Human Lumbar Discs -A Serial MRI study documenting the influence of the endplate on diffusion in normal and degenerate discs. Association of Spine Surgeons of India (ASSI) - Depuy Best Spine Research Award winning paper presentation. Pune Jan-2004.</li><br>
                                      <li>Endplate Damage in Lumbar Discs Can Be Identified In-vivo By Post-Contrast MRI Studies. Dr. S. Rajasekaran, Dr. J. Naresh Babu, Dr. R. Arun, Dr. BRW Armstrong, Dr. Ajoy Prasad Shetty, Dr. KS. Murugan. ISSLS - Poster (P238) Spine week-2004 Porto, Portugal.</li><br>
                                      <li>
‘A Comprehensive Trauma Score To Prognosticate Outcome In Grade III B Open Tibial Fractures’. American Academy of Orthopaedic Surgeons 71st Annual Meeting March-2004 • San Francisco, CA. Rajasekaran S, Rajasabapathy S, Kumar P.V Manoj, Naresh Babu J, Dheenadhayalan J, Ajoy Shetty Prasad, Maheswar Canjivaram.</li><br>
<li>
Far lateral Lumbar Disc Herniation Treated by Paraspinal Microsurgical Muscle Splitting Approach. Association of Spine Surgeons of India Annual Conference-2005, Bangalore.</li><br>
<li>
Endplate Damage in Lumbar Discs Can Be Identified In-vivo By Post-Contrast MRI Studies. Annual Conference of Orthopaedic Association of South Indian States (OASISCON-2004) Thrisur, Kerala.
</li><br>
<li> 
The Indications and Safety of Primary Closure in Open Injuries of Limbs. Indo-German Orthopaedic foundation Annual Conference. 2003, (IGOF-2003) Kanpur.</li><br>
                                    </ul>
                                    
                                 </div>
                                 <!-- Doctor about-->
                              </div>
                              <!-- <div class="visible-xs view_all_btn_4_mobile"><a href="doctors/index.html" class="view_all">view all doctors</a></div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="vc_row wpb_row vc_row-fluid recentpost_acc recentpost_acc2 vc_custom_1480441719866 vc_row-has-fill" style="border-style: none; background: #f9f9f9 !important;">
   <div class="container">
   <div class="sd-centered-wrapper">
                  <div class="wpb_column vc_column_container col-sm-6">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                           <div class="testimonial_section" style="background-color: #fff;">
                              <div class="inner m0 clearfix">
                                 <div class="m0 titleRow text-left clearfix">
                                    <h5>What People Say</h5>
                                    <h2>About Mallika</h2>
                                 </div>
                                 <div class="flexslider testimonial_slider">
                                    <ul class="slides">
                                       <li>
                                          <div class="clearfix m0 recent_post testi_content">
                                             <div class="m0 inner clearfix">
                                                <div class="postText m0 clearfix">
                                                   <p>Etiam tristique sagittis pulvinar. Cras scelerisque dui ut, bibendum ante. dit neque eget lobortis. Nam eleifend sollicitudin nulla quis Interdum et malesuada fames.</p>
                                                </div>
                                                <div class="media authorMeta">
                                                   <div class="media-left"><img width="42" height="38" src="wp-content/uploads/2015/09/1-2.png" class="attachment-medical-pro-thumb-small size-medical-pro-thumb-small wp-post-image" alt="2" srcset="wp-content/uploads/2015/09/1-2.png" sizes="(max-width: 42px) 100vw, 42px" /></div>
                                                   <div class="media-body media-middle">
                                                      <h5>Johnathan doe</h5>
                                                      <!-- <div class="row designation">http://www.themedesigner.in</div> -->
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="m0 recent_post testi_content clearfix">
                                             <div class="m0 inner clearfix">
                                                <div class="postText  m0 clearfix">
                                                   <p>Etiam tristique sagittis pulvinar. Cras scelerisque dui ut, bibendum ante. dit neque eget lobortis. Nam eleifend sollicitudin nulla quis Interdum et malesuada fames.</p>
                                                </div>
                                                <div class="media authorMeta">
                                                   <div class="media-left"><img width="42" height="38" src="wp-content/uploads/2015/09/21.png" class="attachment-medical-pro-thumb-small size-medical-pro-thumb-small wp-post-image" alt="2" srcset="wp-content/uploads/2015/09/21.png" sizes="(max-width: 42px) 100vw, 42px" /></div>
                                                   <div class="media-body media-middle">
                                                      <h5>Angelina johnson</h5>
                                                     
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="m0 recent_post testi_content clearfix">
                                             <div class="m0 inner clearfix">
                                                <div class="postText m0 clearfix">
                                                   <p>Etiam tristique sagittis pulvinar. Cras scelerisque dui ut, bibendum ante. dit neque eget lobortis. Nam eleifend sollicitudin nulla quis Interdum et malesuada fames.</p>
                                                </div>
                                                <div class="media authorMeta">
                                                   <div class="media-left"><img width="42" height="38" src="wp-content/uploads/2015/09/21.png" class="attachment-medical-pro-thumb-small size-medical-pro-thumb-small wp-post-image" alt="2" srcset="wp-content/uploads/2015/09/21.png" sizes="(max-width: 42px) 100vw, 42px" /></div>
                                                   <div class="media-body media-middle">
                                                      <h5>bekka adkins</h5>
                                                    
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

<style type="text/css">
  *{margin:0; padding: 0;}
    ul{list-style: none;}
    /*.nav{max-width: 800px; margin: 0 auto; padding:20px 0; display: flex; flex-flow:row wrap; justify-content:space-around; border-bottom: 1px solid #ddd;}
    .nav a{font-size: 14px; color: #333; text-decoration: none;}
    .nav a:hover, .nav .current{color: #f00; text-decoration: underline;}
    .a{height: 200px; width:800px; overflow: hidden; margin:10px auto;}
    .a li{height: 198px; width: 198px; border:1px solid #ddd; line-height: 2.4; font-size: 30px; text-align: center; float: left;}*/
    .b{height: 400px; overflow: hidden; width: 100%; margin-left:auto; margin-right: auto;}
    
    .c{height: 200px; width:490px; overflow: hidden; margin: 10px auto; position: relative;}
    .c li{width:490px; height: 200px; text-align: center; float: left;}
    .c .paged{position: absolute; bottom:0; left: 0; width: 100%; height: 20px; padding-top: 5px; padding-bottom: 5px; background: rgba(0,0,0,0.6); color: #333; text-align: center; }
    .c .paged span{padding: 0 4px; line-height: 20px; background:#fff; margin-right: 10px;}
    .d{height: 200px; width: 600px; overflow: hidden; margin: 10px auto;}
    .d li{width: 598px; height: 198px; border: 1px solid #ddd;}
</style>

            <div class="wpb_column vc_column_container col-sm-6" ><div class="vc_column-inner "><div class="wpb_wrapper">        <div class="recent_post_home">
         
            <div class="m0 titleRow text-left">
                    <h5>Mallika</h5>
                    <h2>Achievements</h2>
            </div>
            <div class="col-sm-12 clearfix">
    <div class="b" id="b1">
        <div class="b-con">
            <div>
              <div class="media">
              <div class="media-body">
              <p>Dr. J. Naresb Babu is the first National Board accredited Spine surgeon of the State of Andhra Pradesh, ...</p>
              <a href="#myModal1" data-toggle="modal" style="color: #337ab7;">Read More.</a>
              </div>
              </div>
          </div>
          <div>
              <div class="media">
              <div class="media-body">
              <p>Dr. J. Naresb Babu is the first National Board accredited Spine surgeon of the State of Andhra Pradesh, ...</p>
              <a href="#myModal1" data-toggle="modal" style="color: #337ab7;">Read More.</a>
              </div>
              </div>
          </div>
          <div>
              <div class="media">
              <div class="media-body">
              <p>Dr. J. Naresb Babu is the first National Board accredited Spine surgeon of the State of Andhra Pradesh, ...</p>
              <a href="#myModal1" data-toggle="modal" style="color: #337ab7;">Read More.</a>
              </div>
              </div>
          </div>
          <div>
              <div class="media">
              <div class="media-body">
              <p>Dr. J. Naresb Babu is the first National Board accredited Spine surgeon of the State of Andhra Pradesh, ...</p>
              <a href="#myModal1" data-toggle="modal" style="color: #337ab7;">Read More.</a>
              </div>
              </div>
          </div>
          <div>
              <div class="media">
              <div class="media-body">
              <p>Dr. J. Naresb Babu is the first National Board accredited Spine surgeon of the State of Andhra Pradesh, ...</p>
              <a href="#myModal1" data-toggle="modal" style="color: #337ab7;">Read More.</a>
              </div>
              </div>
          </div>
         
        </div>
    </div>
    </div>

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        (function($) {
    
    $.fn.scrollForever = function(options) {
        var defaults = {
            placeholder: 0,//非连续滚动时每次的滑动距离，可以自定义，如果没有自定义则根
            dir: 'left',//滚动方向，left & top
            container: 'ul',//外层对象
            inner: 'li',//内部元素
            speed: 1000,//非连续滚动速度
            delayTime: 0,//滚动间隔
            continuous: true,//是否连续
            num: 1//非连续一次滚动的数量
        };
        var opts = $.extend({}, defaults, options);
        var placeHolder = opts.placeholder;
        var dir = opts.dir;
        var speed = opts.speed;
        var Time = opts.Time;
        var num = opts.num;
        var delayTime = opts.delayTime;
        return this.each(function() {
            var obj = $(this);
            var container = obj.find(opts.container);
            var inner = container.find(opts.inner);
            var len = inner.length;
            var timesRun = 0;//滚动次数
            var distance, scrollDistance, scrollTime;
            //滚动前的准备工作
            function setScroll() {
                if (opts.continuous) {
                    if (dir == 'left') {
                        distance = inner.outerWidth() * len;
                        container.css('width', 2 * distance);
                        inner.clone().appendTo(container);
                    } else if (dir == 'top') {
                        distance = inner.outerHeight() * len;
                        container.css('height', 2 * distance);
                        inner.clone().appendTo(container);
                    }
                } else {
                    if (dir == 'left') {
                        placeHolder = placeHolder != 0 ? placeHolder : inner.outerWidth() * num;
                        distance = inner.outerWidth() * (len + 1);
                        container.css('width', distance);
                    } else if (dir == 'top') {
                        placeHolder = placeHolder != 0 ? placeHolder : inner.outerHeight() * num;
                        distance = inner.outerHeight() * (len + 1);
                        container.css('height', distance);
                    }
                }
            }
            setScroll();
            $('.paged span').each(function(i){
                $(this).on('click',function(){
                    var self = $(this);
                    var parent = self.parent('.paged');
                    var n = i;
                    timesRun = i;
                    self.addClass('current').siblings().removeClass('current');
                    if(parent.attr('data-pre') == undefined){
                        parent.attr('data-pre',n);
                    }else{
                        var pre = parent.attr('data-pre'), now = i;
                        if (i = pre) return ;
                        if(i > pre){
                            container.animate({
                                marginLeft: '-' + placeholder* (i-pre)
                            },speed,function(){
                                container.css({
                                    marginLeft:0
                                }).find(opts.inner + ':lt('+ pre +')')
                            })
                        }


                    }
                })
            })
            $('.paged span').eq(0).addClass('current');
            function autoScroll() {
                
                timesRun += 1;
                if(timesRun >= len) timesRun = 0;
                $('.paged span').eq(timesRun).addClass('current').siblings().removeClass('current');
                if (opts.continuous) {
                    //无缝不间歇滚动
                    if (dir == 'left') {
                        scrollDistance = obj.scrollLeft();
                        if (scrollDistance >= distance) {
                            obj.scrollLeft(0);
                        } else {
                            obj.scrollLeft(scrollDistance + 1);
                        }
                    } else if (dir == 'top') {
                        scrollDistance = obj.scrollTop();
                        if (scrollDistance >= distance) {
                            obj.scrollTop(0);
                        } else {
                            obj.scrollTop(scrollDistance + 1);
                        }
                    }
                } else {    
                    //非连续滚动，间断无缝滚动
                    if (dir == 'left') {
                        container.animate({
                            marginLeft: '-' + placeHolder
                        }, speed, function() {
                            container.css({
                                marginLeft: 0
                            }).find(opts.inner + ":lt(" + num + ")").appendTo(container);
                        });
                    } else if (dir == 'top') {
                        container.animate({
                            marginTop: "-" + placeHolder
                        }, speed, function() {
                            container.css({
                                marginTop: 0
                            }).find(opts.inner + ":lt(" + num + ")").appendTo(container);
                        });
                    }
                }

            }
            
            //滚动函数
            var aTime = opts.continuous == true ? 20 : 2000;
            delayTime = delayTime == 0 ? aTime : delayTime;
            scrollTime = setInterval(autoScroll, delayTime);
            obj.hover(function() {
                clearInterval(scrollTime);
            }, function() {
                scrollTime = setInterval(autoScroll, delayTime);
            });
        })
    }
})(jQuery);
    </script>
    <script type="text/javascript">
    $(function(){
        // var time1 = new Date;
        $("#a1").scrollForever();
        $("#b1").scrollForever({dir:"top",container:".b-con",inner:"div"});
        $("#a2").scrollForever({continuous:false,num:2});
        $("#b2").scrollForever({dir:"top",container:".b-con",inner:"div",continuous:false});
        $("#c1").scrollForever({continuous:false});
        $("#d1").scrollForever({continuous:false,dir:'top'});
    });
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=15910806" charset="UTF-8"></script>
            <!-- <div class="m0">
            <marquee behavior="scroll" direction="up" onmouseover="this.stop()" onmouseout="this.start()">

            <div class="media">
            <div class="media-body">
            <p>Dr. J. Naresb Babu is the first National Board accredited Spine surgeon of the State of Andhra Pradesh, ...</p>
            <a href="#myModal1" data-toggle="modal" style="color: #337ab7;">Read More.</a>
            </div>
            </div>

            <div class="media">
            <div class="media-body">
            <p>Dr. J. Naresb Babu is the first National Board accredited Spine surgeon of the State of Andhra Pradesh, ...</p>
            <a href="#myModal1" data-toggle="modal" style="color: #337ab7;">Read More.</a>
            </div>
            </div>

            <div class="media">
            <div class="media-body">
            <p>Dr. J. Naresb Babu is the first National Board accredited Spine surgeon of the State of Andhra Pradesh, ...</p>
            <a href="#myModal1" data-toggle="modal" style="color: #337ab7;">Read More.</a>
            </div>
            </div>

            
            
            </marquee>             -->
            </div>
         </div>
        </div></div></div>



      </div></div></div> 

       

          

</div>

<!-- <section class="row book_banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-3 text-center" >
                        <p class="textdecor">Patients Served</p>
                         <p class="counter-count numberdecor">879</p>
                    </div>
                    <div class="col-sm-3 col-md-3 text-center">
                        <p class="textdecor">Success Rate</p>
                         <p class="counter-count numberdecor">99.9%</p>
                    </div>
                    <div class="col-sm-3 col-md-3 text-center">
                        <p class="textdecor">Joints Replaced</p>
                         <p class="counter-count numberdecor">874</p>
                    </div>
                    <div class="col-sm-3 col-md-3 text-center">
                        <p class="textdecor">Patients Served</p>
                         <p class="counter-count numberdecor">479</p>
                    </div>
                </div>
            </div>
        </section> -->

<style type="text/css">

@media(max-width: 767px){
  .navigationContent{
      padding: 0px !important;
  }
  .container{
    padding: 0px !important;
  }
}
   .setbackbanner {
   background-image: url("home-banner.jpg");
   background-color: #000;
   /*opacity: 0.8;*/
   background-repeat: no-repeat;
   width: 100%;
   background-size: cover;
}
.textdecor, .numberdecor{
   font-size: 20px;
}
.pad20{
  padding: 20px;
}
.navigationContent p{
  line-height: 27px;
    font-size: 16px;
    font-weight: normal;
}
</style>

<!-- <section class="row book_banner setbackbanner" style="padding: 150px 5px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 text-center" >
                        <p class="textdecor" style="font-size: 36px; text-transform: capitalize; line-height: 72px; font-weight: 100;">Tell us about your problem.</p>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-sm-12 col-md-12 text-center">
                        <p class="textdecor" style="font-size: 24px; line-height: 48px; text-transform: lowercase; font-weight: 100;">Get appointment now.</p>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-sm-12 col-md-12 text-center">
                        <button class="btn btn-info" style="width: 20%; text-transform: uppercase;">appointment </button>
                    </div>
                </div>
            </div>
        </section> -->
        <div class="row" style="margin: 0; ">
<div class="col-md-12 no-padding" style=" margin-bottom: -6px;">
   <!-- <div class="col-md-3 no-padding" style="">
      <iframe width="100%" height="207" src="https://www.youtube.com/embed/TtTdFz0Vyjg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      <iframe width="100%" height="207" style="margin-top: -5px;" src="https://www.youtube.com/embed/KgypBfWD3mk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
   </div> -->
   <div class="col-md-6 no-padding" >
      <iframe width="100%" height="415" src="https://www.youtube.com/embed/PhbacXRfmCc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
   </div>
   <div class="col-md-6 no-padding" >
     
    <div class="tz-gallery">
      <div class="col-md-12 no-padding">
        <div class="">
            <div class="col-sm-6 col-md-4 no-padding">
                <a class="lightbox" href="gallery/DSC06734.jpg">
                    <img src="gallery/DSC06734.jpg" alt="Park" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 no-padding">
                <a class="lightbox" href="images/DSC06677_15.jpg">
                    <img src="images/DSC06677_15.jpg" alt="Bridge" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 no-padding">
                <a class="lightbox" href="images/DSC06140_1.jpg" >
                    <img src="images/DSC06140_1.jpg" alt="Tunnel" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 no-padding">
                <a class="lightbox" href="images/DSC06255_2.jpg">
                    <img src="images/DSC06255_2.jpg" alt="Coast" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 no-padding">
                <a class="lightbox" href="gallery/DSC06466.jpg">
                    <img src="gallery/DSC06466.jpg" alt="Rails" style="height:207px;">
                </a>
            </div>
            <div class="col-sm-6 col-md-4 no-padding">
                <a class="lightbox" href="gallery/team1.jpg">
                    <img src="gallery/team1.jpg" alt="Traffic" style="height:207px;">
                </a>
            </div>
            
        </div>
      </div>
    </div>

   </div>
</div>
</div>
<div class="col-sm-12 pad20 navigationContent clearfix" style="background: #fff;">
<div class="container pad20" >
     <div class="col-sm-12 clearfix">
                                <div class="col-sm-12 clearfix">
                                  <h2 class="text-center">NAVIGATION</h2> 
                                </div>
                                 <div class="col-sm-4">
                                    <div class=" m0">
                                   
                                       <img width="555" height="300" src="gallery/DSC06513.jpg" class="img-responsive wp-post-image" alt="dental" srcset="gallery/DSC06513.jpg" sizes="(max-width: 555px) 100vw, 555px" style="border-radius:  5px;"/>                                                                              
                                       <!-- <div class="ts">Trusted Services</div> -->
                                    </div>
                                 </div>
                                 <div class="col-sm-8" style="margin-top: 5px;">
                                    <div class=" m0">
                                       
                                       <p style="text-align: justify;">Computer assisted spine surgery is a cutting edge technology which has improved the safety and accuracy of spine procedures. This technology is available in only a few centres worldwide Mallika Spine Centre is one of the pioneers in the country to adopt this technique with an aim to bring the latest in technology to patients. The institute has been performing such surgeries in complex spine disorders since 2017.  <br/>Computer Navigation is a new innovative technology in spine surgeries that improves the intra-operative accuracy. It allows virtually any surgical instrument to be tracked in reference to the displayed anatomy in real time. This can be particularly helpful when a spine surgeon places an instrument or implant into unexposed or partially exposed spinal structures that may not be directly visible, such as the pedicle or vertebral body.</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 clearfix">
                                <div class="col-sm-12 clearfix">
                                  <h2 class="text-center">NEUROMONITORING</h2> 
                                </div>
                                 
                                 <div class="col-sm-8" style="margin-top: 5px;">
                                    <div class=" m0">
                                       
                                       <p style="text-align: justify;">Intraoperative neurophysiologic monitoring (IONM) is a valuable technique for assessing the nervous system. It replaces the neurologic examination when the patient is under general anesthesia and cannot cooperate with a face-to-face examination. At our centre, we mitigate the risk of neurological deficit with continuous intra operative neuromonitoring during surgery. Thereby achieving surgical goals and preserving quality of life post-surgery.</p>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class=" m0">
                                   
                                       <img width="555" height="300" src="gallery/xray.jpg" class="img-responsive wp-post-image" alt="dental" srcset="gallery/neuromonitoring.jpg" sizes="(max-width: 555px) 100vw, 555px" style="border-radius:  5px;"/>                                                                              
                                       <!-- <div class="ts">Trusted Services</div> -->
                                    </div>
                                 </div>
                              </div>
                              </div>
</div>
</div>
 <section id="Pt-Container"  style="background-color: rgba(64, 77, 95, 0.8);">
  <div id="Patients">
    <div class="Intra-L"></div>
    <div class="Intra-R"></div>
    <div class="intra-div">
      <div class="Pt-videos">
          
          <!--  <li><a href="practice-tour.html"><span>Practice Tour</span><img src="images/practice-tour.jpg" alt="practice Tour - American Spine Center" /></a></li>-->
          
         
          <div class="clearfix" style="padding-top: 20px; margin-top:10px;color: #fff;">
            <div class="text-center "><h2 class="" style="color: #fff;" >WHY MALLIKA</h2></div>
            <p class=" whyMallikaText" style="text-align: justify;">We do the right things and deliver best possible care, quality and excellency while dealing with any emergency.We are specialized in surgical and non-surgical treatment of spine & neck utilizing cutting edge technologies with success rate of 99% and with experienced staff for over a decade.We understand that your condition is unique, and you need a solution addressing your individual pain and challenges.</p>
                                       <a href="services" class="view_all" style="border-radius: 5px;">Learn More..</a>
          </div>
          
          <!--  <li><a href="patient-testimonials.html"><img src="images/review-vdo-cyrus.jpg" alt="Patient Testimonials for American Spine Center" /></a></li> -->
        
      </div>
      
      <div class="Pt-service hidden-xs">
        <h3 class="white">For Patients</h3>
        <ul>
          <li class="Pt-form"><span></span>
            <h4><a title="FAQ" href="faq">FAQs</a></h4>
          </li>
          <li class="first-visit"><span></span>
            <h4><i class="fa fa-calendar" href="#myModal" data-toggle="modal" aria-hidden="true" style="font-size: 25px;color: #fff;cursor: pointer;"></i><a href="#myModal" data-toggle="modal" style="padding-top: 0%;">First Visit</a></h4>
          </li>
          <li class="askdr-h"><span></span>
            <h4><i class="fa fa-plus-circle" title="About Doctor" href="aboutDoctor" aria-hidden="true" style="font-size: 25px;color: #fff; cursor: pointer;"></i><a title="About Doctor" href="aboutDoctor" style="padding-top: 0%;">About Doctor</a></h4>
          </li>
          <li class="Pt-edu"><span></span>
            
            <h4><i class="fa fa-video-camera" title="Videos" href="videos" aria-hidden="true" style="font-size: 25px;color: #fff; cursor: pointer;"></i><a title="Videos" href="videos" style="padding-top: 0%;">Videos</a></h4>
          </li>
          
          <li style="opacity: 0;"><span></span></li>
        </ul>
      </div>
      
    </div>
  </div>
</section>

<script>
$(document).ready(function(){
   runslide();
      function runslide() {
         $('#pic1').fadeIn(3000).delay(1500).fadeOut(3000, function() {
            $('#pic2').fadeIn(3000).delay(1500).fadeOut(3000, function() {
               // $('#pic3').fadeIn(3000).delay(3500).fadeOut(3000, function() {
                  runslide();
               // });
            });
         });
      }
});
// $('#myModal1').modal({backdrop: true, keyboard: false, show: false});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<style type="text/css">
   
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    border-radius: 20px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    /*font-family: 'Droid Sans', sans-serif;*/
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    max-width: 800px;
    margin: 25px auto;
    color: #888;
    font-size: 18px;
}

/*.tz-gallery {
    padding: 40px;
}
*/
.tz-gallery .lightbox img {
    width: 100%;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}
.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}
.baguetteBox-button {
    background-color: transparent !important;
}
@media(min-width: 768px) and (max-width: 1150px){
   .navigationContent p{
    min-height: 220px;
    max-height: 220px;
    overflow-x: auto;
   }
}
@media(min-width: 768px) and (max-width: 950px){
   .Pt-videos{
      margin-left: 20px;
      margin-right: 20px;
    }
}
@media(max-width: 768px) {
    body {
        padding: 0;
    }

    .container.gallery-container {
        border-radius: 0;
    }
   
}

@media(max-width: 767px) {
   .Pt-videos{
      width: 100% !important;
      padding: 20px;
    }
}

</style>

<style type="text/css">
  section {
    width: 100%;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    position: relative;
}

.Intra-L {
    left: -100%;
}
.Intra-L, .Intra-R {
    position: absolute;
    z-index: 111;
    width: 100%;
    height: 100%;
    padding: 0px;
    margin: 0px;
    top: 0px;
}

.Intra-R {
    right: -100%;
}
.Intra-L, .Intra-R {
    position: absolute;
    z-index: 111;
    width: 100%;
    height: 100%;
    padding: 0px;
    margin: 0px;
    top: 0px;
}
#Patients .intra-div {
    display: table;
    table-layout: fixed;
}
.intra-div {
    width: 100%;
    height: 100%;
}
#Patients .Pt-service {
    position: relative;
    width: 520px;
    height: 485px;
}
.Pt-service, .Pt-videos {
    display: table-cell;
    vertical-align: top;
}
.Pt-videos {
    float: right;
    width: 78%;
   /* font: normal 14px/16px 'droid_serifregular';*/
}
.Pt-service, .Pt-videos {
    display: table-cell;
    vertical-align: top;
}
.Pt-service h3 {
    margin: 0px;
    right: 18%;
    top: 9%;
    font: normal 23px/30px 'droid_serifbold';
    color: #000;
    border-bottom: 1px solid #5e9eb7;
    position: absolute;
}
ul, li {
    list-style: none;
}
ul, ol {
    margin: 0px;
    padding: 0px;
}
.Pt-service .Pt-form {
    left: 22%;
    top: 5%;
}
.Pt-service li {
    /*font: normal 15px/20px 'droid_serifregular';*/
    position: absolute;
}
.Pt-service li span {
    border-color: transparent transparent #12618c;
    border-image: none;
    border-style: solid;
    border-width: 100px;
    display: block;
    height: 0;
    position: relative;
    top: -100px;
    width: 0;
}
.Pt-service li span::after {
    border-color: #12618c transparent transparent;
    border-image: none;
    border-style: solid;
    border-width: 100px;
    content: "";
    height: 0;
    left: -100px;
    position: absolute;
    top: 100px;
    width: 0;
}
.Pt-service .Pt-form h4 {
    background: url(http://www.americanspinecenter.ae/images/testimonials-icon.png) no-repeat scroll center 2px;
}
.Pt-service li h4 {
    font: normal 14px/20px 'droid_serifregular';
    left: 32px;
    position: absolute;
    text-align: center;
    top: 32%;
    width: 129px;
    z-index: 11;
    height: 50px;
    margin: 0px;
}
.Pt-service .first-visit {
    left: 41.5%;
    top: 26%;
}
.Pt-service li {
    font: normal 15px/20px 'droid_serifregular';
    position: absolute;
}
.Pt-service .Pre-inst span, .Pt-service .first-visit span {
    border-color: transparent transparent #12618c;
}
.Pt-service li span {
    border-color: transparent transparent #12618c;
    border-image: none;
    border-style: solid;
    border-width: 100px;
    display: block;
    height: 0;
    position: relative;
    top: -100px;
    width: 0;
}
.Pt-service .first-visit h4 {
    background: url(images/first-visit.png) no-repeat scroll center 4px;
}
.Pt-service li h4 {
    font: normal 14px/20px 'droid_serifregular';
    left: 32px;
    position: absolute;
    text-align: center;
    top: 32%;
    width: 129px;
    z-index: 11;
    height: 50px;
    margin: 0px;
}
.Pt-service li h4 a {
    color: #fff;
    display: block;
    padding-top: 30%;
}
.Pt-service .Pt-edu {
    bottom: 12%;
    left: 61%;
}
.Pt-service li {
    font: normal 15px/20px 'droid_serifregular';
    position: absolute;
}
.Pt-service li span {
    border-color: transparent transparent #12618c;
    border-image: none;
    border-style: solid;
    border-width: 100px;
    display: block;
    height: 0;
    position: relative;
    top: -100px;
    width: 0;
}
.Pt-service li span::after {
    border-color: #12618c transparent transparent;
    border-image: none;
    border-style: solid;
    border-width: 100px;
    content: "";
    height: 0;
    left: -100px;
    position: absolute;
    top: 100px;
    width: 0;
}
.Pt-service .Pt-edu h4 {
    background: url(images/pt-education.png) no-repeat scroll center 0px;
}
.Pt-service li h4 {
    font: normal 14px/20px 'droid_serifregular';
    left: 32px;
    position: absolute;
    text-align: center;
    top: 32%;
    width: 129px;
    z-index: 11;
    height: 50px;
    margin: 0px;
}
.Pt-service li h4 a {
    color: #fff;
    display: block;
    padding-top: 30%;
}
.Pt-service .askdr-h {
    bottom: 12%;
    left: 22%;
}
.Pt-service li span {
    border-color: transparent transparent #12618c;
    border-image: none;
    border-style: solid;
    border-width: 100px;
    display: block;
    height: 0;
    position: relative;
    top: -100px;
    width: 0;
}
.Pt-service li {
    font: normal 15px/20px 'droid_serifregular';
    position: absolute;
}
.Pt-service li span::after {
    border-color: #12618c transparent transparent;
    border-image: none;
    border-style: solid;
    border-width: 100px;
    content: "";
    height: 0;
    left: -100px;
    position: absolute;
    top: 100px;
    width: 0;
}
.Pt-service .askdr-h h4 {
    background: url(images/askdr-h.png) no-repeat scroll center 0px;
}
.Pt-service li h4 {
    font: normal 14px/20px 'droid_serifregular';
    left: 32px;
    position: absolute;
    text-align: center;
    top: 32%;
    width: 129px;
    z-index: 11;
    height: 50px;
    margin: 0px;
}
#Pt-Container div#Patients div.intra-div div.Pt-service ul li.askdr-h h4 a {
    padding-top: 40%;
}
.Pt-service li h4 a {
    color: #fff;
    display: block;
    padding-top: 30%;
}
.Pt-service li a {
    display: block;
}
.Pt-service li:last-child {
    top: 68%;
    left: 41.55%;
}
.Pt-service li {
    font: normal 15px/20px 'droid_serifregular';
    position: absolute;
}
ul, li {
    list-style: none;
}
.Pt-service li:last-child span {
    
}
.Pt-service li span {
    border-color: transparent transparent #12618c;
    border-image: none;
    border-style: solid;
    border-width: 100px;
    display: block;
    height: 0;
    position: relative;
    top: -100px;
    width: 0;
}
.Pt-service li:last-child span::after {
    /*border-color: #a0dbff transparent transparent;
    opacity: 0.75;*/
}
.Pt-service li span::after {
    border-color: #12618c transparent transparent;
    border-image: none;
    border-style: solid;
    border-width: 100px;
    content: "";
    height: 0;
    left: -100px;
    position: absolute;
    top: 100px;
    width: 0;
}
.Pt-videos {
    float: right;
    width: 78%;
    /*font: normal 14px/16px 'droid_serifregular';*/
}
.Pt-service, .Pt-videos {
    display: table-cell;
    vertical-align: top;
}
.Pt-videos li {
    /* margin-top: 30%; */
    margin-top: 10%;
    /* border: 1px solid #000; */
    border-radius: 5px;
    position: relative;
}
a, a:hover {
    text-decoration: none;
    outline: none;
}
.Pt-videos span {
    background: #12618c;
    opacity: 0.8;
    display: block;
    position: absolute;
    top: -10px;
    width: 100%;
    font: normal 18px/36px 'droid_serifbold';
    color: #fff;
    text-align: center;
    border-radius: 5px;
}
.Pt-videos li:first-child img {
    margin-top: 36px;
}
.Pt-videos img {
    border: 1px solid #0077c0;
    border-radius: 5px;
}
#Patients {
    background-size: contain;
}
#Header, #Main-Menu, #Intractivity, #specialties, #Doctors, #A-Spine, #Patients, #Credibility, #Footer, #Content-Main, #Testimonials, #ask-dr-main, #how-works-main {
    max-width: 1170px;
    min-width: 320px;
    margin: 0px auto;
    position: relative;
}
</style>
<?php include('footer.php');?>