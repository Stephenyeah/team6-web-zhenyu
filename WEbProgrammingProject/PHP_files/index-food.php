<?php
$title = "foodmenu";
include "header.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Sofia+Sans:wght@200&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Home page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="stylefood.css">
        <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png" >
        <link rel="stylesheet" href="../CSS_files/food.css">

  </head>
  <body>
    
       
          

          
             <div class="row">
              <div class="col-md-4" id="firstcol">
                <hr class="style1">
              </div>
              <div class="col-md-4">
                <h1>Uzbek Food</h1>
              </div>
              <div class="col-md-4" id="firstcol">
                <hr class="style1">
              </div>
             </div> 
             <div class="menufood">
            <div class="row" id="content">
                <div class="col-md-3">
                    <p class="mt-5 text-light"> Uzbek food is an intriguing blend of influences, shaped through the centuries by its neighbors and the many traders traveling along the Silk Road.
                      
                      Food is always a fantastic way to experience the local culture. The architecture in Uzbekistan is one of the country’s biggest draws but as this list of tasty Uzbek dishes will show you, so is the food.
                      Freshly butchered meat and locally-grown vegetables feature prominently in the diet of local Uzbek people. Thanks to the abundance of sheep, mutton and lamb are among the most widely consumed meats. 
                      They make their way into many Uzbek recipes though beef, goat, poultry, camel, and horse meat are also common.</p>
                </div>
              <div class="col-md-3">               
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="../images/food/food1.jpg" alt="Moroccan tomato salad">
                  <p>Uzbek Plov</p>
                  <h2> $14.8 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="../images/food/food1.jpg" alt="Moroccan tomato salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Uzbek Plov</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">No article on Uzbek food can ever be complete without plov, the country’s national dish.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="../images/food/food2.jpg" alt="Garden salad">
                  <p>Shivit Oshi</p>
                  <h2> $7.66 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="../images/food/food2.jpg" alt="Garden salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Shivit Oshi</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">It’s traditionally enjoyed topped with a meat and vegetable stew and a side of sour cream or plain yogurt.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">                
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="../images/food/food3.JPG" alt="Caesar salad">
                  <p>Shashlik </p>
                  <h2> $8.99/4kpl </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="../images/food/food3.JPG" alt="Caesar salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Shashlik</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">Meat rolls made with ground beef or fatty beef (or lamb) are common, as are skewered and grilled chicken legs.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="../images/food/food4.JPG" alt="Spicy Squid Salad">
                  <p>Kazan Kabob</p>
                  <h2> $9.99  </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="../images/food/food4.JPG" alt="Spicy Squid Salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Kazan Kabob</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">It consists of marinated meat like mutton or beef that’s pan-fried first with potatoes before being covered and steamed in a kazan at low heat. </p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>                
              </div>
              
              <div class="col-md-3"> 
                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="../images/food/food5.JPG" alt="shanghai salad">
                  <p>Lagman</p>
                  <h2> $11.95 </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="../images/food/food5.JPG" alt="shanghai salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Lagman</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;"> a fried noodle dish.fried meat (usually l mb or beef), garlic, onions, potatoes, carrots, bell peppers, and other vegetables.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>

                

                <div class="imagehover2 row mt-5">
                  <img class="image2 rounded-circle" src="../images/food/food6.JPG" alt="cobb salad">
                  <p>Shurpa </p>
                  <h2> $10.85  </h2>
                  <div class="overlay">
                    <div class="modal-header bg-white text-dark"> 
                      <div>
                      <img src="../images/food/food6.JPG" alt="cobb salad" width="100px">  
                      </div>
                      <div>                     
                      <h4 class="modal-title  align-items-start">Shurpa</h4>
                      </div>
                    </div>
                    <div class="modal-body  bg-white text-dark">                          
                      <p style="color: gray;">They can be made in different ways and typically consist of large chunks of meat cooked in a broth with potatoes, different vegetables, herbs, and spices.</p>
                    </div>
                    <div class="modal-footer  bg-white text-dark justify-content-center">
                      <button type="button" class="btn btn-default justify-content-center" data-dismiss="modal"><p style="color: rgb(255, 115, 0); font-size: 20px;">order now</p></button>
                    </div>
                  </div>
                </div>
              </div>                             
                               
              </div>
            </div>

            <div class="row" id="footer1">
              <div class="col-md-12 " >
                <h3>WHY CHOOSE UZBEKOVKAT:</h3> 
                <p style="font-size: 22px;">UZBEKOVKAT is the only international Uzbekistani food restorant in the world.
                   We decided to take the initiative of making this restorant because we love and value
                   Uzbek foods and delicacies and we would love to share them with the world through our fine salads, drinks and foods.</p>                   
              </div> 
              <div>
                <h4><b>Order anywhere, anytime! download our App</h4> 
                <a href=""><img class="AppStore" src="../images/App Store Badge.png" alt="App Store" width="15px"></a> 
                <a href=""><img class="AppStore" src="../images/Google Play Store Badge.png" alt="Google Play Store" width="15px"></a> 
              </div>           
            </div>
            <div class="container">
              <div class="row" id="footer2">
                <!-- <div class="col-md-3" id="">
                  <p style="font-size: 22px;">Being a grain-farming country, rice, noodles, and breads are equally vital to Uzbek culture and cuisine. 
                    In fact, plov or Uzbek rice pilaf is the country’s national dish and the most popular food in Uzbekistan.</p>                 
                </div> -->
                <div class="col  justify-content-center" id="Dubai" >
                  <div id="myCarousel" class="carousel slide justify-content-center" data-ride="carousel" >                  
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active carousel-image">
                        <img src="../images/food/food7.jpg"  class="swipeimage" alt="Los Angeles" style="width:100%;">
                      </div>
                
                      <div class="item carousel-image">
                        <img src="../images/food/food8.jpg" class="swipeimage"  alt="Chicago" style="width:100%;">
                      </div>
                    
                      <div class="item carousel-image">
                        <img src="../images/food/food9.jpg" class="swipeimage1" alt="New york" style="width:100%;">
                      </div>
                    </div>            
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>     
              </div>
            </div>  
            
        </div>           
         
           
  
    


<?php include "footer.php" ?>