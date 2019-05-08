<?php
$categories = get_categories('taxonomy=sos_location');
 
  $select = "<select name='location' id='location' class='postform'>n";
  $select.= "<option value='-1'>Select Location</option>n";
 
  foreach($categories as $category){
    if($category->count > 0){
        $select.= "<option value='".$category->slug."'>".$category->name."</option>";
    }
  }
 
  $select.= "</select>";
 
  echo $select;
?>
 
<script type="text/javascript"><!--
    var dropdown = document.getElementById("location");
    function onCatChange() {
        if ( dropdown.options[dropdown.selectedIndex].value != -1 ) {
            location.href = "<?php echo home_url();?>/location/"+dropdown.options[dropdown.selectedIndex].value+"/";
        }
    }
    dropdown.onchange = onCatChange;
--></script>