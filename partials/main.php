<main>

    <div class="wrapper_lists">


        <div class="box_add_to_do">

            <h1>ENTER YOUR NAME</h1>

            <form id="add" method="POST">
               
                <input type="text" name="createdBy">

            <h2>ADD TO YOUR TO DO LIST</h2>
                
                <input type="text" name="title">
                
                <br/>
                
                <input type="submit" value="ADD">
                
            </form>
        
        </div>
        <!--.add_to_do-->
        
        <div class="box_existing_to_do">

        <h3>YOUR TO DO LIST</h3>
                   
                    <?php

            require "partials/fetch_database.php";
            
            $i = 0;
                foreach ($to_do_list as $to_do)
                {
                    $i++;
                    
            echo $to_do["title"] . 
            ' (' . $to_do["createdBy"] . ') 
                
        <form id="complete" method="POST">
        
        <input type="submit" name="completed_' . $to_do["id"] . '" value="DONE">
        
        </form>
        <br/>'
        ;}
            
            if ($i > 0){
            require "partials/clear_database.php";
            
            echo '<form id="clear_list" method="POST">
            <input type="hidden" name="clear" value="1">
            <input type="submit" name="clear" value="CLEAR ALL">
            </form>';
            }
        
            ?>
            

            
            <?php
            
            ?>
            
            
            </div>


    </div>
    <!--.wrapper_lists-->
</main>
