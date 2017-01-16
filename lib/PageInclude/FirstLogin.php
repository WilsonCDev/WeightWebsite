<form action="lib/Actions/POST/First.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="username" value="<?php echo $user; ?>">

    <div class="form-group row">
        <div class="col-md-3">
            <label for="name"><b>Name</b></label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Your displayed name.">
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>