<?php 
echo" me cago endios";
if (isset($_POST['envia'])) {
echo" me cago endios";
	
	
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono']; 
	$texto = $_POST['texto'];
echo $texto;
echo $telefono;
echo $nombre;

 echo "porrras";
    $to = 'jose perez   ';
    $toemail = 'josepereza66@gmail.com';
    $text = "cajo jajajajaj";
    mail($toemail, $to, $texto, $texto);
}
 ?>   
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Title of the document</title>
    <!-- Material Icon CDN -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS CDN -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- google font -->
      
      <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

      <!-- Your custom styles -->
      <link rel="stylesheet" href="css/style.css">
    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <style>
      * {
        margin: 0;
        box-sizing: border-box;
      }
      header {
            
      }
      
     .cardo{
      border-style: solid; border-color: brown;
      

     }
     .formulario {
   background-color: rgba(23, 43, 7, 0.8);
   padding: 15px;
  
   



   }
     
.fondophp{
   
  background-color: rgba(33, 0, 77, 0.5);
}


    #hello {
    -webkit-animation: cssAnimation 1.9238s 1 ease;
    -moz-animation: cssAnimation 1.9238s 1 ease;
    -o-animation: cssAnimation 1.9238s 1 ease;
    }
    @-webkit-keyframes cssAnimation {
    from { -webkit-transform: rotate(0deg) scale(0.1) skew(1deg) translate(0px); }
    to { -webkit-transform: rotate(0deg) scale(0.965) skew(1deg) translate(0px); }
    }
    @-moz-keyframes cssAnimation {
    from { -moz-transform: rotate(0deg) scale(0.1) skew(1deg) translate(0px); }
    to { -moz-transform: rotate(0deg) scale(0.965) skew(1deg) translate(0px); }
    }
    @-o-keyframes cssAnimation {
    from { -o-transform: rotate(0deg) scale(0.1) skew(1deg) translate(0px); }
    to { -o-transform: rotate(0deg) scale(0.965) skew(1deg) translate(0px); }
    }
 /* label color */
 textarea:focus + label {
  color:red !important;
  font-size: 1.5em !important;
    
 }

 textarea:focus{
  border-bottom: 1px solid rgb(44, 223, 21) !important;

 }
 .input-field input:focus + label {
     color:red;}
 .input-field label {
     color: rgb(247, 241, 241) !important;
   }
   /* label focus color */
   .input-field input:focus + label {
     color: rgb(241, 10, 10) !important;
     font-size: 1.5em !important;
   }
   /* label underline focus color */
   .input-field input:focus {
     border-bottom: 1px solid rgb(44, 223, 21) !important;
     box-shadow: 0 1px 0 0 #000 !important;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #000 !important ;
     box-shadow: 0 1px 0 0 #000 !important ;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #000 !important ;
     box-shadow: 0 1px 0 0 #000 !important ;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: rgb(236, 32, 32) !important ;
   }

    .input-field .prefix {
     color: rgb(238, 230, 230) !important ;
   }

   .input-field {

      color: rgb(250, 243, 243) !important;

   }
   .section1{
    background-image: url('imagenes/monitor.jpg');
            background-repeat: no-repeat;
        height: 100vh;
        min-height: 900px;
    
    background-position: center;
    background-size: cover;
    overflow: hidden;


   }
    .jumbotron{
      background-color: rgba(27, 255, 67, 0.7);     
                   padding: 15px; 
       



    }

   .informacion{
       height: 90%;
   }

    </style>
  </head>
  <body>
 

              
        
    <header>
            
      <nav class="cyan">
        <div class="nav-wrapper">
          <div class="container">
            <a href="#" class="brand-logo">HWP</a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#">item1</a></li>
              <li><a href="#">item2</a></li>
              <li><a href="#">item3</a></li>
              <li><a href="#">item4</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
              <li>
                <div class="userView">
                  <div class="background">
                    <img src="http://lorempixel.com/output/abstract-q-c-640-480-10.jpg" alt="Background Sidenav">
                  </div>
                  <a href="#!user"><img class="circle" src="http://lorempixel.com/output/people-q-c-640-480-9.jpg" alt="User Image Sidenav"></a>
                  <a href="#!name"><span class="white-text name">John Doe</span></a>
                  <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
              </li>
              <li><a href="#">item1</a></li>
              <li><a href="#">item2</a></li>
              <li><a href="#">item3</a></li>
              <li><a onclick="contact()">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    
   
    </header>
  
        <div class="section no-pad-bot  section1">


                <div class="container center-align white-text valign-wrapper informacion" style="font-family: 'Abril Fatface', cursive;">
                    <div class="row">
                            <div class="col s12 m12 l6">
                                    <br><br>  <br><br>  <br><br>  
                                 <div class="jumbotron">
                                  <h2 id="hello">HELLO WORLD PRO</h2>
                                  <h3>Todo en creacion web</h3>
                                  <a class="waves-effect waves-light btn-large">GET STARTED</a>
                      
                                 </div>
                                </div>
                                <div class="col s12 m12 l6 contact">
                                      <br><br> 
                                  <div class="row formulario">
                                  <h2 class="white-text center">Contact Us</h2>
                                  <form class="datos" action="index2.php" method="POST">
                    
                    
                                      <div class="input-field col s6 ">
                                              <i class="material-icons prefix">account_circle</i>
                                              <input mame="nombre" id="icon_prefix" type="text" class="validate">
                                              <label for="icon_prefix">First Name</label>
                                            </div>
                    
                                            <div class="input-field col s6 ">
                                                  <i class="material-icons prefix">email</i>
                                                  <input  mame="email" id="icon_email" type="email" class="validate">
                                                  <label for="icon_email">First Name</label>
                                                </div>    
                                                                             
                    
                                        <div class="input-field col s12">
                                          <i class="material-icons prefix">phone</i>
                                          <input  mame="telefono" id="icon_telephone" type="tel" class="validate">
                                          <label for="icon_telephone">Telephone</label>
                                          </div>
                    
                                          <div class="input-field col s12">
                                              <i class="material-icons prefix">mode_edit</i>
                                            <textarea  mame="texto" maxlength="50" cols="20" rows="5" id="textarea1" class="materialize-textarea"></textarea>
                                            <label for="textarea1">Textarea</label>
                                          </div>
                    
                    
                    
                                          <div class="input-field col s12">
                                                  
                                                  <input name="envia" class="btn" type="submit">
                                                  
                                          </div>                                   
                                      
                                  </form>
                    
                    
                                  </div>
                    
                          </div>
                    </div>
        
                </div>
              </div>
 

      <main>
      <!-- Your content here -->

      <div class="parallax-container valign-wrapper center-align">
        <div class="parallax"><img src="imagenes/robot-2167836_1920.jpg"></div>

              <div class="row ">
                <div class="col s12 m12 " >
                  <div class="card fondophp ">
                    <div class="card-content white-text ">
                     <h3>PHP</h3>
                      <h5>
                        Todo tipo de creaciones con php para profesionales

                      </h5>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>
              </div>
            
      </div>
           
      <div class="container">
        <div class="section">
    
          <!--   Icon Section   -->
          <div class="row">
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center light-blue-text"><i class="large material-icons">flash_on</i></h2>
                <h5 class="center">Speeds up development</h5>
    
                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>
    
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center light-blue-text"><i class="large material-icons">group</i></h2>
                <h5 class="center">User Experience Focused</h5>
    
                <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
              </div>
            </div>
    
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center light-blue-text"><i class="large material-icons">settings</i></h2>
                <h5 class="center">Easy to work with</h5>
    
                <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
              </div>
            </div>
          </div>
    
        </div>
        <br><br>
      </div>

  <div class="parallax-container">
    <div class="parallax"><img src="imagenes/binary-1607190_1920.jpg"></div>
  </div>
             
        <div class="container center-align">
         
            <h3 style="background-color:brown; padding:10px;">MATERIALIZE   </h3> 
            <div class="row">

                <div class="col s12 m4 l4">

                    <div class="card  cardo">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="imagenes/fondo-video.png">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Fondo Video<i class="material-icons right">more_vert</i></span>
                        <a href="https://helloworldpro.sytes.net/ejemplos/materialize-video-fondo/index5.html"   class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Fondo Video<i class="material-icons right">close</i></span>
                        <p>Pagina creada con materialize con un video  de fondo. Tambien tiene unas 
                          imagenes que van apareciendo lentamente al hacer scroll sobre algun objeto determinado</p>
                          <a href="https://helloworldpro.sytes.net/ejemplos/materialize-video-fondo/index5.html"   class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>                     

                        </div>
                    </div>
            
                </div>
                <div class="col s12 m4 l4">

                  <div class="card cardo">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="imagenes/parallax2.png">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Parallax Simle<i class="material-icons right">more_vert</i></span>
                      <a href="https://helloworldpro.sytes.net/parallax-template/"   class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>                      </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Parallax Simple<i class="material-icons right">close</i></span>
                      <p>Pagina creada con materialize con tres efectos parallax simple y un ejemplo de promocion con tres iconos grandes</p>
                        <a href="https://helloworldpro.sytes.net/parallax-template/"   class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>                     

                      </div>
                  </div>
          
              </div>
              <div class="col s12 m4 l4">

                <div class="card cardo">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="imagenes/parallax3.png ">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Parallax Filtro<i class="material-icons right">more_vert</i></span>
                    <a href="https://helloworldpro.sytes.net/ejemplos/materialize-video-fondo/index5.html"   class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>                      </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Parallax Filtro<i class="material-icons right">close</i></span>
                    <p>Pagina creada con materialize con dos efectos parallax, uno con filtro y otro sin filtro, ademas un ejemplo de promocion con tres iconos grandes</p>

                      <a href="https://helloworldpro.sytes.net/ejemplos/materialize-video-fondo/index5.html"   class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>                     

                    </div>
                </div>
        
            </div>

            
                      
            <div class="col s12 m4 l4">

              <div class="card cardo">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="imagenes/parallax4_contactos.png">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Parallax - Contact Us<i class="material-icons right">more_vert</i></span>
                  <a href="https://helloworldpro.sytes.net/starter-template/contactanos.html"   class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>                      </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Parallax - Contact Us<i class="material-icons right">close</i></span>
                  <p>Pagina creada con materialize con un efecto parallax simple incluyendo dentro una seccion para contactos </p>
                    <a href="https://helloworldpro.sytes.net/starter-template/contactanos.html"   class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>                     

                  </div>
              </div>
      
          </div>

            
            <div class="col s12 m4 l4">

              <div class="card cardo">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="imagenes/parallax1.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Parallax 1 <i class="material-icons right">more_vert</i></span>
                  <a href="https://helloworldpro.sytes.net/ejemplos/materialize3/"   class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>                      </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Parallax 1<i class="material-icons right">close</i></span>
                  <p>Pagina creada con materialize con un efecto parallax simple </p>
                    <a href="https://helloworldpro.sytes.net/ejemplos/materialize3/"   class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>                     

                  </div>
              </div>
      
          </div>


          <div class="col s12 m4 l4">

            <div class="card cardo">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="imagenes/jasonpraut1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Music Promotion.<i class="material-icons right">more_vert</i></span>
                <a href="http://jasonpraut.com/index9.html#!"   class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>                      </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Music Promotion<i class="material-icons right">close</i></span>
                <p>Pagina creada con materialize con varios efectos interesantes :fade - transform -animations . Tambien cuenta con un ejmplo de musica y control personalizado.
                   Tambien contine una galeria de imagenes </p>
                  <a href="http://jasonpraut.com/index9.html#!"   class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>                     

                </div>
            </div>
    
        </div>


          </div>
        </div>
      </div>
     
    </main>
    <footer class="page-footer cyan">
      <div class="container">
        <div class="row">
          <div class="col s12 m8 l6">
            <h5 class="white-text">First Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col s12 m4 l6">
            <h5 class="white-text">Second Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2017 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
    <!-- jQuery CDN -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Materialize JS CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      $("document").ready(function(){
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
        $('input#input_text, textarea#textarea2').characterCounter();
        
        $("textarea[maxlength]").keyup(function() {

6:         var limit   = $(this).attr("maxlength"); // Límite del textarea

7:         var value   = $(this).val();             // Valor actual del textarea

8:         var current = value.length;              // Número de caracteres actual

9:         if (limit < current) {                   // Más del límite de caracteres?

10:             // Establece el valor del textarea al límite

11:             $(this).val(value.substring(0, limit));

12:         }

13:     });
      });
      
    </script>
  </body>
</html>