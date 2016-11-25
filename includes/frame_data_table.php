<?php
  /**
  * Makes the page (title and table) for whatever character specified
  *
  * @param  string  $charaName  The name of the character whose frame data is going to be displayed
  * @param  string  $tableName  The name of the table in the database that will be displayed
  * @return nothing
  */
  function createFrameDataTable($charaName, $tableName) {

    /**
    * Fills in a cell for the table
    *
    * @param  string  $row        The associative array that corresponds to the fetched row
    * @param  string  $columnName The column that is will be filled
    * @return nothing
    */
    function fillCell($row, $columnName) {
      // "move_name" will never be null, and "notes" can be empty
      if (is_null($row[$columnName])) {
        echo "<td>-</td>";
      }
      else {
        $data = $row[$columnName];
        $rest = strstr($data, PHP_EOL, true);
        echo "<td>";

        do {
          // if only one line worth of info for cell
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
          // else more info to put into cell
          else {
            $data = strstr($data, PHP_EOL);
            $data = substr($data, 2); // grabs next line of info
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
        } while (!empty($data));  // while there is a line of info to read

        echo "</td>";
      }
    }

    /**
    * Fills in the table with the results
    *
    * @param  resource  $data The returning resultset from the MySQL query
    * @return nothing
    */
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

    /**
    * Connects to the database and gets the all of the entries in the table
    *
    * @param  string  $tableName  The name of the table in the database that will be displayed
    * @return nothing
    */
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
