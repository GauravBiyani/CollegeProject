<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div id="col" class="noprint" style="font-family: book antiqua; font-size: 14px">
            <div id="col-in">

                <h3>Contact Us</h3>

                <div id="about-me">
                    <p><strong>Online-JOB.com</strong></p>
					<P>7229993466</P>
                    <p>9588827141</p>
               <p><b>Rajasthan, India</b></p>
</div> 

                <hr class="noscreen" />

                <h3 >Login</h3>
<div class="login" style="font-family: book antiqua; font-size: 14px">
                <form name="form1" method="post" action="login.php">
                  <table width="100%" border="0">
                    <tr>
                      <td><strong>User Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="text" name="txtUser" id="txtUser">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span>
          <label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Password</strong></td>
                    </tr>
                    <tr>
                <td><span id="sprytextfield2">
                        <label>
                        <input type="password" name="txtPass" id="txtPass">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    <tr>
                      <td><strong>User Type</strong></td>
                    </tr>
                    <tr>
                      <td><label>
                        <select name="cmbUser" id="cmbUser">
                          <option value="JobSeeker">JobSeeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          <option value="Administrator">Administrator</option>
                          </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Login">
                          </div>
                      </label></td>
                    </tr>
                    <tr>
                      <td><div align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div></td>
                    </tr>
                  </table>
      </form>
              </div>
                <br/>

          </div>
</div>
        <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
