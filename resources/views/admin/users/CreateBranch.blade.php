@extends('layout')
@section('content')
<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>
<script>
</script>
<main class="register-form">
  <div class="cotainer" style="overflow-x:hidden">
  <div class="row justify-content-right ml-5">
          <div class="col-md-10">
          @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>  
                        @endif
            <br>
            <div class="column" style=" float: left; width: 20%;">
             <h5>Create Branch</h5>
                 <form method="POST" action="{{ route('register.branch.post') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <!-- <label for="account_id">Account ID:</label> -->
                        <input type="hidden" class="form-control" placeholder="Account ID" id="account_id" name="account_id"  value="1" min="0" required autofocus>
                        @if ($errors->has('account_id'))
                                      <span class="text-danger">{{ $errors->first('account_id') }}</span>
                                  @endif
                    </div>

                    <div class="form-group">
                        <label for="account_name">Account Name:</label>
                        <input type="text" class="form-control" placeholder="Account Name" id="account_name" name="account_name"  required autofocus>
                        @if ($errors->has('account_name'))
                                      <span class="text-danger">{{ $errors->first('account_name') }}</span>
                                  @endif
                    </div>

                    <div class="form-group">
                        <label for="account_level">Account Level:</label><br>
                        <select id="account_level" name="account_level" style="width:100%;height:28px;border:white 1px solid;;box-shadow:#d0d6dc 0.5px 0.5px 0.5px 2px;font-size:15px;">
                            <option value="subAdmin">Sub-admin</option>
                            <option value="Branch">Company</option>
                        </select>
                        @if ($errors->has('account_level'))
                                      <span class="text-danger">{{ $errors->first('account_level') }}</span>
                                  @endif
                    </div>

                    <div class="form-group">
                        <label for="join_date">Join Date:</label>
                        <input type="date" class="form-control" id="join_date" name="join_date"  value="<?php echo $today; ?>" readonly="readonly"
                         required>
                    </div> 

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name" id="name" name="name"  required autofocus>
                        @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                    </div>
<br>
                    </div>
        <!--Column 2-->
                <div class="column" style=" float: left;width: 20%;margin-left:100px; padding-top:32px;">
                <div class="form-group">
                        <label for="base_currency">Base Currency:</label><br>
                        <select id="base_currency" name="base_currency" style="width:100%;height:28px;border:white 1px solid;;box-shadow:#d0d6dc 0.5px 0.5px 0.5px 2px;font-size:15px;">
                            <option value="MYR">MYR</option>
                        </select>
                        @if ($errors->has('base_currency'))
                                      <span class="text-danger">{{ $errors->first('base_currency') }}</span>
                                  @endif
                    </div>

                <div class="form-group">
                        <label for="username">Login ID:</label>
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username"  required autofocus>
                        @if ($errors->has('username'))
                                      <span class="text-danger">{{ $errors->first('username') }}</span>
                                  @endif
                    </div>

                <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" class="form-control"placeholder="Email" id="email" name="email" required autofocus>
                        @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                    </div>

                <div class="form-group">
                        <label for="contactNumber">Contact Number:</label>
                        <input type="tel" class="form-control" placeholder="Contact Number" id="handphone_number" name="handphone_number" 
                        pattern="[0-9]{3}-[0-9]{7}|[0-9]{3}-[0-9]{8}" required autofocus>
                        @if ($errors->has('handphone_number'))
                                      <span class="text-danger">{{ $errors->first('handphone_number') }}</span>
                       @endif
                    </div>  

                    <div class="form-group">
                        <label for="credit_limit">Credit Limit:</label>
                        <input type="number" class="form-control" placeholder="1000.00" id="credit_limit" name="credit_limit"  min="0.0" max="2000.00" required autofocus>
                        @if ($errors->has('credit_limit'))
                                      <span class="text-danger">{{ $errors->first('credit_limit') }}</span>
                                  @endif
                    </div>
             
</div>
<!-- column 3 -->
          <div class="column" style=" float: left;width: 20%;margin-left:100px; padding-top:32px;">

          <div class="form-group">
                        <label for="credit_available">Credit Available:</label>
                        <input type="number" class="form-control" id="credit_available" name="credit_available"  min="0.0" max="2000.0" required autofocus>
                        @if ($errors->has('credit_available'))
                                      <span class="text-danger">{{ $errors->first('credit_available') }}</span>
                                  @endif
                    </div>

                    <div class="form-group">
                        <label for="ic">IC No.:</label>
                        <input type="text" class="form-control" placeholder="IC eg. 991114-07-7777" id="ic" name="ic"
                        pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}"  required autofocus>
                    </div>  
                    
                    <div class="form-group" >
                        <label for="password">*Password:</label>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password"  required autofocus>
                        @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                    </div>
                    <div class="form-group">
                                <label for="password-confirm">*Confirm Password:</label>
                                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                        @if($errors->has('password_confirmation'))
                                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                    
                    <div class="form-group" >
                        <label for="created_by">Created By:</label>
                        <input type="text" class="form-control" placeholder="Your Name" id="created_by" name="created_by"  required autofocus>
                        @if ($errors->has('created_by'))
                                      <span class="text-danger">{{ $errors->first('created_by') }}</span>
                                  @endif
                    </div>

                    <div class="form-group" style="text-align:center;"><br>
                        <button  type="submit" class="btn btn-primary" style="width:100%;">Submit</button>
                    </div>
</div>
                </form>
</div>
</div>
</div>
  </div>
</main>


@endsection