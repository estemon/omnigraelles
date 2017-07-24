<?php $title = 'Activitats';
include('header.php');
?>

  <body>
    <p><?php echo 'New activity'; ?></p>
    <form action="new-activity.php" method="post">
      <table>
        <tr>
          <td>
            <p class="newActivityForm">Title</p>
          </td>
          <td colspan="3">
            <input type="text" name="newActTitle" autofous required/>
          </td>
        </tr>
        <tr>
          <td>
            <p class="newActivityForm">Teacher</p>
          </td>
          <td colspan="3">
            <input type="text" name="newActTeacher" required/>
          </td>
        </tr>
        <tr>
          <td>
            <p class="newActivityForm">Description</p>
          </td>
          <td colspan="3">
            <input type="textarea" name="newActDescription" required/>
          </td>
        </tr>
        <tr>
          <td>
            <p class="newActivityForm">Ages</p>
          </td>
          <td>
            Min:<input type="text" name="newActMinAge" size="2" required/>
          </td>
          <td>
            Opt:<input type="text" name="newActOptAge" size="2" required/>
          </td>
          <td>
            Max:<input type="text" name="newActMaxAge" size="2" required/>
          </td>
        </tr>
        <tr>
          <td colspan="4"><input type="submit" value="Submit new activity"></td>
        </tr>
      </table>
    </form>
  </body>
</html>