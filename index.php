<?php include "todo.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Todo List - PHP</title>
</head>

<body>

    <div class="content">
        <div class="container py-3">
            <h2 class="text-center">TO DO LIST</h2>
            <form action="" method="post" class="ms-4">
                <label for="">Apa kegiatanmu hari ini?</label> <br>
                <input type="text" name="todo">
                <button type="submit">Simpan</button>
            </form>
            <div class="container">
                <ul>
                    <?php foreach ($todos as $key => $value):?>
                    <li>
                        <input type="checkbox" name="todo"
                            onclick="window.location.href ='index.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?php echo $key;?>'"
                            <?php if($value['status']==1) echo 'checked';?>>
                        <label><?php if($value['status']==1) echo '<del>'.$value['todo'].'</del>';
                    else echo $value['todo'];
                    ?></label>
                        <a href="index.php?hapus=1&key=<?php echo $key;?>"
                            onclick="return confirm('apakah anda yakin?')">hapus</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>