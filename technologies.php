<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
                 $title='Технологии';
                 echo $title;
            ?>
        </title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <header>
            <div class="container">
            <nav class="menu">               
                <a class = "navigation" href=
                "
                <?php
                    $ref='index.php';
                    $text='на главную';
                    $current=true;
                    echo $ref;
                ?>
                "
                ><?=$text;?></a> 
            </nav>
            </div>
        </header>
        <main>
            <div class="container">
            <section id="technologies">
                <h1>Технологии</h1>
                <p>Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.</p>
            <?php
                $arr = array('HTML', 'CSS', 'JavaScript');
            ?>   
                <ul>
                    <li><?=$arr[0];?></li>
                    <li><?=$arr[1];?></li>
                    <li><?=$arr[2];?></li>
                </ul>
            </section>
            </div>
        </main>
        <footer>
            <div class="container">
                &copy; Абдурахманов Денис Рустамович
                <?php
                    date_default_timezone_set("Europe/Moscow");
                    echo '<p> Сформировано:'.date("d.m.Y в H-i.s").'</p>';
                ?>    
            </div>
        </footer>
    </body>
</html>