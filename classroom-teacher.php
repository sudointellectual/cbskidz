<?php include('partials/header.php'); ?>

    <div class="row">
        <h3>PS 187 4th grade</h3>

        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#students" aria-controls="students" role="tab" data-toggle="tab">Students</a></li>
                <li role="presentation"><a href="#bounties" aria-controls="bounties" role="tab" data-toggle="tab">Bounties</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="students">

                    <table class="table">
                        <tr>
                            <td><img src="images/avatars/caradebolsa_32.png" width="32" height="32" class="chavo" /></td>
                            <td><a href="/public-profile.php">John Doe</a></td>
                            <td><span class="label label-success">Registered</span></td>
                            <td><a href="mailto:john.doe@email.com" class="btn btn-default"><span class="glyphicon glyphicon-envelope"></span> Send a personal email</a></td>
                        </tr>
                        <tr>
                            <td><img src="images/avatars/afro_32.png" width="32" height="32" class="chavo" /></td>
                            <td><a href="/public-profile.php">Jane Doe</a></td>
                            <td><span class="label label-success">Registered</span></td>
                            <td><a href="mailto:john.doe@email.com" class="btn btn-default"><span class="glyphicon glyphicon-envelope"></span> Send a personal email</a></td>
                        </tr>
                        <tr>
                            <td><img src="images/avatars/anciano_32.png" width="32" height="32" class="chavo" /></td>
                            <td><a href="/public-profile.php">John Doe</a></td>
                            <td><span class="label label-success">Registered</span></td>
                            <td><a href="mailto:john.doe@email.com" class="btn btn-default"><span class="glyphicon glyphicon-envelope"></span> Send a personal email</a></td>
                        </tr>
                        <tr>
                            <td><img src="images/avatars/alien_32.png" width="32" height="32" class="chavo" /></td>
                            <td><a href="/public-profile.php">John Doe</a></td>
                            <td><span class="label label-success">Registered</span></td>
                            <td><a href="mailto:john.doe@email.com" class="btn btn-default"><span class="glyphicon glyphicon-envelope"></span> Send a personal email</a></td>
                        </tr>
                        <tr>
                            <td><img src="images/avatars/astronauta_32.png" width="32" height="32" class="chavo" /></td>
                            <td><a href="/public-profile.php">Jane Doe</a></td>
                            <td><span class="label label-success">Registered</span></td>
                            <td><a href="mailto:john.doe@email.com" class="btn btn-default"><span class="glyphicon glyphicon-envelope"></span> Send a personal email</a></td>
                        </tr>
                        <tr>
                            <td><img src="images/avatars/chavo_32.png" width="32" height="32" class="chavo" /></td>
                            <td><a href="/public-profile.php">Jane Doe</a></td>
                            <td><span class="label label-success">Registered</span></td>
                            <td><a href="mailto:john.doe@email.com" class="btn btn-default"><span class="glyphicon glyphicon-envelope"></span> Send a personal email</a></td>
                        </tr>
                        <tr>
                            <td><img src="http://placekitten.com/g/32/32" alt="" class="img-rounded"></td>
                            <td><a href="/public-profile.php">John Doe</a></td>
                            <td><span class="label label-info">Pending</span></td>
                            <td><a href="mailto:john.doe@email.com" class="btn btn-default"><span class="glyphicon glyphicon-envelope"></span> Send a reminder</a></td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="bounties">
                    <table class="table">
                        <tr>
                            <td><img src="http://placekitten.com/g/32/32" alt="" class="img-rounded"></td>
                            <td><a href="">Article title 1</a></td>
                            <td><span class="label label-default">+50 points</span></td>
                            <td><span class="label label-danger">0/30 claimed</span></td>
                            <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
                        </tr>
                        <tr>
                            <td><img src="http://placekitten.com/g/32/32" alt="" class="img-rounded"></td>
                            <td><a href="">Article title 2</a></td>
                            <td><span class="label label-default">+50 points</span></td>
                            <td><span class="label label-warning">2/30 claimed</span></td>
                            <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
                        </tr>
                        <tr>
                            <td><img src="http://placekitten.com/g/32/32" alt="" class="img-rounded"></td>
                            <td><a href="">Article title 3</a></td>
                            <td><span class="label label-default">+50 points</span></td>
                            <td><span class="label label-warning">15/30 claimed</span></td>
                            <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
                        </tr>
                        <tr>
                            <td><img src="http://placekitten.com/g/32/32" alt="" class="img-rounded"></td>
                            <td><a href="">Article title 4</a></td>
                            <td><span class="label label-default">+50 points</span></td>
                            <td><span class="label label-success">30/30 claimed</span></td>
                            <td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include('partials/footer.php'); ?>