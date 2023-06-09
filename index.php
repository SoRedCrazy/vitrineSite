<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.2/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.2/dist/semantic.min.js"></script>
    <title>Présentation</title>
</head>
<body>
    <div id="header-container" class="ui grid middle aligned">
        <div class="row">
          <div class="column centered aligned" id="row-formulaire">
            <div id="title-header"class="ui segment center aligned inverted title-header">
                <?php
                if(isset($_GET['mail'])) {
                  echo '<div  class="ui segment center aligned"> ';
                  if($_GET['mail']=='true'){
                    
                    echo '<span class="ui success text">
                    Mail envoyé</span>';
                  }else{
                    echo '<span class="ui red text">
                    Mail non envoyé </span> ';
                  }
                  echo '</div>';
                }
                ?>
                <img class="ui medium centered circular image" src="id.jpg">
                <h1>Julien boisgard</h1>
                <div>
                    <a href="https://www.linkedin.com/in/julien-boisgard-3a2469206/"><i class=" large linkedin icon"></i></a>
                    -
                    <a href="https://github.com/SoRedCrazy"><i class="large github icon"></i></a>
                </div>
                <div class="ui hidden section divider"></div
                <div>
                    <a class="ui button" href="#midle-center-container">Mes Informations</a>
                    
                    <a class="ui button" href="#footer-container">Me contacter</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div id="midle-center-container" class="ui text grid center aligned">
      <div id="center-container" class="ui text grid middle aligned">
        <div class="row center aligned">
          <div class="column">
            <h1 class="ui massive center hidden aligned header">Mes informations</h1>
            <h1 class="ui center hidden aligned header">Télécharger mon CV</h1>
            <div class="ui hidden section divider"></div>
            <div class="ui center aligned">
                <a class="positive ui button" href="boisgard.pdf">Curriculum vitae Boisgard julien</a>
            </div>
            <h1 class="ui center hidden aligned header">Compétence</h1>
            <div class="ui hidden section divider"></div>
            <div class="ui segment center aligned inverted">
                <div class="ui top attached inverted tabular menu">
                  <a class="item Active" data-tab="one">Web</a>
                  <a class="item" data-tab="two">Développement</a>
                  <a class="item" data-tab="three">DevOps</a>
                </div>
                <div class="ui bottom attached inverted tab segment" data-tab="one">
                    <table class="ui inverted table">
                        <thead>
                          <tr>
                            <th>Technologie</th>
                            <th>Status</th>
                            <th>Notes</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>HTML/CSS</td>
                            <td>Bonne bases.</td>
                            <td><div class="ui grey rating html-css" data-max-rating="5"></div></td>
                          </tr>
                          <tr>
                            <td>PHP / Symfony</td>
                            <td>Trés bonne bases. utilisation du partern MVC.</td>
                            <td><div class="ui grey rating php" data-max-rating="5"></div></td>
                          </tr>
                          <tr>
                            <td>JavaScript</td>
                            <td>Bases.</td>
                            <td><div class="ui grey rating javascript" data-max-rating="5"></div></td>
                          </tr>
                          <tr>
                            <td>MySQL</td>
                            <td>Bases très aprofondie.</td>
                            <td><div class="ui grey rating mysql" data-max-rating="5"></div></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="ui bottom attached inverted tab segment" data-tab="two">
                    <table class="ui inverted table">
                        <thead>
                          <tr>
                            <th>Technologie</th>
                            <th>Status</th>
                            <th>Notes</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Java</td>
                            <td>Utilisation pendant 3 ans.</td>
                            <td><div class="ui grey rating java" data-max-rating="5"></div></td>
                          </tr>
                          <tr>
                            <td>Python</td>
                            <td>Utilisation pour plusieurs types de sciptes.</td>
                            <td><div class="ui grey rating python" data-max-rating="5"></div></td>
                          </tr>
                          <tr>
                            <td>C/C++</td>
                            <td>Bonne bases.</td>
                            <td><div class="ui grey rating C" data-max-rating="5"></div></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="ui bottom attached inverted tab segment active" data-tab="three">
                    <table class="ui inverted table">
                        <thead>
                          <tr>
                            <th>Technologie</th>
                            <th>Status</th>
                            <th>Notes</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Ansible</td>
                            <td>Initiation d'un script pour verifier les normes de rooter, switch ...</td>
                            <td><div class="ui grey rating Ansible" data-max-rating="5"></div></td>
                          </tr>
                          <tr>
                            <td>Docker</td>
                            <td>Utilisation lors de plusieur stages.</td>
                            <td><div class="ui grey rating Docker" data-max-rating="5"></div></td>
                          </tr>
                          <tr>
                            <td>Shell scripting</td>
                            <td>Plusieurs scripts à mon actif.</td>
                            <td><div class="ui grey rating Shell" data-max-rating="5"></div></td>
                          </tr>
                          <tr>
                            <td>Gitlab CI-CD</td>
                            <td>Bonne bases.</td>
                            <td><div class="ui grey rating Gitlab" data-max-rating="5"></div></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
              <div class="ui hidden section divider"></div>
              <h1 class="ui center hidden aligned header">Mes projets</h1>
              <div class="ui center aligned">
                    Retrouver tout mes projets personnel et scolaire sur mon github 
              </div>
              <div class="ui hidden section divider"></div>
              <div class="ui center aligned"> 
              <a class="primary ui button" href="https://github.com/SoRedCrazy">Github</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footer-container" class="ui grid middle aligned">
        <div class="row">
          <div id="row-formulaire" class="column centered aligned">
            <h1 class="ui center hidden aligned header inverted">Me contacter</h1>
            <div class="ui hidden section divider"></div>
            <div class="ui segment center aligned inverted">
                <h1>Formulaire</h1>

                <form class="ui form" action="mail.php" method="post">
                    <div class="field">
                        <p>Email</p>
                        <input type="text" name="email" placeholder="contact@contact.com">
                      </div>
                      <div class="field">
                        <p>Nom/Prénom</p>
                        <input type="text" name="name" placeholder="contact contact">
                      </div>
                    <div class="field">
                      <p>Mail</p>
                      <textarea rows="2" name="message" placeholder="Bonjour ...."></textarea>
                    </div>
                    <button  class="ui button formulaire" type="submit" name="submit">Envoyer</button>
                  </form>
            </div>
          </div>
        </div>
    </div>
</body>
</html>

<Script>
    

$('.inverted.title-header').transition('scale').transition('scale');

$('.menu .item').tab();

$('.rating.html-css')
.rating('disable')
  .rating({
    initialRating: 3,
    maxRating: 5
  });

$('.rating.javascript' )
.rating('disable')
  .rating({
    initialRating: 2,
    maxRating: 5
  });

$('.rating.mysql')
.rating('disable')
  .rating({
    initialRating: 4,
    maxRating: 5
  });
  $('.rating.php')
  .rating('disable')
  .rating({
    initialRating: 4,
    maxRating: 5
  });


  $('.rating.java' )
.rating('disable')
  .rating({
    initialRating: 4,
    maxRating: 5
  });

$('.rating.python')
.rating('disable')
  .rating({
    initialRating: 4,
    maxRating: 5
  });
  $('.rating.C')
  .rating('disable')
  .rating({
    initialRating: 3,
    maxRating: 5
  });

  $('.rating.Docker')
  .rating('disable')
  .rating({
    initialRating: 2,
    maxRating: 5
  });


  $('.rating.Ansible' )
.rating('disable')
  .rating({
    initialRating: 2,
    maxRating: 5
  });

$('.rating.Shell')
.rating('disable')
  .rating({
    initialRating: 3,
    maxRating: 5
  });
  $('.rating.Gitlab')
  .rating('disable')
  .rating({
    initialRating: 3,
    maxRating: 5
  });


  $('a[href*="#"]:not([href="#"])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	    var target = $(this.hash);
	    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	    if (target.length) {
	      $('html, body').animate({
	        scrollTop: target.offset().top
	      }, 1000);
	      return false;
	    }
	}
});
</Script>