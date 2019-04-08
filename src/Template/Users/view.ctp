<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

?>

<div class="users view large-9 medium-8 columns content">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
	
	
	<div class="row">
		<h2>My profile page</h2>
        
        
       <div class="col-md-12 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >User Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >click here to change profile image</div>
                <!--Upload Image Js And Css-->
           
              
   
                
                
                     
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">Prasad Shankar Huddedar </h4></span>
              <span><p>Aspirant</p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7 col-xs-6 "><?= h($user->email) ?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Phone:</div><div class="col-sm-7"> <?= h($user->phone) ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Created:</div><div class="col-sm-7"><?= h($user->created) ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Date Of Modifed:</div><div class="col-sm-7"><?= h($user->modifed) ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div class="col-sm-7">11 Jun 1998</div>





            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 

   </div>




         
	
	
	
	
	
	
	
	
</div>
