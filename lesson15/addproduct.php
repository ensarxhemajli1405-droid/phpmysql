<?php include ("header.php"); ?>
<div class="signup">
    <form action="form-signing" action="products.php" method="POST">

            <h1 class="h3 mb-3 font-weight-normal">Add a Product</h1>


    <label for ="inputTitle" class="sr-only">
        <input type="text" id="inputTitle" class="form-control" placeholder="title" name="title" required autofocus>


          <label for ="inputDescription" class="sr-only">description</label>
        <input type="text" id="inputDescription" class="form-control" placeholder="Description" name="description" required autofocus>


       <label for ="inputQuanity" class="sr-only">Quantity</label>

        <input type="text">
       <label for ="inputPrice" class="ssr-only">Price</label>
        <input type="number" id="inputPrice" class="form-control" placeholder="form-control" name="price" required autofocus>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">add products</button>



        <p class="mt-5 mb-3 text-muted">Digital school &copy; 2026</p>

</form>
</div>  

<?php include("footer.php"); ?>