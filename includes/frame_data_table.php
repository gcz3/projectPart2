<?php
  function createFrameDataTable($charaName, $tableName) {

    function fillCell($row, $columnName) {
      if (is_null($row[$columnName])) {
        echo "<td>-</td>";
      }
      else {
        $data = $row[$columnName];
        $rest = strstr($data, PHP_EOL, true);
        echo "<td>";

        do {
          if ($rest === false) {
            $rest = strstr($data, '!');
            if ($rest === false) {
              echo $data;
            }
            else {
              $rest = substr($rest, 1);
              echo "<span class=\"balance-change\">" . $rest . "</span>";
            }
            $data = "";
          }
          else {
            $data = strstr($data, PHP_EOL);
            $data = substr($data, 2);
            $temp = strstr($rest, '!');
            if ($temp === false) {
              echo $rest . "<br>";
            }
            else {
              $temp = substr($rest, 1);
              echo "<span class=\"balance-change\">" . $temp . "</span> <br>";
            }
            $rest = strstr($data, PHP_EOL, true);
          }
        } while (!empty($data));

        echo "</td>";
      }
    }

    function fillTable($data) {
        while ($row = $data->fetch_assoc()) {
          echo "<tr>";

          fillCell($row, "move_name");
          fillCell($row, "startup");
          fillCell($row, "block_advantage");
          fillCell($row, "hit_level");
          fillCell($row, "cancel_ability");
          fillCell($row, "total_frames");
          fillCell($row, "damage");
          fillCell($row, "invincibility");
          fillCell($row, "notes");

          echo "</tr>";
        }
    }

    function connectToDatabase($tableName) {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "cs1550_project";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
      }

      $sql = "SELECT * FROM " . $tableName;
      $result = $conn->query($sql);
      fillTable($result);
    }

    echo "<h2>" . $charaName . "</h2>

          <br>

          <table class=\"table-striped table-bordered table-hover frame-data-table\">
            <thead>
              <tr>
                <th>Move Name</th>
                <th>Startup</th>
                <th>Block Advantage</th>
                <th>Attack Attribute/Hit Level</th>
                <th>Cancel/Cancel Ability</th>
                <th>Total Frames</th>
                <th>Damage</th>
                <th>Invincibility</th>
                <th>Notes</th>
              </tr>
            </thead>
            <tbody>";

              connectToDatabase($tableName);

    echo "  </tbody>
          </table>";
  }
?>
