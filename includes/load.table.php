<?php
$sql = "SELECT * FROM company_users ORDER BY id desc";
$result = $conn->query($sql);

function generateString()
{
    $length = 10;
    $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    return $randomString; 
}

if($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {

        $id      = $row['id'];
        $uid     = $row['userID'];
        $user    = $row['username'];
        $mail    = $row['mail'];

        echo "<tr id='tr".$uid."'>";
        echo "<td>".$id."</td>";
        echo "<td>".$user."</td>";
        echo "<td>".$mail."</td>";                                    
        echo '<td>
                <form method="post" id="'.generateString().'">
                    <input type="hidden" name="ur_id" value="'.$uid.'">
                    <input type="hidden" id="u'.$uid.'" value="'.$user.'">
                    <input type="hidden" id="m'.$uid.'" value="'.$mail.'">
                    <input type="hidden" id="user" value="'.$uid.'">
                    <button type="submit" class="bar-btn sky" name="'.generateString().'" id="'.$uid.'" onclick="edit(this.id, this.name);return false;">View</button>
                    <button type="submit" class="bar-btn danger" name="'.$uid.'" onclick="delbtn(this.name);return false;">Delete</button>
                </form>
            </td>';
        echo "</tr>";

    }
}
$conn-> close();
?>
