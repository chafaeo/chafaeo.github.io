<?php 
  $pageTitle = "Add New Skill";
  include '../inc/config.php';
  include '../inc/database.php';
  include '../inc/head.php';
  include '../inc/nav.php';

  $query = $db->query("SELECT * FROM `category`");
?>

  <div id="page-wrapper">

            <div class="container-fluid">
                 <a id="btn-back" href="./" class="btn btn-success btn-md pull-right">Back</a>
                 <div class="add-category">
                    <h4 id="category-heading">Add New Skill</h4>
                    <form>
                        <div class="form-group row">
                          <label for="skill" class="col-xs-3 col-form-label">Select Category</label>
                          <div class="col-xs-8">
                            <select class="form-control" id="selected_category">
                               <option>Select category</option>
                               <?php while($rows = $query->fetch()){ ?>
                               <option><?php echo $rows['category'];?></option>
                               <?php }?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="skill" class="col-xs-3 col-form-label">Skill Name</label>
                          <div class="col-xs-8">
                            <input class="form-control" type="text" id="skill" placeholder="Enter skill">
                          </div>
                        </div>
                        <button id="add_skill"class="btn btn-success">Add</button>
                    </form>
                 </div>
            </div>

</div>
<?php include '../inc/footer.php'; ?>