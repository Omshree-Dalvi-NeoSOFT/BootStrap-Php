<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php')?>
</head>
<body>
    <?php include('nav.php')?>
    <section class="p-4"></section>
    <section class="container">
            <div class="container">
                <h1 class="d-flex justify-content-center">Calculator</h1>
            </div>
        <div class="container ">
            <div class="row p-4 mb-3">
                <div class="col-8 border-right">
                    <div class="p-4">
                        <table class="calc">
                            <tbody>
                                <tr>
                                    <td colspan="4"><input type="text" style="width: 100%;" class="answer" size="16" id="result" placeholder="0" readonly onblur="clr()"></td>
                                </tr>
                                <tr>
                                    <td><input class="btn border" type="button" value="1" id="btn"
                                            onclick="dis('1')"></td>
                                    <td><input class="btn border" type="button" value="2" id="btn"
                                            onclick="dis('2')"></td>
                                    <td><input class="btn border" type="button"  value="3" id="btn"
                                            onclick="dis('3')"></td>
                                    <td><input class="btn border btn-warning" type="button" class="operator" id="btn"
                                            value="+" onclick="dis('+')"></td>
                                </tr>
                                <tr>
                                    <td><input class="btn border" type="button" value="4" id="btn"
                                            onclick="dis('4')"></td>
                                    <td><input class="btn border" type="button" value="5" id="btn"
                                            onclick="dis('5')"></td>
                                    <td><input class="btn border" type="button" value="6" id="btn"
                                            onclick="dis('6')"></td>
                                    <td><input class="btn border btn-warning" type="button" class="operator"
                                             id="btn" value="-" onclick="dis('-')"></td>
                                </tr>
                                <tr>
                                    <td><input class="btn border" type="button"  value="7" id="btn"
                                            onclick="dis('7')"></td>
                                    <td><input class="btn border" type="button"  value="8" id="btn"
                                            onclick="dis('8')"></td>
                                    <td><input class="btn border" type="button" value="9" id="btn"
                                            onclick="dis('9')"> </td>
                                    <td><input class="btn border btn-warning" type="button" class="operator"
                                             id="btn" value="*" onclick="dis('*')"></td>
                                </tr>
                                <tr>
                                    <td ><input class="btn border" style="width: 100%;" type="button"
                                            id="btn" value="." onclick="dis('.')"></td>
                                    <td ><input class="btn border" style="width: 100%;" type="button"
                                            id="btn" value="0" onclick="dis('0')"></td>
                                    <td><input class="btn border btn-success" type="button" id="btn"
                                            value=" = " onclick="solve()"></td>
                                    <td><input class="btn border btn-warning" type="button" class="operator"                                            id="btn" value="/" onclick="dis('/')"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input class="btn border btn-danger" style="width: 100%;"
                                            type="button" id="clear"  value=" Clear " onclick="clr()">
                                    <td colspan="2"><button class="btn border btn-warning" style="width: 100%;"
                                            id="expo" id="btn" onclick="expo()">e<sup>x</sup></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-4 history">
                    <h2>History</h2><input class="btn border btn-danger" style="width: 100%;"
                    type="button" id="clear" value=" Clear " onclick="clearHist()">
                    <ul id="history">
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="operation.js"></script>
    </section>
    <section class="container-fluid">
        <?php include('footer.php')?>
    </section>
    <?php include('foot.php')?>
</body>
</html>