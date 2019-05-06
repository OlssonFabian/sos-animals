<?php
$categories = get_categories('taxonomy=sos_size');
 
  $select = "<select name='cat' id='cat' class='postform'>n";
  $select.= "<option value='-1'>Select category</option>n";
 
  foreach($categories as $category){
    if($category->count > 0){
        $select.= "<option value='".$category->slug."'>".$category->name."</option>";
    }
  }
 
  $select.= "</select>";
 
  echo $select;
?>
 
<script type="text/javascript"><!--
    var dropdown = document.getElementById("cat");
    function onCatChange() {
        if ( dropdown.options[dropdown.selectedIndex].value != -1 ) {
            location.href = "<?php echo home_url();?>/sizes/"+dropdown.options[dropdown.selectedIndex].value+"/";
        }
    }
    dropdown.onchange = onCatChange;
--></script>