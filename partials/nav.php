      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="/">Web-alt test Blog</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?debug=1">Отладка</a>
            </li>
          </ul>
          <div class="my-2 my-lg-0">
	          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <?php 
                if ($auth) {
    	            echo '<li class="nav-item"><a class="nav-link" href="/?profile=1">' .
                      $GLOBALS['user_name'] .
                      '</a></li>' .
                      '<li class="nav-item"><a class="nav-link" onclick="LogOut ();" href="/">Выход</a></li>';
                } else {
                  echo '<li class="nav-item">
                        <!-- Login Form -->
                        <form action="/" method="post">
                          <input type="text" id="login" name="login" placeholder="login">
                          <input type="password" id="password" name="password" placeholder="password">
                          <input type="submit" class="fadeIn fourth" value="Log In">
                        </form>
                        </li>';
                }
              ?>
	          </ul>
          </div>
        </div>
      </nav>