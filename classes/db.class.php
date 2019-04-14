<?php
    class db {
        var $db_server = 'localhost';
        var $db_name = 'u5055967_web-alt';
        var $db_user = 'u5055967_web-alt';
        var $db_password = 'web-alt-test';

        function DbTest () {
            $link = mysqli_connect($this->db_server, $this->db_user, $this->db_password, $this->db_name);

            if (!$link) {
                echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                echo "<br>Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "<br>Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            echo "Соединение с MySQL установлено!" . PHP_EOL;
            //echo "<br>Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;
            mysqli_close($link);
        }

        function GetAllPosts () {
            $link = mysqli_connect($this->db_server, $this->db_user, $this->db_password, $this->db_name);

            if (!$link) {
                echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                echo "<br>Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "<br>Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            if ($result = $link->query("SELECT * FROM posts ORDER BY `time` DESC")) {
                // var_dump($result);
                // echo "<br>";
                // printf("\n Select вернул %d строк.\n", $result->num_rows);

                while($row = mysqli_fetch_assoc($result)) {
                    echo "<h2 class='mt-5'><a href='?post=" . $row['id'] . "'>" . $row['title'] . "</a></h2>";
                    echo "<p style='color: #999;'>" . $row['time'] . "<br>Автор: " . $row['author'] . "</p>";
                    echo "<p>" . $row['content'] . "</p>";
                }

                $result->close();
            }
            mysqli_close($link);
        }

        function GetPost ($id) {
            $link = mysqli_connect($this->db_server, $this->db_user, $this->db_password, $this->db_name);

            if (!$link) {
                echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                echo "<br>Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "<br>Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            if ($result = $link->query("SELECT * FROM posts WHERE id=$id")) {

                while($row = mysqli_fetch_assoc($result)) {
                    echo "<h2 class='mt-5'><a href='?post=" . $row['id'] . "'>" . $row['title'] . "</a></h2>";
                    echo "<p>" . $row['content'] . "</p>";
                }

                $result->close();
            }
            mysqli_close($link);
        }

        function GetSsid ($name, $password) {
            $link = mysqli_connect($this->db_server, $this->db_user, $this->db_password, $this->db_name);

            if (!$link) {
                echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                echo "<br>Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "<br>Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            if ($result = $link->query("SELECT * FROM users WHERE name='$name'")) {

                while($row = mysqli_fetch_assoc($result)) {
                    if ($password == $row['password']) {
                        setcookie ("ssid", $row['ssid']);
                        setcookie ("user_name", $row['name']);
                        $GLOBALS['auth'] = true;
                        $GLOBALS['user_name'] = $row['name'];
                    }
                }

                $result->close();
            }
            mysqli_close($link);
        }

        function CheckSsid ($ssid) {
            $link = mysqli_connect($this->db_server, $this->db_user, $this->db_password, $this->db_name);

            if (!$link) {
                echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                echo "<br>Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "<br>Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            if ($result = $link->query("SELECT * FROM users WHERE ssid='$ssid'")) {
                $GLOBALS['auth'] = true;
                $result->close();
            } else {
                // удаляем куки сессии
                setcookie ("ssid", "", time() - 3600);
                setcookie ("user_name", "", time() - 3600);
            }
            mysqli_close($link);
        }

        function AddPost ($id, $ssid, $title, $content) {
            if(!$ssid) { $ssid = $_COOKIE['ssid']; }

            // echo $id . " " . $ssid . " " . $title . " " . $content;
            // security
            $link = mysqli_connect($this->db_server, $this->db_user, $this->db_password, $this->db_name);

            if (!$link) {
                echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                echo "<br>Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "<br>Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            if ($result = $link->query("SELECT * FROM users WHERE ssid='$ssid'")) {
                while($row = mysqli_fetch_assoc($result)) {
                    $author = $row['name'];
                }
                //$result->close();
            } else {
                return;
            }

            if ($result = $link->query("INSERT INTO `posts` (`id`, `title`, `content`, `author`, `time`) VALUES (NULL, '$title', '$content', '$author', NOW())")) {
                $GLOBALS['auth'] = true;
                //$result->close();
            } else {
                return;
            }

            mysqli_close($link);

            // posting
        }
    }
?>