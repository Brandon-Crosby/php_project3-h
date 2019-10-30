<?php
require 'inc/functions.php';
include 'inc/header.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$selected=get_entry($id);

?>
<!DOCTYPE html>
<html>

        <section>
            <div class="container">
                <div class="entry-list single">
                    <article>
                        <h2><?php echo $selected['title']; //The best day I’ve ever had?></h2>
                        <time datetime="<?php echo $selected['date'];?>"><?php echo $selected['date'];?></time>
                        <div class="entry">
                            <h3>Time Spent: </h3>
                            <p><?php echo $selected['time_spent'];//15 Hours?></p>
                        </div>
                        <div class="entry">
                            <h3>What I Learned:</h3>
                            <p><?php echo $selected['learned']//Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut rhoncus felis, vel tincidunt neque.?></p>
                        </div>
                        <div class="entry">
                            <h3>Resources to Remember:</h3>
                            <p><?php echo $selected['resources'];?></p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="edit">
                <p><a href="edit.php?id=<?php echo $id; ?>">Edit Entry</a></p>
        </div>
        </section>
      <?php include 'inc/footer.php'; ?>
</html>
