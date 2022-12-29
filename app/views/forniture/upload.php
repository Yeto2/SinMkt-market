<?php $this-> view("forniture/header" , $data); ?>

        
        <section class="form-page">

            <div class="form">
                <h4>Upload Image</h4>
            <form method="post" enctype="multipart/form-data" name="contactForm" class="customform" method="post">
                
                <div > 
                <input name="title" class="subject" placeholder="Title" title="Title" type="text" required>
                </div>
                <div> 
                <input name="file" class="subject" type="file" required>
                </div>

                <div>
                <textarea name="description" class="texterea" placeholder="Description" rows="3"></textarea>
                </div>
                <div><button type="submit">Submit Button</button></div>
            </form>
            </div>           
        </section> 
    
<?php $this-> view("forniture/footer" , $data); ?>
