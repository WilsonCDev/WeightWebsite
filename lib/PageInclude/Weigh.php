<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-block">
                <h2 class="card-title text-lg-center">Weigh In</h2>
                <form action="lib/Actions/POST/WeighIn.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="username" value="<?php echo $user; ?>">

                    <div class="form-group row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input class="form-control" type="text" name="weight">
                                <div class="input-group-addon">lbs</div>
                            </div>
                        </div>
                    </div>

                    <br/>

                    <div class="text-lg-center"><button type="submit" class="btn btn-primary">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>