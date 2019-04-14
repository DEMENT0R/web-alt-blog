

        <?php 
	        $db = new db();
			$db->AddPost($_GET['id'], $_GET['ssid'], $_GET['title'], $_GET['content']);
		?>

      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        Пост опубликован!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>