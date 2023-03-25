
<?php
    
    require_once '../classes/misvis_model.php';
    
    $misvis = new Misvis();
    //We will now fetch all the records in the array using loop
    //use as a counter, not required but suggested for the table
    $i = 1;
    //loop for each record found in the array
    foreach ($misvis->fetchAllRecords() as $value){ 
        //start of loop
    ?>
    
    <tr>
    <!-- always use echo to output PHP values -->
    <td>
        <div class="action-button">
            <a title="Edit" href="#" class="me-2 green" id="edit" value="<?php echo $value['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
            <a title="Delete" href="#" class="green" id="delete" value="<?php echo $value['id']; ?>"><i class="fa-solid fa-trash-can"></i></a>
        </div>
     </td>
    <td><img src="../uploads/<?php echo $value['filename']; ?>" alt="<?php echo $value['misvis_title']; ?>" style="width: 100%;"></td>
    <td><?php echo $value['misvis_title'] ?></td>
    <td><?php echo $value['misvis_description'] ?></td>
</tr>
<?php
$i++;
//end of loop
}
?> 

<?php
    require_once '../includes/admin-footer.php';
?>