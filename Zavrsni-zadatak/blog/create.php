<?php include ('header.php'); ?>
    
        <form name="postForm" action="create-post.php" method="post" onsubmit="return addPost()">
            <label for="Title">Title: </label><br>                    
            <input type="text" name="Title"><br><br>   
            <label for="Author">Your name: </label><br>                    
            <input type="text" name="Author"><br><br>  
            <label for="Body">Content: </label><br>              
            <textarea name="Body" id=" " cols="50" rows="20"> </textarea><br>                  
            <button class="btn btn-default" type="submit">Create post</button><br><br>                 
        </form>

  

            <?php include('sidebar.php'); ?>

        


    <script>
        function addPost(){            
            var title = document.forms['postForm']['Title'].value;
            var body = document.forms['postForm']['Body'].value;
            var author = document.forms['postForm']['Author'].value
            if(!title || !body || !author ){              
                alert('Both fields are required!');
                return false;
            }
            
        }                
    </script>

<?php  include('footer.php'); ?>