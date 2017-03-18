<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
    function aa() {
        this.name="zhangsan";//this   指向 window
        //alert(this);
    }
    aa();
    //alert(name);
    var name="lisi";
    alert(name);
    var obj=new aa();
    //alert(obj.name);
    alert((!(~+[])+{})[--[~+""][+[]]*[~+[]] + ~~!+[]]+({}+[])[[~!+[]]*~+[]]
    );
</script>
</body>
</html>