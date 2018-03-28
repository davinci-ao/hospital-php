<h1>Hospital</h1>
<ul>
  <li><a class="active" href="index">Patiënts</a></li>
  <li><a href="clients">Clients</a></li>
  <li><a href="species">Species</a></li>
</ul>

<h2>Patiënts</h2>
    <table id="patientTable">
    <thead>
        <tr>
            <th onclick="sortTable(0)">Name</th>
            <th onclick="sortTable(1)">Species</th>
            <th class="notSortable">Status</th>
            <th onclick="sortTable(2)">Client</th>
            <th onclick="sortTable(3)">Gender</th>
            <th class="notSortable" colspan="2">Action</th>
        </tr>
    </thead>
    </tbody>
    <?php
    foreach($patients as $patient) {
      echo "<tr>
      <td>" . $patient['name'] . "</td>";
      echo "<td>" . $patient['species_name'] . "</td>";
      echo "</td>
      <td>" . $patient['status'] . "</td>";
      echo "<td>" . $patient['client_firstname'] . " " . $patient['client_lastname'] . "</td>";
        if($patient['patient_gender'] == 0) {
            echo "<td>Male</td>";
        } else {
            echo "<td>Female</td>";
        }
      echo "</td>
      <td class='center'><a href='editp/" . $patient['patient_id'] . "'><i class='fas fa-edit'></i></a></td>
      <td class='center'><a href='delete/". $patient['patient_id'] ."'><i class='fas fa-times'></i></a></td>
      </tr>";
    }
    ?>
    </tbody>
</table>
<p><a href="createp"><i style="vertical-align:middle;"class="far fa-plus-square fa-2x"></i></a></p>
<script type="text/javascript">
function sortTable(n) {

var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
table = document.getElementById("patientTable");
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
    case 2:
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
    case 3:
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