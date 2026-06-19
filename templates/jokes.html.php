<?php foreach($jokes as $joke): ?>
    <blockquote>
        <p>
            <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?><br><br>
            
            <?php $display_date = date("D d M Y", strtotime($joke['jokedate'])); ?>
            <?=htmlspecialchars($display_date, ENT_QUOTES, 'UTF-8')?><br><br>
            
            <img height="100px" src="images/<?=htmlspecialchars($joke['image'], ENT_QUOTES, 'UTF-8'); ?>" />
        </p>

        <form action="deletejoke.php" method="post">
            <input type="hidden" name="id" value="<?=$joke['id']?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
<?php endforeach; ?>