<h1>Hospital</h1>
<ul>
  <li><a class="active" href="index">Patiënts</a></li>
  <li><a href="clients">Clients</a></li>
  <li><a href="species">Species</a></li>
</ul>
<h2>Species</h2>
    <table id="specieTable">
    <thead>
        <tr>
            <th onclick="sortTable(0)" >#</th>
            <th onclick="sortTable(1)">Name</th>
            <th class="notSortable" colspan="2">Action</th>
        </tr>
    </thead>
    </tbody>
    <?php
        foreach($species as $specie) {
            echo "<tr><td>" . $specie['species_id'] . "</td><td>" . $specie['species_description'] . "</td><td width='10%' class='center'><a href='edits/" . $specie['species_id'] . "'><i class='fas fa-edit'></i></a></td><td width='10%' class='center'><a href='deletes/". $specie['species_id'] ."'><i class='fas fa-times'></i></a></td></tr>";
        }
    ?>
    </tbody>
</table>
<p><a href="createp"><i style="vertical-align:middle;"class="far fa-plus-square fa-2x"></i></a></p>
<script type="text/javascript">
function sortTable(n) {

var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
table = document.getElementById("specieTable");
switching = true;
  dir = "asc"; 

  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");

    switch (n) {
    case 0:
        for (i = 1; i < (rows.length - 1); i++) {
          shouldSwitch = false;
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];

          if (dir == "asc") {
            if (x.innerHTML > y.innerHTML) {
              shouldSwitch= true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML < y.innerHTML) {
              shouldSwitch= true;
              break;
            }
          }
        }
        break;
case 1:
        for (i = 1; i < (rows.length - 1); i++) {
          shouldSwitch = false;
          x = rows[i].getElementsByTagName("TD")[n];
          y = rows[i + 1].getElementsByTagName("TD")[n];

          if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
              shouldSwitch= true;
              break;
            }
          } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
              shouldSwitch= true;
              break;
            }
          }
        }
        break;
    default:
        alert('error');
        break;
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++; 
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>