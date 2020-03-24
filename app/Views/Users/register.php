<?php
if ($errors) {
    echo '<div class="row">';
    echo '  <div class="col">';
    echo '      <div class="alert alert-danger">';
    echo '          <ul>';
    foreach ($errors as $error) {
        echo '<li>' . $error . '</li>';
    }
    echo '          </ul>';
    echo '      </div>';
    echo '  </div>';
    echo '</div>';
}
?>
<div class="container">
    <form action="?page=registration" method="POST" id="registration-form">

        <div class="row">
            <div class="col">
                <h2 class="text-info">Registration page</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="text" class="form-control" id="email-input" name="email" placeholder="Email *">
            </div>
            <div class="form-group col-6">
                <input type="text" id="email-check" class="form-control check" value="" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="text" class="form-control" id="first-name-input" name="first-name" placeholder="First name *">
            </div>
            <div class="form-group col-6">
                <input type="text" id="first-name-check" class="form-control check" value="" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="text" class="form-control" id="last-name-input" name="last-name" placeholder="Last name *">
            </div>
            <div class="form-group col-6">
                <input type="text" id="last-name-check" class="form-control check" value="" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="password" class="form-control" id="password-input" name="password" placeholder="Password *">
            </div>
            <div class="form-group col-6">
                <input type="text" id="password-check" class="form-control check" value="" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <input type="password" class="form-control" id="password2-input" name="password2" placeholder="Retype password *">
            </div>
            <div class="form-group col-6">
                <input type="text" id="password-confirm-check" class="form-control check" value="" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <button type="button" id="register-button" class="btn btn-info">Register</button>
            </div>
        </div>
    </form>
</div>

</div>