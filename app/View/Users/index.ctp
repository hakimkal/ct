 
 <?php $this->Html->addCrumb($type_of_users);?>
    <div class="row">

<div id="content" class="col-lg-12 col-sm-10">
            <!-- content starts -->
          

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
     
        <div class="box-icon">
        
               <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
       <th>Sex</th>
        <th>Email</th>
        <th>Phone </th>
         <th>Created</th>
          
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($Users as $user):?>
    <tr>
        <td><?php echo $user['User']['firstname'];?></td>
          <th><?php echo $user['User']['lastname'];?> </th>
        <td class="center"><?php echo $user['User']['email'] ;?></td>
     
       <td class="center"><?php echo  $user['User']['phone_number'];?></td>
         <td class="center"><?php echo  $user['User']['sex'];?></td>
            <td class="center"><?php echo  $this->Time->niceShort($user['User']['created']);?></td>
       
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Approve & Email
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Request Clarification
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
               Reject 
            </a>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

   

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
 
 </div></div>
    
    <hr>

    
            
                 
                 
    