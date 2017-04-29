<?php
/* Smarty version 3.1.30, created on 2017-03-28 10:39:56
  from "C:\xampp\htdocs\ecommerce\Version2\partyshakers\templates\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da215c7bfc75_00871705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4407ee58a2056235c21834188050f091b58bb7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ecommerce\\Version2\\partyshakers\\templates\\register.html',
      1 => 1490664790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58da215c7bfc75_00871705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '106520154458da215c791826_95081303';
?>
 <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    function register(){
                var fname =$('#fname').val();
                var lname =$('#lname').val();
                var email =$('#register-email').val();
                var password =$('#register-password').val();
            
            
                var ajaxPageUrl="userajax.php?cmd=2&fname="+fname+"&lname="+lname+"&email="+email+"&password="+password;
                
                $.ajax(ajaxPageUrl, 
                       {async:true, complete:registercomplete});
                        
            alert("Registered");
            }
     function login_form(){
                var email =$('#email').val();
                var password =$('#password').val();
                var ajaxPageUrl="userajax.php?cmd=1&email="+email+"&password="+password;
                
                $.ajax(ajaxPageUrl, 
                       {async:true, complete:logincomplete});
                        
            alert("Logged in");
            }
        
        
        function registercomplete(xhr,status){

                if(status!="success"){

                     $('#divStatus').html("Error while Registering");

                     return;        
                }

                    
                    var obj=$.parseJSON(xhr.responseText);
                    console.log(obj.result);

                    if(obj.result==0){
                        alert('here');
                        $('#divStatus').html("Email already exists");
                        return;

                    }

                    else{
//                       $('#loginStatus').html("Logout");
                        alert("Done");
//                     
                        window.location.href ="index.php?cmd=3"
                     }
            }
<?php echo '</script'; ?>
>
        

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="fname">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" id="lname">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="register-email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="register-password">
                            </div>
                            <div class="text-center">
                                <button onclick="register()"class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                    
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>
                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>

                        <hr>

                        
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="text-center">
                                <button onclick="login_form()" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                     
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php }
}
