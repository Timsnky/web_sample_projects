<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="css/style.css">

        <title>Phone Shop</title>
    </head>
    <body>

        <div class="wrapper">
            <h3>Phone Display</h3>
            <div>
                <form action="index.php" method="post" name="f">
                    <select name="phone">
                        <option value="All" selected>All</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Sony">Sony</option>
                        <option value="LG">LG</option>
                        <option value="Huawei">Huawei</option>
                        <option value="Nokia">Nokia</option>
                    </select>

                    <input type="submit" value="Filter">

                </form>

            </div>
            <h4>Filter Results</h4>
            <table>
                <tr>
                    <th></th>
                    <th>Phone Name</th>
                    <th>Shop Name</th>
                    <th>Price</th>
                </tr>
                <?php echo $content; ?>
            </table>
        </div>
    </body>
</html>
