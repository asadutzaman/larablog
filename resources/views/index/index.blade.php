
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Index</title>
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
        <a class="waves-effect waves-light" href="#"><i class="material-icons">power_off</i></a></td>
      </div>
    </li>
    <!-- <li><a href="#!" class="white-text"><i class="white-text material-icons">cloud</i>First Link With Icon</a></li> -->
    <li><a class="waves-effect white-text" href="{{ route('index') }}">Home</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect white-text" href="#!">User</a></li>
    <li><a class="waves-effect white-text" href="#!">Call Type</a></li>
    <li><a class="waves-effect white-text" href="{{ route('cms') }}">CMS</a></li>
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
        <h2 class="header center deep-purple-text text-darken-4">Admin</h2>
        <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <a class="waves-effect waves-light btn modal-trigger deep-purple" href="#modal12">Modal</a></p>
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

  <!-- Modal Structure -->
  <div id="modal12" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Placeholder" id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input disabled value="I am not editable" id="disabled" type="text" class="validate">
              <label for="disabled">Disabled</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              This is an inline input field:
              <div class="input-field inline">
                <input id="email_inline" type="email" class="validate">
                <label for="email_inline">Email</label>
                <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12 center">
        <table class="col s12 highlight grey lighten-1">
          <thead class="deep-purple darken-2  white-text">
            <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
              <th>Name</th>
              <th>Item Price</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
              <table class="col s12 highlight grey lighten-1">
                <thead class="deep-purple darken-2  white-text">
                  <tr>
                    <th>Name</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Name</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Name</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td><!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger deep-purple" href="#modal2">View</a></td>
                  </tr>
                </tbody>
              </table>
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
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Item Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Alvin</td>
                  <td>Eclair</td>
                </tr>
                <tr>
                  <td>Jonathan</td>
                  <td>Lollipop</td>
                </tr>
                <tr>
                  <td>Alvin</td>
                  <td>Eclair</td>
                </tr>
                <tr>
                  <td>Jonathan</td>
                  <td>Lollipop</td>
                </tr>
                <tr>
                  <td>Alvin</td>
                  <td>Eclair</td>
                </tr>
                <tr>
                  <td>Jonathan</td>
                  <td>Lollipop</td>
                </tr>
              </tbody>
            </table>
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
