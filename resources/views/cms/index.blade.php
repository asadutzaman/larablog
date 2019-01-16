
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>CMS</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<!-- nav -->
  <ul id="slide-out" class="side-nav deep-purple darken-4">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="img/asad_c.jpg">
        </div>
        <a href="#!user"><img class="circle" src="img/asad_c.jpg"></a>
        <a href="#!name"><span class="white-text name">Asad Skywalker</span></a>
        <a href="#!email"><span class="white-text email">asad@skywalker.com</span></a>
        <a class="waves-effect waves-light" href="#"><i class="material-icons">power_off</i>logout</a></td>
      </div>
    </li>
    <!-- <li><a href="#!" class="white-text"><i class="white-text material-icons">cloud</i>First Link With Icon</a></li> -->
    <li><a class="waves-effect white-text" href="{{ route('index') }}">Home</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect white-text" href="#!">User</a></li>
    <li><a class="waves-effect white-text" href="#!">Call Type</a></li>
    <li><a class="waves-effect white-text" href="#!">Settings</a></li>
    <li><a class="waves-effect white-text" href="{{ route('product') }}">Peoduct</a></li>
  </ul>
  <div class="fixed-action-btn">
    <a data-activates="slide-out" class="button-collapse btn-floating btn-large deep-purple">
      <i class="large material-icons">menu</i>
    </a>
    <br>
  </div>

<script type="text/javascript">
  $(".button-collapse").sideNav();
</script>
<!-- </nav> -->

  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
        <h3 class="header center deep-purple-text text-darken-4">Digicon CMS</h3>
    </div>
  </div>

<div class="container">
  <div class="section">
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <a class="waves-effect waves-light btn modal-trigger deep-purple">Nothing</a></p>
          </div>
          <div class="input-field col s6 deep-purple-text">
            <i class="material-icons prefix ">search</i>
            <input id="icon_telephone" type="tel" class="validate">
            <label for="icon_telephone">Search</label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 center">
          <ul class="tabs tabs-fixed-width tab-demo z-depth-1 cyan-lighten-text deep-purple">
            <li class="tab"><a class="active" href="#user_info">User info</a></li>
            <li class="tab"><a  href="#complain">Complain</a></li>
            <li class="tab"><a href="#querys">Querys</a></li>
          </ul>
            <form role="form" method="POST" action="{{ route('store') }}">
              @csrf
              <!-- User basic info  -->
              <div id="user_info" class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" name="name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate" name="phone">
                    <label for="last_name">Phone</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="password" type="text" class="validate" name="email">
                    <label for="password">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" type="text" class="validate" name="District">
                    <label for="email">District</label>
                  </div>
                </div>
              </div>
              <!-- User basic info  -->
              <!-- complain  -->
              <div id="complain" class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input placeholder="Catagory" id="first_name" name="catagory" type="text" class="validate">
                    <label for="first_name">Catagory</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="Product" type="text" class="validate" name="product">
                    <label for="last_name">Product</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="Complain" type="text" class="validate" name="complain">
                    <label for="password">Complain</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="Other issue" type="text" class="validate" name="other_issue">
                    <label for="email">Other issue</label>
                  </div>
                </div>
              </div>
              <!-- complain  -->
              <!-- querys -->
              <div id="querys" class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input placeholder="Catagory" id="first_name" name="catagory" type="text" class="validate">
                    <label for="first_name">Catagory</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="Product" type="text" class="validate" name="product">
                    <label for="last_name">Product</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="querys" type="text" class="validate" name="querys">
                    <label for="password">querys</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="Other info" type="text" class="validate" name="other_info">
                    <label for="email">Other info</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                  </div>
                  <div class="input-field col s6 deep-purple-text">
                    <a class="waves-effect waves-light btn modal-trigger deep-purple" type="submit">Submit</a></p>
                  </div>
                </div>
              </div>
              <!-- querys -->
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Structure -->
<div id="modal2" class="modal bottom-sheet">
  <div class="modal-content">
    <h4>Search Result</h4>
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s2">
          </div>
          <div class="input-field col s8">
          </div>
          <div class="input-field col s2 deep-purple-text">
          </div>
        </div>
      </form>
    </div>

  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat white-text deep-purple">Close</a>
  </div>
</div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="">
        <div class="row center">
          <h5 class="header col s12 light">This section is design for eye reasting</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer deep-purple darken-4">
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Digicon Application Team</a>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
  <script>
    $('.modal').modal();

    $('body').on('click', '.imgupload', function () {
      $('.modal')[0].M_Modal.options.dismissible = false;
    });

    function preparar() {
      $('.modal').modal('open');
    }
  </script>
</html>
