<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New note</title>
</head>
<body>

    
    <h1>herp</h1>
    <form action="/notes/add" method="post">

        Name:<br />
        <input type="text" name="title" value="" />
        <br />
        Tech:
        <br />
        <select name="technology">
				  <option value="html">html</option>
				  <option value="css">css</option>
				  <option value="javascript">javascript</option>
				  <option value="php">php</option>
        </select>

        <textarea name="text"></textarea>

        <input type="submit" name="submit" value="save" />
        {!! csrf_field() !!}
    </form>
    
</body>
</html>