   <script src="/js/jquery-3.2.1.min.js"></script>
   <style type="text/css">
     #myInput {
        background-image: url('/img/searchicon.png'); /* Add a search icon to input */
        background-size:20px;
        background-position: 10px 12px; /* Position the search icon */
        background-repeat: no-repeat; /* Do not repeat the icon image */
        width: 500px; /* Full-width */
        font-size: 16px; /* Increase font-size */
        padding: 12px 20px 12px 40px; /* Add some padding */
        border: 1px solid #ddd; /* Add a grey border */
        margin-bottom: 12px; /* Add some space below the input */
    }
    
    #myTable {
        border-collapse: collapse; /* Collapse borders */
        width: 500px; /* Full-width */
        border: 1px solid #ddd; /* Add a grey border */
        font-size: 18px; /* Increase font-size */
    }
    
    #myTable th, #myTable td {
        text-align: left; /* Left-align text */
        padding: 12px; /* Add padding */
    }
    
    #myTable tr {
        /* Add a bottom border to all table rows */
        border-bottom: 1px solid #ddd; 
    }
    
    #myTable tr.header, #myTable tr:hover {
        /* Add a grey background color to the table header and on hover */
        background-color: #f1f1f1;
    }
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }
    .imgsize{
        width:200px;
    }
   </style>
   <form action="addfriends" name="addfriends" class="" method="post">

    <table id="myTable">
      <tr class="header">
        <th>ID</th>
        <th>Frofile</th>
        <th>Guild</th>
        <th>친구등록</th>
      </tr>
      <?php
      foreach($friendnames as $friendname){
          
          $searchuser = $friendname['id'];
          
          echo "<tr>
          <td>{$friendname['user_id']}</td>
          <td><img src='/img/{$friendname['userImage']}' class='imgsize'></td>
          <td>{$friendname['guild_name']}</td>
          
          <td><input type='checkbox' name='userid' value='$searchuser'></td>";
          echo "</tr>";
      }
      ?>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </table>
      {{csrf_field()}}
      <input type="submit" value="친구추가"/>
    </form>
    <script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    </body>