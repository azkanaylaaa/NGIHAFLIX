<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Movie</title>
    <link rel="stylesheet" href="input_movie.css">
</head>
<body>
    <form action="input_movie.php">
    <table align="center" class="table1" style="font-size: x-large;">
        <tr>
          <td>Picture</td>
          <td><input name="inp_picture" type="file"></td>
        </tr>
        <tr>
           <td>Title</td>
           <td><input name="inp_title" type="text"></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>
            <select id="inp_genre">
                <option value="Romantic">Romantic</option>
                <option value="Comedy">Comedy</option>
                <option value="Horror">Horror</option>
                <option value="Action">Action</option>
                <option value="Drama">Drama</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Rating</td>
            <td><input name="inp_rating" type="text"></td>
        </tr>
        <tr>
            <td>Artist</td>
            <td><input name="inp_artist" type="text"></td>
        </tr>
        <tr style="height: 100px;">
            <td class="sinopsis">Sinopsis</td>
            <td><textarea name="sinopsis" cols="39" rows="4"></textarea></td>
        </tr>

        <td colspan="3"><input name="simpan" type="submit" value="Simpan" class="tombol2"></td>
      </table>
      </form>
      
</body>
</html>