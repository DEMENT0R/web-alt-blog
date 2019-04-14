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
            <?php
              if ($auth) {
                echo '<li class="nav-item">
                        <a class="nav-link" href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Добавить</a></li>';
              }
              ?>
          </ul>
          <div class="my-2 my-lg-0">
	          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <?php 
                if ($auth) {
    	            echo '<li class="nav-item"><a class="nav-link" href="/?profile=1">' .
                      $_COOKIE['user_name'] .
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

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Опубликовать пост</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/?new=1" method="get">
                <input type="text" class="form-control" id="recipient-name" name="new" value="1" hidden>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Заголовок</label>
                  <input type="text" class="form-control" id="recipient-name" name="title">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Текст</label>
                  <textarea class="form-control" id="message-text" name="content"></textarea>
                </div>
                <div class="text-right"><button type="submit" class="btn btn-primary">Сохранить</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>