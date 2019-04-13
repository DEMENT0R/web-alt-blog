      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="/">Web-alt test Blog</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
<!--             <li class="nav-item active">
              <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Профиль</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Disabled</a>
            </li> -->
          </ul>
          <div class="my-2 my-lg-0">
	          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <?php 
                if ($auth) {
    	            echo '<li class="nav-item">Привет, <a class="nav-link" href="/?profile=1">' .
                      $_COOKIE["user_name"] .
                      '</a></li>' .
                      '<li class="nav-item"><a class="nav-link" href="#">Выход</a></li>';
                } else {
                  echo '<li class="nav-item">
                        <!-- Login Form -->
                        <form>
                          <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                          <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                          <input type="submit" class="fadeIn fourth" value="Log In">
                        </form>
                        </li>';
                }
              ?>
	          </ul>
          </div>
        </div>
      </nav>