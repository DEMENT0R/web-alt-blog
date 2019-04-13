      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <b>Режим отладки включен!</b>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?php 
	        $db = new db();
			$db->DbTest(); 
		?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?php 
        	echo "Запрос: ";
	        var_dump($_GET);
		?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?php 
          echo "Куки: ";
          var_dump($_COOKIE);
    ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>